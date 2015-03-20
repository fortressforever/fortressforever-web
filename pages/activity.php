<?php

$results_per_page = 25;
$current_page = 1;

if ($parameters[0] === "page" && isset($parameters[1]) && is_numeric($parameters[1]))
{
	$current_page = max( 1, intval($parameters[1]) );
}

$start = $results_per_page * $current_page - $results_per_page;
$limit = $results_per_page;

$query = $DB->query(
	"SELECT COUNT(*) FROM ff_activity"
);
$total_results = $query->fetch();
$total_results = $total_results[0];

$query = $DB->query(
	"SELECT * FROM `ff_activity` ORDER BY `act_date` DESC LIMIT $start,$limit"
);
$results = $query->fetchAll();
?>
	<div class="billboard padded cf">
		<div class="page-margined">
			<div class="g3">
				<h2>Activity</h2>
			</div>
		</div>
	</div>
	<div class="bottom z-depth-1">
		<div class="page-margined cf">
			<div class="g3">
				<ul class="activity-list cf">
<?php
PrintActivityList($results, true);
?>
				</ul>
<?php
	$paginator = new \sqkPaginator\Paginator($total_results, $results_per_page, $current_page);
	$printer = new \sqkPaginator\PaginationPrinter(GetLink("activity/page/___pagenum___"));
	echo $printer->getHTML($paginator->getPages());
?>
			</div>
		</div>
	</div>