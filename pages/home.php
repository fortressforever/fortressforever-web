<?php
$query = $DB->query(
	"SELECT * FROM `ff_activity` ORDER BY `act_date` DESC LIMIT 5"
);
$activity_list = $query->fetchAll();

$query = $DB->query(
	"SELECT news_title, news_content, news_poster, news_time, news_parsebbcode, news_parsesmileys, news_discuss FROM ff_news WHERE news_hidepost = '0' ORDER BY news_time DESC LIMIT 0,1"
);
$latest_news = $query->fetch();
extract($latest_news);
$news_content = ParseBBCode($news_content);
$news_content = str_replace("\n", "<br />", $news_content);

?>
	<div class="cf billboard center-text">
		<div class="">
			<div class="page-margined cf">
				<div class="header-half pull-left">
					<div class="abs-center">
						<p><i>Fortress Forever</i> is a <span class="highlight">free</span> game inspired by the earlier versions of the <span class="highlight">Team Fortress</span> series (<i><a href="https://wiki.teamfortress.com/wiki/Team_Fortress_Classic">Team Fortress Classic</a></i> and <i><a href="https://wiki.teamfortress.com/wiki/Team_Fortress">QuakeWorld Team Fortress</a></i>).</p>
						<p>Join the fray in this <span class="highlight">high-speed, team-based FPS</span> with classes that range from pure movement to pure firepower (and everything in between).</p>
						<a href="<?=GetLink("about")?>" class="more-info highlight">More info →</a>
						<div class="class-lineup">
							<h3 class="z-depth-2" style="background: rgba(0,0,0,0.5);">Coming to Steam March 27th</h3>
							<span><small>Can't wait? <a href="<?=GetForumLink("showthread.php?t=24509")?>">Join the closed beta</a> or <a href="<?=GetLink("download")?>">manually install the pre-Greenlight version</a></small></span>
							<!--<h3 id="download-btn"><a class="z-depth-2" href="<?=GetLink("download")?>" id="download">Download</a></h3>
							<span><small>Windows only, requires <a href="http://steampowered.com">Steam</a></small></span>-->
						</div>
					</div>
				</div>
				<div class="header-half pull-right">
					<div class="abs-center">
						<div class="embed-container z-depth-1"><iframe src="http://www.youtube.com/embed/-0-6wdDyGLI" frameborder="0" allowfullscreen></iframe></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="bottom cf z-depth-1">
		<div class="page-margined">
			<div class="g2 pull-right">
				<h3>News</h3>
				<div class="article cf">
					<h4><?=$news_title?></h4>
					<div class="author cf">
						<span class="pull-right" title="<?=$news_time?>"><img src="images/icon-calendar.png" /> Posted <?=ElapsedTime($news_time)?></span> <span class="pull-left">by <?=$news_poster?></span>
					</div>
					<div class="info">
						<?=$news_content?>
					</div>
					<a href="http://forums.fortress-forever.com/showthread.php?t=<?=$news_discuss?>" class="pull-left">Discuss on the forums →</a>
					<a href="<?=GetLink("news")?>" class="pull-right">View all news posts</a>
				</div>
			</div>
			<div class="g1 pull-left" id="activity">
				<h3>Activity</h3>
				<ul class="activity-list">
<?php
PrintActivityList($activity_list, false);
?>
				</ul>
				<a href="<?=GetLink("activity")?>">See more →</a>
				<div id="contribute">
					<h3>Contribute</h3>
					<a href="https://github.com/fortressforever" class="github-logo"><img src="images/github-64-black.png" /></a>
					<p>Fortress Forever is <a class="highlight" href="https://github.com/fortressforever">open source</a> and developed by volunteers within the community. If you have the skill and desire to help move the project forward, you are more than welcome to contribute.</p><p>We are always looking for more <span class="highlight">programmers</span>, <span class="highlight">modelers/animators</span>, <span class="highlight">texture artists</span>, <span class="highlight">level designers</span>, and more</p>
					<a href="<?=GetLink("contribute")?>">Learn how →</a>
				</div>
			</div>
		</div>
	</div>