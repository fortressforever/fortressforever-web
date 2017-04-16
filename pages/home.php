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
							<h3 id="download-btn"><a class="z-depth-2" href="<?=GetLink("download")?>" id="download">Download</a></h3>
							<span><small>Windows only, requires <a href="http://steampowered.com">Steam</a></small></span>
						</div>
					</div>
				</div>
				<div class="header-half pull-right">
					<div class="abs-center">
						<div class="embed-container z-depth-1">
							<div id="autoloop-video" onclick="this.parentNode.removeChild(this); startMainVideo();">
								<div class="video-loop-overlay">
									<div class="video-play-button" role="button" aria-label="Play">
										<svg><path fill-rule="evenodd" clip-rule="evenodd" fill="#1F1F1F" class="ytp-large-play-button-svg" d="M84.15,26.4v6.35c0,2.833-0.15,5.967-0.45,9.4c-0.133,1.7-0.267,3.117-0.4,4.25l-0.15,0.95c-0.167,0.767-0.367,1.517-0.6,2.25c-0.667,2.367-1.533,4.083-2.6,5.15c-1.367,1.4-2.967,2.383-4.8,2.95c-0.633,0.2-1.316,0.333-2.05,0.4c-0.767,0.1-1.3,0.167-1.6,0.2c-4.9,0.367-11.283,0.617-19.15,0.75c-2.434,0.034-4.883,0.067-7.35,0.1h-2.95C38.417,59.117,34.5,59.067,30.3,59c-8.433-0.167-14.05-0.383-16.85-0.65c-0.067-0.033-0.667-0.117-1.8-0.25c-0.9-0.133-1.683-0.283-2.35-0.45c-2.066-0.533-3.783-1.5-5.15-2.9c-1.033-1.067-1.9-2.783-2.6-5.15C1.317,48.867,1.133,48.117,1,47.35L0.8,46.4c-0.133-1.133-0.267-2.55-0.4-4.25C0.133,38.717,0,35.583,0,32.75V26.4c0-2.833,0.133-5.95,0.4-9.35l0.4-4.25c0.167-0.966,0.417-2.05,0.75-3.25c0.7-2.333,1.567-4.033,2.6-5.1c1.367-1.434,2.967-2.434,4.8-3c0.633-0.167,1.333-0.3,2.1-0.4c0.4-0.066,0.917-0.133,1.55-0.2c4.9-0.333,11.283-0.567,19.15-0.7C35.65,0.05,39.083,0,42.05,0L45,0.05c2.467,0,4.933,0.034,7.4,0.1c7.833,0.133,14.2,0.367,19.1,0.7c0.3,0.033,0.833,0.1,1.6,0.2c0.733,0.1,1.417,0.233,2.05,0.4c1.833,0.566,3.434,1.566,4.8,3c1.066,1.066,1.933,2.767,2.6,5.1c0.367,1.2,0.617,2.284,0.75,3.25l0.4,4.25C84,20.45,84.15,23.567,84.15,26.4z M33.3,41.4L56,29.6L33.3,17.75V41.4z"></path><polygon fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" points="33.3,41.4 33.3,17.75 56,29.6"></polygon></svg>
									</div>
								</div>
								<video autoplay loop poster="images/yt-thumb.jpg" id="bgvid" muted>
									<source src="media/ff_clips.mp4" type="video/mp4">
								</video>
							</div>
							<iframe id="yt-video-embed" src="https://www.youtube.com/embed/A-V4u7LkP6Q?list=PL5KX7r5FIS6ob8gqYTJzBUJV7c_j0dCm6&enablejsapi=1" frameborder="0" allowfullscreen=""></iframe>
							<script>
								var tag = document.createElement('script');

								tag.src = "https://www.youtube.com/iframe_api";
								var firstScriptTag = document.getElementsByTagName('script')[0];
								firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

								var player;
								function onYouTubeIframeAPIReady() {
									player = new YT.Player('yt-video-embed');
								}

								function startMainVideo() {
									player.playVideo();
								}
							</script>
						</div>
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
					<p>Fortress Forever is <a class="highlight" href="https://github.com/fortressforever">visible source</a> and developed by volunteers within the community. If you have the skill and desire to help move the project forward, you are more than welcome to contribute.</p><p>We are always looking for more <span class="highlight">programmers</span>, <span class="highlight">modelers/animators</span>, <span class="highlight">texture artists</span>, <span class="highlight">level designers</span>, and more</p>
					<a href="<?=GetLink("contribute")?>">Learn how →</a>
				</div>
			</div>
		</div>
	</div>