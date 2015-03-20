<?php

$results_per_page = 5;
$current_page = 1;

if (is_numeric($parameters[0]))
{
	$id = intval($parameters[0]);
}
else if ($parameters[0] === "page" && isset($parameters[1]) && is_numeric($parameters[1]))
{
	$current_page = max( 1, intval($parameters[1]) );
}

$single_post = isset($id);
$where = $single_post ? " AND news_id=$id" : "";
$start = $single_post ? 0 : ($results_per_page * $current_page - $results_per_page);
$limit = $single_post ? 1 : $results_per_page;

if (!$single_post)
{
	$query = $DB->query(
		"SELECT COUNT(*) FROM ff_news WHERE news_hidepost = '0'$where"
	);
	$total_results = $query->fetch();
	$total_results = $total_results[0];
}
?>
	<div class="billboard padded cf">
		<div class="page-margined">
			<div class="g3">
				<h2>News</h2>
			</div>
		</div>
	</div>
	<div class="bottom cf z-depth-1">
		<div class="page-margined">
			<div class="g3">
<?php
if ($single_post || $current_page * $results_per_page - $results_per_page <= $total_results)
{
	$query = $DB->query(
		"SELECT news_id, news_title, news_content, news_poster, news_time, news_parsebbcode, news_parsesmileys, news_discuss FROM ff_news WHERE news_hidepost = '0'$where ORDER BY news_time DESC LIMIT $start,$limit"
	);
	$all_news = $query->fetchAll();

	foreach($all_news as $news)
	{
		extract($news);
		$news_content = ParseBBCode($news_content);
		$news_content = str_replace("\n", "<br />", $news_content);
?>
				<div class="article cf z-depth-1 padded">
					<h3><a href="<?=GetLink("news/$news_id")?>"><?=$news_title?></a></h3>
					<div class="author cf">
						<span class="pull-right" title="<?=$news_time?>"><img src="images/icon-calendar.png" /> Posted <?=ElapsedTime($news_time)?></span> <span class="pull-left">by <?=$news_poster?></span>
					</div>
					<div class="info">
						<?=$news_content?>
					</div>
					<a href="http://forums.fortress-forever.com/showthread.php?t=<?=$news_discuss?>" class="pull-left">Discuss on the forums →</a>
					<? if ($single_post) { ?><a href="<?=GetLink("news")?>" class="pull-right">View all news posts</a><? } ?>
				</div>
<?php
	}
}
?>
<?php
if (!$single_post)
{
	$paginator = new \sqkPaginator\Paginator($total_results, $results_per_page, $current_page);
	$printer = new \sqkPaginator\PaginationPrinter(GetLink("news/page/___pagenum___"));
	echo $printer->getHTML($paginator->getPages());
}
?>
			</div>
		</div>
	</div>