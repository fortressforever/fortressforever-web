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
$where = $single_post ? " AND devj_id=$id" : "";
$start = $single_post ? 0 : ($results_per_page * $current_page - $results_per_page);
$limit = $single_post ? 1 : $results_per_page;

if (!$single_post)
{
	$query = $DB->query(
		"SELECT COUNT(*) FROM ff_devj
		WHERE devj_approved = '1'$where"
	);
	$total_results = $query->fetch();
	$total_results = $total_results[0];
}
?>
	<div class="billboard padded cf">
		<div class="page-margined">
			<div class="g3">
				<h2>Developer Journals</h2>
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
		"SELECT dj.devj_id, dj.devj_date, dj.devj_content, dj.devj_threadid, u.user_username, u.profile_title, ut.ut_name FROM ff_devj dj
		LEFT JOIN ff_users u ON u.user_id = dj.devj_posterid
		LEFT JOIN ff_users_titles ut ON u.profile_title = ut.ut_id
		WHERE dj.devj_approved = '1'$where
		ORDER BY dj.devj_date DESC LIMIT $start,$limit"
	);
	$all_devj = $query->fetchAll();

	foreach($all_devj as $devj)
	{
		extract($devj);
		$devj_title = "Developer Journal: $user_username";
		$devj_content = ParseBBCode($devj_content);
		$devj_content = str_replace("\n", "<br />", $devj_content);
?>
				<div class="article cf z-depth-1 padded">
					<h4><a href="<?=GetLink("dev-journals/$devj_id")?>"><?=$devj_title?></a></h4>
					<div class="author cf">
						<span class="pull-right" title="<?=$devj_date?>"><img src="images/icon-calendar.png" /> Posted <?=ElapsedTime($devj_date)?></span> <span class="pull-left"><?=$ut_name?></span>
					</div>
					<div class="info">
						<?=$devj_content?>
					</div>
					<? if ($devj_threadid != 0) { ?><a href="http://forums.fortress-forever.com/showthread.php?t=<?=$devj_threadid?>" class="pull-left">Discuss on the forums →</a><? } ?>
					<? if ($single_post) { ?><a href="<?=GetLink("dev-journals")?>" class="pull-right">View all developer journals</a><? } ?>
				</div>
<?php
	}
}
?>
<?php
if (!$single_post)
{
	$paginator = new \sqkPaginator\Paginator($total_results, $results_per_page, $current_page);
	$printer = new \sqkPaginator\PaginationPrinter(GetLink("dev-journals/page/___pagenum___"));
	echo $printer->getHTML($paginator->getPages());
}
?>
			</div>
		</div>
	</div>