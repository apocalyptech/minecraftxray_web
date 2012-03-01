<?
require_once('func.php');
xray_header();
?>

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
directory has been modified.</li>
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

<h3>Configuration File / Keymappings</h3>

<blockquote>
<p>Starting with X-Ray 3.5.0, X-Ray has a GUI to alter both keybindings and Block
Highlighting, so there should be no need to edit its properties file by hand.  There's
nothing preventing you from doing so, though.  The properties file will be created
when you first start up the program.  It can be found at:
<ul>
<li><strong>Windows:</strong> <tt>%appdata%\.minecraft_xray\xray.properties</tt></li>
<li><strong>OSX:</strong> <tt>~/Library/Application Support/.minecraft_xray/xray.properties</tt></li>
<li><strong>Linux:</strong> <tt>~/.minecraft_xray/xray.properties</tt></li>
</ul>
The key names used should be the ones from
<a href="http://www.lwjgl.org/javadoc/constant-values.html#org.lwjgl.input.Keyboard.KEY_1">lwjgl.org</a>, though without the <tt>KEY_</tt> prefix.  Use "<tt>NONE</tt>" to disable an action.  Note that right now only keyboard keys can
be bound (the mouse buttons are hard-coded).  The default keybindings can be found
on <a href="usage.php">the usage page</a>.</p>
<p>To reset X-Ray to its default settings, simply remove the properties file.  Note that
if you edit this file while X-Ray is running, there's a chance it might be overwritten
by X-Ray, so if you are going to edit it by hand, do so when X-Ray is not running.</p>
</blockquote>

<?
xray_footer();
?>
