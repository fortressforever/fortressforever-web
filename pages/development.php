<?php
$query = $DB->query(
	"SELECT * FROM `ff_activity` ORDER BY `act_date` DESC LIMIT 13"
);
$activity_list = $query->fetchAll();

$query = $DB->query(
	"SELECT dj.devj_id, dj.devj_date, dj.devj_content, dj.devj_threadid, u.user_username, u.profile_title, ut.ut_name FROM ff_devj dj
	LEFT JOIN ff_users u ON u.user_id = dj.devj_posterid
	LEFT JOIN ff_users_titles ut ON u.profile_title = ut.ut_id
	WHERE dj.devj_approved = '1'
	ORDER BY dj.devj_date DESC LIMIT 1"
);
$latest_devj = $query->fetch();
extract($latest_devj);
$devj_title = "Developer Journal: $user_username";
$devj_content = ParseBBCode($devj_content);
$devj_content = str_replace("\n", "<br />", $devj_content);

?>
	<div class="cf billboard padded">
		<div class="page-margined cf">
			<div class="g3">
				<h2>Want to help out?</h2>
				<p>Fortress Forever is <a class="highlight" href="https://github.com/fortressforever">visible source</a> and developed by volunteers within the community. If you have the skill and desire to help move the project forward, you are more than welcome to contribute. We are always looking for more <span class="highlight">programmers</span>, <span class="highlight">modelers/animators</span>, <span class="highlight">texture artists</span>, <span class="highlight">level designers</span>, and more</p>
				<a class="highlight more-info" href="<?=GetLink("contribute")?>">Learn how →</a>
			</div>
		</div>
	</div>
	<div class="bottom cf z-depth-1">
		<div class="page-margined">
			<div class="g1-2 pull-left">
				<h3>Developer Journals</h3>
				<div class="article cf">
					<h4><?=$devj_title?></h4>
					<div class="author cf">
						<span class="pull-right" title="<?=$devj_date?>"><img src="images/icon-calendar.png" /> Posted <?=ElapsedTime($devj_date)?></span> <span class="pull-left"><?=$ut_name?></span>
					</div>
					<div class="info">
						<?=$devj_content?>
					</div>
					<a href="http://forums.fortress-forever.com/showthread.php?t=<?=$devj_threadid?>" class="pull-left">Discuss on the forums →</a>
					<a href="<?=GetLink("dev-journals")?>" class="pull-right">View all developer journals</a>
				</div>
			</div>
			<div class="g1-2 pull-right" id="activity">
				<h3>Activity</h3>
				<ul class="activity-list">
<?php
PrintActivityList($activity_list);
?>
				</ul>
				<a href="<?=GetLink("activity")?>">See more →</a>
			</div>
		</div>
	</div>