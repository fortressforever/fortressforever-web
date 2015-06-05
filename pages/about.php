<?php
$query = $DB->query(
	"SELECT * FROM ff_media
	WHERE m_visibility >= 1
	ORDER BY RAND()
	LIMIT 5"
);
$random_media = $query->fetchAll();

$query = $DB->query(
	"SELECT user_id, user_username, profile_realname, ut_name FROM ff_users u
	LEFT JOIN ff_users_titles ut ON u.profile_title = ut.ut_id
	WHERE ut_type='job' AND user_access>0
	ORDER BY user_id ASC, user_username ASC"
);
$current_team = $query->fetchAll();

$query = $DB->query(
	"SELECT user_id, user_username, profile_realname, profile_title, ut_name FROM ff_users u
	LEFT JOIN ff_users_titles ut ON u.profile_title = ut.ut_id
	WHERE ut_type='job' AND user_access=0
	ORDER BY user_username ASC"
);
$retired_team = $query->fetchAll();
?>
	<div class="cf billboard padded">
		<div class="page-margined cf">
			<div class="g3">
				<div class="jcarousel-wrapper z-depth-2">
					<div class="jcarousel">
						<ul>
<?php
foreach ($random_media as $media)
{
	extract($media);
?>
							<li><img src="<?=FF_HOST_BASE?>/media/<?=$m_pubid;?>.jpg" /></li>
<?php
}
?>
						</ul>
					</div>
					<a class="jcarousel-prev z-depth-1">&lsaquo;</a>
					<a class="jcarousel-next z-depth-1">&rsaquo;</a>
					<p class="jcarousel-pagination"></p>
				</div>
			</div>
		</div>
	</div>
	<div class="bottom cf z-depth-1">
		<div class="page-margined">
			<div class="g2">
				<h3>About</h3>
				<p>Fortress Forever is a Source mod inspired by the earlier versions of the Team Fortress series (Team Fortress Classic and QuakeWorld Team Fortress). Our all-volunteer team has created this mod entirely from scratch and continued to develop it for over 5 years now. It was originally released in September of 2007.</p>
				<p>Fortress Forever involves two or more teams, each with 9 available classes, competing in a variety of map-determined objectives (capture the flag, territorial control, invade and defend, etc). Each class has its own unique abilities and strengths that offer extremely varied playstyles. The gameplay ranges from fast-paced, competitive, and deep to absurd and chaotic.</p>
				<ul>
				    <li>Totally free</li>
				    <li>Fast paced, team- and class-based gameplay</li>
				    <li>Faithful to the spirit of Team Fortress Classic (TFC) and QuakeWorld Team Fortress (QWTF), meaning Fortress Forever includes offhand grenades, bunnyhopping, etc</li>
				    <li>10 Classes (9 + Civilian)</li>
				    <li>Training level and in-game hints</li>
				    <li>Extensive map scripting/customization using Lua</li>
				</ul>
			</div>
			<div class="g1">
				<h3>Patch Notes</h3>
				<nav class="cf">
					<ul>
						<li><a href="<?=GetLink("changelogs/2.5.0")?>">2.5.0</a></li>
					</ul>
				</nav>
				<h4>Pre-Greenlight</h4>
				<nav class="cf">
					<ul>
						<li><a href="<?=GetLink("changelogs/2.46")?>">2.46</a></li>
						<li><a href="<?=GetLink("changelogs/2.45")?>">2.45</a></li>
						<li><a href="<?=GetLink("changelogs/2.44")?>">2.44</a></li>
						<li><a href="<?=GetLink("changelogs/2.43")?>">2.43</a></li>
						<li><a href="<?=GetLink("changelogs/2.42")?>">2.42</a></li>
						<li><a href="<?=GetLink("changelogs/2.41")?>">2.41</a></li>
						<li><a href="<?=GetLink("changelogs/2.4")?>">2.4</a></li>
						<li><a href="<?=GetLink("changelogs/2.3")?>">2.3</a></li>
						<li><a href="<?=GetLink("changelogs/2.2")?>">2.2</a></li>
						<li><a href="<?=GetLink("changelogs/2.1")?>">2.1</a></li>
						<li><a href="<?=GetLink("changelogs/2.0")?>">2.0</a></li>
						<li><a href="<?=GetLink("changelogs/1.11")?>">1.11</a></li>
						<li><a href="<?=GetLink("changelogs/1.1")?>">1.1</a></li>
						<li><a href="<?=GetLink("changelogs/1.0")?>">1.0</a></li>
					</ul>
				</nav>
				<br/>
				<h3>Contact</h3>
				<blockquote>
					<div><span class="highlight">fortressforever@gmail.com</span></div>
					<div><span class="highlight">#FortressForever</span> on irc.quakenet.org</div>
					<div><a class="highlight" href="<?=GetForumLink("")?>">Fortress Forever Forums</a></div>
				</blockquote>
			</div>

			<div class="g3 cf">
				<h3>Development Team</h3>
				<ul class="developer-list cf">
<?php
foreach($current_team as $team_member)
{
	if(isset($team_member["profile_realname"]) && $team_member["profile_realname"] !== "")
	{
		$exploded_name = explode(" ", $team_member["profile_realname"]);
		$first_name = isset($exploded_name[0]) ? $exploded_name[0] : "";
		$last_name = isset($exploded_name[1]) ? $exploded_name[1] : "";
		$name = $first_name.' "'.$team_member["user_username"].'" '.$last_name;
	}
	else 
		$name = $team_member["user_username"];
?>
					<li><span class="dev-team-member"><?=$name?></span> <small>(<?=$team_member["ut_name"];?>)</small></li>
<?php
}
?>
				</ul>
				<h4>Past Members</h4>
				<ul class="developer-list cf">
<?php
foreach($retired_team as $team_member)
{
	if(isset($team_member["profile_realname"]) && $team_member["profile_realname"] !== "")
	{
		$exploded_name = explode(" ", $team_member["profile_realname"]);
		$first_name = isset($exploded_name[0]) ? $exploded_name[0] : "";
		$last_name = isset($exploded_name[1]) ? $exploded_name[1] : "";
		$name = $first_name.' "'.$team_member["user_username"].'" '.$last_name;
	}
	else 
		$name = $team_member["user_username"];
?>
					<li><span class="dev-team-member"><?=$name?></span> <small>(<?=$team_member["ut_name"];?>)</small></li>
<?php
}
?>
				</ul>
			</div>
		</div>
	</div>

<script src="js/jquery.min.js"></script>
<script src="js/jquery.jcarousel.min.js"></script>
<script type="text/javascript">
$( window ).load(function() {
	$('.jcarousel')
		.jcarousel({
			wrap: 'circular'
		});

    $('.jcarousel-prev')
        .on('jcarouselcontrol:active', function() {
            $(this).removeClass('inactive');
        })
        .on('jcarouselcontrol:inactive', function() {
            $(this).addClass('inactive');
        })
        .jcarouselControl({
            target: '-=1'
        });

    $('.jcarousel-next')
        .on('jcarouselcontrol:active', function() {
            $(this).removeClass('inactive');
        })
        .on('jcarouselcontrol:inactive', function() {
            $(this).addClass('inactive');
        })
        .jcarouselControl({
            target: '+=1'
        });

    $('.jcarousel-pagination')
        .on('jcarouselpagination:active', 'a', function() {
            $(this).addClass('active');
        })
        .on('jcarouselpagination:inactive', 'a', function() {
            $(this).removeClass('active');
        })
        .jcarouselPagination({
        	'item': function(page, carouselItems) {
        		return '<a>' + page + '</a>';
    		}
        });
});
</script>