<?php
/**
 * @author Archigos
 * @copyright 2012
 * @version 1.3 
 * Originally based on the "Addon" to Maraschino by 'hernandito'
 * Please do not edit this file, edit 'settings.ini' instead
 */

require 'includes/required/errorreporting.php';
require 'includes/required/defaults.php';
require 'includes/required/langpack.php';
require 'includes/required/header.php';
require 'includes/required/jsoncommands.php';
?>

<!-- Left Menu: Start -->
<!-- Auto-Size Fix: Start
    DIV required for 'fixing' iFrame auto-size -->
<div id="leftofframe">
<!-- Auto-Size Fix: End -->

<div id="nav"><strong>X </strong>
	<?php echo $JSONStart ?>XBMC.TakeScreenshot">Screenshot</a>
    <?php echo $JSONStart ?>XBMC.PlayerControl(Play)">Pause</a>
    <?php echo $JSONStart ?>XBMC.Action(ShowSubtitles)">Subtitles</a>
</div>
<div id="nav"><strong>Volume </strong>
    <?php echo $JSONStart ?>XBMC.Mute">Mute</a>
    <?php echo $JSONStart ?>XBMC.Action(VolumeUp)">&uparrow;</a>
    <?php echo $JSONStart ?>XBMC.Action(VolumeDown)">&downarrow;</a>
    <?php echo $JSONStart ?>XBMC.SetVolume(100%,showvolumebar)">Max</a>
</div>

<!-- Haven't found the correct code for these yet
<div id="nav"><strong>Watched </strong>
    <?php echo $JSONStart ?>XBMC.Action(SetWatched)">(un)Mark</a>
    <?php echo $JSONStart ?>XBMC.">Toggle</a>
</div>
-->

<div id="nav"><strong>Video </strong>
    <?php echo $JSONStart ?>XBMC.UpdateLibrary(video)">Update</a>
    <?php echo $JSONStart ?>XBMC.CleanLibrary(video)">Clean</a>
    <?php echo $JSONStart ?>XBMC.Reboot">Reboot</a> 
</div>
<div id="nav"><strong>Music </strong>
    <?php echo $JSONStart ?>XBMC.UpdateLibrary(music)">Update</a>
    <?php echo $JSONStart ?>XBMC.CleanLibrary(music)">Clean</a>
</div>

<!-- Personal Links: Start -->
<div id="nav"><strong>Email </strong> 
    <?php echo $MenuLeft ?> href="#">Personal</a>
    <?php echo $MenuLeft ?> href="http://www.gmail.com">Gmail</a>
</div>
<!-- Personal Links: End -->

<!-- Tabbed Panel for RSS Feeds: Start
    Reference Notes at end of page -->
<div id="TabbedPanels1" class="TabbedPanels">
    <ul class="TabbedPanelsTabGroup">
		<?php writeRSSName($ini['feed1name']); ?>
		<?php writeRSSName($ini['feed2name']); ?>
		<?php writeRSSName($ini['feed3name']); ?>
		<?php writeRSSName($ini['feed4name']); ?>
		<?php writeRSSName($ini['feed5name']); ?>
    </ul>
    <div class="TabbedPanelsContentGroup">
		<?php writeRSS($ini['feed1'],$rsscount); ?>
        <?php writeRSS($ini['feed2'],$rsscount); ?>
        <?php writeRSS($ini['feed3'],$rsscount); ?>
        <?php writeRSS($ini['feed4'],$rsscount); ?>
        <?php writeRSS($ini['feed5'],$rsscount); ?>
    </div>
</div>
<script type="text/javascript">var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");</script>
</div>
<!-- Tabbed Panel for RSS Feeds: End -->
<!-- Left Menu: End -->

<!-- Top Navigation: Start -->
<div id="navi" class="navi">
    <ul>
        <li><a href="remote.php" target="myiframe">Remote</a></li>
        <li><a href="http://<?php echo $ini['mara'] ?>:<?php echo $ini['maraport'] ?>" target="myiframe">Home</a></li>
        <li><a href="http://<?php echo $ini['sab'] ?>:<?php echo $ini['sabport'] ?>" target="myiframe">SabNZBd+</a></li>
        <li><a href="http://<?php echo $ini['utor'] ?>:<?php echo $ini['utport'] ?>/gui/" target="myiframe" title="Currently requires workaround">&micro;Torrent</a></li>
        <li><a href="http://<?php echo $ini['sick'] ?>:<?php echo $ini['sbport'] ?>" target="myiframe">SickBeard</a></li>
        <li><a href="http://<?php echo $ini['couch'] ?>:<?php echo $ini['cpport'] ?>" target="myiframe">CouchPotato</a></li>
        <li><a href="http://<?php echo $ini['mara'] ?>:<?php echo $ini['maraport'] ?>" target="myiframe">Matrix</a>
            <ul>
                <li><a href="http://<?php echo $ini['matrix_link'] ?>category=Movies" target="myiframe" title="Movies"><img src="includes/images/movies.png" width="104" height="104" /></a></li>
                <li><a href="http://<?php echo $ini['matrix_link'] ?>category=TV" target="myiframe" title="TV"><img src="includes/images/tv.png" width="104" height="104" /></a></li>
                <li><a href="http://<?php echo $ini['matrix_link'] ?>category=Apps" target="myiframe" title="Applications"><img src="includes/images/apps.png" width="104" height="104" /></a></li>
                <li><a href="http://<?php echo $ini['matrix_link'] ?>cat=14" target="myiframe" title="Xbox"><img src="includes/images/xbox.png" width="104" height="104" /></a></li>
            </ul>
        </li>
        <li><a href="http://<?php echo $ini['mara'] ?>:<?php echo $ini['maraport'] ?>" target="myiframe">NZB.su</a>
            <ul>
                <li><a href="http://nzb.su" target="myiframe" title="NZB.su"><img src="includes/images/nzbsu.png" width="104" height="104" /></a></li>
                <li><a href="http://nzb.su/movies" target="myiframe" title="NZB.su Movies"><img src="includes/images/nzbsum.png" width="104" height="104" /></a></li>
                <li><a href="http://nzb.su/browse?t=5000" target="myiframe" title="NZB.su TV"><img src="includes/images/nzbsut.png" width="104" height="104" /></a></li>
            </ul>
        </li>
        <li><a href="http://<?php echo $ini['mara'] ?>:<?php echo $ini['maraport'] ?>" target="myiframe">Forums</a>
            <ul>
                <li><a href="http://forum.xbmc.org/index.php" target="myiframe"><img src="includes/images/xbmc.png" width="140" height="50" /></a></li>
                <li><a href="http://openelec.tv/forum/recent" target="myiframe"><img src="includes/images/openelec.png" width="140" height="50" /></a></li>
                <li><a href="http://lime-technology.com/forum/index.php" target="myiframe"><img src="includes/images/unraid.png" width="140" height="50" /></a></li>
                <li><a href="http://forums.maraschinoproject.com/index.php" target="myiframe"><img src="includes/images/maraschino.png" width="140" height="50" /></a></li>
            </ul>
        </li>
        <li><a href="http://<?php echo $ini['mara'] ?>:<?php echo $ini['maraport'] ?>" target="myiframe">dBases</a>
            <ul>
                <li><a href="http://www.imdb.com/" target="myiframe">IMDB</a></li>
                <li><a href="http://www.themoviedb.org/" target="myiframe">TheMovieDB</a></li>
                <li><a href="http://thetvdb.com/" target="myiframe">TheTVDB</a></li>
                <li><a href="http://www.joblo.com/blu-rays-dvds/release-dates/?" target="myiframe">DVD Releases</a></li>
                <li><a href="http://www.movieweb.com/movies/2012" target="myiframe">2012 Movies</a></li>
                <li><a href="http://www.rlslog.net/category/movies/hdrip/" target="myiframe">RlsLog.net</a></li>
                <li><a href="http://www.rottentomatoes.com/news/" target="myiframe">Rotten Tomatoes</a></li>
            </ul>
        </li>
        <li><a href="http://<?php echo $ini['mara'] ?>:<?php echo $ini['maraport'] ?>" target="myiframe">unRAID</a> 
            <ul> 
                <li><a href="http://forum.xbmc.org/index.php" target="myiframe">unMenu</a></li> 
            </ul> 
        </li>
        <li><a href="http://<?php echo $ini['mara'] ?>:<?php echo $ini['maraport'] ?>" target="myiframe">Favorites</a> 
            <ul> 
                <li><a href="http://www.engadget.com/" target="myiframe"><img src="includes/images/engadget.png" width="104" height="60" /></a></li> 
                <li><a href="http://blog.lifehacker.com/" target="myiframe"><img src="includes/images/lifehacker.png" width="104" height="60" /></a></li> 
                <li><a href="http://your demonoid link here" target="myiframe"><img src="includes/images/demonoid.png" width="104" height="60" /></a></li> 
                <li><a href="http://www.warez-bb.org/" target="myiframe"><img src="includes/images/warezbb.png" width="104" height="60" /></a></li> 
                <li><a href="http://www.cnn.com/" target="myiframe"><img src="includes/images/cnn.png" width="104" height="60" /></a></li>
                <li><a href="http://www.trakt.tv/" target="myiframe"><img src="includes/images/trakt.png" width="104" height="60" /></a></li>
                <li><a href="http://www.youtube.com/" target="myiframe"><img src="includes/images/youtube.png" width="104" height="60" /></a></li>
            </ul> 
        </li>
        <li><a href="http://<?php echo $ini['mara'] ?>:<?php echo $ini['maraport'] ?>" target="myiframe">Skynet</a>
            <ul>
                <li><a href="http://www.dropbox.com/" target="myiframe"><img src="includes/images/dropbox.png" width="104" height="60" /></a></li>
                <li><a href="http://www.icloud.com/" target="myiframe"><img src="includes/images/icloud.png" width="104" height="60" /></a></li>
                <li><a href="http://www.skydrive.com/" target="myiframe"><img src="includes/images/skydrive.png" width="104" height="60" /></a></li>
                <li><a href="http://www.twitter.com/" target="myiframe"><img src="includes/images/twitter.png" width="104" height="60" /></a></li>
                <li><a href="http://www.igoogle.com/" target="myiframe"><img src="includes/images/igoogle.png" width="104" height="60" /></a></li>
                <li><a href="http://www.facebook.com/" target="myiframe"><img src="includes/images/facebook.png" width="104" height="60" /></a></li>
                <li><a href="http://en.wikipedia.org/" target="myiframe"><img src="includes/images/wikipedia.png" width="104" height="60" /></a></li>
            </ul>
        </li> 
    </ul>
</div>
<!-- Top Navigation: End -->
<?php require 'includes\required\jsonframe.php'; ?>
<?php require 'includes\required\iframe.php'; ?>
</body>
</html>