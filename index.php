<?
require_once('func.php');
xray_header('<script language="JavaScript" type="text/javascript" src="func.js?v=9"></script>');
?>

<p><a href="screenshots.php"><img id="screenshot" border="0" style="float: right; padding-left: .5em;" src="xray_river_thumb.png"></a></p>

<p>
<p>Minecraft X-Ray is a utility whose primary purpose is to aid in finding
valuable ores and resources inside a Minecraft world.  It's also very useful
for simply exploring your Minecraft world, or finding your way out of a deep
cave system.  It
is distributed under the <a href="COPYING.txt">New/Modified BSD License</a>.
X-Ray is <strong>not</strong> a mod - it is a separate program run outside
of Minecraft itself.</p>

<p>In general, X-Ray is only useable on singleplayer worlds, but if you have
access to the data files from a multiplayer server, X-Ray will load those
from your harddrive without problems as well.</p>

<p>The original X-Ray versions were written by plusminus, but has been
maintained here since v2.7.  Many thanks to him for providing both the
application and the sourcecode, so that it could live on.</p>

<ul>
<li><b>Official forum thread:</b> <a href="http://www.minecraftforum.net/viewtopic.php?f=1022&t=119356">minecraftforum.net</a></li>
<li><b>Official Project page:</b> <a href="https://sourceforge.net/projects/minecraftxray/">Sourceforge</a></li>
<li><b>Alternative git repository:</b> <a href="https://github.com/apocalyptech/minecraftxray">github</a></li>
</ul>

<p>
Minecraft X-Ray is unrelated to the clientside mod also named
<a href="http://www.minecraftforum.net/topic/240772-v19pre5-cjb-mods-v500pre-02-11-2011/">XRay</a> (now part of the CJB mod set),
or to the
<a href="http://www.minecraftforum.net/viewtopic.php?f=1021&t=171726">X-Ray Texture Packs</a>.
</p>

<h3>Download</h3>
<blockquote>

<p><a href="Changelog.txt">Changelog</a></p>

<strong>Current Version</strong>
<blockquote>
<? xray_rel('3.6.1', 'February 29, 2012', true); ?>
</blockquote>

<img src="plus.png" id="previoustoggle" onClick="togglePrev();"> <strong onClick="togglePrev();">Previous Versions</strong>
<div id="previous" style="display: none;">
<blockquote>
<? xray_rel('3.6.0', 'February 20, 2012', true); ?>
<? xray_rel('3.5.1', 'January 15, 2012', true); ?>
<? xray_rel('3.5.0', 'November 18, 2011'); ?>
<? xray_rel('3.4.3', 'October 21, 2011'); ?>
<? xray_rel('3.4.2', 'October 20, 2011'); ?>
<? xray_rel('3.4.1', 'October 15, 2011'); ?>
<? xray_rel('3.4.0', 'October 11, 2011'); ?>
<? xray_rel('3.3.3', 'September 23, 2011'); ?>
<? xray_rel('3.3.2', 'September 20, 2011'); ?>
<? xray_rel('3.3.1', 'September 14, 2011'); ?>
<? xray_rel('3.3.0', 'September 12, 2011'); ?>
<? xray_rel('3.2.2', 'September 5, 2011'); ?>
<? xray_rel('3.2.1', 'August 18, 2011'); ?>
<? xray_rel('3.2.0', 'July 1, 2011'); ?>
<? xray_rel('3.1.1', 'June 22, 2011'); ?>
<? xray_rel('3.1.0', 'May 26, 2011'); ?>
<? xray_rel('3.0.1', '2011.04.24'); ?>
<? xray_rel('3.0.0', '2011.04.21'); ?>
<p>Maintenance Branch 12 (released 2011.04.19)</p>
<ul>
    <li>Windows: <a href="http://sourceforge.net/projects/minecraftxray/files/xray_2.7_mb_12/minecraft_xray_2.7_mb_12.zip/download">.zip</a> | Linux/OSX: <a href="http://sourceforge.net/projects/minecraftxray/files/xray_2.7_mb_12/minecraft_xray_2.7_mb_12.tbz2/download">.tbz2</a> <em>(includes full source)</em></li>
    <li>Standalone sourcecode - <tt><a href="https://github.com/apocalyptech/minecraftxray/zipball/XRAY_2_7_MB_12">from github</a></tt></li>
</ul>
<p>Maintenance Branch 11 (released 2011.03.16)</p>
<ul>
    <li>Windows: <a href="http://sourceforge.net/projects/minecraftxray/files/xray_2.7_mb_11/minecraft_xray_2.7_mb_11.zip/download">.zip</a> | Linux/OSX: <a href="http://sourceforge.net/projects/minecraftxray/files/xray_2.7_mb_11/minecraft_xray_2.7_mb_11.tbz2/download">.tbz2</a> <em>(includes full source)</em></li>
    <li>Standalone sourcecode - <tt><a href="https://github.com/apocalyptech/minecraftxray/zipball/XRAY_2_7_MB_11">from github</a></tt></li>
</ul>
<p>Maintenance Branch 10 (released 2011.03.15)</p>
<ul>
    <li>Windows: <a href="http://sourceforge.net/projects/minecraftxray/files/xray_2.7_mb_10/minecraft_xray_2.7_mb_10.zip/download">.zip</a> | Linux/OSX: <a href="http://sourceforge.net/projects/minecraftxray/files/xray_2.7_mb_10/minecraft_xray_2.7_mb_10.tbz2/download">.tbz2</a> <em>(includes full source)</em></li>
    <li>Standalone sourcecode - <tt><a href="http://sourceforge.net/projects/minecraftxray/files/xray_2.7_mb_10/minecraft_xray_2.7_mb_10_src.zip/download">minecraft_xray_2.7_mb_10_src.zip</a></tt></li>
</ul>
<p>Maintenance Branch 9 (released 2011.02.22)</p>
<ul>
    <li>Windows: <a href="http://sourceforge.net/projects/minecraftxray/files/xray_2.7_mb_9/minecraft_xray_2.7_mb_9.zip/download">.zip</a> | Linux/OSX: <a href="http://sourceforge.net/projects/minecraftxray/files/xray_2.7_mb_9/minecraft_xray_2.7_mb_9.tbz2/download">.tbz2</a> <em>(includes full source)</em></li>
    <li>Standalone sourcecode - <tt><a href="http://sourceforge.net/projects/minecraftxray/files/xray_2.7_mb_9/minecraft_xray_2.7_mb_9_src.zip/download">minecraft_xray_2.7_mb_9_src.zip</a></tt></li>
</ul>
<p>Maintenance Branch 8 (released 2011.01.26)</p>
<ul>
    <li>Windows: <a href="http://sourceforge.net/projects/minecraftxray/files/xray_2.7_mb_8/minecraft_xray_2.7_mb_8.zip/download">.zip</a> | Linux/OSX: <a href="http://sourceforge.net/projects/minecraftxray/files/xray_2.7_mb_8/minecraft_xray_2.7_mb_8.tbz2/download">.tbz2</a> <em>(includes full source)</em></li>
    <li>Sourcecode Patch (versus 2.7) - <tt><a href="http://sourceforge.net/projects/minecraftxray/files/xray_2.7_mb_8/xray-2.7-maintenance_branch_8.patch/download">xray-2.7-maintenance_branch_8.patch</a></tt></li>
    <li>Sourcecode Patch (versus 2.7mb7) - <tt><a href="http://sourceforge.net/projects/minecraftxray/files/xray_2.7_mb_8/xray-2.7-mb_7_to_mb_8.patch/download">xray-2.7-mb_7_to_mb_8.patch</a></tt></li>
    <li>Standalone sourcecode - <tt><a href="http://sourceforge.net/projects/minecraftxray/files/xray_2.7_mb_8/minecraft_xray_2.7_mb_8_src.zip/download">minecraft_xray_2.7_mb_8_src.zip</a></tt></li>
</ul>
<p>Maintenance Branch 7 (released 2011.01.21)</p>
<ul>
    <li>Windows: <a href="http://sourceforge.net/projects/minecraftxray/files/xray_2.7_mb_7/minecraft_xray_2.7_mb_7.zip/download">.zip</a> | Linux/OSX: <a href="http://sourceforge.net/projects/minecraftxray/files/xray_2.7_mb_7/minecraft_xray_2.7_mb_7.tbz2/download">.tbz2</a> <em>(includes full source)</em></li>
    <li>Sourcecode Patch (versus 2.7) - <tt><a href="http://sourceforge.net/projects/minecraftxray/files/xray_2.7_mb_7/xray-2.7-maintenance_branch_7.patch/download">xray-2.7-maintenance_branch_7.patch</a></tt></li>
    <li>Sourcecode Patch (versus 2.7mb6) - <tt><a href="http://sourceforge.net/projects/minecraftxray/files/xray_2.7_mb_7/xray-2.7-mb_6_to_mb_7.patch/download">xray-2.7-mb_6_to_mb_7.patch</a></tt></li>
    <li>Standalone sourcecode - <tt><a href="http://sourceforge.net/projects/minecraftxray/files/xray_2.7_mb_7/minecraft_xray_2.7_mb_7_src.zip/download">minecraft_xray_2.7_mb_7_src.zip</a></tt></li>
</li>
</ul>
<p>Maintenance Branch 6 (released 2011.01.19)</p>
<ul>
    <li><a href="http://sourceforge.net/projects/minecraftxray/files/xray_2.7_mb_6/minecraft_xray_2.7_mb_6.zip/download">.zip for all platforms</a> <em>(includes full source)</em></li>
    <li>Sourcecode Patch (versus 2.7) - <tt><a href="http://sourceforge.net/projects/minecraftxray/files/xray_2.7_mb_6/xray-2.7-maintenance_branch_6.patch/download">xray-2.7-maintenance_branch_6.patch</a></tt></li>
    <li>Sourcecode Patch (versus 2.7mb5) - <tt><a href="http://sourceforge.net/projects/minecraftxray/files/xray_2.7_mb_6/xray-2.7-mb_5_to_mb_6.patch/download">xray-2.7-mb_5_to_mb_6.patch</a></tt></li>
    <li>Standalone sourcecode - <tt><a href="http://sourceforge.net/projects/minecraftxray/files/xray_2.7_mb_6/minecraft_xray_2.7_mb_6.zip/download">minecraft_xray_2.7_mb_6_src.zip</a></tt></li>
</li>
</ul>
<p>Maintenance Branch 5 (released 2011.01.17)</p>
<ul>
    <li><a href="http://sourceforge.net/projects/minecraftxray/files/xray_2.7_mb_5/minecraft_xray_2.7_mb_5.zip/download">.zip for all platforms</a> <em>(includes full source)</em></li>
    <li>Sourcecode Patch (versus 2.7) - <tt><a href="http://sourceforge.net/projects/minecraftxray/files/xray_2.7_mb_5/xray-2.7-maintenance_branch_5.patch/download">xray-2.7-maintenance_branch_5.patch</a></tt></li>
    <li>Sourcecode Patch (versus 2.7mb4) - <tt><a href="http://sourceforge.net/projects/minecraftxray/files/xray_2.7_mb_5/xray-2.7-mb_4_to_mb_5.patch/download">xray-2.7-mb_4_to_mb_5.patch</a></tt></li>
    <li>Standalone sourcecode - <tt><a href="http://sourceforge.net/projects/minecraftxray/files/xray_2.7_mb_5/minecraft_xray_2.7_mb_5_src.zip/download">minecraft_xray_2.7_mb_5_src.zip</a></tt></li>
</li>
</ul>
<p>Maintenance Branch 4 (released 2010.12.16)</p>
<ul>
    <li><a href="http://sourceforge.net/projects/minecraftxray/files/xray_2.7_mb_4/minecraft_xray_2.7_mb_4.zip/download">.zip for all platforms</a> <em>(includes full source)</em></li>
    <li>Sourcecode Patch (versus 2.7) - <tt><a href="http://sourceforge.net/projects/minecraftxray/files/xray_2.7_mb_4/xray-2.7-maintenance_branch_4.patch/download">xray-2.7-maintenance_branch_4.patch</a></tt></li>
    <li>Sourcecode Patch (versus 2.7mb3) - <tt><a href="http://sourceforge.net/projects/minecraftxray/files/xray_2.7_mb_4/xray-2.7-mb_3_to_mb_4.patch/download">xray-2.7-mb_3_to_mb_4.patch</a></tt></li>
    <li>Standalone sourcecode - <tt><a href="http://sourceforge.net/projects/minecraftxray/files/xray_2.7_mb_4/minecraft_xray_2.7_mb_4_src.zip/download">minecraft_xray_2.7_mb_4_src.zip</a></tt></li>
</li>
</ul>
<p>Maintenance Branch 3 (released 2010.12.08)</p>
<ul>
    <li><a href="http://sourceforge.net/projects/minecraftxray/files/xray_2.7_mb_3/minecraft_xray_2.7_mb_3.zip/download">.zip for all platforms</a> <em>(includes full source)</em></li>
    <li>Sourcecode Patch (versus 2.7) - <tt><a href="http://sourceforge.net/projects/minecraftxray/files/xray_2.7_mb_3/xray-2.7-maintenance_branch_3.patch/download">xray-2.7-maintenance_branch_3.patch</a></tt></li>
    <li>Sourcecode Patch (versus 2.7mb2) - <tt><a href="http://sourceforge.net/projects/minecraftxray/files/xray_2.7_mb_3/xray-2.7-mb_2_to_mb_3.patch/download">xray-2.7-mb_2_to_mb_3.patch</a></tt></li>
    <li>Standalone sourcecode - <tt><a href="http://sourceforge.net/projects/minecraftxray/files/xray_2.7_mb_3/minecraft_xray_2.7_mb_3_src.zip/download">minecraft_xray_2.7_mb_3_src.zip</a></tt></li>
</li>
</ul>
<p>Maintenance Branch 2 (released 2010.12.07)</p>
<ul>
    <li><a href="http://sourceforge.net/projects/minecraftxray/files/xray_2.7_mb_2/minecraft_xray_2.7_mb_2.zip/download">.zip for all platforms</a> <em>(includes full source)</em></li>
    <li>Sourcecode Patch (versus 2.7) - <tt><a href="http://sourceforge.net/projects/minecraftxray/files/xray_2.7_mb_2/xray-2.7-maintenance_branch_2.patch/download">xray-2.7-maintenance_branch_2.patch</a></tt></li>
    <li>Sourcecode Patch (versus 2.7mb1) - <tt><a href="http://sourceforge.net/projects/minecraftxray/files/xray_2.7_mb_2/xray-2.7-mb_1_to_mb_2.patch/download">xray-2.7-mb_1_to_mb_2.patch</a></tt></li>
    <li>Standalone sourcecode - <tt><a href="http://sourceforge.net/projects/minecraftxray/files/xray_2.7_mb_2/minecraft_xray_2.7_mb_2_src.zip/download">minecraft_xray_2.7_mb_2_src.zip</a></tt></li>
</li>
</ul>
<p>Maintenance Branch 1 (released 2010.12.06)</p>
<ul>
    <li><a href="http://sourceforge.net/projects/minecraftxray/files/xray_2.7_mb_1/minecraft_xray_2.7_mb_1.zip/download">.zip for all platforms</a> <em>(includes full source)</em></li>
    <li>Sourcecode Patch (versus 2.7) - <tt><a href="http://sourceforge.net/projects/minecraftxray/files/xray_2.7_mb_1/xray-2.7-maintenance_branch_1.patch/download">xray-2.7-maintenance_branch_1.patch</a></tt></li>
    <li>Standalone sourcecode - <tt><a href="http://sourceforge.net/projects/minecraftxray/files/xray_2.7_mb_1/minecraft_xray_2.7_mb_1_src.zip/download">minecraft_xray_2.7_mb_1_src.zip</a></tt></li>
</li>
</ul>
</blockquote>
</div>

</blockquote>

<h3>About</h3>

<blockquote>
<p>As mentioned above, Minecraft X-Ray is a utility whose primary purpose is to aid in finding
valuable ores and resources inside a Minecraft world.  By default, when you
select a resource type to highlight, X-Ray will cause any blocks of that
type to visibly glow within the range of loaded chunks.  The glowing can
be toggled between two different styles, or turned off entirely.  Turning the glowing
off will still leave all instances of the selected mineral visible on the
screen, which can be quite useful for more plentiful minerals like iron.
X-Ray can also be configured in the GUI to highlight any block from Minecraft, not
just ores.</p>

<p>Additionally, X-Ray is somewhat useful for taking a look at natural
underground caves, to find out how extensive they are, or even to help
find your way out if you're lost.</p>

<p>Minecraft X-Ray operates by loading your world from the hard drive.  This means that for
most people, X-Ray will not be useful for finding ores on multiplayer worlds, which are 
typically stored on a server the user won't have access to.  If you do have the server data
files, though, X-Ray will load it just fine, and even let you cycle through camera presets
of every player on the server.</p>

<p><a href="Changelog.txt">The Changelog</a> lists all the changes that have
taken place since X-Ray 2.7.  Some general features, though:

<ul>
    <li>Support for the new Chunk format "<a href="http://www.mojang.com/2012/02/14/new-minecraft-map-format-anvil">Anvil</a>," which was introduced in
        <a href="http://www.mojang.com/2012/02/15/minecraft-snapshot-12w07a/">Minecrat weekly build 12w07a</a> and was
        included in Minecraft 1.2.  X-Ray should still be able to open worlds as far back as Alpha.</li>
    <li>Full support for all blocks through Minecraft 1.2.  This includes Nether blocks, Lapis Lazuli, Note Blocks, Beds, Trapdoors, Pistons, Huge Mushrooms, Iron Bars, Enchantment Tables, Jungle blocks, Redstone Lamps, etc.</li>
    <li>Blocks are loaded on-demand, and the app should handle worlds of any size.</li>
    <li>Keybindings and resource highlight settings can be modified inside the program itself.</li>
    <li>"Explored" highlighting, which shows you where you've placed torches in underground tunnels.</li>
    <li>Custom block types can now be easily added by users (see <a href="modsupport.php">the Mod Support page</a>)</li>
    <li>Slime-spawn Chunk Highlighting</li>
</ul>

<p>See <a href="README.txt">the README</a> for more information, and
<a href="TODO.txt">the TODO file</a> for a list of known bugs and features
that I'd like to implement eventually.</p>
</blockquote>

<h3>Other</h3>
<blockquote>
<p>Feel free to mail me at pez@apocalyptech.com with questions, though your
questions may possibly do better in the X-Ray forum topic:</p>

<blockquote><a href="http://www.minecraftforum.net/viewtopic.php?f=1022&t=119356">http://www.minecraftforum.net/viewtopic.php?f=1022&amp;t=119356</a></blockquote>

<p>If you've got bugs to report, the best place would probably be
<a href="https://sourceforge.net/tracker/?group_id=398856">Sourceforge's
bug tracker</a>.</p>

<p>Many thanks to plusminus for creating the utility, and double THAT amount
of thanks for releasing the sourcecode as well.</p>

<p>Minecraft X-Ray is released under the <a href="COPYING.txt">New/Modified BSD License</a>.</p>
</blockquote>

<h3>Shameless Advertising</h3>
<blockquote>
<p><a href="http://sourceforge.net/donate/index.php?group_id=398856"><img src="project-support.jpg" width="88" height="32" border="0" alt="Support This Project" /> </a></p>
<p>Have too much money?  I could help you with that, if you want!</p>
</blockquote>

<?
xray_footer();
?>
