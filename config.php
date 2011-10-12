<?
require_once('func.php');
xray_header();

$resources = array(
    'AIR_PORTAL',
    'AIR_PORTAL_FRAME',
    'BED',
    'BEDROCK',
    'BOOKSHELF',
    'BREWING_STAND',
    'BRICK',
    'BRICK_STAIRS',
    'BROWN_MUSHROOM',
    'BURNING_FURNACE',
    'CACTUS',
    'CAKE',
    'CAULDRON',
    'CHEST',
    'CLAY',
    'COAL_ORE',
    'COBBLESTONE',
    'COBBLESTONE_STAIRS',
    'CROPS',
    'DEAD_SHRUB',
    'DETECTOR_RAIL',
    'DIAMOND_BLOCK',
    'DIAMOND_ORE',
    'DIRT',
    'DISPENSER',
    'DOUBLE_SLAB',
    'ENCHANTMENT_TABLE',
    'FARMLAND',
    'FENCE',
    'FENCE_GATE',
    'FIRE',
    'FURNACE',
    'GLASS',
    'GLASS_PANE',
    'GLOWING_REDSTONE_ORE',
    'GLOWSTONE',
    'GOLD_BLOCK',
    'GOLD_ORE',
    'GRASS',
    'GRAVEL',
    'HUGE_BROWN_MUSHROOM',
    'HUGE_RED_MUSHROOM',
    'ICE',
    'IRON_BARS',
    'IRON_BLOCK',
    'IRON_DOOR',
    'IRON_ORE',
    'JACK_O_LANTERN',
    'JUKEBOX',
    'LADDER',
    'LAPIS_LAZULI_BLOCK',
    'LAPIS_LAZULI_ORE',
    'LAVA',
    'LEAVES',
    'LEVER',
    'LILY_PAD',
    'MELON',
    'MELON_STEM',
    'MINECART_TRACKS',
    'MOB_SPAWNER',
    'MOSSY_COBBLESTONE',
    'MYCELIUM',
    'NETHER_BRICK',
    'NETHER_FENCE',
    'NETHER_STAIRS',
    'NETHER_WART',
    'NETHERRACK',
    'NOTE_BLOCK',
    'OBSIDIAN',
    'PISTON_BODY',
    'PISTON_HEAD',
    'PISTON_STICKY_BODY',
    'PLANK',
    'PORTAL',
    'POWERED_RAIL',
    'PUMPKIN',
    'PUMPKIN_STEM',
    'REDSTONE_ORE',
    'REDSTONE_REPEATER_OFF',
    'REDSTONE_REPEATER_ON',
    'REDSTONE_TORCH_OFF',
    'REDSTONE_TORCH_ON',
    'REDSTONE_WIRE',
    'RED_MUSHROOM',
    'RED_ROSE',
    'SAND',
    'SANDSTONE',
    'SAPLING',
    'SIGNPOST',
    'SILVERFISH',
    'SLAB',
    'SNOW',
    'SNOW_BLOCK',
    'SOUL_SAND',
    'SPONGE',
    'STATIONARY_LAVA',
    'STATIONARY_WATER',
    'STONE',
    'STONE_BRICK',
    'STONE_BRICK_STAIRS',
    'STONE_BUTTON',
    'STONE_PRESSURE_PLATE',
    'SUGARCANE',
    'TALL_GRASS',
    'TNT',
    'TORCH',
    'TRAPDOOR',
    'VINE',
    'WALL_SIGN',
    'WATER',
    'WEB',
    'WOOD',
    'WOODEN_DOOR',
    'WOODEN_PRESSURE_PLATE',
    'WOODEN_STAIRS',
    'WOOL',
    'WORKBENCH',
    'YELLOW_FLOWER',
);

?>

<h3>Configuration File / Keymappings</h3>

<blockquote>
<p>As of Maintenance Branch 7, X-Ray will load its keymappings from a properties file,
and as of MB8, it will load its list of highlightable resources from that config file as
well.  The file will be created when you first start up the program.  It can be found at:
<ul>
<li><strong>Windows:</strong> <tt>%appdata%\.minecraft_xray\xray.properties</tt></li>
<li><strong>OSX:</strong> <tt>~/Library/Application Support/.minecraft_xray/xray.properties</tt></li>
<li><strong>Linux:</strong> <tt>~/.minecraft_xray/xray.properties</tt></li>
</ul>
The key names used should be the ones from
<a href="http://www.lwjgl.org/javadoc/constant-values.html#org.lwjgl.input.Keyboard.KEY_1">lwjgl.org</a>, though without the <tt>KEY_</tt> prefix.  Use "<tt>NONE</tt>" to disable an action.  Note that right now only keyboard keys can
be bound (the mouse buttons are hard-coded).  The default keybindings can be found
on <a href="usage.php">the usage page</a>.</p>
<p>To reset X-Ray to its default settings, simply remove the properties file.
Eventually there might be a GUI to set these options.</p>
</blockquote>

<h3>Resource Names</h3>

<blockquote>
<p>For resources, you should use the following values in the file:</p>

<table class="resourcelist">
<tr>
<?
$cols = 4;
$num_per = (int)(count($resources)/$cols);
if (count($resources) % $cols > 0)
{
    $num_per += 1;
}
for ($i=0; $i<$cols; $i++)
{
    print "<td>\n";
    for ($j=($num_per * $i); $j<($num_per * ($i+1)); $j++)
    {
        if ($j >= count($resources))
        {
            break;
        }
        print '<tt>' . $resources[$j] . "</tt><br>\n";
    }
    print "</td>\n";
}
?>
</tr>
</table>

</blockquote>

<h3>Overriding Textures</h3>

<blockquote>
<p>In general, X-Ray will attempt to use the same texture pack that Minecraft
is using, but there may be some circumstances where you want X-Ray to use
a particular texture.</p>
<p>X-Ray will look in four locations for the texture information to load, in
this order:</p>
<ol>
<li>Inside the following directories, as an override:
  <ul>
  <li><strong>Windows:</strong> <tt>%appdata%\.minecraft_xray\textures\</tt></li>
  <li><strong>OSX:</strong> <tt>~/Library/Application Support/.minecraft_xray/textures/</tt></li>
  <li><strong>Linux:</strong> <tt>~/.minecraft_xray/textures/</tt><br><br></li>
  </ul>
</li>
<li>From the texture pack that Minecraft itself is set to use<br><br></li>
<li>From Minecraft's builtin texture pack.  This
could be a custom texture pack if you've patched the Minecraft JAR file
directly with a texture pack, as opposed to using Minecraft's built-in
texture-loading mechanism.<br><br></li>
<li>Starting with X-Ray 3.4.0, from a bundled, built-in texturepack
included with X-Ray itself.
This method should theoretically never fail, unless the X-Ray install
directory has been modified.  In X-Ray 3.4.0, we're using the
<a href="http://www.minecraftforum.net/topic/72747-">Faithful 32x32</a>
pack, by Vattic.</li>
</ol>
<p>The override texture directory mirrors the internal structure of the
texturepacks, but should <em>not</em> be a zipfile.  Right now there are
four files that X-Ray could end up reading from this directory:
<ul>
<li><tt>terrain.png</tt></li>
<li><tt>particles.png</tt> <em>(for the "fire" texture)</em></li>
<li><tt>misc/water.png</tt></li>
<li><tt>art/kz.png</tt> <em>(this is the Paintings texture file)</em></li>
</ul>
So, rather than packing
those inside a zipfile, just put them inside the "textures" directory and
restart X-Ray.</p>
<p>
Note that this <strong>will</strong> work for files specified in
<a href="modsupport.php">custom block definition files</a>.
For instance, if you're using Aethermod and want 
to override the "<tt>Icestone.png</tt>" file, you'd put your own <tt>Icestone.png</tt> file into
<tt>.minecraft_xray/textures/aether/blocks/</tt>.
</p>
</blockquote>

<?
xray_footer();
?>
