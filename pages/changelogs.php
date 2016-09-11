<?

if (isset($parameters[0]) && $parameters[0] !== "")
{
	$patch = $parameters[0];
}
else
{
	$patch = "2.7.0";
}
?>

	<div class="billboard padded cf">
		<div class="page-margined">
			<div class="g3">
				<h2>Patch Notes</h2>
				<nav class="cf">
					<ul>
<?php
$post_greenlight_patches = array("2.7.0", "2.6.0", "2.5.2", "2.5.1", "2.5.0");
foreach ($post_greenlight_patches as $post_greenlight_patch)
{
	$link_classes = $patch === $post_greenlight_patch ? "current-page" : "";
?>
						<li><a class="<?=$link_classes?>" href="<?=GetLink("changelogs/$post_greenlight_patch")?>"><?=$post_greenlight_patch?></a></li>
<?php
}
?>
					</ul>
				</nav>
				<h4>Pre-Greenlight</h4>
				<nav class="cf">
					<ul>
<?php
$pre_greenlight_patches = array("2.46", "2.45", "2.44", "2.43", "2.42", "2.41", "2.4", "2.3", "2.2", "2.1", "2.0", "1.11", "1.1", "1.0");
foreach ($pre_greenlight_patches as $pre_greenlight_patch)
{
	$link_classes = $patch === $pre_greenlight_patch ? "current-page" : "";
?>
						<li><a class="<?=$link_classes?>" href="<?=GetLink("changelogs/$pre_greenlight_patch")?>"><?=$pre_greenlight_patch?></a></li>
<?php
}
?>
					</ul>
				</nav>
			</div>
		</div>
	</div>

	<div class="bottom z-depth-1">
		<div class="page-margined cf">
			<div class="g3">

<?
if ($patch == "2.7.0") {
?>
<div class="c_table">
	<h3 class="no-margin">Patch 2.7.2</h3>
	<div class="t_subheader">Released September 11, 2016</div>
	<div class="t_body">
		<ul class="task-list">
			<li>Fixed kill assists not being logged to file</li>
			<li>Fixed kill assists not timing out properly (you will now only get an assist if you do damage at most 5 seconds before the player dies)</li>
			<li>Fixed not being able to swing crowbar when jetpacking</li>
			<li>Fixed jetpacking flag not being reset on restartround/instant class switch</li>
		</ul>
	</div>

	<h3 class="no-margin">Patch 2.7.1</h3>
	<div class="t_subheader">Released September 11, 2016</div>
	<div class="t_body">
		<ul class="task-list">
			<li>Fixed jetpack sound playing at loud volume sometimes</li>
			<li>Fix divide by zero assert when concing sometimes</li>
			<li>Add jetpack fuel bar to hud</li>
			<li>Deathnotice fixes:<ul>
				<li>Highlight when the local player is the assister</li>
				<li>Fix assister not being drawn with their correct team color</li>
				<li>Fade out assisters name slightly</li>
			</ul></li>
		</ul>
	</div>

	<h3 class="no-margin">Patch 2.7.0</h3>
	<div class="t_subheader">Released September 10, 2016</div>
	<div class="t_body">

		<div class="s_paragraph">
			<h4>Pyro Overhaul</h4>
			<div class="s_body">
				<ul class="task-list">
					<li>Pyro now has a Jetpack - Hold attack2 to use.<ul><li>Also prevents 25% fall damage if used whilst hitting the floor</li>
					</ul></li>
					<li>Burn levels have been reworked.<ul><li>Afterburn damage-over-time has been removed.</li>
					<li>Burn levels now increase damage from pyro weapons instead:<ul><li>Flamethrower (18 -&gt; 20 -&gt; 22)</li>
					<li>Incendiary cannon (85 -&gt; 95 -&gt; 105)</li>
					<li>Napalmlets (2 -&gt; 3 -&gt; 4)</li>
					</ul></li>
					<li>Burn levels no longer require different weapons:<ul><li>Flamethrower increases burn level every 5 hits</li>
					<li>Napalm grenade increases burn level every 10 ticks</li>
					<li>Incendiary cannon increases burn level every 1 hit (provided they are already on fire)</li>
					</ul></li>
					<li>The Incendiary cannon no longer sets players on fire - you must light them with a flamethrower or napalm grenade first.</li>
					</ul></li>
					<li>Flamethrower<ul><li>Flamethrower self-push has been removed</li>
					<li>Flamethrower damage has been increased from 16 to 18</li>
					<li>Flamethrower range has been increased by 10%</li>
					</ul></li>
					<li>Incendiary cannon<ul><li>Incendiary cannon base damage increased from 55 to 65</li>
					<li>Incendiary cannon jumping now does less self-damage to the pyro</li>
					<li>Incendiary cannon fire rate increased from 1.2sec -&gt; 0.6sec</li>
					<li>Incendiary cannon now has a clip of 5</li>
					</ul></li>
					<li>Napalm grenades improvements<ul><li>Number of napalmlets increased from 8 to 9</li>
					<li>Napalmlets are now more evenly spread over the area for more reliable area denial</li>
					<li>Napalmlet burn height increased from 40 to 70 (it was previously possible to jump through a napalm field without getting hurt)</li>
					<li>Napalmlets do damage more regularly now, so jumping through napalm will hurt you much more than before</li>
					</ul></li>
					<li>Pyro rocket stock raised from 20 to 25</li>

					<li><b>Pyro class interactions:</b>
						<ul><li>Scout, Medic and Spy extinguish their flames much faster than other classes</li>
						<li>HW Overpressure extinguishes flames of himself and those around him</li>
						<li>Pyro is still immune to being set on fire by other pyros.</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>

		<div class="s_paragraph">
			<h4>Gameplay Balance</h4>
			<div class="s_body">
				<ul class="task-list">
					<li>Jumpgun has been removed from scout whilst it's design is reworked. Thanks for all your feedback on this!</li>
					<li>All weapons now deploy faster. This means switching weapons is faster and more responsive.</li>
					<li>MIRV initial explosion damage reduced from 180 to 145, this now matches normal grenades and mirvlets.</li>
				</ul>
			</div>
		</div>

		<div class="s_paragraph">
			<h4>Other Improvements</h4>
			<div class="s_body">
				<ul class="task-list">
					<li>Kill Assists have been implemented.</li>
					<li>Deathnotice self-highlighting has been improved and defaulted on.</li>
					<li>Add new hints (Thanks NeoNL!)</li>
				</ul>
			</div>
		</div>

		<div class="s_paragraph">
			<h4>Bug Fixes</h4>
			<div class="s_body">
				<ul class="task-list">
					<li>Fixed projectiles blocking hitscan weapons<ul><li>Notably, nailguns against SGs and HWGuy will no longer block their bullets.</li>
					<li>Flamethrowers will also now work against nailgunning players</li>
					</ul></li>
					<li>Fix local weapon sounds from playing twice on a high ping (e.g. deploy sound)</li>
					<li>Fix weapon specific crosshairs for the AC/RPG/Tranq</li>
					<li>Fixed the soldier 3rd-person RPG pose so it now points to where the rocket will travel. (Thanks WillWow_mc!)</li>
					<li>Fixed flag trails performance issues<ul><li>Fixed stutter when the flag returns after it is capped</li>
					<li>Added cvar cl_spritetrail_maxlength that controls the max length of a sprite trail (once exceeded, the trail will start over from its parent's current origin)</li>
					<li>Made it so trails are not calculated at all client-side if they are disabled by their respective cvars</li>
					</ul></li>
				</ul>
			</div>
		</div>

		<div class="s_paragraph">
			<h4>Lua Improvements</h4>
			<div class="s_body">
				<ul class="task-list">
					<li>Add basic support for spawning entities through Lua
					<ul>
						<li>Not very well tested, but is able to spawn info_ff_scripts like flags and have them work like normal</li>
						<li>Added baseentity:SetName(string name)</li>
						<li>Added global function SpawnEntity(string entity_class_name, string entity_name) that returns the entity spawned or nil if unsuccessful (example: `local entity = SpawnEntity("info_ff_script", "red_flag")`)</li>
						<li>Added global function SpawnEntity(string entity_class_name) that returns the entity spawned or nil if unsuccessful (example: `local entity = SpawnEntity("info_ff_script")`)</li>
					</ul>
					</li>
					<li>Add basic support for free-for-all teams<ul><li>Lua can set a team as a free-for-all team by doing `GetTeam(Team.kBlue):SetFFA(true)`</li>
					</ul></li>
					<li>Add Lua getters for various InfoFFScript settings<ul><li>infoscript:GetModel() returns the string path of the current model</li>
					<li>infoscript:GetStartOrigin() returns the Vector that the infoscript will spawn at when returned</li>
					<li>infoscript:GetStartAngles() returns the QAngles that the infoscript will spawn with when returned</li>
					</ul></li>
					<li>Improve Lua angle/vectors a bit<ul><li>Add player:GetEyeAngles()</li>
					<li>Add __tostring() implementations for Vector and QAngle classes</li>
					<li>Convert VectorAngles and AngleVectors to use Lua-style return values rather than C++ style pass-by-reference parameters. Example usage of the new functions:
					<pre><code>
local eye_angles = player:GetEyeAngles()
local forward, right, up = AngleVectors(eye_angles)
local angles = VectorAngles(forward)
assert(angles == eye_angles)
					</code></pre>
					</li>
				</ul>
			</div>
		</div>

	</div>
</div>
<?
}
if ($patch == "2.6.0") {
?>
<div class="c_table">
	<h3 class="no-margin">Patch 2.6.0</h3>
	<div class="t_subheader">Released June 5, 2016</div>
	<div class="t_body">

		<div class="s_paragraph">
			<h4>Classes</h4>
			<div class="s_body">
				<ul class="task-list">
				<li><b>Scout</b>
				<ul>
					<li>Added new weapon: Jumpgun
					<ul>
						<li>When fully charged it can be fired to produce an upwards thrust like a mid-air powerful jump</li>
						<li>Whilst the weapon is out, it'll charge up; switching weapons loses charge</li>
						<li>We don't have a weapons modeller at the moment, so it's using the railgun model for now. If you'd like to model us a new gun, please get in touch!</li>
					</ul>
					</li>
				</ul>
				</li>
				<li><b>Engineer</b>
				<ul>
					<li>Dispenser
					<ul>
						<li>Wrenching a dispenser now recharges 5 cells per whack; you can no longer insert your own ammo with your wrench</li>
						<li>Dispensers are now cheaper, down from 100 cells to 30 cells</li>
						<li>Dispensers have less maximum capacity, down from: 400 to 100 cells; 500 to 100 nails; 400 to 100 shells, 250 to 50 rockets, 500 to 100 armor. NOTE: It's explosion size is based on what percentage full it is, not the total ammo number. This means the explosion size has not changed, but it reaches full detonation size quicker.</li>
						<li>Dispenser health reduced from 150 to 75</li>
						<li>Dispensers no longer eat backpacks when they are full</li>
					</ul>
					</li>
				</ul>
				</li>
				</ul>
			</div>
		</div>

		<div class="s_paragraph">
			<h4>Misc</h4>
			<div class="s_body">
				<ul class="task-list">
				<li>Ragdolls are no longer affected by concussion grenades</li>
				<li>Ragdolls are pushed less by explosions</li>
				<li>Ragdolls last for 5 seconds, down from 15</li>
				<li>Gibs are now more frequent from deaths with explosions (>30 dmg overkill rather than >50)</li>
				<li>Dropped player weapons are now tied to cl_gib_lifetime</li>
				<li>Railgun now glows more dramatically when it's fully charged</li>
				</ul>
			</div>
		</div>

		<div class="s_paragraph">
			<h4>Bugfixes</h4>
			<div class="s_body">
				<ul class="task-list">
				<li>Fixed various HUD positioning on non-standard resolutions</li>
				<li>Fixed cl_spawnweapon_scout and cl_spawnweapon_spy</li>
				</ul>
			</div>
		</div>

	</div>
</div>
<?
}
if ($patch == "2.5.2") {
?>
<div class="c_table">
	<h3 class="no-margin">Patch 2.5.2</h3>
	<div class="t_subheader">Released October 3, 2015</div>
	<div class="t_body">

		<div class="s_paragraph">
			<h4>General</h4>
			<div class="s_body">
				<ul class="task-list">
				<li>Increase ff_monkey nade bag respawn time from 15 to 30 seconds</li>
				<li>Rename single shotgun to pellet gun and make it sound weak</li>
				<li>Re-add single shotgun (now pellet gun) to pyro</li>
				<li>Fix the spanner special hit sound getting covered up by the clang sound</li>
				<li>Add in-game on-screen keyboard functionality
				<ul>
					<li>Adds the cvars hud_keystate (disabled by default) and hud_keystate_spec (enabled by default)</li>
					<li>When hud_keystate is enabled, your own keypresses will be drawn on the screen</li>
					<li>When hud_keystate_spec is enabled, the keypresses of your target while spectating in first/third person will be drawn on the screen</li>
				</ul>
				</li>
				</ul>
			</div>
		</div>

	</div>
</div>
<?
}
if ($patch == "2.5.1") {
?>
<div class="c_table">
	<h3 class="no-margin">Patch 2.5.1</h3>
	<div class="t_subheader">Released June 13, 2015</div>
	<div class="t_body">

		<div class="s_paragraph">
			<h4>General</h4>
			<div class="s_body">
				<ul class="task-list">
				<li>Increase flag touch bounds a bit:
				<ul>
					<li>Height from 65% of model height to 80%</li>
					<li>Width from 100% of model width to 150%</li>
					<li>Stops a single SG from being able to completely block the flag, though you can still make it difficult to grab</li>
					<li>Flag model bounds: 26.254800796509 x 69.179306283593</li>
					<li>Flag bounds before this change: 26.254800796509 x 45.048884835839</li>
					<li>Flag bounds after this change: 39.382202148438 x 55.155250549316</li>
				</ul>
				</li>
				<li>Add documentation for "disguise last" functionality through the description of disguise command.</li>
				<li>Enable hud_speedometer by default</li>
				<li>Add basic armorstrip convar: mp_friendlyfire_armorstrip
				<ul><li>From the cvar description: "If > 0, only deals armor damage to teammates. The armor damage is multiplied by the value of the cvar (mp_armorstrip 0.5 means half damage). Requires mp_friendlyfire 1"</li></ul>
				</li>
				<li>Disabling security now gives a player 50 fortress points and displays a HUD message to all</li>
				</ul>
			</div>
		</div>

		<div class="s_paragraph">
			<h4>Bugfixes</h4>
			<div class="s_body">
				<ul class="task-list">
					<li>Fix CFFPlayer noisy BodyTarget while crouched (should make explosions while crouched behave better)</li>
					<li>Fix explosions doing too much damage to crouched players in certain cases</li>
					<li>Fix explosions going through brushes when directly underneath them</li>
					<li>Fix HH nades not doing damage to nearby players while standing still</li>
					<li>Fix laser grenade beams getting drawn through walls</li>
					<li>Fix players on ladders counting as airshots</li>
					<li>Fix spy disguise weapon for classes that got weapons removed in 2.5.0</li>
					<li>Dispenser cells required to build displayed correctly; now reads 100 instead of 30</li>
					<li>Fix various HUD timers getting added with time + 1</li>
				</ul>
			</div>
		</div>

		<div class="s_paragraph">
			<h4>Lua</h4>
			<div class="s_body">
				<ul class="task-list">
				<li>Add global callbacks intermission() and restartround()
					<ul>
						<li>intermission() is called when intermission starts</li>
						<li>restartround() is called right before the round is restarted, to allow for Lua to persist data before the Lua environment is destroyed and re-created</li>
					</ul>
				</li>
				<li>Add get equivalents of exposed team set functions</li>
				<li>Add global ServerCommand function (a map-agnostic alternative to the point_servercommand entity)</li>
				<li>Add player:GetArmorAbsorption</li>
				<li>Update func_button:ondamage lua callback to use parameters instead of global vars</li>
			</div>
		</div>

	</div>
</div>
<?
}
if ($patch == "2.5.0") {
?>
<div class="c_table">
	<h3 class="no-margin">Patch 2.5.0</h3>
	<div class="t_subheader">Released March 27, 2015</div>
	<div class="t_body">

		<div class="s_paragraph">
			<h4>Features</h4>
			<div class="s_body">
				<ul class="task-list">
				<li>Added different kill icons for unbounced rails, single bounced rails, and double bounced rails</li>
				<li>Added airshot detection

				<ul class="task-list">
				<li>Airshots show in the console like so: player killed player with weapon (airshot)</li>
				<li>Airshots are logged to file like so: "player" killed "player" with "weapon" (modifier "airshot")

				<ul class="task-list">
				<li>The (modifier "") string only gets added if there actually was an airshot, otherwise the entire parenthetical is absent from the line</li>
				</ul>
				</li>
				</ul>
				</li>
				<li>Added sparks/dust to the feet of rampsliders (cl_rampslidefx cvar for toggling the effects on/off, and cl_rampslidefx_* cvars for controlling how it looks/behaves)</li>
				<li>Added team-colored trail to flags (cl_flagtrails cvar for toggling it on/off)</li>
				<li>Allowed bounced rails to collide with their shooter</li>
				<li>Added hud_weaponselect cvar (briefly shows the weapon select menu whenever switching weapons when hud_fastswitch is enabled; defaulted to enabled)</li>
				</ul>
			</div>
		</div>

		<div class="s_paragraph">
			<h4>Gameplay</h4>
			<div class="s_body">
				<ul class="task-list">
				<li>Lowered the hard cap from 180% to 171%</li>
				<li>Flag touch bounds have been decreased somewhat significantly: touch height is now ~65% of flag height, and touch width is now ~100% of flag width (flag touch bounds used to be larger than the flag itself in both dimensions)</li>
				<li>Added a middle bhop cap - when you are over it, reduce speed by more. Currently set to 1.55 speed (620 for scout) and it has a lower pcfactor (0.3 rather than 0.65). This means downtrimping is good for one jump and reduces successive conc skim jumps without reducing the hard cap too much</li>
				<li>Made HH explosive grenades (frag/mirv) work like they do in TFC (HHing a gren now simply adds 1000 speed in the direction that you're currently moving (or 950 speed straight up if you're not moving at all)</li>
				<li>Capped jump pad + conc horiz and vert speed separately</li>
				<li>Set jump pad horiz boost to 768 (was 1024 in 2.46)</li>
				</ul>
			</div>
		</div>

		<div class="s_paragraph">
			<h4>Classes</h4>
			<div class="s_body">
				<ul class="task-list">
				<li>Removed the single shotgun from the hwguy, medic, and pyro (see <a href="https://github.com/fortressforever/fortressforever/issues/82" class="issue-link" title="Get rid of single shotgun on as many classes as possible">#82</a>)</li>
				<li>Removed nailgun from sniper</li>
				<li>Made the sniper rifle use nails to avoid shared ammo between sniper rifle/autorifle</li>
				</ul>
			</div>
		</div>
		
		<div class="s_paragraph">
			<h4>Maps</h4>
			<div class="s_body">
				<ul class="task-list">
				<li>Slimmed down the number of maps included with FF</li>
				<li>Improved base_shutdown.lua

				<ul class="task-list">
				<li>Added built-in support for trigger-based buttons (blue_security_trigger/red_security_trigger)</li>
				<li>Added built-in support for Lua-defined security shutdown length (SECURITY_LENGTH)</li>
				<li>Added built-in support for turning on/off lights, brushes, trigger_ff_clips, and trigger_hurts</li>
				<li>Added some helpful team-oriented trigger definitions in base_teamplay.lua</li>
				</ul>
				</li>
				<li>Added a timer on the HUD that reflects how long security is down for on all security maps</li>
				<li>Reverted all IvD maps that used the time-limited-round-based system to the default IvD system (only switch teams after all caps have been captured)</li>
				<li>Removed the objective icon on the flag for defenders in IvD/AvD maps (it always points to the cap point that needs to be defended instead)</li>
				<li>Changed the team names in ff_dm to something more appropriate</li>
				<li>Removed the map guide menu as it has never been utilized</li>
				<li>Allowed the speedometer to show while spectating someone</li>
				</ul>
			</div>
		</div>
		
		<div class="s_paragraph">
			<h4>Misc</h4>
			<div class="s_body">
				<ul class="task-list">
				<li>Added Spanish translation by VMX and Firefox11</li>
				<li>Added (incomplete) Russian localization by Gordon</li>
				<li>Added Portuguese (BR) translation by Gemini Saga</li>
				<li>Defaulted hud_fastswitch to 1</li>
				<li>Made 0 prematch the default when using ff_restartround without a parameter (ff_setprematch is better for cases where you just want to add prematch)</li>
				<li>Added hud_fastswitch and hud_weaponselect to the Fortress Options "HUD" section</li>
				<li>Reverted back to the 2.4 menu background because it was pretty cool</li>
				<li>Removed the map guide menu and make the Flythrough button go directly to the flythrough</li>
				<li>Improved HUD font: add Latin-1 Supplement and other missing chars (adds things like custom accented chars, #, &amp;, $, ~, etc)</li>
				<li>Optimised Lua HUD network messages (send a number ID over the network rather than a string)</li>
				</ul>
			</div>
		</div>
		
		<div class="s_paragraph">
			<h4>Fixes</h4>
			<div class="s_body">
				<ul class="task-list">
				<li>Fixed spectators not getting their kills/deaths/fortpoints reset on restart round</li>
				<li>Fixed getting a frag added when using the 'spectate' console command (it used to be to compensate for the -1 frag from suiciding)</li>
				<li>Fixed grenades disappearing after falling too far</li>
				<li>Fixed flags getting stuck in ceilings</li>
				<li>Fixed ff_training not showing map loading info when launched from the main menu</li>
				<li>Fixed ff_restartround resetting twice when called with 0 prematch time</li>
				<li>Fixed unicode character support in VGUI/HUD elements</li>
				<li>Fixed materials/ff/ff08_sign_up_green material using the yellow texture instead of the green one</li>
				<li>Fixed the glass material in ff_dm</li>
				<li>Fixed conc speed being limited for too long after using a jump pad (<a href="https://github.com/fortressforever/fortressforever/issues/80" class="issue-link" title="Jump pad + conc speed limiting persists for way too long">#80</a>)</li>
				<li>Fixed Lua HUD timers' seconds getting truncated in the wrong direction when counting down</li>
				</ul>
			</div>
		</div>
		
		<div class="s_paragraph">
			<h4>Lua</h4>
			<div class="s_body">
				<h5>Environment</h5>

				<ul class="task-list">
				<li>Exposed all safe default Lua library functions (newly exposed packages: package, debug, os)</li>
				<li>Added lua_dostring server command that will attempt to run the given string in the global Lua environment</li>
				<li>Made Lua's 'print' function redirect to the console</li>
				<li>Made Lua's 'require' look in ModDir/maps/includes, ModDir/maps/ and ModDir/ when resolving modules</li>
				<li>Converted IncludeScript into an alias of require</li>
				<li>Removed arbitrary restriction on loading script files after the initial load sequence</li>
				<li>Added tostring support for CBaseEntity, CFFPlayer, CTeam, and Color userdata</li>
				<li>Removed luabind's 'class' implementation because it seems to be broken</li>
				<li>Added Luabind's class_info function (see <a href="http://halmd.org/develop/luabind.html#debugging-c-types-with-class-info">http://halmd.org/develop/luabind.html#debugging-c-types-with-class-info</a>)</li>
				</ul>

				<h5>Fixes</h5>

				<ul class="task-list">
				<li>Fixed execution errors not being caught and failing silently</li>
				<li>Fixed AT.kForceThrowItems and AT.kForceDropItems not doing what they say</li>
				<li>Fixed entity:SetFriction() not working on players</li>
				<li>Fixed typo in CF.kInfoScripts (was CF.kInfoScipts) (CF.kInfoScipts will remain for backwards compatibility)</li>
				</ul>

				<h5>Additions</h5>

				<ul class="task-list">
				<li>Added buildable_killed(buildable, damageinfo) callback</li>
				<li>Added player_onuse(player) callback</li>
				<li>Added support for separate collision and touch bounds for info_ff_scripts. The sizes are now controlled by Lua functions:

				<ul class="task-list">
				<li>entity_name:gettouchsizes( mins, maxs ) passes min and max vectors by reference for the function to alter in place</li>
				<li>entity_name:getphysicssizes( mins, maxs ) passes min and max vectors by reference for the function to alter in place</li>
				<li>entity_name:getbloatsize() expects a float return value, uses the value to inflate the touch bounding box (default bloat is 12)</li>
				</ul>
				</li>
				<li>Added Lua-spawned trails on entities, coloured by team

				<ul class="task-list">
				<li>Functions added:

				<ul class="task-list">
				<li>entity:StartTrail(int teamid)</li>
				<li>entity:StartTrail(int teamid, float start_width, float end_width, float lifetime)</li>
				<li>entity:StopTrail()</li>
				</ul>
				</li>
				</ul>
				</li>
				<li>Added global function GetGameDescription</li>
				<li>Added player functions GetFortPoints, GetFrags, GetDeaths</li>
				<li>Added player:SetDisguise(int teamId, int classId, bool isInstant)</li>
				<li>Added player:IsInAir(unitsAboveGround) overload (checks if the player is the specified number of units above the ground)</li>
				<li>Added player:IsFlashlightOn()</li>
				<li>Added player:ResetDisguise()</li>
				<li>Added player:AddHealth(healAmount, allowOverheal) overload</li>
				<li>Renamed DisplayMessage to SendHintToPlayer and add SendHintToTeam/SendHintToAll functions</li>
				<li>Added global function GetEntitiesByName(entname) that returns a Lua table containing the matching entities</li>
				<li>Added global GetPlayers function (returns a table (array) of all players on the server)</li>
				<li>Added IsJumpPad/CastToJumpPad</li>
				<li>Added IsEntity</li>
				<li>Added player functions to get the player's buildables (or nil if they're not built):

				<ul class="task-list">
				<li>player:GetSentryGun()</li>
				<li>player:GetDispenser()</li>
				<li>player:GetDetpack()</li>
				<li>player:GetJumpPad()</li>
				</ul>
				</li>
				<li>Majorly improved Lua's ability to interact with sentryguns

				<ul class="task-list">
				<li>sg:SetLevel(int level) // sets the level (does not play upgrade sounds)</li>
				<li>sg:Upgrade() // upgrades to the next level</li>
				<li>sg:Repair(int cells) // adds health based on the number of cells</li>
				<li>sg:AddAmmo(int shells, int rockets) // adds ammo</li>
				<li>sg:RocketPosition() // returns the Vector position of where rockets are fired from</li>
				<li>sg:MuzzlePosition() // returns the Vector position of where bullets are fired from</li>
				<li>sg:GetRockets() // number of rockets the SG has</li>
				<li>sg:GetShells() // number of shells the SG has</li>
				<li>sg:GetHealth() // amount of health the SG has</li>
				<li>sg:SetRockets(int rockets)</li>
				<li>sg:SetShells(int shells)</li>
				<li>sg:SetHealth(int health)</li>
				<li>sg:GetMaxRockets()</li>
				<li>sg:GetMaxShells()</li>
				<li>sg:GetMaxHealth()</li>
				<li>sg:SetFocusPoint(Vector point) // sets where the SG wants to look</li>
				<li>sg:GetEnemy() // gets the target of the SG (CBaseEntity)</li>
				<li>sg:SetEnemy(CBaseEntity enemy)</li>
				<li>sg:GetVecAiming() // gets the direction vector of the SG's current aim direction</li>
				<li>sg:GetVecGoal() // gets the direction vector of the SG's goal aim direction</li>
				<li>sg:Shoot() // makes the SG shoot one shell</li>
				<li>sg:ShootRocket() // makes the SG shoot one rocket</li>
				</ul>
				</li>
				<li>Added IsProjectile/CastToProjectile functions</li>
				<li>Added IsInfoScript function</li>
				<li>Added IsBuildable/CastToBuildable functions</li>
				<li>Added function GetEntitiesInSphere(Vector center, float radius, bool ignore_walls)</li>
				<li>Added collection filter flag CF.kJumpPad</li>
				<li>Exposed gEntList as the global variable GlobalEntityList

				<ul class="task-list">
				<li>Usage:

				<ul class="task-list">
				<li>GlobalEntityList:FirstEntity() // get the first CBaseEntity in the GlobalEntityList</li>
				<li>GlobalEntityList:NextEntity(CBaseEntity current_entity) // get the next CBaseEntity in the list, after current_entity</li>
				<li>GlobalEntityList:NumEntities() // get the total number of entities</li>
				<li>Iteratable with both pairs and ipairs (for ent_id, entity in ipairs(GlobalEntityList) do print(ent_id, entity) end). The iteration order is arbitrary with both functions</li>
			</div>
		</div>
	</div>
</div>
<?
}
if ($patch == "2.46") {
?>
<div class="c_table">
	<h3 class="no-margin">Patch 2.46.1 (client-only)</h3>
	<div class="t_subheader">Released May 19, 2013</div>
	<div class="t_body">
		<div class="s_paragraph">
			<h4>Bug Fixes</h4>
			<div class="s_body">
			<ul>
				<li>Fixed a bug that made the team menu disappear if you joined a server and toggled the scoreboard while still looking at the MOTD</li>
				<li>Fixed cloak screen effect being drawn while in a slowfield instead of while cloaked</li>
				<li>Reverted cl_ragdolltime fix because it caused unexcepted problems; removed the cl_ragdolltime cvar temporarily</li>
				<li>Fixed first-person spectator view going insane if the player you're spectating dies while concussed</li>
			</ul>
			</div>
		</div>
	</div>
</div>
<div class="c_table">
	<h3 class="no-margin">Patch 2.46</h3>
	<div class="t_subheader">Released May 6, 2013</div>
	<div class="t_body">

		<div class="s_paragraph">
			<h4>Generic / Misc Stuff</h4>
			<div class="s_body">
			<ul>
				<li>Added support for the auto-updater checking for updates in game</li>
				<li>Added armor to spectator nameplate</li>
				<li>Added very basic support for spectating info_ff_script entities (console command: <i>spec_item &lt;info_ff_script entity name&gt;</i>, example: <i>spec_item red_flag</i>)</li>
				<li>Modified the spec_goto command so that it switches you to roaming mode if you're not already in it (so you can use it from any mode instead of only being able to use it while already in roaming mode)</li>
				<li>Added class to the player names in the spectator menu dropdown</li>
				<li>Better gibs with blood and more control over what they look like
				<ul>
					<li>Renamed cl_gibcount cvar to cl_gib_count</li>
					<li>Added cvars: cl_gib_force_scale, cl_gib_force_randomness, cl_gib_lifetime, cl_gib_blood_scale, cl_gib_blood_force_scale, cl_gib_blood_force_randomness, cl_gib_blood_count </li>
					<li>Added command: spawngibs (spawns gibs on top of the local player; requires sv_cheats 1)</li>
				</ul>
				</li>
				<li>Changed the HP required to gib from &lt;= -60 to &lt;= -50</li>
				<li>Enabled console by default</li>
			</ul>
			</div>
		</div>

		<div class="s_paragraph">
			<h4>Bug Fixes / Optimizations</h4>
			<div class="s_body">
			<ul>
				<li>Fixed a server crash related to SGs</li>
				<li>Fixed some auto assign bugs that made it work incorrectly</li>
				<li>Fixed cl_ragdolltime not working</li>
				<li>Fixed the crosshair not getting drawn in SourceTV demos</li>
				<li>Made "Spectators: #" get hidden in SourceTV demos, it should only be there while actually viewing through SourceTV</li>
				<li>Fixed conc stars, tranq z's, etc not getting shown for spectators</li>
				<li>Fixed the team menu/MOTD getting shown when you open a SourceTV demo (MOTD still gets shown in SourceTV servers)</li>
				<li>Fixed crash when changing observer mode in a SourceTV demo when there are no players connected</li>
				<li>Fixed nameplate not being updated when changing observer target/mode in a SourceTV demo</li>
				<li>Fixed Lua HUD timers getting drawn slightly too high up in a few base Lua files</li>
				<li>Hopefully fixed a sporadic crash on map change (seemingly related to a trigger_hurt damaging something after the level has shutdown)</li>
				<li>Fixed another case of the bug that could force your observer target to switch if your target got gibbed</li>
				<li>Fixes for first-person spectating (in-game and in SourceTV):
				<ul>
					<li>Concussion effect now works</li>
					<li>Cloak effect now works</li>
					<li>Ammo counts on weapon models now work</li>
					<li>Hit indicator now works</li>
					<li>Flag shadow no longer gets drawn</li>
					<li>Overpressure cooldown on the AC now works</li>
					<li>Slowfield screen effect now works</li>
					<li>Killbeeps now play (can turn this off with cl_spec_killbeep 0)</li>
					<li>hud_deathnotice_selfonly and hud_deathnotice_highlightself now work (they treat "self" as the player you're spectating)</li>
					<li>Various other material proxies now work (ProxyTeam, ProxyClass)</li>
				</ul>
				</li>
				<li>REALLY fixed the cl_spawnweapon_ cvars</li>
				<li>Fixed a loophole in the class/team-switch respawn delay</li>
				<li>Fixed "disguise last" so it can be used through the console/in configs</li>
				<li>Fixed being able to pick up a flag while disguising without losing your disguise</li>
				<li>Fixed func_button's not firing their outputs when damaged if they didn't have an ondamage function defined in Lua</li>
			</ul>
			</div>
		</div>

		<div class="s_paragraph">
			<h4>Class-specific Changes</h4>
			<div class="s_body">
			<ul>
				<li>
				No class changes
				</li>
			</ul>
			</div>
		</div>
		
		<div class="s_paragraph">
			<h4>Lua changes</h4>
			<div class="s_body">
			<ul>
				<li>Added shutdown() Lua callback when the level shuts down to compliment startup() (actually added in 2.45, but forgot to put it in the changelog)</li>
				<li>Added support for capture points having different team scores and fortress points awarded (use the variables teampoints and fortpoints in the object's table)</li>
				<li>Exposed all useful Vector and QAngle functions to Lua that weren't previously exposed:
				<ul>
					<li>All operators (multiplying/dividing by a float, vector to vector math/equality operators)</li>
					<li>Global functions: AngleVectors and VectorAngles (to convert back and forth)</li>
					<li>Vector member functions: Cross, Random, Min, Max</li>
					<li>QAngle member functions: Random</li>
				</ul>
				</li>
			</div>
		</div>
	</div>
</div>
<?
}
if ($patch == "2.45") {
?>
<div class="c_table">
	<h3 class="no-margin">Patch 2.45</h3>
	<div class="t_subheader">Released December 9, 2012</div>
	<div class="t_body">

		<div class="s_paragraph">
			<h4>Generic / Misc Stuff</h4>
			<div class="s_body">
			<ul>
				<li>Added number of tossable medpacks to the medic's HUD</li>
				<li>Added server command ff_setprematch that takes a value in seconds and sets prematch so that the given number of seconds remain until it ends (even if not currently in prematch)</li>
				<li>Added grenades to the right side ammo pickup list</li>
				<li>Added a much better class selection screen</li>
				<li>Added SG barrel spinning animations</li>
				<li>Auto selecting a team now takes into account team scores as well as how full teams are</li>
				<li>Gibs now take the blast direction into consideration</li>
				<li>Added cake's class switch suggestion: "Switch from 1 class to another, no delay. Do a second class switch in under 5 seconds from the first, 5 second respawn delay." (Made the respawn delay based on the last class change time instead of always being 5 seconds; for example, if you change class, wait 2.5 seconds, and then change class again, your respawn will only be delayed for 2.5 seconds; if you change class twice instantly you'll get the full 5 seconds)</li>
				<li>Added cvars: hud_grenadetimers (when set to 0, turns off visual grenade timers) and hud_buildtimers (when set to 0, turns off visual buildable timers)</li>
				<li>Added MOTD window and updated teammenu
				<ul>
					<li>Added command "serverinfo" that brings up the MOTD window
					<li>Modified the team menu server info section to have a button to view the MOTD and show a customizable small little banner (gets the URL from host.txt; only URLs are allowed)</li>
					<li>MOTD can be text, HTML, or a URL</li>
					<li>Scrollbars on HTML elements are apparently not working, so they have been disabled</li>
					<li>Added default motd and host URL if none are found</li>
					<li>Added server convar sv_motd_enable that determines if the MOTD window is shown to clients when they connect</li>
				</ul>
				</li>
				<li>Ragdolls now keep flames</li>
				<li>Made changing cl_interpolate require sv_cheats</li>
				<li>Spectator HUD top black bar removed and replaced with the normal HUD (the black bar didn't show any different information and obscured Lua HUD elements)</li>
				<li>Made the spectator team color a bit darker so that text is more visible against a teamcolored HUD element background)</li>
				<li>Made EMP explosions no longer shorten the fuselength of detpacks to 5 seconds (it was implemented poorly, is totally hidden functionality, and isn't even a desirable feature)</li>
				<li>Made pipe trails grellow rather than red</li>
				<li>Added default_fov and viewmodel_fov sliders to the Graphics page of Fortress Options</li>
				<li>Encrypted player and weapon scripts</li>
			</ul>
			</div>
		</div>

		<div class="s_paragraph">
			<h4>Bug Fixes / Optimizations</h4>
			<div class="s_body">
			<ul>
				<li>Fixed a typo that made it look like it was looking for lua files in maps/maps instead of just maps/ when the lua was missing</li>
				<li>Fixed having no grenade timer sound set on a fresh install (hooray for Dexter fixing this!)</li>
				<li>Made cl_spawnweapon_ convars actually work (the cvars used to be server-side and the server's settings were the only things that mattered)</li>
				<li>Fixed concussion stars or tranq zzZ getting shown when cloaked</li>
				<li>Fixed scrollbars not working in the teammenu</li>
				<li>Fixed crosshair not drawing while spectating someone in first person mode</li>
				<li>Fixed SGs staying locked onto targets they can no longer shoot (through trigger_ff_clips, for example)</li>
				<li>Made SG targeting more consistent in general (spam-locking should no longer happen)</li>
				<li>Fixed (hopefully) maps with flythroughs overriding the SourceTV free-roam view (making it impossible to move and forcing you periodically to jump to the next overview target)</li>
				<li>Fixed slowfield not facing you when watching a SourceTV demo in chase/firstperson view</li>
				<li>Fixed a bug that forced your observer target to switch if your target got gibbed</li>
			</ul>
			</div>
		</div>

		<div class="s_paragraph">
			<h4>Class-specific Changes</h4>
			<div class="s_body">
			<ul>
				<li><b>Pyro</b>
				<ul>
					<li>Lowered base burn damage from 15 to 13 and lowered burn level 2 multiplier from 2.5 to 2 (really from 4.5 to 4) [total damages for each burn level (old->new): lvl1 15->13; lvl2 75->52; lvl3 225->195]</li>
				</ul>
				</li>
				<li><b>Soldier</b>
				<ul>
					<li>Rocket radius lowered from 108 to 100</li>
					<li>Rocket spawn position set in line with the player origin instead of 16 units forward</li>
					<li>Laser grenade reworked
					<ul>
						<li>Added a 64 unit gap to the center of the laser grenade</li>
						<li>Made the laser gren damage dealt time based instead of tick based</li>
						<li>Hit delay is 0.25 seconds (the delay between ticks of damage)</li>
						<li>Changed damage per hit to 45</li>
						<li>Upped growtime from 0.7 to 1 second</li>
						<li>Decreased duration from 10 to 7 seconds</li>
						<li>Decreased rotation speed by a bit (120 to 100; 17% decrease)</li>
						<li>Decreased laser beam radius by 1 unit (from 4 to 3)</li>
					</ul>
					</li>
				</ul>
				</li>
				<li><b>HWGuy</b>
				<ul>
					<li>Increased overpressure cooldown from 8 seconds to 16</li>
					<li>Made overpressure netcode more consistent (it should make more sense when you get hit by it and when you hit people with it)</li>
				</ul>
				</li>
			</ul>
			</div>
		</div>
		
		<div class="s_paragraph">
			<h4>Lua changes</h4>
			<div class="s_body">
			<ul>
				<li>Added lua callback player_namechange( player, oldname, newname )</li>
				<li>Added player_switchclass( player, oldclassid, newclassid ) Lua callback; if the function returns false, the class switch is disallowed)</li>
				<li>Added lua functions:
				<ul>
					<li>GetPlayerBySteamID( steamid )</li>
					<li>player:RemoveBuildables() // cancels any of the player's building or built buildables</li>
					<li>player:RemoveProjectiles() // removes all of the player's projectiles</li>
					<li>player:RemoveItems() // removes all of the player's projectiles and cancels all buildables</li>
					<li>player:LockInPlace( bool lockState ) // either locks or unlocks a player in place depending on the parameter (sets velocity to zero and makes it so they can't move at all; no gravity, etc); does not affect anything except movement</li>
				</ul>
				</li>
				<li>Moved the flaginfo call in the spawn code so that it doesn't skip spectators (so joining a server and going spec doesn't mean you miss the Lua-based hud being drawn)</li>
				<li>Made HudText and HudTimer elements allow negative x and y positioning values</li>
				<li>Changed HudTimer to use float values for the starttime param instead of ints, so that named timers can be added to Huds without losing any precision</li>
				<li><b>Big Lua HUD update:</b>
				<ul>
					<li><b>Added size customization to HudText and HudTimers</b>
					<ul>
						<li>Functions added:
						<ul>
							<li>AddHudText( player, identifier, text, x, y, xalign, yalign, fontsize)</li>
							<li>AddHudTextToTeam( team, identifier, text, x, y, xalign, yalign, fontsize)</li>
							<li>AddHudTextToAll( identifier, text, x, y, xalign, yalign, fontsize)</li>
							<li>AddHudTimer( player, identifier, timerid, x, y, xalign, yalign, fontsize)</li>
							<li>AddHudTimer( player, identifier, startvalue, speed, x, y, xalign, yalign, fontsize)</li>
							<li>AddHudTimer( player, identifier, timerid, x, y, xalign, yalign, fontsize)</li>
							<li>AddHudTimer( player, identifier, startvalue, speed, x, y, xalign, yalign, fontsize)</li>
							<li>AddHudTimer( player, identifier, timerid, x, y, xalign, yalign, fontsize)</li>
							<li>AddHudTimer( player, identifier, startvalue, speed, x, y, xalign, yalign, fontsize)</li>
						</ul>
						</li>
					</ul>
					</li>
				</ul>
				<ul>
					<li><b>Added a new type of Lua hud element, HudBox, that draws a box with a background color and a customizable border</b>
					<ul>
						<li>Objects added:
							<ul>
								<li>CustomColor(), CustomColor( r, g, b ), CustomColor( r, g, b, a )</li>
								<li>CustomBorder(), CustomBorder( CustomColor color ), CustomBorder( CustomColor color, width )</li>
							</ul>
						</li>
						<li>Functions added:
						<ul>
							<li>AddHudBox( player, identifier, x, y, width, height, CustomColor bgcolor )</li>
							<li>AddHudBox( player, identifier, x, y, width, height, CustomColor bgcolor, xalign )</li>
							<li>AddHudBox( player, identifier, x, y, width, height, CustomColor bgcolor, xalign, yalign )</li>
							<li>AddHudBox( player, identifier, x, y, width, height, CustomColor bgcolor, CustomColor bordercolor )</li>
							<li>AddHudBox( player, identifier, x, y, width, height, CustomColor bgcolor, CustomColor bordercolor, xalign )</li>
							<li>AddHudBox( player, identifier, x, y, width, height, CustomColor bgcolor, CustomColor bordercolor, xalign, yalign )</li>
							<li>AddHudBox( player, identifier, x, y, width, height, CustomColor bgcolor, CustomBorder border )</li>
							<li>AddHudBox( player, identifier, x, y, width, height, CustomColor bgcolor, CustomBorder border, xalign )</li>
							<li>AddHudBox( player, identifier, x, y, width, height, CustomColor bgcolor, CustomBorder border, xalign, yalign )</li>
							<li>AddHudBoxToTeam( team, identifier, x, y, width, height, CustomColor bgcolor )</li>
							<li>AddHudBoxToTeam( team, identifier, x, y, width, height, CustomColor bgcolor, xalign )</li>
							<li>AddHudBoxToTeam( team, identifier, x, y, width, height, CustomColor bgcolor, xalign, yalign )</li>
							<li>AddHudBoxToTeam( team, identifier, x, y, width, height, CustomColor bgcolor, CustomColor bordercolor )</li>
							<li>AddHudBoxToTeam( team, identifier, x, y, width, height, CustomColor bgcolor, CustomColor bordercolor, xalign )</li>
							<li>AddHudBoxToTeam( team, identifier, x, y, width, height, CustomColor bgcolor, CustomColor bordercolor, xalign, yalign )</li>
							<li>AddHudBoxToTeam( team, identifier, x, y, width, height, CustomColor bgcolor, CustomBorder border )</li>
							<li>AddHudBoxToTeam( team, identifier, x, y, width, height, CustomColor bgcolor, CustomBorder border, xalign )</li>
							<li>AddHudBoxToTeam( team, identifier, x, y, width, height, CustomColor bgcolor, CustomBorder border, xalign, yalign )</li>
							<li>AddHudBoxToAll( identifier, x, y, width, height, CustomColor bgcolor )</li>
							<li>AddHudBoxToAll( identifier, x, y, width, height, CustomColor bgcolor, xalign )</li>
							<li>AddHudBoxToAll( identifier, x, y, width, height, CustomColor bgcolor, xalign, yalign )</li>
							<li>AddHudBoxToAll( identifier, x, y, width, height, CustomColor bgcolor, CustomColor bordercolor )</li>
							<li>AddHudBoxToAll( identifier, x, y, width, height, CustomColor bgcolor, CustomColor bordercolor, xalign )</li>
							<li>AddHudBoxToAll( identifier, x, y, width, height, CustomColor bgcolor, CustomColor bordercolor, xalign, yalign )</li>
							<li>AddHudBoxToAll( identifier, x, y, width, height, CustomColor bgcolor, CustomBorder border )</li>
							<li>AddHudBoxToAll( identifier, x, y, width, height, CustomColor bgcolor, CustomBorder border, xalign )</li>
							<li>AddHudBoxToAll( identifier, x, y, width, height, CustomColor bgcolor, CustomBorder border, xalign, yalign )</li>
						</ul>
						</li>
					</ul>
					</li>
				</ul>
				</li>
			</ul>
			</div>
		</div>
	</div>
</div>
<?
}
if ($patch == "2.44") {
?>
	<h3 class="no-margin">Patch 2.44</h3>
	<div class="t_subheader">Released December 16, 2011</div>

	<h4>Generic / Misc Stuff</h4>
	<ul>
		<li>Changed the HP required to gib from <= -100 to <= -60</li>
		<li>Upped headcrush damage from 2x fall damage to 4x fall damage (HWs can take a max of 24 fall damage, which means they can do a max of 96 headcrush damage; scouts, on the other hand, will be able to do a max of 24 headcrush damage)</li>
		<li>Added a speed threshold (set to 1.25 of max class speed, just under the bhop soft cap of 1.4) over which friendly players will always soft clip (not be able to stand on eachothers heads); sometimes the upper bound collision check bugs out and causes some weird movement while bhopping inside of/next to a teammate</li>
		<li>Added a log event ("Round restarted") when the round is restarted (for example, when prematch ends or ff_restartround is used)</li>
		<li>Added SG gibs</li>
		<li>Added cvars hud_deathnotice_selfonly and hud_deathnotice_highlightself, both defaulted to 0
		<ul>
			<li>If hud_deathnotice_selfonly is 1, it only shows deathnotices that the local player is involved in</li>
			<li>If hud_deathnotice_highlightself is 1, it draws a background behind any deathnotice the local player is involved in</li>
		</ul>
		</li>
		<li>Made highlightself background and the objective notice background color/alpha customizable through /scripts/HudLayout.res (HudDeathNotice -> "HighlightColor" and "ObjectiveNoticeColor")</li>
		<li>Modified chat macros
		<ul>
			<li>Changed %pf to output the time remeining until your detpack explodes instead of the total fuse length (if building, it outputs the total fuse length + buildtime remaining)</li>
			<li>Added %ps to output the total fuse length of your detpack</li>
		</ul>
		</li>
	</ul>

	<h4>Bug Fixes / Optimizations</h4>
	<ul>
		<li>Fixed projectiles (rockets, nails, pipes, etc) sometimes colliding with players when they shouldn't and throwing off their movement</li>
		<li>Fixed being able to shoot/charge the railgun while building from a bind</li>
		<li>Fixed being able to reload while building from a bind</li>
		<li>Fixed blue pipes not exploding on jump pads</li>
		<li>Fixed buildables being able to be built inside teammates</li>
		<li>Fixed crosshair info not showing for teammates</li>
		<li>Fixed the exact middle of the laser grenade doing zero damage</li>
		<li>Fixed detpacks not executing onexplode() on triggers that they used to (on ff_security_b1, for example)</li>
		<li>Fixed SourceTV demos not drawing viewmodels</li>
		<li>Fixed not being able to move at all in SourceTV freelook mode</li>
		<li>Fixed pipes being able to be detonated multiple times</li>
		<li>Fixed the single shotgun and super shotgun not playing the cock sound at the right time</li>
		<li>Made the super shotgun use its own cock sound instead of reusing the single shotgun cock sound</li>
	</ul>

	<h4>Class-specific Changes</h4>
	<ul>
		<li><b>Engineer</b>
		<ul>
			<li>Engineer now takes 75% damage from exploding buildables</li>
			<li>Sentry Gun
			<ul>
				<li>Changed explosion radius of all levels to 128 (used to be 102 for level 1, 204 for level 2, and 306 for level 3)</li>
			</ul>
			</li>
		</ul>
		</li>
		<li><b>Medic</b>
		<ul>
			<li>Infection now does 75 max total damage, its damage per tick diminishes over time, and it lasts 6 seconds longer (10 ticks doing 30, 15, 9, 6, 4, 3, 2, 2, 2, 2 damage respectively instead of 7 ticks doing 10 damage each)</li>
			<li>The infection particle effect diminishes over time to match damage diminishing over time</li>
		</ul>
		</li>
		<li><b>Soldier</b>
		<ul>
			<li>Laser grenade damage increased by 189% (from 350*interval per tick to 660*interval per tick); damage against buildables unchanged</li>
			<li>Added a radius of 4 units to each of the laser grenade beams</li>
		</ul>
		</li>
	</ul>

	<h4>Lua changes</h4>
	<ul>
		<li>Fixed player:AddHealth called with a negative input factoring in armor when it should ignore it (damage type changed from DMG_GENERIC to DMG_DIRECT)</li>
		<li>Fixed a bug with Lua schedules. If a schedule called a Lua function that then created a schedule of the same name, the new schedule would be deleted by the original schedule's clean up. Added a check to make sure that the schedule being deleted should truly be deleted.</li>
		<li>Added a way to persist Lua data across level changes
		<ul>
			<li>Functions added:
			<ul>
				<li>SaveMapData( luaobject )  // saves to maps/data/&lt;mapname&gt;.luadat</li>
				<li>SaveMapData( luaobject, suffix )  // saves to maps/data/&lt;mapname&gt;_&lt;suffix&gt;.luadat</li>
				<li>LoadMapData()  // returns the loaded lua object from maps/data/&lt;mapname&gt;.luadat</li>
				<li>LoadMapData( suffix )  // returns the loaded lua object from maps/data/&lt;mapname&gt;_&lt;suffix&gt;.luadat</li>
				<li>SaveGlobalData( luaobject )  // saves to maps/data/global/global.luadat</li>
				<li>SaveGlobalData( luaobject, suffix )  // saves to maps/data/global/global_&lt;suffix&gt;.luadat</li>
				<li>LoadGlobalData()  // returns the loaded lua object from maps/data/global/global.luadat</li>
				<li>LoadGlobalData( suffix )  // returns the loaded lua object from maps/data/global/global_&lt;suffix&gt;.luadat</li>
			</ul>
			</li>
		<li>The suffix param gets stripped of all non-alphanumeric and non-underscore characters. The lua object is serialized into binary.</li>
		<li>Only strings, numbers, booleans, and tables are able to be saved. All other object types are ignored for now (player objects/lua functions for example).</li>
		</ul>
		</li>
	</ul>
<?
}
if ($patch == "2.43") {
?>
<div class="c_table">
	<h3 class="no-margin">Patch 2.43</h3>
	<div class="t_subheader">Released June 30, 2011</div>
	<div class="t_body">

		<div class="s_paragraph">
			<h4>Generic / Misc Stuff</h4>
			<div class="s_body">
			<ul>
				<li>Made melee always hit your target if you are inside them (for healing/wrenching while softclipping with a teammate)</li>
				<li>Made disguised spies softclip using their actual team instead of disguised team
				<ul>
					<li>Solved a problem where a spy could undisguise inside a player and get stuck</li>
					<li>Running into teammates to see if you go through them can now be a weird and dangerous way to spy check</li>
				</ul>
				</li>
			</ul>
			</div>
		</div>

		<div class="s_paragraph">
			<h4>Bug Fixes / Optimizations</h4>
			<div class="s_body">
			<ul>
				<li>Fixed a client crash related to joining a server while a laser grenade is active or thrown</li>
				<li>Fixed age-old bug where incorrect timeleft would be shown on your HUD if you connect/reconnect to a server after prematch has ended or ff_restartround was used</li>
				<li>Potential fix for autoreload sometimes not working</li>
				<li>Fixed slowfield loop sound not being stopped when the slowfield gets removed forcefully (like on class change)</li>
				<li>Fixed slowfield not setting all affected players' speed back to normal when the slowfield gets removed forcefully (like on class change)</li>
				<li>Fixed the laser grenade's arms going through things they shouldn't (like cornfield starting door)</li>
				<li>Fixed pipes and grenades going through things they shouldn't (like destroy security door)</li>
				<li>Fixed MIRVs getting stuck in walls if you try to throw one while next to a wall</li>
				<li>Hopefully fixed some FPS/choppiness issues that 2.42 seemed to cause</li>
				<li>Fixed grenade prime sound (the click) getting played twice when priming a secondary grenade</li>
				<li>Fixed detpacks not being able to blow up some detpack walls (like on ff_stowaway_b2)</li>
				<li>Fixed moving brushes (doors/elevs) thinking players were blocking them even though they weren't due to softclipping</li>
				<li>Potentially fixed a bug that made some projectiles stop players as though they were walls</li>
				<li>Fixed railgun shoot animations glitching like crazy</li>
				<li>Optimized the slowfield and overpressure code a little bit</li>
				<li>Optimized HUD elements a bit</li>
			</ul>
			</div>
		</div>

		<div class="s_paragraph">
			<h4>Class-specific Changes</h4>
			<div class="s_body">
			<ul>
				<li><b>Scout</b>
				<ul>
					<li>Jump Pad
					<ul>
						<li>Jump pad health increased from 125 to 150</li>
					</ul>
					</li>
				</ul>
				</li>
				<li><b>Medic</b>
				<ul>
					<li>The Super Nailgun clip size has been increased from 30 to 50</li>
					<li>The Super Nailgun reload time has been decreased by 0.5 seconds</li>
					<li>Increased infection duration from 10 to 14 (2 more ticks)</li>
				</ul>
				</li>
				<li><b>HWGuy</b>
				<ul>
					<li>Overpressure cooldown increased from 6 to 8</li>
					<li>HWGuy spawns with 1 slowfield instead of 2</li>
					<li>HWGuy has a maximum of 2 slowfields instead of 3</li>
					<li>Slowfield
					<ul>
						<li>Duration decreased from 10 to 7</li>
						<li>Radius decreased from 200 to 176</li>
						<li>Inner radius decreased from 176 to 64 (the radius in which players receive the maximum amount of slow)</li>
						<li>Fast moving players are slowed slightly less than they used to be</li>
					</ul>
					</li>
				</ul>
				</li>
			</ul>
			</div>
		</div>

		<div class="s_paragraph">
			<h4>Map changes</h4>
			<div class="s_body">
			<ul>
				<li>FF_Palermo and FF_Cornfield
				<ul><li>Each cap now has a four minute timer</li></ul>
				</li>
				<li>FF_Warpath
				<ul>
					<li>Now ends properly with lighting changing CP 1 & 5</li>
					<li>LDR lighting change to match HDR</li>
				</ul>
				</li>
			</ul>
			</div>
		</div>
		<div class="s_paragraph">
			<h4>Lua changes</h4>
			<div class="s_body">
			<ul>
				<li>Fixed SetConvar not working properly for replicated cvars like mp_timelimit (the updated value wasn't getting sent to the client)</li>
				<li>Added SetConvar("cvar_name", "value")</li>
			</ul>
			</div>
		</div>
	</div>
</div>
<?
}
if ($patch == "2.42") {
?>
<div class="c_table">
	<h3 class="no-margin">Patch 2.42.1</h3>
	<div class="t_subheader">Released June 25, 2011</div>
	<div class="t_body">
		<div class="s_paragraph">
			<h4>Bug Fixes</h4>
			<div class="s_body">
			<ul>
				<li>Attempt at fixing CL_CopyExistingEntity errors</li>
			</ul>
			</div>
		</div>
	</div>
</div>
<div class="c_table">
	<h3 class="no-margin">Patch 2.42</h3>
	<div class="t_subheader">Released June 25, 2011</div>
	<div class="t_body">
		<div class="s_paragraph">
			<h4>User Interface</h4>
			<div class="s_body">
			<ul>
				<li>Added a global cell count for the engineer's HUD next to the ammo display</li>
				<li>Grenade icons added to the grenade counts in the bottom right</li>
				<li>Grenade icons moved from inside the grenade timers to the left them</li>
				<li>Made the visual grenade timer the exact same length as a grenade prime (from 4.0s to 3.81s)</li>
			</ul>
			</div>
		</div>

		<div class="s_paragraph">
			<h4>Generic / Misc Stuff</h4>
			<div class="s_body">
			<ul>
				<li>Added soft-clipping of friendly players
				<ul>
					<li>Disguised spies clip as if they were on the team they are disguised as</li>
				</ul>
				</li>
				<li>Melee hit detection code completely rewritten, it should be a lot more consistent and a lot less frustrating now</li>
				<li>You no longer lose a kill for suiciding.</li>
				<li>Hand-held concussion grenades do not affect other players.</li>
				<li>Grenades and yellow pipes no longer collide with friendly players</li>
				<li>Added speedometer that records average speed per map (hud_speedometer_avg & _color)</li>
				<li>Flags now rotate when dropped for improved visibility.</li>
				<li>Flags now rise to the surface of and float on water after touching the bottom.</li>
				<li>Stars show above concussed players' heads (cl_concuss 0/1 and cl_concuss_* customization cvars).</li>
				<li>Zzz shows above tranquilized players' heads (cl_tranq 0/1).</li>
				<li>Concussion effect reworked: True-aim crosshair now flashes upon firing a weapon (except for automatic weapons like the AC, nailguns, and AR)
				<ul>
					<li>Other modes:</li>
					<li>cl_concaim 0 always shows the crosshair in the center</li>
					<li>cl_concaim 2 always hides the crosshair while conced</li>
				</ul>
				</li>
				<li>Made the concussion status effect last 10 seconds for all classes (down from 15 seconds for non-medic/scout classes and up from 7.5 for medic/scout)</li>
				<li>Taking fall damage on someones head mirrors 2x of that fall damage to the crushed player</li>
				<li>Made viewmodel_fov cvar not require sv_cheats to be on</li>
				<li>Made cl_showpos cvar not require sv_cheats to be on, but made it so the view angles only show when cheats is on</li>
				<li>Added client convars cl_jimmyleg_cap and cl_jimmyleg_mode.
				<ul>
					<li>This allows the client to designate a speed percentage over the player's max runspeed to NOT do a jump animation. This way, you can visibly see if the player is over their bhop cap, and you can tell if they are bhopping.</li>
					<li>cl_jimmyleg_mode 1 to turn on jimmylegs, cl_jimmyleg_mode 2 to make a players animation speed related to their actual speed</li>
				</ul>
				</li>
				<li>Made SGs/dispensers able to be built on SGs/dispensers</li>
			</ul>
			</div>
		</div>

		<div class="s_paragraph">
			<h4>Bug Fixes</h4>
			<div class="s_body">
			<ul>
				<li>Fixed speed effects not being predicted properly.</li>
				<li>Infected players now lose infection if the enemy player switches from Medic.</li>
				Buildables are now removed if the owner uses the 'spectate' console command.
				<li>Jump-pad slot is now unselectable if you have a jump-pad built.</li>
				<li>Fixed potential bug where you would go back to 100% if you were healed above 100%.</li>
				<li>Fixed age-old bug where Scouts could defuse friendly detpacks.</li>
				<li>Fixed buildable weapon slots being slower to build than via a bound key.</li>
				<li>Fixed colored chat losing its color upon fading out.</li>
				<li>Fixed chat strings not working if they do not have "name:" in front.</li>
				<li>Fixed SG aiming so that you can aim through buildables, etc.</li>
				<li>Fixed buildable ghosts being drawn when you switched to spec.</li>
				<li>Fixed viewmodel_fov not doing anything</li>
				<li>Made SG tracking more consistent (it will only track through things it can shoot through)</li>
				<li>Made miniturret tracking more consistent (it will only see/track through anything it can shoot through)</li>
				<li>Fixed a bug where miniturrets wouldn't target any buildable with a currently dead owner</li>
				<li>Fixed a bug where detpacks wouldn't kill buildables if their owner was dead</li>
				<li>Shooting detpacks no longer trigger hit indicator</li>
				<li>Made concussion grenade push a bit more client predicted, should be less jerky/abrupt</li>
				<li>Fixed going from walk to crouch giving you run speed in the transition</li>
				<li>Made the buildtimer properly reset on mapchange (it won't get stuck visible on mapchange anymore)</li>
			</ul>
			</div>
		</div>

		<div class="s_paragraph">
			<h4>Class-specific Changes</h4>
			<div class="s_body">
			<ul>
				<li><b>Scout</b>
				<ul>
					<li>Jump Pad
					<ul>
						<li>Jump pads are now team-oriented.</li>
						<li>Jump pads are now destroyable.</li>
						<li>Jump pads regenerate health quickly over time.</li>
					</ul>
					</li>
				</ul>
				</li>
				<li><b>Engineer</b>
				<ul>
					<li>The deploy delay for the spanner has been decreased (from 0.5 to 0.15)</li>
					<li>Sentry Gun
					<ul>
						<li>Bullet push increased from 4 to 7</li>
						<li>Ground push multiplier increased from 7 to 8 for level 1</li>
						<li>Ground push multiplier increased from 4 to 7 for levels 2 and 3</li>
					</ul>
					</li>
				</ul>
				</li>
				<li><b>Medic</b>
				<ul>
					<li>The Super Nailgun has a clip of 30 nails</li>
					<li>Medkit does 20 melee damage (up from 9)</li>
					<li>Infection reworked:
					<ul>
						<li>Infection no longer kills you. (It can only keep you at 1 hp)</li>
						<li>Infection lasts a finite amount of time.</li>
						<li>If you survive the infection, you regenerate most the infection damage</li>
					</ul>
					</li>
				</ul>
				</li>
				<li><b>Demoman</b>
				<ul>
					<li>Blue pipes now only do full damage on direct hits.</li>
				</ul>
				</li>
				<li><b>Soldier</b>
				<ul>
					<li>Soldier's nail grenade has been replaced with a laser grenade.</li>
					<li>Rocket splash radius decreased from 115 to 108</li>
				</ul>
				</li>
				<li><b>HWGuy</b>
				<ul>
					<li>HWGuy now has a secondary attack, the Overpressure, that pushes enemies away.</li>
					<li>HWGuy now has a secondary grenade, the Slowfield, that slows enemies inside of it.</li>
				</ul>
				</li>
			</ul>
			</div>
		</div>

		<div class="s_paragraph">
			<h4>Map changes</h4>
			<div class="s_body">
			<ul>
				<li>ff_training: Try this new map and game mode to practice the skills you'll need to own at FF.
				<ul><li>Huge thanks to Bully for recording the voiceover for training</li></ul>
				</li>
				<li>ff_warpath: This classic command point map has been released for Fortress Forever!</li>
				<li>ff_palermo: Several small balance and graphical changes. New HDR sky and sunlight values.</li>
				<li>New scoring system in place for palermo and cornfield: Every capture point has a time limit of 2 minutes before the teams reset. Capping more quickly nets the attackers more points, while defenders don't score any points. Both teams get an equal number of chances attacking before the map ends.</li>
				<li>ff_crossover: Fixed bug where flames on players were invisible. Location indicators are back. Snowfall is back. Water looks nicer.</li>
				<li>ff_dustbowl: 3D sky scenery has been restored.</li>
				<li>ff_bases: HDR lighting and a few sound and visual fixes.</li>
			</ul>
			</div>
		</div>
		<div class="s_paragraph">
			<h4>Lua changes</h4>
			<div class="s_body">
			<ul>
				<li>New trigger_ff_clip system
				<ul>
					<li>See <a href="http://www.fortress-forever.com/?a=devj#222" title="An explanation of the new trigger_ff_clip system">this dev journal</a></li>
				</ul>
				</li>
				<li>Added a lua-driven menu system
				<ul>
					<li>Callbacks:</li>
					<li>player_onmenuselect( player, menu_name, selection )</li>
					<li>menu_onexpire( menu_name, num_players_shown_to )</li>
					<li>Global functions:</li>
					<li>ShowMenuToPlayer( player, menu_name )</li>
					<li>ShowMenuToTeam( team_id, menu_name )</li>
					<li>ShowMenu( menu_name )</li>
					<li>CreateMenu( menu_name )</li>
					<li>CreateMenu( menu_name, title )</li>
					<li>CreateMenu( menu_name, display_time )</li>
					<li>CreateMenu( menu_name, title, display_time )</li>
					<li>DestroyMenu( menu_name )</li>
					<li>SetMenuTitle( menu_name, title )</li>
					<li>AddMenuOption( menu_name, slot (0-9), option_text )</li>
					<li>RemoveMenuOption( menu_name, slot (0-9) )</li>
				</ul>
				</li>
				<li>Added a timer manager
				<ul>
					<li>Added lua functions:</li>
					<li>AddTimer( timername, startvalue, increment )</li>
					<li>RemoveTimer( timername )</li>
					<li>GetTimerTime( timername )</li>
					<li>AddHudTimer( player, huditemname, timername, x, y )</li>
					<li>AddHudTimer( player, huditemname, timername, x, y, align )</li>
					<li>AddHudTimer( player, huditemname, timername, x, y, alignx, aligny )</li>
					<li>AddHudTimerToTeam( team, huditemname, timername, x, y )</li>
					<li>AddHudTimerToTeam( team, huditemname, timername, x, y, align )</li>
					<li>AddHudTimerToTeam( team, huditemname, timername, x, y, alignx, aligny )</li>
					<li>AddHudTimerToAll( huditemname, timername, x, y )</li>
					<li>AddHudTimerToAll( huditemname, timername, x, y, align )</li>
					<li>AddHudTimerToAll( huditemname, timername, x, y, alignx, aligny )</li>
				</ul>
				</li>
				<li>Default.lua now loads when a map lacks a map-specific lua file.</li>
				<li>Added player:IsFrozen()</li>
				<li>Added ObjectiveNotice(player, string)</li>
				<li>Added player:GetSpeed()</li>
				<li>Added ChatToAll(string) and ChatToPlayer(player,string)</li>
				<li>Added baseentity:Teleport(Vector neworigin, QAngle newangles, Vector newvelocity)</li>
				<li>Added baseentity:GetOwner(), returns an entity</li>
				<li>Fixed player_onchat() callback being repeated for every client in the server</li>
				<li>ApplyTo...() functions no longer skip spectators.</li>
				<li>trigger_ff_clip now works properly.</li>
				<li>Changed old player_connected( playername, address, entindex ) to player_canconnect( playername, address, entindex )
				<ul>
					<li>If this function returns false, the player is rejected from joining the server</li>
				</ul>
				</li>
				<li>Added player_connected( player ) that gets called when the player actually connects and exists in the server</li>
				<li>Fixed player_onchat() lua callback being repeated for every client in the server for each message</li>
				<li>Made the return of player_onchat() control whether or not the chat message gets sent</li>
				<li>Fixed trigger onendtouch() getting called twice for each entity</li>
				<li>Made the "ff_restartround" game event get triggered earlier in the reset so that Lua-related things can react before startup() gets called and players respawn (this fixes Lua HUD elements bugging out from ff_restartround or prematch ending)</li>
			</ul>
			</div>
		</div>
	</div>
</div>
<?
}
elseif ($patch == "2.41") {
?>

<div class="c_table">
	<h3 class="no-margin">Patch 2.41</h3>
	<div class="t_subheader">Released February 2010</div>
	<div class="t_body">
		<div class="s_paragraph">
			<h4>User Interface</h4>
			<div class="s_body">
			<ul>
				<li>Added hud_takesshots cvar (takes a screenshot at end-of-round if enabled) and added it to the Fortress Options menu (disabled by default)</li>
			</ul>
			</div>
		</div>

		<div class="s_paragraph">
			<h4>Generic / Misc Stuff</h4>
			<div class="s_body">
			<ul>
				<li>Various network optimizations</li>
				<li>Any class can see enemy health on crosshairinfo now (previously only medics could)</li>
				<li>Grenade throwspeed changed to 660 down from 700 (2.3 value was 630)</li>
				<li>Sharking friction lowered to 1 (down from 4)</li>
				<li>Client jump sound volume decreased by half and given its own soundscript definition</li>
				<li>Increased flag bounding box slightly (from basic box +8 to basic box +12; 2.3 value was +24)</li>
			</ul>
			</div>
		</div>

		<div class="s_paragraph">
			<h4>Visuals</h4>
			<div class="s_body">
			<ul>
				<li>New, less obscuring conc explosion effect
				<ul>
					<li>Added cvar to switch back to the old effect (cl_conc_refract) and put it in Fortress Options</li>
				</ul>
				</li>
				<li>Tweaked chat colors for a bit better visibility.</li>
				<li>More difference in grenade timer alpha when you throw the grenade, compared to still having it primed</li>
			</ul>
			</div>
		</div>

		<div class="s_paragraph">
			<h4>Bug Fixes</h4>
			<div class="s_body">
			<ul>
				<li>ShowMenu now works properly</li>
				<li>Fixed security messages, sounds and icons on base_shutdown maps</li>
				<li>Fixed escape door messages, sounds and icons on base_hunted maps</li>
				<li>Fixed being able to use the security button while dead on base_shutdown maps</li>
				<li>Spy/engi menu click underwater fixed</li>
				<li>Fixed single shotgun reload sound (thanks gibz)</li>
				<li>Fixed CurrentClass material proxy (used to be incorrectly named CurrentTeam)</li>
				<li>Fixed chat spamming using #ff_&lt;msg&gt;</li>
				<li>Chat now displays properly in clients console. Instead of showing as #ff_&lt;msg&gt; it will show the actual sentence. Color codes no longer display either for easy readability</li>
				<li>Fixed losing control of player when jumping in water</li>
				<li>Fixed HUD items getting stuck on screen after spawning</li>
				<li>Fixed sentries locking on to ghost (unbuilt) buildables</li>
				<li>Fixed server crash in SG code</li>
			</ul>
			</div>
		</div>

		<div class="s_paragraph">
			<h4>Class-specific Changes</h4>
			<div class="s_body">
			<ul>
				<li><b>Engineer</b>
				<ul>
					<li>Engineer starts with 1 EMP (down from 2), and has a max of 2 (down from 4)</li>
					<li>Reduced the size of the explosion from bags when hit by EMPs (to compensate for increased ammo count in the normalized death bags)</li>
				</ul>
				</li>
				<li><b>All Classes</b>
				<ul>
					<li>All classes drop the same amount of ammo when they die (30 cells, 100 shells, 100 nails, 20 rockets)</li>
				</ul>
				</li>
			</ul>
			</div>
		</div>

		<div class="s_paragraph">
			<h4>Map changes</h4>
			<div class="s_body">
			<ul>
				<li><b>Roasted</b>
				<ul>
					<li>New CTF map</li>
				</ul>
				</li>
				<li><b>Bases</b>
				<ul>
					<li>New teleporter model in spawns.</li>
					<li>Lift changed to a real lift instead of a pusher.</li>
					<li>Mid-ramp area near flagroom opened up into courtyard.</li>
					<li>Concing access into balcony made more forgiving.</li>
					<li>Base entrance opened up slightly to reduce spamability.</li>
					<li>Removed clip brushes at the battlements for sniper access.</li>
					<li>Added alcove and lowered lighting at the ladder to battlements.</li>
					<li>Added clip brushes either side of bridge to stop it messing up bunny hop or unintentionally double jumping.</li>
					<li>Added clip brushes on bottom of flagroom ramp so that people can wall strafe again.</li>
				</ul>
				</li>
				<li><b>Openfire</b>
				<ul>
					<li>Texturing and lighting improvements.</li>
					<li>New teleporter model in spawns.</li>
					<li>Scout, medic, spy and sniper always spawn balcony. Other classes always spawn flagroom.</li>
					<li>Flagroom bag moved to bottom of steps to make it more obvious.</li>
					<li>Flagroom bag timer reduced from 15s to 8s, and metal increased to 130.</li>
					<li>Lift crushes people under it.</li>
					<li>Few minor bugfixes.</li>
				</ul>
				</li>
				<li><b>Schtop</b>
				<ul>
					<li>Flagroom bag timer reduced from 10s to 8s.</li>
				</ul>
				</li>
				<li><b>Destroy</b>
				<ul>
					<li>Top ramp bag timer reduced from 20s to 15s.</li>
				</ul>
				</li>
			</ul>
			</div>
		</div>
		<div class="s_paragraph">
			<h4>Lua changes</h4>
			<div class="s_body">
			<ul>
				<li>Added SetGameDescription( name )
				<ul>
					<li>Changes what appears in the game column of the server browser (it is appended to "FF ")</li>
					<li>For use in startup()</li>
				</ul>
				</li>
				<li>Added callback: player_onchat( player, chatstring )</li>
				<li>Fixed a typo, SetFriction was actually using GetFriction</li>
				<li>Added lua functions
				<ul>
					<li>player:IsGrenade1Primed()</li>
					<li>player:IsGrenade2Primed()</li>
					<li>player:IsGrenadePrimed()</li>
					<li>player:GetAmmoInClip()</li>
					<li>player:GetAmmoInClip( weaponname )</li>
					<li>player:SetAmmoInClip( num )</li>
					<li>player:SetAmmoInClip( weaponname, num )</li>
					<li>player:GetAmmoCount( ammotype )</li>
					<li>HasGameStarted() (returns false if still in prematch)</li>
				</ul>
				</li>
				<li>Pipes now trigger :onexplode()</li>
				<li>HudText can parse %command% strings to show the client's bound key for that command (example: %+attack% would translate to MOUSE1 for someone that has MOUSE1 bound as +attack)</li>
			</ul>
			</div>
		</div>
	</div>
</div>

<?

}
elseif ($patch == "2.4") {

?>

<div class="c_table">
	<h3 class="no-margin">Patch 2.4</h3>
	<div class="t_subheader">Released September 2009</div>
	<div class="t_body">
		<div class="s_paragraph">
			<h4>User Interface</h4>
			<div class="s_body">
			<ul>
				<li>On-screen messages are now colour-coded for better visibility
				<ul>
					<li>Green messages for us taking/capping their flag/ball
					<li>Yellow messages for any flag/ball being dropped or returned
					<li>Red messages for enemy taking your flag/ball or capping.</li></li>
				</ul>
				</li>
				<li>Can now display more than 1 on-screen message
				<ul>
					<li>Number of messages shown on the screen at a time controlled by cvar hud_messages</li>
				</ul>
				</li>
				<li>Added deathnotice icons
				<ul>
					<li>Unique per-level-SG icons</li>
					<li>Unique per-level-SG det icons</li>
					<li>Unique per-level burn icons</li>
					<li>Backstab icon</li>
					<li>New IC icon to match the model</li>
				</ul>
				</li>
				<li>Ammo type shown next to the weapon icon in the bottom right</li>
				<li>New objective icon glyphs</li>
				<li>New flag carried icons</li>
				<li>Added border to all buildable icons</li>
				<li>When you get an increase of health/armor, it is shown on the HUD</li>
				<li>Level specific SG icons on the engi's hud</li>
				<li>Added a hit indicator in the form of a customizable crosshair that shows up after you do damage</li>
				<li>Changed cl_teamcolouredhud foreground color to default rather than teamcoloured (can see health/armor icons now)</li>
				<li>hud_speedometer can now be colorized using hud_speedometer_color (0 for non-colored, 1 for abrupt color changes, 2 for smooth color changes)</li>
				<li>Added dropshadow to location text</li>
				<li>You now get a status icon when you're locked-onto by an SG</li>
				<li>New, better CTF flaginfo:
				<ul>
					<li>Now shows the name of who has your flag</li>
					<li>Now counts down time until flag returns</li>
					<li>Now shows location of dropped flags</li>
					<li>Flaginfo status icons fixed (sometimes they were displaying the wrong icon)</li>
				</ul>
				</li>
				<li>Status of grellow pipes, detpacks, and jump pads are shown on the HUD</li>
			</ul>
			</div>
		</div>

		<div class="s_paragraph">
			<h4>Generic / Misc Stuff</h4>
			<div class="s_body">
			<ul>
				<li>Getting damaged slows you down if you're above runspeed
				<ul>
					<li>The slow is proportional to damage taken; if you take a little bit of damage you just get slowed a little bit. You can only be slowed to a minimum of your class' base runspeed.</li>
				</ul>
				</li>
				<li>Handheld concs don't push other players</li>
				<li>You can now hold jump to bunnyhop rather than having to let go and press between each jump
				<ul>
					<li>You can disable this, and use the old method using cl_jumpqueue 1</li>
				</ul>
				</li>
				<li>sv_friction up from 4 to 5</li>
				<li>Reduced flag bounding box (from basic box +24 to basic box +8)</li>
				<li>Added logging for sentry and dispenser sabotaging</li>
				<li>Nail speed reduced to 50% of old speed</li>
				<li>Super shotgun reload speed raised, 0.6 -> 0.5 seconds to move into reload position, then 0.4 -> 0.35 seconds to reload each shell</li>
				<li>Single shotgun reload speed raised, 0.4 -> 0.25 seconds to reload each shell.</li>
				<li>Grenade throwspeed upped to 700 from 630</li>
				<li>Server tickrate defaulted to 66 from 33</li>
				<li>cl_cmdrate and cl_updaterate defaulted to 66 from 33</li>
				<li>New announcer sounds</li>
				<li>New jump sounds</li>
			</ul>
			</div>
		</div>

		<div class="s_paragraph">
			<h4>Visuals</h4>
			<div class="s_body">
			<ul>
				<li>New flag textures with speed highlighting</li>
				<li>All worldmodels/projectiles have a minimum light level</li>
				<li>Brighter blue and grellow demoman pipe textures</li>
				<li>Brighter nail texture</li>
				<li>Variable size flames functionality. Burn level 1 is now smaller flames than 2 and 3</li>
			</ul>
			</div>
		</div>

		<div class="s_paragraph">
			<h4>Bug Fixes</h4>
			<div class="s_body">
			<ul>
				<li>Jump pad build status icon is now a jump pad rather than a detpack</li>
				<li>Spectator names now work correctly</li>
				<li>Mapguide / Flythrough menu no longer appears whilst watching HLTV demos</li>
				<li>"View Flythrough" button now views the flythrough rather than showing a menu</li>
				<li>Fixed team coloured HUD turning white sometimes</li>
				<li>Engineer displays the nail symbol when he picks up nails, rather than cells</li>
				<li>Railgun now correctly displays nails as its ammo type</li>
				<li>Calling for ammo (ammome) now works</li>
				<li>Single shotgun reload end anim fixed</li>
				<li>Fixed SG constant locking/delocking at certain odd angles</li>
				<li>Fixed SG looking up when you're right below it</li>
				<li>Fixed on-boot console errors:
				<ul>
					<li>Parent cvar in server.dll not allowed (conc_ragdoll_push)</li>
					<li>Parent cvar in client.dll not allowed (ffdev_target_speed_min)</li>
					<li>Parent cvar in server.dll not allowed (dump_deletes_flush)</li>
					<li>Parent cvar in server.dll not allowed (ffdev_disableentitydecals)</li>
				</ul>
				</li>
				<li>sentrygun_upgraded log message was missing a space</li>
			</ul>
			</div>
		</div>

		<div class="s_paragraph">
			<h4>Class-specific Changes</h4>
			<div class="s_body">
			<ul>
				<li><b>Medic:</b>
				<ul>
					<li>Made dropped health packs heal by a maximum of 15 hp each</li>
				</ul>
				</li>
				<li><b>Pyro:</b>
				<ul>
					<li>Flamethrower range reduced by 1/6th (384 back to 320)</li>
				</ul>
				</li>
				<li><b>Sniper:</b>
				<ul>
					<li>Legshot duration reduced from 10s to 5s</li>
				</ul>
				</li>
				<li><b>HWGuy:</b>
				<ul>
					<li>Mirv and mirvlet damage reduced to same as frags (180 to 145)</li>
				</ul>
				</li>
				<li><b>Demoman:</b>
				<ul>
					<li>Yellow pipe radius reduced from 135 to 130</li>
					<li>Added detpipes demoman command - can now bind keys to det pipes and do other things aswell / more scripting flexibility (rather than having to worry about +attack2 and -attack2)</li>
					<li>Mirv and mirvlet damage reduced to same as frags (180 to 145)</li>
				</ul>
				</li>
				<li><b>Spy:</b>
				<ul>
					<li>Gas grenades have been removed.</li>
					<li>Added smartcloak spy command - will loud cloak if you're moving and silent cloak if you're not
					<ul>
						<li>Old cloak + silent cloak removed from the menu, replaced with a single smartcloak command. A quick right click now defaults to smartcloak.</li>
						<li>cloak and silent cloak old commands are still available from the console / binds / scripts for those who want them.</li>
					</ul>
					</li>
					<li>HUD now shows what weapon you look like you're holding when disguised.</li>
					<li>Sabotaged items no longer have strange behaviour before the sabotage is activated.
					<ul>
						<li>Quietly sabotaged SG no longer fires slightly inaccurately</li>
						<li>Quietly sabotaged dispenser no longer reduces armor class of teammates that touch it</li>
						<li>Quietly sabotaged dispenser no longer skips the "enemies are using your dispenser" message, and displays it as normal</li>
					</ul>
					</li>
				</ul>
				</li>
				<li><b>Engineer's SG:</b>
				<ul>
					<li>Lockon time decreased from 0.5s to 0.2s</li>
					<li>Bullet pushforce doubled</li>
					<li>Bullet damage increased by about 17%</li>
					<li>Level 2 fire rate reduced by around 25%</li>
					<li>Turn speed increased by about 5%</li>
					<li>Stays aiming at where target was last seen for 1 second if a target was lost not killed</li>
					<li>Angular acceleration capped (it now behaves like a real object with a mass)</li>
					<li>Lowest pitch-down angle raised from -90 to -85 degrees</li>
					<li>Idle scan range reduced from +-40 to +-30 degrees</li>
					<li>Level 1 health increased by 10%</li>
				</ul>
				</li>
				<li><b>Engineer (other)</b>
				<ul>
					<li>Dispensers now eat bags that touch them, with an appropriate sound ;)</li>
				</ul>
				</li>
			</ul>
			</div>
		</div>

		<div class="s_paragraph">
			<h4>Map changes</h4>
			<div class="s_body">
			<ul>
				<li><b>Napoli</b>
				<ul>
					<li>New Invade/Defend map</li>
				</ul>
				</li>
				<li><b>Ksour</b>
				<ul>
					<li>New Invade/Defend map</li>
				</ul>
				</li>
				<li><b>Genesis</b>
				<ul>
					<li>New Attack/Defend the Zone map</li>
				</ul>
				</li>
				<li><b>Fusion</b>
				<ul>
					<li>New Invade/Defend the Zone map</li>
				</ul>
				</li>
				<li><b>Bases</b>
				<ul>
					<li>Major rebuild for gameplay, optimisation and visual improvements (loads of stuff!)</li>
					<li>Defence classes spawn lift side, offence classes spawn other side</li>
					<li>Bag resources redesigned (fr:30h/30a/130c/full-ammo/20s; rr-walkway/top-lift/lower:50h/50a/130c/full-ammo/1gren1/15s)</li>
				</ul>
				</li>
				<li><b>Dustbowl</b>
				<ul>
					<li>Made all capture points into bucket caps</li>
					<li>Changed CP3 start area to be more like TFC, added a bag near the gate</li>
					<li>Opened the left-side room's window to be more SG-friendly</li>
					<li>Added more countdown messages, etc</li>
					<li>Lowered run speed of flag carrier</li>
					<li>Flags moved to middle of routes out</li>
					<li>Visual improvements and fixes</li>
				</ul>
				</li>
				<li><b>2Fort</b>
				<ul>
					<li>Texturing fixes and tweaks</li>
					<li>Engy spawns at top spiral respawn, other defence classes spawn at far respawn, offence classes and snipers still spawn randomly at both</li>
					<li>All door triggers bigger so you can bhop through</li>
					<li>Sides of hole dropdown extended to obscure view of flag room from in hole</li>
					<li>Alarm bell added in basement that rings when someone comes via hole</li>
					<li>Bag resources redesigned (respawns:full-h-a-c-ammo/2s/team-only; resup-grenpacks:2gren1/2gren2/15s/team-only; btm-lift/mid-sp:50h/50a/130c/full-ammo/20s/team-only; water-exit:50h/50a/80c/full-ammo/30s/any-team)</li>
				</ul>
				</li>
				<li><b>Schtop</b>
				<ul>
					<li>Security timer reduced to 40 seconds from 60</li>
					<li>Improved bag by security (130 cells up from 100, full ammo, and 10 seconds respawn time down from 30)</li>
					<li>Engy spawns at security side respawn</li>
				</ul>
				</li>
				<li><b>Monkey</b>
				<ul>
					<li>Visual improvements and fixes</li>
					<li>Added ceiling to bottom of arch around back of flag room</li>
					<li>Defence classes spawn bottom, offence classes spawn top, demomen still spawn randomly</li>
					<li>Removed spawn turrets and put enemy kill triggers on resup doors instead</li>
					<li>No-annoyances in resups</li>
					<li>All door triggers bigger so you can bhop through</li>
					<li>Bags in resups give full ammo</li>
					<li>Fixed location bugs</li>
				</ul>
				</li>
				<li><b>Destroy</b>
				<ul>
					<li>Much more user-friendly airlift</li>
					<li>Added locations</li>
					<li>Ladder guides only block players</li>
					<li>Fixed cubemap bugs</li>
				</ul>
				</li>
				<li><b>Shutdown2</b>
				<ul>
					<li>Fixed lift sound</li>
					<li>No-annoyances in resups</li>
					<li>All door triggers bigger so you can bhop through</li>
					<li>Enemy kill triggers on resup doors</li>
				</ul>
				</li>
				<li><b>Dropdown</b>
				<ul>
					<li>Fixed a bug regarding generator fires</li>
					<li>Fixed a visual issue resulting from detting the generator during prematch</li>
				</ul>
				</li>
				<li><b>Aardvark</b>
				<ul>
					<li>Made it really easy for server admins to change the map's sniper limit if they want</li>
				</ul>
				</li>
			</ul>
			</div>
		</div>
		<div class="s_paragraph">
			<h4>Lua changes</h4>
			<div class="s_body">
			<ul>
				<li>Added player:ReloadClips()</li>
				<li>Message duration/color can now be controlled
				<ul>
					<li>BroadCastMessage( message, duration )</li>
					<li>BroadCastMessage( "message", duration, colorid e.g. Color.kRed )</li>
					<li>BroadCastMessage( "message", duration, colorstring e.g. "255 255 255" )</li>
					<li>BroadCastMessageToPlayer() equivalents</li>
					<li>SmartMessage( player, "playermessage", "teammessage", "otherteamsmessage", colorid, colorid, colorid )</li>
					<li>SmartMessage( player, "playermessage", "teammessage", "otherteamsmessage", colorid, colorid, colorstring )</li>
					<li>SmartMessage( player, "playermessage", "teammessage", "otherteamsmessage", colorid, colorstring, colorid )</li>
					<li>SmartMessage( player, "playermessage", "teammessage", "otherteamsmessage", colorstring, colorid, colorid )</li>
					<li>SmartMessage( player, "playermessage", "teammessage", "otherteamsmessage", colorid, colorstring, colorstring )</li>
					<li>SmartMessage( player, "playermessage", "teammessage", "otherteamsmessage", colorstring, colorid, colorstring )</li>
					<li>SmartMessage( player, "playermessage", "teammessage", "otherteamsmessage", colorstring, colorstring, colorid )</li>
					<li>SmartMessage( player, "playermessage", "teammessage", "otherteamsmessage", colorstring, colorstring, colorstring )</li>
					<li>SmartTeamMessage( team, "teammessage", "otherteamsmessage", colorid, colorid )</li>
					<li>SmartTeamMessage( team, "teammessage", "otherteamsmessage", colorid, colorstring )</li>
					<li>SmartTeamMessage( team, "teammessage", "otherteamsmessage", colorstring, colorid )</li>
					<li>SmartTeamMessage( team, "teammessage", "otherteamsmessage", colorstring, colorstring )</li>
					<li>Added: Color.kDefault, Color.kBlue, Color.kRed, Color.kYellow, Color.kGreen, Color.kWhite, Color.kBlack, Color.kOrange, Color.kPink, Color.kPurple, Color.kGrey, Color.kInvalid</li>
				</ul>
				</li>
				<li>SmartSpeak(player, "CTF_YOUGOTFLAG", "CTF_GOTFLAG", "CTF_LOSTFLAG")" replaced by "RandomFlagTouchSpeak( player )" to randomly play 1 of 4 flag touched announcer sounds</li>
				<li>Fixed Lua support of all non-ff-specific entity inputs (things like func_breakable:onbreak() work now)</li>
			</ul>
			</div>
		</div>
	</div>
</div>

<?
}

elseif ($patch == "2.3") {

?>

<div class="c_table">
	<h3 class="no-margin">Patch 2.3</h3>
	<div class="t_subheader">Released February 2009</div>
	<div class="t_body">
		<div class="s_paragraph">
			<h4>User Interface</h4>
			<div class="s_body">
			<ul>
				<li>In the team selection menu, the team numbers (AKA hotkeys) are drawn before the team names</li>
			</ul>
			</div>
		</div>

		<div class="s_paragraph">
			<h4>Generic / Misc Stuff</h4>
			<div class="s_body">
			<ul>
				<li>Altered the version checker to allow us to release future FF updates that don't require new client/server code binaries</li>
				<li>Reduced conc explosion sound attenuation</li>
			</ul>
			</div>
		</div>

		<div class="s_paragraph">
			<h4>Visuals</h4>
			<div class="s_body">
			<ul>
				<li>Made HW tracer frequency different between client (1 in 2 shots for your ac) and server (1 in 8 shots for another player's ac)</li>
				<li>Fixed SG muzzle flash not drawing</li>
				<li>Added dynamic light to SG muzzle flash</li>
			</ul>
			</div>
		</div>

		<div class="s_paragraph">
			<h4>Bug Fixes</h4>
			<div class="s_body">
			<ul>
				<li>Fixed player MaxSpeed function always returning 0 for disconnected players (was specifically an issue in CP maps)</li>
				<li>More attemps at fixing a rare, stupid scoreboard-related crash</li>
				<li>Fixed crash related to players disconnecting while in a CP zone (base_cp)</li>
			</ul>
			</div>
		</div>

		<div class="s_paragraph">
			<h4>Class-specific Changes</h4>
			<div class="s_body">
			<ul>
				<li><b>Medic:</b>
				<ul>
					<li>Made dropped health packs only heal to 100%</li>
				</ul>
				</li>
				<li><b>Engineer:</b>
				<ul>
					<li>Made maliciously sabotaged sentries not be spotted by other SGs for 2.5 seconds</li>
				</ul>
				</li>
			</ul>
			</div>
		</div>

		<div class="s_paragraph">
			<h4>Map changes</h4>
			<div class="s_body">
			<ul>
				<li><b>Impact</b>
				<ul>
					<li>Made a more informative hud</li>
					<li>Added timed defensive points</li>
					<li>Added a doorway to the back corner of the third floor</li>
					<li>Made secondary gate open 1 minute after the main gate opens</li>
					<li>Locked mp_timelimit once the round times are determined</li>
					<li>Disabled D scouts</li>
				</ul>
				</li>
				<li><b>Waterpolo</b>
				<ul>
					<li>Optimized objective icon updates</li>
					<li>Made everyone (other than the ball carrier) always see the ball as their objective</li>
					<li>Fixed bug where goalies weren't always respawned when inside the enemy zone</li>
					<li>Moved goal objective locations into the goals</li>
				</ul>
				</li>
				<li><b>Schtop</b>
				<ul>
					<li>Fixed security getting broken and out of sync</li>
				</ul>
				</li> 
				<li><b>Aardvark</b>
				<ul>
					<li>Security timer shorter</li>
					<li>Fixed shadows</li>
					<li>Bags redone</li>
					<li>Sniper limit 1</li>
				</ul>
				</li>
				<li><b>Destroy</b>
				<ul>
					<li>Labeled security buttons</li>
					<li>Fixed shadows</li>
					<li>Put in door triggers, so players can now bhop through</li>
				</ul>
				</li>
				<li><b>Openfire</b>
				<ul>
					<li>Shadows fixed</li>
				</ul>
				</li>
				<li><b>Dustbowl</b>
				<ul>
					<li>Made door triggers open their doors with OnTrigger instead of OnStartTouch, so they don't close in players' faces</li>
					<li>Increased grenade bag timers from 5 to 15 seconds.</li>
				</ul>
				</li>
				<li><b>Monkey</b>
				<ul>
					<li>Made bags in resupplies give 200 metal instead of 90</li>
					<li>Fixed door triggers</li>
					<li>Aligned a few textures</li>
				</ul>
				</li>
				<li><b>Shutdown2</b>
				<ul>
					<li>Made the top respawn room a resupply only</li>
				</ul>
				</li>
				<li><b>All ID Maps</b>
				<ul>
					<li>Made a more informative hud</li>
				</ul>
				</li>
				<li><b>All AvD Maps</b>
				<ul>
					<li>Made a more informative hud</li>
					<li>Locked mp_timelimit to 24</li>
					<li>Fixed scoring bugs, so now the winning team always wins with 120 points</li>
				</ul>
				</li>
			</ul>
			</div>
		</div>
		<div class="s_paragraph">
			<h4>Lua changes</h4>
			<div class="s_body">
			<ul>
				<li>Added set_cvar( cvarname, value ) function that only calls SetConvar if the cvar isn't already set to value</li>
				<li>Added lowercase c "Broadcast" functions, because uppercase C "BroadCast" functions are lame</li>
				<li>base_teamplay: Made resupply bags float by default</li>
			</ul>
			</div>
		</div>
	</div>
</div>

<?
}

if ($patch == "2.2") {

?>

<div class="c_table">
	<h3 class="no-margin">Patch 2.2</h3>
	<div class="t_subheader">Released January 2009</div>
	<div class="t_body">
		<div class="s_paragraph">
			<h4>User Interface</h4>
			<div class="s_body">
			<ul>
				<li>Sound options added for the kill beep</li>
			</ul>
			</div>
		</div>

		<div class="s_paragraph">
			<h4>Generic / Misc Stuff</h4>
			<div class="s_body">
			<ul>
				<li>Massive server logging upgrades/changes</li>
				<li>Beep sound plays when you kill someone (optional client-side)</li>
				<li>Neutral flag model added</li>
				<li>Gibs go SQUISH and PLOP instead of CLUNK</li>
			</ul>
			</div>
		</div>

		<div class="s_paragraph">
			<h4>Visuals</h4>
			<div class="s_body">
			<ul>
				<li>HW AC now shows tracers for 1 in 2 bullets rather than 1 in 4</li>
				<li>Smaller, less obscuring flamethrower effect</li>
				<li>Ragdolls now inherit a large force from fatal non-explosive shots</li>
				<li>Sped up the conc explosion effect</li>
				<li>Frag grenade no longer has the pin still attached when you throw it</li>
				<li>Fixed non-blue engineers with glow-in-the-dark accessories</li>
				<li>Pilot light added to the flamethrower</li>
			</ul>
			</div>
		</div>

		<div class="s_paragraph">
			<h4>Bug Fixes</h4>
			<div class="s_body">
			<ul>
				<li>Fixed various server crashes</li>
				<li>Fixed bug where if a medic heals a player > 100%, that player picking up a resupply bag "hurts" them</li>
				<li>Fixed jumppad not building properly on +attack2</li>
				<li>Fixed flaginfo</li>
			</ul>
			</div>
		</div>

		<div class="s_paragraph">
			<h4>Class-specific Changes</h4>
			<div class="s_body">
			<ul>
				<li><b>Scout:</b>
				<ul>
					<li>Scouts now take half fall damage (up from zero fall damage)</li>
				</ul>
				</li>
				<li><b>Sniper:</b>
				<ul>
					<li>AR dmg down from 8 -> 7</li>
					<li>AR cone down from 0.09 to 0.07</li>
					<li>Legshot time reduced from 30 sec to 10 sec</li>
				</ul>
				</li>
				<li><b>Soldier:</b>
				<ul>
					<li>Increased RPG re-fire rate from 0.65 to 0.7</li>
				</ul>
				</li>
				<li><b>Demoman:</b>
				<ul>
					<li>Reduced starting mirvs from 2 to 1</li>
				</ul>
				</li>
				<li><b>Medic:</b>
				<ul>
					<li>No changes</li>
				</ul>
				</li>
				<li><b>HWGuy:</b>
				<ul>
					<li>AC has dual-cone system, one cone at 0.06, one at 0.12</li>
					<li>HW AC damage up from 6.5 to 8.2</li>
					<li>HW AC uses half ammo than before</li> 
					<li>AC has 200 ammo rather than 300</li> 
					<li>AC cooldown time reduced from 0.4 to 0.1 seconds</li> 
					<li>AC has a little bullet push</li>
				</ul>
				</li>
				<li><b>Pyro:</b>
				<ul>
					<li>IC damage down from 70 to 55</li>
				</ul>
				</li>
				<li><b>Spy:</b>
				<ul>
					<li>No changes</li>
				</ul>
				</li>
				<li><b>Engineer:</b>
				<ul>
					<li>SG's can now be built overhanging edges more</li>
				</ul>
				</li>
				<li><b>All Classes:</b>
				<ul>
					<li>Nailgun pushforce reduced</li>
				</ul>
				</li>
			</ul>
			</div>
		</div>

		<div class="s_paragraph">
			<h4>Map changes</h4>
			<div class="s_body">
			<ul>
				<li><b>Impact</b>
				<ul>
					<li>New map with a new gametype (!)</li>
				</ul>
				</li>
				<li><b>Palermo</b>
				<ul>
					<li>All new visuals/lighting</li>
					<li>Various layout changes, bug fixes</li>
					<li>HDR added</li>
				</ul>
				</li>
				<li><b>Vertigo</b>
				<ul>
					<li>Engineers and demomen limited to 2, removed defender detpacks</li>
					<li>Objective icon fixed</li>
				</ul>
				</li> 
				<li><b>Waterpolo</b>
				<ul>
					<li>Objective icons added</li>
				</ul>
				</li>
				<li><b>2fort</b>
				<ul>
					<li>"Cheap" water added in the yard</li>
					<li>Noannoyances added to spawns</li>
					<li>Can't grab gren bag through wall in ramp room anymore</li>
					<li>Spawn doors behave better </li>
				</ul>
				</li>
				<li><b>Schtop</b>
				<ul>
					<li>New map (capture the flag)</li>
				</ul>
				</li>
				<li><b>Destroy</b>
				<ul>
					<li>New map (capture the flag)</li>
				</ul>
				</li>
				<li><b>Aardvark</b>
				<ul>
					<li>Working security icons</li>
				</ul>
				</li>
				<li><b>Openfire</b>
				<ul>
					<li>Visual/lighting updates</li>
					<li>Working security icons</li>
					<li>Small resupply bag added in the flag room - 50/50 h/a every 15 seconds.</li>
				</ul>
				</li>
				<li><b>Monkey</b>
				<ul>
					<li>Improved ladders, new ramp on flag point</li>
				</ul>
				</li>
				<li><b>All Maps</b>
				<ul>
					<li>Players start with full health/armor/ammo by default unless map overrides it</li>
				</ul>
				</li>
			</ul>
			</div>
		</div>
	</div>
</div>

<?
}

elseif ($patch == "2.1") {

?>

<div class="c_table">
	<h3 class="no-margin">Patch 2.1</h3>
	<div class="t_subheader">Released September 2008</div>
	<div class="t_body">
		<div class="s_paragraph">
			<h4>User Interface</h4>
			<div class="s_body">
			<ul>
				<li>New main menu background</li>
			</ul>
			</div>
		</div>

		<div class="s_paragraph">
			<h4>Generic / Misc Stuff</h4>
			<div class="s_body">
			<ul>
				<li>"Skim cap" added
				<ul>
					<li>Skim cap set to 1.80 or 180%. The skim cap does not affect upward trimping.</li>
				</ul>
				</li>
				<li>Re-added grenade friction for all non-conc grenades</li>
				<li>Bunnyhop cap up to 1.40 from 1.20</li>
				<li>Added objective icons</li>
				<li>Spawn system made more random</li>
				<li>Made "can't spawn for X seconds" message show 2 decimal points</li>
				<li>Added ability to use custom map sentences via "maps\mapname_sentences.txt" file</li>
				<li>Various hint updates</li>
				<li>Updated maplist.txt to include new maps</li>
				<li>All maps now have loading screens</li>
				<li>Made spies get a message saying their sabotage is about to reset once there's about 6 seconds left</li>
				<li>Included source files of various maps (found in source\maps)</li>
				<li>Added another startup mp3: The Ecstasy of Gold (Acoustic Version) by John S</li>
			</ul>
			</div>
		</div>

		<div class="s_paragraph">
			<h4>Visuals</h4>
			<div class="s_body">
			<ul>
				<li>New IC model!</li>
				<li>Added shadows that only project downwards (can be turned off with sv_shadows)</li>
				<li>Added swimming animations</li>
				<li>Made teammates of a saboteur see team colored spy icons drawn above their sabotaged buildables</li>
				<li>Made sentries change skin to saboteur's team when maliciously sabotaged</li>
				<li>Messages now have dropshadow</li>
				<li>Added medkit first-person animations</li>
				<li>Added rocket dynamic light</li>
				<li>Made explosion dlight more orange</li>
				<li>Enabled dynamic lights by default. Use Fortress Options to disable</li>
				<li>Completely new single shotgun animations. </li>
				<li>Civilian is now team-colored and has shoe texture. </li>
				<li>New jump animation.</li>
				<li>Thrown/world medkits are now FF medkits, not HL2.</li>
				<li>Autorifle now has muzzle flash. </li>
				<li>Autorifle firing animation works correctly.</li>
				<li>Made disabled classes have their selection buttons disabled instead of not drawn</li>
				<li>Made railgun muzzle flash blue</li>
				<li>New rail effects</li>
				<li>Added cl_pipetrails cvar</li>
				<li>Added medkit animated screen texture</li>
				<li>Added ff_blunkka01 texture pack</li>
			</ul>
			</div>
		</div>

		<div class="s_paragraph">
			<h4>Bug Fixes</h4>
			<div class="s_body">
			<ul>
				<li>Fixed blue pipes not always detonating when they hit a player</li>
				<li>Added clamp to emp cell damage, so Pyros don't get wtfpwned</li>
				<li>Fixed emp-triggered ammopack explosion not dealing damage</li>
				<li>Fixed maliciously sabotaging a dispenser not counting as a kill</li>
				<li>Fixed sabotaged sg teamkill bugs (rockets, detonation, shooting other buildables, and more)</li>
				<li>Fixed spies disguised as civilians not having civilian weapons out</li>
				<li>Fixed detpack context menu disappearing too soon</li>
				<li>Made spectator hud not draw if cl_drawhud is 0</li>
				<li>Made messages not draw if either cl_drawhud or hud_messages are 0</li>
				<li>Added string for FF_FORTPOINTS_DEFUSEDETPACK</li>
				<li>Fixed "Build sentrygun" radial menu option being disallowed if dispenser was built</li>
				<li>Fixed wade sound looping bug when standing in water</li>
				<li>Fixed player list</li>
				<li>Fixed sabotaged sentries not being targeted by other sentries</li>
				<li>Fixed spy radial menu not resetting timed out sabotages</li>
				<li>Fixed not being able to close the stupid spectator menu</li>
				<li>Fixed not being able to disguise after prematch when you have the flag when prematch ends</li>
			</ul>
			</div>
		</div>

		<div class="s_paragraph">
			<h4>Class-specific Changes</h4>
			<div class="s_body">
			<ul>
				<li><b>Scout:</b>
				<ul>
					<li>Made the jumppad require +jump input</li>
					<li>Removed jumppad warmup time</li>
					<li>Reduced size of the jumppad's trigger bounds</li>
					<li>Jump pad forward push up to 1024 from 1000</li>
					<li>Jump pad vertical push up to 512 from 500</li>
				</ul>
				</li>
				<li><b>Sniper:</b>
				<ul>
					<li>Radiotag duration increased from 15 to 30 seconds. </li>
					<li>AR damage up from 5.5 to 8.</li>
					<li>Sniper rifle base damage up to 45 from 35</li>
					<li>Sniper rifle maximum damage up to 275 from 245</li>
					<li>Sniper rifle charge time down to 5 seconds from 7 seconds</li>
				</ul>
				</li>
				<li><b>Soldier:</b>
				<ul>
					<li>RPG damage radius decreased slightly (from 125 to 115).</li>
				</ul>
				</li>
				<li><b>Demoman:</b>
				<ul>
					<li>Pipe bomb damage radius decreased slightly (from 150 to 135).</li>
					<li>Blue pipe fuse time up to 1.3 seconds from 1.1 seconds.</li>
				</ul>
				</li>
				<li><b>Medic:</b>
				<ul>
					<li>Made the medic cell regen amount 5 instead of 3</li>
				</ul>
				</li>
				<li><b>HWGuy:</b>
				<ul>
					<li>New HW AC System! : Dynamic cone and rate of fire removed</li>
					<li>Clamp removed</li>
					<li>AC bulletdamage down to 6.5 from 12</li> 
					<li>AC spread set to .06 from (.05->.26)</li> 
					<li>AC cycletime set to .08 from (.05->.15)</li> 
				</ul>
				</li>
				<li><b>Pyro:</b>
				<ul>
					<li>Pyros spawn with 2 napalms instead of 4.</li>
				</ul>
				</li>
				<li><b>Spy:</b>
				<ul>
					<li>Spy is completely invisible when cloaked and standing still</li>
					<li>Spy is no longer shot at by SGs while cloaked (The SG emits a sonar beep when it detects a cloaked spy in its line-of-sight)</li>
					<li>Tranq cycle time lowered to 1.5 from 2.0</li>
					<li>Lowered sabotage timeout from 120 to 90 seconds</li>
				</ul>
				</li>
				<li><b>Engineer:</b>
				<ul>
					<li>Removed railgun overcharge damage and made all cool down times (except overcharge) 0.333 seconds</li>
					<li>Made the railgun only take 1 rail per charge as opposed to 1 at first and 2 at each charge (now it's just 3 total ammo lost after full charge shot instead of 5)</li>
					<li>Railgun overcharge gives 40 cells</li>
					<li>Railgun regenerates 1 rail every 4 seconds when it is being used</li>
					<li>The SG emits a sonar beep when it detects a cloaked spy in its line-of-sight.</li>
					<li>SG health has come down a small amount to 108% from 113% of TFC level(ish).</li>
					<li>SG bulletdamage down from 15 to 12</li>
					<li>SG air bulletpush reduced to 2 from 15</li>
					<li>SG rate of fire increased significantly</li>
					<li>SG build time reduced to 3 seconds from 5 seconds</li>
					<li>SG untarget range added, set to 10% further than lock-on range</li>
					<li>Dispenser starts with ammo in it</li>
					<li>Dispenser regenerates ammo and cells faster</li>
					<li>Dispenser dispenses ammo and cells much faster</li>
					<li>Made dispensers "eat" nearby dropped bags</li>
				</ul>
				</li>
				<li><b>Civilian:</b>
				<ul>
					<li>Raised umbrella damage from 18 to 30</li>
					<li>Finally added civilian.cfg to the FF installers</li>
				</ul>
				</li>
			</ul>
			</div>
		</div>

		<div class="s_paragraph">
			<h4>Map changes</h4>
			<div class="s_body">
			<ul>
				<li><b>2fort</b>
				<ul>
					<li>Added 2fort (!)</li>
				</ul>
				</li>
				<li><b>Monkey</b>
				<ul>
					<li>Massive performance increase</li>
					<li>HDR added</li>
					<li>Lower respawn grenade bag respawn time increased</li>
				</ul>
				</li>
				<li><b>Anticitizen</b>
				<ul>
					<li>Added anticitizen - Attack and Defend map</li>
				</ul>
				</li> 
				<li><b>Tiger</b>
				<ul>
					<li>Added tiger - control point map</li>
				</ul>
				</li>
				<li><b>Bases</b>
				<ul>
					<li>Added bases - CTF map</li>
				</ul>
				</li>
				<li><b>CZ2</b>
				<ul>
					<li>New scoring system - stand on the capture points to gain control of them</li>
					<li>Added locations</li>
				</ul>
				</li>
				<li><b>Hunted</b>
				<ul>
					<li>Huge performance increase (uses less resources)</li>
					<li>Added locations (lots of them)</li>
					<li>Bodyguards always know where the hunted is (through locations and the objective icon)</li>
					<li>Gave hunted quad damage instead of unagi damage (*69)</li>
					<li>Enabled hunted damage from sentries and dispensers</li>
					<li>Limited bodyguards to only having 1 pyro and demoman no longer allowed</li>
					<li>Scoring changed to 5 per assassination, 10 per escape</li>
					<li>Added hud door open/closed icons</li>
					<li>Made escape door buttons lock for 6.66 seconds after using</li>
					<li>Hole replaced with a vent, and vent room added</li>
					<li>Added "Fuel Room"</li>
					<li>Various other layout changes</li>
				</ul>
				</li>
				<li><b>Dustbowl</b>
				<ul>
					<li>Various bug fixes</li>
					<li>Minor FPS increases</li>
					<li>HDR added</li>
					<li>More cells in various packs, 200 cells on spawn again</li>
				</ul>
				</li>
				<li><b>Waterpolo</b>
				<ul>
					<li>Major performance increase</li>
					<li>Removed HDR</li>
					<li>Made goal triggers a little inset</li>
					<li>Ladders added to the sides of each team's base</li>
					<li>Increased ball throw speed/distance</li>
					<li>Raised ball return time from 10 seconds to 15</li>
					<li>Made goalies invincible when inside their team's locations, but weak (right now they take triple damage, but they also spawn with full health and armor now) outside them</li>
					<li>Goalies cannot go out-of-bounds or into the other team's locations</li>
				</ul>
				</li>
				<li><b>Pitfall</b>
				<ul>
					<li>Added ff_pitfall</li>
					<li>Major performance increase from old community version</li>
				</ul>
				</li>
				<li><b>Dropdown</b>
				<ul>
					<li>Added a route from water room to upper floor</li>
					<li>Added opacity changing windows in flag room</li>
					<li>Added fire and smoke effects when generator is detpacked</li>
					<li>Added a 60 seconds delay before generator can be repaired</li>
					<li>Lots of other smaller changes</li>
					<li>FPS increases and bug fixes </li>
				</ul>
				</li>
				<li><b>Epicenter</b>
				<ul>
					<li>First to 3 captures system fixed</li>
					<li>HUD icons for 3-cap system added</li>
					<li>Some mapping fixes/alterations </li>
				</ul>
				</li>
				<li><b>Cornfield</b>
				<ul>
					<li>Defenders spawns moved forward</li>
					<li>Various bug fixes/visual tweaks</li>
				</ul>
				</li>
				<li><b>All AvD (Dustbowl-style) maps</b>
				<ul>
					<li>Maps end after 24 mins</li>
					<li>Scoring fixed</li>
				</ul>
				</li>
			</ul>
			</div>
		</div>
		<div class="s_paragraph">
			<h4>Lua changes</h4>
			<div class="s_body">
			<ul>
				<li>Base_ad now works for all 4 teams instead of just red/blue</li>
				<li>Added grenade prime lua callbacks (player_onprimegren1 and player_onprimegren2)</li>
				<li>Added DisplayMessage(player, string) lua function (sends the message as a hint)</li>
				<li>Exposed player's MaxSpeed() function to lua</li>
				<li>Added SetVelocity lua function</li>
				<li>Exposed GetLocation and GetLocationTeam to lua</li>
				<li>Added alignment and ToTeam variations for AddHud functions</li>
				<li>Added RemoveHudItemFromTeam lua function</li>
			</ul>
			</div>
		</div>
	</div>
</div>

<?
}
elseif ($patch == "2.0") {

?>

<div class="c_table">
	<h3 class="no-margin">Patch 2.0</h3>
	<div class="t_subheader">Released 15 February 2008</div>
	<div class="t_body">
		<div class="s_paragraph">
			<h4>User Interface</h4>
			<div class="s_body">
			<ul>
				<li>Added a '''Fortress Options''' menu for many advanced options, including enabling/disabling many of the new features listed below.</li>
			</ul>
			</div>
		</div>

		<div class="s_paragraph">
			<h4>Generic / Misc Stuff</h4>
			<div class="s_body">
			<ul>
				<li>Walls no longer apply friction to grenades, concmaps should be possible now! </li>
				<li>Small auto-conc for HH concs when you dont jump</li>
				<li>Frag grenade damage up to 145 (patch 1.0 was 180, patch 1.11 was 126). Radius the same.</li>
				<li>Throwing the flag is now upwards slightly rather than skidding along the floor</li>
				<li>Re-added recoil for some weapons (e.g. IC)</li>
				<li>Suiciding no longer causes you to lose 100 fortress points</li>
				<li>Bunnyhop cap now 1.20 up from 1.10</li>
				<li>Flags now GLOW</li>
				<li>Better intermission scoreboard/player handling</li>
				<li>Made the currently held grenade timer bar more visible than the dropped ones</li>
				<li>pyro scream time only triggers once every 1.7 seconds now</li>
				<li>Added cl_reducedexplosions to help fps problems</li>
				<li>Added a cvar for ragdoll lifetime</li>
				<li>New assault cannon fire sound</li>
				<li>DX 8 and DX 9 levels selectable in Start Menu</li>
				<li>We now have a readme with many handy links at:
				 SourceMods\FortressForever\README\README.html</li>
				<li>New sprays! Sprays are selectable in the game options.  The path to import them is:
				 SourceMods\FortressForever\sprays</li>
				<li>NEW .cfg files!
				<ul>
					<li>For the 1.0 / 1.11 to 2.0 install:<br/>
					- You will now see a userconfig.cfg added to your cfg files!</li>
					<li>For the 2.0 FULL install:<br/>
					- New &lt;classname&gt;.cfg files and userconfig.cfg file! </li>
				</ul>
				</li>
			</ul>
			</div>
		</div>

		<div class="s_paragraph">
			<h4>Visuals</h4>
			<div class="s_body">
			<ul>
				<li>Grenades now have trails and halo's around them </li>
				<li>Blue and yellow pipes now have trails</li>
				<li>Player models have been tweaked to increase visibility</li>
				<li>Grenade models have been tweaked to increase visibility</li>
				<li>SG models have been tweaked to increase visibility</li>
				<li>SG now throws out sparks when it's below 50% health</li>
				<li>New IC model!</li>
				<li>No more ugly background for build timers</li>
				<li>New HUD security icons for shutdown style maps</li>
				<li>Shotgun muzzle flash more visible</li>
				<li>Many visuals now line up correctly in widescreen modes (damage indicators, Context menus etc)</li>
				<li>New EMP effect</li>
				<li>HUD health / armor no longer flashes red when you are hit. It'll only flash red when you are &lt; 25% health to prevent confusion. (instead it flashes white when hit)</li>
				<li>Grenade 2 timer up a bit so it's not so far down</li>
				<li>New explosion scorch decal which doesnt make your whole base black.</li>
				<li>'on fire' hud HUD redness reduced a lot</li>
				<li>Cvars for turning off targets + gren trails</li>
				<li>Demoman grenades hopefully dont bounce of people any more</li>
				<li>Readded interpolation for projectiles</li>
				<li>Put in a fix for grenade timers not showing up</li>
				<li>Teamcolour hud can now go back to normal again</li>
			</ul>
			</div>
		</div>

		<div class="s_paragraph">
			<h4>Bug Fixes</h4>
			<div class="s_body">
			<ul>
				<li>Grenade target timing bug</li>
				<li>Medkit fix. Should be much easier to heal people with medkit and spanner now, as friendlies are lag predicted now.</li>
				<li>Dispenser / SG health now displays properly on the HUD even if you are far away.</li>
				<li>CL_CopyExistingEntity crash fixed at last (!!) </li>
				<li>SG now tracks properly when built on a slope</li>
				<li>Death by burning is no longer a suicide </li>
				<li>Fixed LUA error causing security icons to disappear when players connected</li>
				<li>Fix for spies being able to sabotage when they're dead</li>
			</ul>
			</div>
		</div>

		<div class="s_paragraph">
			<h4>Class-specific Changes</h4>
			<div class="s_body">
			<ul>
				<li><b>Scout:</b>
				<ul>
					<li>Caltrops and radar have been removed. Instead they have a buildable jump pad on +attack2. Jumppad is invincible - det it by double right-tapping. You can only carry one, similar to a detpack. They last 60 seconds before auto-detting. Any team can use them.</li>
					<li>Players can only use a jump pad once every second, so they dont get multiple triggers.</li>
					<li>Max conc speed after using the jumppad </li>
					<li>Reduced conc time for Scout down to Medic level</li>
					<li>Scouts now don't take fall damage.</li>
				</ul>
				</li>
				<li><b>Sniper:</b>
				<ul>
					<li>Sniper rifle base damage has been reduced from 42 to 35 </li>
					<li>Radiotag duration reduced from 60 to 15 seconds.</li>
					<li>AR damage down from 7 to 5.5</li>
				</ul>
				</li>
				<li><b>Soldier:</b>
				<ul>
					<li>RPG damage radius increased slightly (from 108 to 125).</li>
					<li>RPG reload time decreased from 1.0 to 0.9 seconds.</li>
					<li>Nail grens tweaked a lot.</li>
					<li>Soldier special now quickswitches between shotgun and RPG.</li>
				</ul>
				</li>
				<li><b>Demoman:</b>
				<ul>
					<li>Blue pipe fuse timer dramatically decreased (from 2.5 to 1.1 seconds). Pipetrap explosion radius increased from 125 to 150.</li>
				</ul>
				</li>
				<li><b>Medic:</b>
				<ul>
					<li>Right click now discards medpacks for teammates to use (thanks mirv). These take 10 cells to use and the medic slowly recharges cells over time. Medpacks last 5 seconds before disappearing so the person you are throwing to has to pick them up soon (you can't leave a supply for your defenders for example)</li>
				</ul>
				</li>
				<li><b>HWGuy:</b>
				<ul>
					<li>New HW AC System! : Overheat removed (!), rof changed from 0.06-0.12 to 0.05-0.15. cof changed from 0.10-0.15 to 0.05-0.30.</li>
					<li>New AC clamp system - hold right mouse to clamp, let go to unclamp. Also fires when you are clamping so you can hold right mouse to clamp + fire (you dont have to hold mouse1 and mouse2)</li>
				</ul>
				</li>
				<li><b>Pyro:</b>
				<ul>
					<li>IC base damage has come down (from 60 to 50).</li>
					<li>Flamethrower damage increased to 16 from 13</li>
					<li>Flamethrower pushforce cap increased to 850 from 550.</li>
					<li>Pyro special now quickswitches between flamethrower and IC.</li>
					<li>Pyro vs Pyro now takes 100% damage up from 50% </li>
					<li>Flamethrower uppush up to 110 from 50.</li>
				</ul>
				</li>
				<li><b>Spy:</b>
				<ul>
					<li>Spy now has a 'last disguise' option on the menu</li>
					<li>Knife damage up to 50 from 32. </li>
					<li>Disguise time halved.</li>
				</ul>
				</li>
				<li><b>Engineer:</b>
				<ul>
					<li>SG health has come down to 113% from 120% of TFC level(ish). </li>
					<li>SG bulletpush now works on the ground (thanks jiggs!).</li>
					<li>SG air bulletpush reduced to 15 from 24</li>
				</ul>
				</li>
				<li><b>All Classes (except medic):</b>
				<ul>
					<li>Melee weapons now do more damage. Crowbar + spanner up to 30 from 18. Knife up to 50 from 32.</li>
				</ul>
				</li>
			</ul>
			</div>
		</div>

		<div class="s_paragraph">
			<h4>New functionality:</h4>
			<div class="s_body">
			<ul>
				<li>New splash screen to tell you about any updates to FF if you are playing an old version.</li>
				<li>New options screen with a load more stuff on it.</li>
			</ul>
			</div>
		</div>

		<div class="s_paragraph">
			<h4>Map changes</h4>
			<div class="s_body">
			<ul>
				<li><b>Crossover</b>
				<ul>
					<li>VIS fixed, massive performance increase</li>
					<li>Test middle area structure for additional route</li>
					<li>Lasers! (currently invisible due to engine bug)</li>
					<li>Misc brush fixes</li>
					<li>More obvious Capture Point, lasers in air lift.(thanks gingerlord)</li>
					<li>Various crossover tweaks including a revamped midmap</li>
					<li>Crossover tweaks</li>
				</ul>
				</li>
				<li><b>Dropdown</b>
				<ul>
					<li>Added ff_dropdown - ''This CTF map was previously released to the community in September 2007.  It has now been updated with major gameplay changes and a redesigned flag room.  It features a destroyable wall, grate and generator, the last one also being repairable.''</li>
					<li>Polished, bug-fixed version of the community map. Thanks Yann "Sh4x" Richer</li>
				</ul>
				</li>
				<li><b>Dustbowl </b>
				<ul>
					<li>Dustbowl now compiles properly, various visual fixes (gaps in ceilings etc)</li>
				</ul>
				</li> 
				<li><b>Epicenter:</b>
				<ul>
					<li>New scoring system, capping flag results in that teams flag being reset back to cage, other team unaffected and can continue capturing. First to 3 captures wins and everyone resets.</li>
					<li>Extended balcony area around cap point for additional SG position</li>
					<li>Epicenter ammo bags now give a slight amount of health/armor (thanks gingerlord)</li>
					<li>Epicenter 3-cap LUA system added, some various tweaks</li>
					<li>Epicenter tweaks</li>
				</ul>
				</li>
				<li><b>Hunted</b>
				<ul>
					<li>Updated ff_hunted lua script - ''Assassins can now have 7 players, including snipers and 1 spy. Bodyguards can now have Soldiers, Demomen, Medics, HWGuys, Pyros, Engineers, and 1 Sniper. The Hunted now has unagi power and only takes damage from sniper rifle, crowbar, tranq, and knife.''</li>
				</ul>
				</li>
				<li><b>Monkey</b>
				<ul>
					<li>Monkey is now Red vs Blue</li>
					<li>Monkey FPS vastly improved</li>
				</ul>
				</li>
				<li><b>Openfire</b>
				<ul>
					<li>Revamped version of ff_openfire_b2, with better lighting, clipped lights, decent water, better flag-security system, custom teamcoloured security buttons and stuff</li>
				</ul>
				</li>
				<li><b>Waterpolo</b>
				<ul>
					<li>Updated ff_waterpolo - ''this map now has gameplay more similar to pigskin, a classic fun map, mainly by making the map bigger, removing the respawn rooms, adding side resupply rooms, adding an invisible wall that gets disabled after a 15 second start timer before each round, and allowing buildables that don't die after goals. Also added soundscapes and locations, replaced side steps with with steep ramps for fun trimping and double jumping.  Oh, and also removed goalie invincibility and boundaries, made goalies have no armor and no ability to pick up resupply items, and made goalies faster than scouts.''</li>
				</ul>
				</li>
				<li><b>Well</b>
				<ul>
					<li>Well front door buttons removed, walk up to it = it opens</li>
				</ul>
				</li>
			</ul>
			</div>
		</div>
	</div>
</div>

<?
} elseif($patch == "1.11") {
?>

<div class="c_table">
	<h3 class="no-margin">Patch 1.11</h3>
	<div class="t_subheader">Released 15 November 2007</div>
	<div class="t_body">
		<ul>
			<li>Added blur effect option to menu</li>
			<li>Added some missing map files</li>
			<li>Fixed waterpolo Lua script</li>
			<li>Reduced AC spinup</li>
			<li>Fixed AC firing huge salvo</li>
			<li>Reverted accidental conc physics change thing</li>
		</ul>
	</div>
</div>

<?
} elseif($patch == "1.1") {
?>

<div class="c_table">
	<h3 class="no-margin">Patch 1.1</h3>
	<div class="t_subheader">Released 31 October 2007</div>
	<div class="t_body">
		<div class="s_paragraph">
			<h4>Generic / Misc Stuff</h4>
			<div class="s_body">
			<ul>
				<li>Fixed buildable_ondamage and player_ondamage script callbacks.</li>
				<li>Fixed kPlayers flag for lua entity collection.</li>
				<li>Fixed normal explosion sound being played on top of buildable explosion sound.</li>
				<li>Fixed player_spawn callback getting called every time a player executes /kill.</li>
				<li>Fixed suicide logic from running when player is already dead.</li>
				<li>Fixed score overflow at 32k by increasing size of networked score variable.</li>
				<li>Fixed missing voice hud icons.</li>
				<li>Fixed player:AddHealth function so it returns expected value. This fixes bug where you can pick up all ammo and armor bags if you weren't full health.</li>
				<li>Fixed display is + negative fort points(ie + -100)</li>
				<li>Fixed voice column to show chat on/off icons for other teams.</li>
				<li>Fixed # leaving off the rest of the string in chat messages if not matched to a localized string.</li>
				<li>Fixed disguise "enemy" to choose a random enemy team.</li>
				<li>Fixed infection/heal sound to play at appropriate times.</li>
				<li>Fixed kill/death messages not showing/tracking.</li>
				<li>Fixed tickrate 66 clamp.</li>
				<li>Fixed death view slant.</li>
				<li>Fixed %l displaying wrong team.</li>
				<li>Fixed medkit hit/infection sounds to play properly.</li>
				<li>Fixed sentrygun not being able to retarget closer targets</li>
				<li>Fixed sentrygun to favor all visible players over buildables(if they got a player as a target they will not target a buildable, regardless of distance)</li>
				<li>Added lua callbacks for player_connected & player_disconnected</li>
				<li>Added lua SetDamageForce for damageinfo</li>
				<li>Added DamageInfo:ScaleDamage function, exposed to lua</li>
				<li>Added player_onkill callback for player suicide so scripts can reject it(implemented in ff_hunted)</li>
				<li>Added DropToFloor() lua function that takes a base entity.</li>
				<li>Added client side spawn weapon cvars to control what weapon you equip on spawn.</li>
				<li>Added small spinup to AC so it no longer shoots immediately(and no heat buildup during spinup)</li>
				<li>Added buildable & grenade flags to the base trigger class & .fgd</li>
				<li>Added a progress bar to spy disguising.</li>
				<li>Changed to no blood shooting disguised teammates when ff is off.</li>
				<li>Changed AC to reduce HW speed when firing(and not dependent on charge level).</li>
				<li>Changed grenade and pipe damage radius up a bit</li>
				<li>Changed water exiting push force up a bit.</li>
				<li>Changed decals not to draw on players & buildables. Pretty certain this accounted for a majority of client crashes.</li>
				<li>Changed a bunch cvars people were using as cheats to cheat.</li>
				<li>Changed backpacks to non solid to fix them from blocking doors/elevators.</li>
				<li>Changed messagemode and messagemode2 binding to support auto starting the chat message. Ie, bind p "messagemode ^2" will begin the chat mode with ^2 already in the chat box.</li>
			</ul>
			</div>
		</div>
		
		<div class="s_paragraph">
			<h4>Spawn Weapon Cvars</h4>
			<div class="s_body">
				<ul>
					<li>cl_spawnweapon_scout - default nailgun</li>
					<li>cl_spawnweapon_sniper - default sniperrifle</li>
					<li>cl_spawnweapon_soldier - default rpg</li>
					<li>cl_spawnweapon_demoman - default grenadelauncher</li>
					<li>cl_spawnweapon_medic - default supernailgun</li>
					<li>cl_spawnweapon_hwguy - default assaultcannon</li>
					<li>cl_spawnweapon_pyro - default flamethrower</li>
					<li>cl_spawnweapon_engineer - default railgun</li>
					<li>cl_spawnweapon_spy - default tranq</li>
					<li>cl_spawnweapon_civilian - default tommygun</li>
					<p>
					Valid options are: crowbar, medkit, knife, spanner, shotgun, supershotgun, nailgun, supernailgun, grenadelauncher, rpg, sniperrifle, railgun, flamethrower, assaultcannon, autorifle, tranq, pipelauncher, ic, tommygun, deploysentrygun, deploydispenser, deploydetpack, tommygun, umbrella
					</p>
				</ul>
			</div>
		</div>
		
		<div class="s_paragraph">
			<h4>New Chat Macros</h4>
			<div class="s_body">
				<ul>
					<li>%d - disguise team and class</li>
					<li>%i - name of last person in crosshairs</li>

					<li>%sh - sentry health</li>
					<li>%sa - sentry ammo</li>
					<li>%sv - sentry level</li>
					<li>%sl - sentry location</li>

					<li>%dh - dispenser health</li>
					<li>%da - dispenser ammo</li>
					<li>%dl - dispenser location</li>

					<li>%pf - detpack fuse time</li>
					<li>%pl - detpack location</li>

					<li><b>Added ^# color markup for chat messages.</b>
						<ul>
							<li>^0 - ORANGE</li>
							<li>^1 - BLUE</li>
							<li>^2 - RED</li>
							<li>^3 - YELLOW</li>
							<li>^4 - GREEN</li>
							<li>^5 - WHITE</li>
							<li>^6 - BLACK</li>
							<li>^7 - GREY</li>
							<li>^8 - MAGENTA</li>
							<li>^9 - CYAN</li>
							<li>^ - terminates last color</li>
						</ul>
					</li>
				<p>
				Disable with cl_chat_colorize 0<br/>
				cl_chat_color_default sets default chat message color(defaults to current orange). it's a string, and takes an RGB, so e.g. ''cl_chat_color_default "255 170 0"''
				</p>
				</ul>
			</div>
		</div>
		
	</div>
</div>

<?
} elseif($patch == "1.0") {
?>

<div class="c_table">
	<h3 class="no-margin">Version 1.0</h3>
	<div class="t_subheader">Released 13 September 2007</div>
	<div class="t_body">
		First Release
	</div>
</div>

<?
}
?>

			</div>
		</div>
	</div>