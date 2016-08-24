<?php

function GetLink($path)
{
	return FF_HOST . "/" . $path;
}

function GetForumLink($path)
{
	return "http://forums.fortress-forever.com" . "/" . $path;
}

function PrintActivityList($activities, $allow_nested_lists = true, $print_comments = false)
{
	foreach ($activities as $activity)
	{
		extract($activity);
		$act_link_text = $print_comments ? $act_html : $act_html_short;
		$act_nested_list = "";
		$nested_list_pos = strpos($act_link_text, "<ul");
		if ($nested_list_pos !== false)
		{
			if ($allow_nested_lists)
			{
				$act_nested_list = substr($act_link_text, $nested_list_pos);
			}
			$act_link_text = substr($act_link_text, 0, $nested_list_pos);
		}
		$act_link_text = str_replace("\"gh-repo\">fortressforever/", "\"gh-repo\">", $act_link_text);
		echo "<li><a class=\"activity act-$act_source cf\" href=\"$act_url\">$act_link_text <small class=\"activity-time pull-right\">".ElapsedTime($act_date)."</small></a>";
		echo "$act_nested_list";
		echo "</li>";
	}
}

// also borrowed from webfroot.co.nz's shoutbox
// *BOB* --- Rewritten by Bob - sorry, I like this coding better!  ;)
function ParseEmoticons ($text) {
    $emoticons = array();
    $emoticons[] = array(":EEK:", "<img src='img/smileys/graybigeek.gif' alt='' align='absmiddle'>");
    $emoticons[] = array(":ROLLEYES:", "<img src='img/smileys/grayrolleyes.gif' alt='' align='absmiddle'>");
    $emoticons[] = array(":MAD:", "<img src='img/smileys/graymad.gif' alt='' align='absmiddle'>");
    $emoticons[] = array(":CONFUSED:", "<img src='img/smileys/grayconfused.gif' alt='' align='absmiddle'>");
    $emoticons[] = array(":SIGH:", "<img src='img/smileys/graysigh.gif' alt='' align='absmiddle'>");
    $emoticons[] = array(":YES:", "<img src='img/smileys/grayyes.gif' alt='' align='absmiddle'>");
    $emoticons[] = array(":NO:", "<img src='img/smileys/grayno.gif' alt='' align='absmiddle'>");
    $emoticons[] = array(":SLEEP:", "<img src='img/smileys/graysleep.gif' alt='' align='absmiddle'>");
    $emoticons[] = array(":UPSET:", "<img src='img/smileys/grayupset.gif' alt='' align='absmiddle'>");
    $emoticons[] = array(":SHY:", "<img src='img/smileys/grayshy.gif' alt='' align='absmiddle'>");
    $emoticons[] = array(":NONE:", "<img src='img/smileys/graynone.gif' alt='' align='absmiddle'>");
    $emoticons[] = array(":LAUGH:", "<img src='img/smileys/graylaugh.gif' alt='' align='absmiddle'>");
    $emoticons[] = array(":DEAD:", "<img src='img/smileys/graydead.gif' alt='' align='absmiddle'>");
    $emoticons[] = array(":CRY:", "<img src='img/smileys/graycry.gif' alt='' align='absmiddle'>");
    $emoticons[] = array(":eek:", "<img src='img/smileys/graybigeek.gif' alt='' align='absmiddle'>");
    $emoticons[] = array(":rolleyes:", "<img src='img/smileys/grayrolleyes.gif' alt='' align='absmiddle'>");
    $emoticons[] = array(":mad:", "<img src='img/smileys/graymad.gif' alt='' align='absmiddle'>");
    $emoticons[] = array(":confused:", "<img src='img/smileys/grayconfused.gif' alt='' align='absmiddle'>");
    $emoticons[] = array(":sigh:", "<img src='img/smileys/graysigh.gif' alt='' align='absmiddle'>");
    $emoticons[] = array(":yes:", "<img src='img/smileys/grayyes.gif' alt='' align='absmiddle'>");
    $emoticons[] = array(":no:", "<img src='img/smileys/grayno.gif' alt='' align='absmiddle'>");
    $emoticons[] = array(":sleep:", "<img src='img/smileys/graysleep.gif' alt='' align='absmiddle'>");
    $emoticons[] = array(":upset:", "<img src='img/smileys/grayupset.gif' alt='' align='absmiddle'>");
    $emoticons[] = array(":shy:", "<img src='img/smileys/grayshy.gif' alt='' align='absmiddle'>");
    $emoticons[] = array(":laugh:", "<img src='img/smileys/graylaugh.gif' alt='' align='absmiddle'>");
    $emoticons[] = array(":dead:", "<img src='img/smileys/graydead.gif' alt='' align='absmiddle'>");
    $emoticons[] = array(":cry:", "<img src='img/smileys/graycry.gif' alt='' align='absmiddle'>");
    $emoticons[] = array(":)", "<img src='img/smileys/graysmile.gif' alt='' align='absmiddle'>");
    $emoticons[] = array(":(", "<img src='img/smileys/graysad.gif' alt='' align='absmiddle'>");
    $emoticons[] = array(";)", "<img src='img/smileys/graysmilewinkgrin.gif' alt='' align='absmiddle'>");
    $emoticons[] = array(":|", "<img src='img/smileys/graynone.gif' alt='' align='absmiddle'>");
    $emoticons[] = array(":-)", "<img src='img/smileys/graysmile.gif' alt='' align='absmiddle'>");
    $emoticons[] = array(":-(", "<img src='img/smileys/graysad.gif' alt='' align='absmiddle'>");
    $emoticons[] = array(";-)", "<img src='img/smileys/graysmilewinkgrin.gif' alt='' align='absmiddle'>");
    $emoticons[] = array(":-|", "<img src='img/smileys/graynone.gif' alt='' align='absmiddle'>");
    $emoticons[] = array(":0", "<img src='img/smileys/graybigeek.gif' alt='' align='absmiddle'>");
    $emoticons[] = array("B)", "<img src='img/smileys/graycool.gif' alt='' align='absmiddle'>");
    $emoticons[] = array(":D", "<img src='img/smileys/graybiggrin.gif' alt='' align='absmiddle'>");
    $emoticons[] = array(":P", "<img src='img/smileys/graybigrazz.gif' alt='' align='absmiddle'>");
    $emoticons[] = array(":B", "<img src='img/smileys/graybigrazz.gif' alt='' align='absmiddle'>");
    $emoticons[] = array("B-)", "<img src='img/smileys/graycool.gif' alt='' align='absmiddle'>");
    $emoticons[] = array(":-D", "<img src='img/smileys/graybiggrin.gif' alt='' align='absmiddle'>");
    $emoticons[] = array(":-P", "<img src='img/smileys/graybigrazz.gif' alt='' align='absmiddle'>");
    $emoticons[] = array(":O", "<img src='img/smileys/graybigeek.gif' alt='' align='absmiddle'>");
    $emoticons[] = array("b)", "<img src='img/smileys/graycool.gif' alt='' align='absmiddle'>");
    $emoticons[] = array(":d", "<img src='img/smileys/graybiggrin.gif' alt='' align='absmiddle'>");
    $emoticons[] = array(":p", "<img src='img/smileys/graybigrazz.gif' alt='' align='absmiddle'>");
    $emoticons[] = array(":b", "<img src='img/smileys/graybigrazz.gif' alt='' align='absmiddle'>");
    $emoticons[] = array("b-)", "<img src='img/smileys/graycool.gif' alt='' align='absmiddle'>");
    $emoticons[] = array(":-d", "<img src='img/smileys/graybiggrin.gif' alt='' align='absmiddle'>");
    $emoticons[] = array(":-p", "<img src='img/smileys/graybigrazz.gif' alt='' align='absmiddle'>");
    $emoticons[] = array(":-b", "<img src='img/smileys/graybigrazz.gif' alt='' align='absmiddle'>");
    $emoticons[] = array(":o", "<img src='img/smileys/graybigeek.gif' alt='' align='absmiddle'>");
    $emoticons[] = array("o_O", "<img src='img/smileys/graybigeek.gif' alt='' align='absmiddle'>");
    $emoticons[] = array("O_o", "<img src='img/smileys/graybigeek.gif' alt='' align='absmiddle'>");
    $emoticons[] = array("o_o", "<img src='img/smileys/graybigeek.gif' alt='' align='absmiddle'>");
    $emoticons[] = array("O_O", "<img src='img/smileys/graybigeek.gif' alt='' align='absmiddle'>");

    foreach ($emoticons as $emoticon) {
	    $text = str_replace($emoticon[0],$emoticon[1],$text);
    }
    return $text;
}

function ParseBBCode($text){
	$text = str_ireplace('<', '&lt;', $text);
	$text = str_ireplace('>', '&gt;', $text);

	$text = mb_eregi_replace("\\[color=([^\\[]*)\\]([^\\[]*)\\[/color\\]","<font color=\"\\1\">\\2</font>",$text);
	$text = mb_eregi_replace("\\[size=([^\\[]*)\\]([^\\[]*)\\[/size\\]","<font size=\"\\1\">\\2</font>",$text);
	$text = mb_eregi_replace("\\[font=([^\\[]*)\\]([^\\[]*)\\[/font\\]","<font face=\"\\1\">\\2</font>",$text);
	$text = mb_eregi_replace("\\[img]([^\\[]*)\\[/img\\]","<img src=\"\\1\">",$text);
	$text = mb_eregi_replace("\\[imgb]([^\\[]*)\\[/imgb\\]","<img src=\"\\1\" class=\"imgborder\">",$text);
	$text = mb_eregi_replace("\\[align=([^\\[]*)\\]([^\\[]*)\\[/align\\]","<p align=\"\\1\">\\2</p>",$text);
	$text = str_ireplace("[center]", "<center>", $text);
	$text = str_ireplace("[/center]", "</center>", $text);
	$text = str_ireplace("[left]", "<div align=\"left\">", $text); // replace these with floats
	$text = str_ireplace("[/left]", "</div>", $text);
	$text = str_ireplace("[right]", "<div align=\"right\">", $text);
	$text = str_ireplace("[/right]", "</div>", $text);
	$text = str_ireplace("[hr]", "<hr>", $text);
	$text = str_ireplace("[sub]", "<sub>", $text);
	$text = str_ireplace("[/sub]", "</sub>", $text);
	$text = str_ireplace("[sup]", "<sup>", $text);
	$text = str_ireplace("[/sup]", "</sup>", $text);
	$text = str_ireplace("[s]", "<s>", $text);
	$text = str_ireplace("[/s]", "</s>", $text);
	$text = str_ireplace("[b]", "<b>", $text);
	$text = str_ireplace("[/b]", "</b>", $text);
	$text = str_ireplace("[i]", "<i>", $text);
	$text = str_ireplace("[/i]", "</i>", $text);
	$text = str_ireplace("[u]", "<u>", $text);
	$text = str_ireplace("[/u]", "</u>", $text);
	$text = str_ireplace("[*]", "<li>", $text);
	$text = str_ireplace("[olist]", "<ol>", $text);
	$text = str_ireplace("[/olist]", "</ol>", $text);
	$text = str_ireplace("[list]", "<ul>", $text);
	$text = str_ireplace("[/list]", "</ul>", $text);
	//$text = eregi_replace("\\[email\\]([^\\[]*)\\[/email\\]", "<a href=\"mailto:\\1\">\\1</a>",$text);
	//$text = eregi_replace("\\[email=([^\\[]*)\\]([^\\[]*)\\[/email\\]", "<a href=\"mailto:\\1\">\\2</a>",$text);
	$text = str_ireplace("[code]","<code><pre>",$text);
	$text = str_ireplace("[/code]","</pre></code>",$text);
	$text = mb_eregi_replace("\\[url\\]www.([^\\[]*)\\[/url\\]", "<a href=\"http://www.\\1\" target=\"_blank\">\\1</a>",$text);
	$text = mb_eregi_replace("\\[url\\]([^\\[]*)\\[/url\\]","<a href=\"\\1\" target=\"_blank\">\\1</a>",$text);
	$text = mb_eregi_replace("\\[url=([^\\[]*)\\]([^\\[]*)\\[/url\\]","<a href=\"\\1\" target=\"_blank\">\\2</a>",$text);
	$text = mb_eregi_replace("(^|[>[:space:]\n])([[:alnum:]]+)://([^[:space:]]*)([[:alnum:]#?/&=])([<[:space:]\n]|$)","\\1<a href=\"\\2://\\3\\4\" target=\"_blank\">\\2://\\3\\4</a>\\5", $text);
	$text = mb_eregi_replace("\\[youtube]([^\\[]*)\\[/youtube\\]","<div style=\"max-width:640px; margin-left:auto; margin-right:auto;\"><div class=\"embed-container\"><iframe type=\"text/html\" src=\"https://www.youtube.com/embed/\\1?origin=http://www.fortress-forever.com\" frameborder=\"0\"></iframe></div></div>",$text);
	$text = mb_eregi_replace("\\[vimeo]([^\\[]*)\\[/vimeo\\]","<object width=\"400\" height=\"300\"><param name=\"quality\" value=\"best\" /><param name=\"allowfullscreen\" value=\"true\" /><param name=\"scale\" value=\"showAll\" /><param name=\"allowscriptaccess\" value=\"always\" /><param name=\"movie\" value=\"http://vimeo.com/moogaloop.swf?clip_id=\\1&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=1&amp;show_portrait=0&amp;color=ffffff&amp;fullscreen=1\" /><embed src=\"http://vimeo.com/moogaloop.swf?clip_id=\\1&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=1&amp;show_portrait=0&amp;color=ffffff&amp;fullscreen=1\" type=\"application/x-shockwave-flash\" allowfullscreen=\"true\" quality=\"best\" scale=\"showAll\" allowscriptaccess=\"always\" width=\"400\" height=\"300\"></embed></object><br><a href=\"http://www.vimeo.com/\\1\" target=\"_blank\">vimeo.com/\\1</a>",$text);
	$text = mb_eregi_replace("\\[vimeohd]([^\\[]*)\\[/vimeohd\\]","<object width=\"533\" height=\"300\"><param name=\"quality\" value=\"best\" /><param name=\"allowfullscreen\" value=\"true\" /><param name=\"scale\" value=\"showAll\" /><param name=\"allowscriptaccess\" value=\"always\" /><param name=\"movie\" value=\"http://vimeo.com/moogaloop.swf?clip_id=\\1&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=1&amp;show_portrait=0&amp;color=ffffff&amp;fullscreen=1\" /><embed src=\"http://vimeo.com/moogaloop.swf?clip_id=\\1&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=1&amp;show_portrait=0&amp;color=ffffff&amp;fullscreen=1\" type=\"application/x-shockwave-flash\" allowfullscreen=\"true\" quality=\"best\" scale=\"showAll\" allowscriptaccess=\"always\" width=\"533\" height=\"300\"></embed></object><br><a href=\"http://www.vimeo.com/\\1\" target=\"_blank\">vimeo.com/\\1</a>",$text);
	$text = mb_eregi_replace("\\[gamevee]([^\\[]*)\\[/gamevee\\]","<object type=\"application/x-shockwave-flash\" data=\"http://www.gamevee.com/public/gameveeplayer.swf?video_id=\\1&embed=on&vidview=on\" width=\"480\" height=\"420\"><param name=\"movie\" value=\"http://www.gamevee.com/public/gameveeplayer.swf?video_id=\\1&embed=on&vidview=on\" /><param name=\"allowfullscreen\" value=\"true\"/><param name=\"bgcolor\" value=\"#FFFFFF\"/></object>",$text);
	$text = mb_eregi_replace("\\[gameveehd]([^\\[]*)\\[/gameveehd\\]","<object type=\"application/x-shockwave-flash\" data=\"http://www.gamevee.com/public/gameveeplayerh264_480330.swf?video_id=\\1&embed=on&vidview=on\" width=\"533\" height=\"366\"><param name=\"movie\" value=\"http://www.gamevee.com/public/gameveeplayerh264_480330.swf?video_id=\\1&embed=on&vidview=on\"/><param name=\"allowfullscreen\" value=\"true\"/><param name=\"bgcolor\" value=\"#FFFFFF\"/></object>",$text);
	$text = mb_eregi_replace("\\[veoh]([^\\[]*)\\[/veoh\\]","<embed src=\"http://www.veoh.com/veohplayer.swf?permalinkId=\\1&id=anonymous&player=videodetailsembedded&affiliateId=&videoAutoPlay=0\" allowFullScreen=\"true\" width=\"540\" height=\"438\" bgcolor=\"#FFFFFF\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\"></embed>",$text);
	$text = mb_eregi_replace("\\[veohhd]([^\\[]*)\\[/veohhd\\]","<embed src=\"http://www.veoh.com/veohplayer.swf?permalinkId=\\1&id=anonymous&player=videodetailsembedded&affiliateId=&videoAutoPlay=0\" allowFullScreen=\"true\" width=\"540\" height=\"340\" bgcolor=\"#FFFFFF\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\"></embed>",$text);
	$text = mb_eregi_replace("\\[digg]([^\\[]*)\\[/digg\\]","<div style=\"float: right; margin-left: 10px; margin-bottom: 2px;\"><script type=\"text/javascript\">digg_url = '\\1';</script><script src=\"http://digg.com/tools/diggthis.js\" type=\"text/javascript\"></script></div>",$text);

	$text = ParseBBCode_Quotes($text);

	return $text;
}

function ParseBBCode_Quotes( $text )
{
    $tablo=explode("[quote",$text);
    $text="";
    $text.=$tablo[0];
    foreach($tablo as $cle=>$valeur)
    {
        $tablo1=explode("[/quote]",$valeur);
        if(isset($tablo1[1]))
        {
            foreach($tablo1 as $cle1=>$valeur1)
            {
                if($cle1==0)
				{
					$postedby = "";
					if ($valeur1[0] == "=")
					{
						$user = substr($valeur1, 1, strpos($valeur1, "]")-1);
						$postedby = "<span class=\"quotehead\">Originally posted by <strong>$user</strong></span>";
						$valeur1 = substr($valeur1, strpos($valeur1, "]")+1);
					}
					elseif ($valeur1[0] == "]")
					{
						$valeur1 = substr($valeur1, 1);
					}
                    $valeur1="<blockquote>$postedby".$valeur1."</blockquote>";
				}
                $text.=$valeur1;
            }
        }       
    }
	return $text;
}

function ElapsedTime($timestamp, $precision = 1) {
  if (!$timestamp) { return 'just now'; }
  if (ctype_digit($timestamp)) { $time = (int)$timestamp; }
  elseif (is_string($timestamp)) { $time = strtotime($timestamp); }
  $time = time() - $time;
  if ($time <= 0) return 'just now';
  $a = array('decade' => 315576000, 'year' => 31557600, 'month' => 2629800, 'week' => 604800, 'day' => 86400, 'hour' => 3600, 'min' => 60, 'sec' => 1);
  $i = 0;
    foreach($a as $k => $v) {
      $$k = floor($time/$v);
      if ($$k) $i++;
      $time = $i >= $precision ? 0 : $time - $$k * $v;
      $s = $$k > 1 ? 's' : '';
      $$k = $$k ? $$k.' '.$k.$s.($time ? ',' : '').' ' : '';
      @$result .= $$k;
    }
  return $result ? $result.'ago' : 'just now';
}

