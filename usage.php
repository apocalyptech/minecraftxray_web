<?
require_once('func.php');
$page->set_title('Usage');
$page->apoc_header();

$keys = array(
    'Movement' => array(
        array('Movement', 'WASD'),
        array('Fly Upward', 'SPACE'),
        array('Fly Downward', 'Left Shift'),
        array('Move Faster', 'Left Control / Left Mouse Button <em>(hold)</em>'),
        array('Move Slower', 'Right Shift / Right Mouse Button <em>(hold)</em>'),
    ),
    'Camera' => array(
        array('Warp to Spawnpoint', 'HOME'),
        array('Warp to Player Position', 'END'),
        array('Cycle Up through Presets', 'INS'),
        array('Cycle Down through Presets', 'DEL'),
        array('Jump to Arbitrary Position', 'J'),
        array('Jump to Nearest Valid Chunk', '- <em>(dash, minus)</em>'),
        array('Jump to next dimension', 'N'),
        array('Jump to previous dimension', 'P'),
        array('Lock to Vertical Axis', 'L'),
    ),
    'Rendering' => array(
        array('Highlight Ores', 'F1 - F10'),
        array('Toggle Highlight Glow', 'H'),
        array('Set Highlight distance', '1 - 7'),
        array('Toggle Fullbright', 'F'),
        array('Toggle Bedrock', 'B'),
        array('Toggle Water', 'T'),
        array('Increase Lighting Range', '+ <em>(on numeric keypad)</em>'),
        array('Decrease Lighting Range', '- <em>(on numeric keypad)</em>'),
        array('Set visibility range', 'NUMPAD1 - NUMPAD6 <em>(remember numlock)</em>'),
        array('Toggle "explored" areas', 'E'),
        array('Toggle accurate grass sides', 'G'),
        array('Toggle Beta 1.9 fences', 'C'),
        array('Toggle Silverfish highlighting', 'V'),
        array('Toggle Slime Chunk highlighting', 'M'),
        array('Toggle Chunk Borders', 'U'),
    ),
    'Other' => array(
        array('Toggle Fullscreen', 'BACKSPACE'),
        array('Toggle Level Info', '` <em>(grave accent)</em>'),
        array('Toggle Rendering Info', 'R <em>(on by default)</em>'),
        array('Reload Map from Disk', '='),
        array('Open New Map', 'O'),
        array('Show large map', 'TAB'),
        array('Release Mouse', 'ESC'),
        array('Show/Update Key Bindings', 'Y'),
        array('Change Block Highlights', '] <em>(right bracket)</em>'),
        array('Quit', 'CTRL-Q'),
    ),
);
?>

<h2>Installing / Running</h2>

<blockquote>
<p>Minecraft X-Ray is a standalone application that's run outside of Minecraft itself.
It is not a mod, and you will never make modifications to Minecraft's <tt>minecraft.jar</tt>
to run X-Ray.</p>

<p>Currently, there isn't an installer for X-Ray.  You just unzip/untar the package
wherever you like and then run the appropriate executable:</p>

<ul>
<li>Windows users should be able to run the program by just doubleclicking on
<tt>minecraft_xray.exe</tt> or <tt>minecraft_xray.bat</tt>.</li>
<li>Linux and OSX users should be able to doubleclick on <tt>minecraft_xray.sh</tt>
or <tt>minecraft_xray_osx.command</tt> <em>(the files are identical as of 3.3.0)</em>.</li>
</ul>

</blockquote>

<h2>Default Keys</h2>

<blockquote>
<table class="toptable">
<?
$catcount = 0;
foreach ($keys as $category => $keylist)
{
    if ($catcount % 2 == 0)
    {
       if ($catcount != 0)
       {
           print "</tr>\n";
       }
       print "<tr>\n";
    }

    print "<td>\n";
    print '<h3>' . $category . "</h3>\n";
    print "<table>\n";
    foreach ($keylist as $keyarr)
    {
        print "<tr>\n";
        print '<td style="text-align: right;">' . $keyarr[0] . ":</td>\n";
        print '<td><strong>' . $keyarr[1] . "</strong></td>\n";
        print "</tr>\n";
    }
    print "</table>\n";

    $catcount++;
}
if ($catcount % 2 == 1)
{
    print "<td>&nbsp;</td>\n";
}
?>
</tr>
</table>
</blockquote>

<h2>Rendering Details</h2>

<blockquote>
<p>There are three main "sliders" available to control how things are
rendered: Visibility range, Highlighting range, and Lighting.</p>

<p>Visibility range specifies how many chunks away from the camera the
app will render at any one time.  The minimum is 3, the maximum is 8.</p>

<p>Highlighting range specifies how many chunks away from the camera the
app will highlight/glow the selected resources that you're looking for.
Often (with more common resources) you'll want to keep this value very
low.  Otherwise it becomes quite difficult to tell where you're actually
going.  For less common resources (like pumpkins or clay), you'll want
to have it set as high as possible, though.  Note that this will never
be able to highlight ores outside the set visibility range.</p>

<p>Lighting just determines the OpenGL "fog" value.  This is useful to have
a better sense of scale while moving around.  You can toggle into
"fullbright" mode with <tt>F</tt>, which will disable the fog entirely.</p>

<p>In addition to the sliders, there are a few toggles which let you set
whether to always draw water and bedrock.  Water is on by default, and
bedrock is off by default (though it will of course show up if necessary,
regardless of this setting).  Silverfish highlighting is on by default 
(they will be tinted red).</p>

<p>The ore highlighting glow can be toggled using the <tt>H</tt> key.  This will
cycle between the three states of ore highlighting glow.  The default is a
rainbow effect which one user has described as "disco."  The next selection
is a plain white highlighting which was the default until version 3.4.0.
Finally, the glow will be turned off entirely.  Note that with the glow
turned off, every instance of the specified ore will still be rendered
onscreen, so this toggle is still quite useful for tracking down ores.</p>

<p>Minecraft Beta 1.9 changed the way fences work slightly, so that they will
"connect" up to adjacent solid blocks.  X-Ray will now, by default, render
fences that way, but you can toggle it with the "<tt>C</tt>" key, in case you're
viewing pre-1.9 maps.</p>

<p>The "Slime Chunk" option will turn on the highlighting of chunks which
should be able to spawn Slimes.  The highlighting will actually only occur
on the bottom part of the map, where the slimes themselves are actually
capable of spawning.  The equation used to calculate this was taken from
<a href="http://www.minecraftwiki.net/wiki/Slime#Spawning">minecraftwiki</a>
in early October, 2011, when Beta 1.9-pre2 was out.  The equation may or
may not be valid for
earlier or later versions of Minecraft, but should be at least valid
for Minecraft Beta 1.6 through Minecraft 1.0.  The default key to toggle this
highlighting is "<tt>M</tt>".  Note that in Minecraft versions prior to
Beta 1.9-pre5, slimes would spawn only under y=16, whereas from that point
on, slimes will spawn under y=40.  X-Ray will highlight up to y=40 for
all maps.</p>

<p>Lastly, there is an "explored" area toggle, which basically just tints
any blocks around torches with a green color.  This makes it very easy
to see where you've explored in underground caves (and is fairly useless
above ground).  It does this in a 7x7x7 cube centered around the torches,
so the highlighting can easily "bleed over" into adjacent tunnels where
you might not have actually explored, but it's usually very easy to tell
when that's happened.</p>

<p>The rendering information popup can be toggled with "<tt>R</tt>" and is on by
default.  This will let you know what these various settings are set to.</p>

</blockquote>

<h2>Camera Options</h2>

<blockquote>
<p>For singleplayer worlds, there will be two camera presets: the spawnpoint,
and the location of the player.  In this case, <tt>INS/DEL</tt> isn't really any
different than using <tt>HOME/END</tt> to jump directly to those presets.  If you
use X-Ray to load a multiplayer world, though, there will also be a camera
preset for each multiplayer user discovered in the world folder, which you
can then cycle through using <tt>INS/DEL</tt>.  If you've imported a multiplayer
map into singleplayer, the app should create presets for the singleplayer
character AND any multiplayer users still found in the <tt>players</tt> directory.</p>

<p>If your world contains a Nether subdirectory, you can warp back and forth
between them with the "<tt>N</tt>" key.  The app will attempt to automatically
translate your position based on where you'd go if you had just used a
portal, though this should only be considered a rough estimate.  Note that
especially when in the Nether, it's possible to warp back to the Overworld
at a location where there isn't actually any map data.  Eventually I'll
try to check for this and make sure that you don't warp outside of the
map, but for now just use the camera presets to get back into known
territory if that happens to you.</p>

<p>By default, if you move forward, X-Ray will move directly towards the point
you're looking at, including up/down.  If you want to "lock" the camera to
the vertical axis, you can do so with "<tt>L</tt>," at which time moving forward/back
will only move the camera horizontally.  You can still move the camera up
and down manually, of course.</p>
</blockquote>

<?
$page->apoc_footer();
?>
