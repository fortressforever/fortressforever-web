<?php

namespace sqkPaginator;

class Page
{
	public $page_num;
	public $is_current;
	public $out_of_range;

	public function __construct($page_num, $is_current = false, $out_of_range = false)
	{
		$this->page_num = $page_num;
		$this->is_current = $is_current;
		$this->out_of_range = $out_of_range;
	}

	public function __tostring()
	{
		$str = $this->is_current ? "({$this->page_num})" : "{$this->page_num}";
		return $this->out_of_range ? "<$str>" : $str;
	}
}

class Gap
{
	public $start_page;
	public $end_page;
	public $out_of_range;

	public function __construct($start_page, $end_page, $out_of_range = false)
	{
		$this->start_page = $start_page;
		$this->end_page = $end_page;
		$this->out_of_range = $out_of_range;
	}

	public function length()
	{
		return $end_page - $start_page;
	}

	public function __tostring()
	{
		$str = "[{$this->start_page}...{$this->end_page}]";
		return $this->out_of_range ? "<$str>" : $str;
	}
}

class Navigator
{
	public $page_num;
	public $delta;

	const INVALID_PAGE = -1;

	public function __construct($start_page, $delta)
	{
		if ($start_page === Navigator::INVALID_PAGE)
			$this->page_num = $start_page;
		else
			$this->page_num = $start_page + $delta;
		$this->delta = $delta;
	}

	public function isValid()
	{
		return $this->page_num !== Navigator::INVALID_PAGE;
	}

	public function __tostring()
	{
		return $this->isValid() ? "[&#916;{$this->delta}]" : "{&#916;{$this->delta}}";
	}
}

class Paginator
{
	private $total_results;
	private $results_per_page;
	private $current_page;
	private $total_pages;

	public function __construct($total_results, $results_per_page, $current_page)
	{
		$this->total_results = $total_results;
		$this->results_per_page = $results_per_page;
		$this->current_page = intval($current_page);
		$this->total_pages = ceil($this->total_results / $this->results_per_page);
	}

	public function getPage($page_num)
	{
		return new Page($page_num, intval($page_num) === $this->current_page, $page_num > $this->total_pages);
	}

	public function getPageRange($start_page, $end_page)
	{
		$pages = array();
		for ($i=$start_page; $i <= $end_page; $i++)
		{
			$pages[] = $this->getPage($i);
		}
		return $pages;
	}

	public function getPages($adjacent_links = 7, $detached_links = 3)
	{
		$pagination = array();

		$total_pages = ceil($this->total_results / $this->results_per_page);
		$max_num_detached = $detached_links * 2;
		$max_adjacents = $adjacent_links * 2;
		$num_links = $max_num_detached + $max_adjacents;
		$links_per_side = $num_links / 2;
		$out_of_range = $this->current_page > $total_pages;

		//previous button
		if ($total_pages > 0 && $this->current_page > 1) 
			$pagination[] = new Navigator(!$out_of_range ? $this->current_page : $this->total_pages + 1, -1);
		else
			$pagination[] = new Navigator(Navigator::INVALID_PAGE, -1);

		if ($total_pages <= $num_links)
		{
			$pagination = array_merge($pagination, $this->getPageRange(1, $total_pages));
		}
		else
		{
			$num_skipped_pre = $this->current_page - $links_per_side - 1;
			$num_skipped_post = $total_pages - $this->current_page - $links_per_side;
			if ($num_skipped_pre < 0)
			{
				$num_skipped_post += $num_skipped_pre;
				$num_skipped_pre = 0;
			}
			if ($num_skipped_post < 0)
			{
				$num_skipped_pre += $num_skipped_post;
				$num_skipped_post = 0;
			}

			$pre_start = 1;
			$pre_end = $detached_links;

			$post_start = $total_pages - $detached_links + 1;
			$post_end = $total_pages;

			$mid_start = $pre_end + $num_skipped_pre + 1;
			$mid_end = $post_start - $num_skipped_post - 1;

			$pagination = array_merge($pagination, $this->getPageRange($pre_start, $pre_end));
			if ($num_skipped_pre > 0)
				$pagination[] = new Gap($pre_end + 1, $mid_start - 1);
			$pagination = array_merge($pagination, $this->getPageRange($mid_start, $mid_end));
			if ($num_skipped_post > 0)
				$pagination[] = new Gap($mid_end + 1, $post_start - 1);
			$pagination = array_merge($pagination, $this->getPageRange($post_start, $post_end));
		}
		if ($this->current_page > $total_pages)
		{
			$pagination[] = new Gap($total_pages + 1, $this->current_page - 1, true);
			$pagination[] = $this->getPage($this->current_page);
		}

		//next button
		if ($total_pages > 0 && $this->current_page < $total_pages) 
			$pagination[] = new Navigator(!$out_of_range ? $this->current_page : 0, 1);
		else
			$pagination[] = new Navigator(Navigator::INVALID_PAGE, 1);

		return $pagination;
	}
}

class PaginationPrinter
{
	public $wrapper_class = "pages";
	public $wrapper_tag = "div";
	public $default_class = "default";
	public $out_of_range_class = "out-of-range";
	public $disabled_class = "disabled";
	public $current_class = "current";
	public $gap_class = "gap";
	public $back_string = "Prev";
	public $next_string = "Next";
	public $gap_string = " ... ";
	public $href;

	public function __construct($href = "___pagenum___")
	{
		$this->href = $href;
	}

	public function getHref($page_num)
	{
		return str_replace("___pagenum___", $page_num, $this->href);
	}

	public function getHTML($pages)
	{
		$html = "";
		$html .= "<{$this->wrapper_tag} class=\"{$this->wrapper_class}\">";
		foreach ($pages as $page)
		{
			if ($page instanceof Page)
			{
				$classes = array();
				if ($page->out_of_range)
					$classes[] = $this->out_of_range_class;
				$classes[] = $page->is_current ? $this->current_class : $this->default_class;
				$classes = implode(" ", $classes);
				$html .= "<a href=\"".$this->getHref($page->page_num)."\" class=\"$classes\">{$page->page_num}</a>";
			}
			elseif ($page instanceof Gap)
			{
				$classes = $page->out_of_range ? "{$this->out_of_range_class} {$this->gap_class}" : "{$this->gap_class}";
				$html .= "<a class=\"$classes\">{$this->gap_string}</a>";
			}
			elseif ($page instanceof Navigator)
			{
				$str = $page->delta > 0 ? $this->next_string : $this->back_string;
				if (!$page->isValid())
					$html .= "<a class=\"{$this->disabled_class}\">$str</a>";
				else
					$html .= "<a href=\"".$this->getHref($page->page_num)."\" class=\"{$this->default_class}\">$str</a>";
			}
		}
		$html .= "</{$this->wrapper_tag}>\n";
		return $html;
	}
}

