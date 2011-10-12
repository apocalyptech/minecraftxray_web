<?
require_once('func.php');
xray_header();
?>

<h3>Mod Support</h3>

<blockquote>
<p>
As of version 3.3.0, X-Ray includes a mechanism to allow the user to
define custom block types.  X-Ray will read any block definition file
found inside the "<tt>blockdefs</tt>" directory inside <tt>.minecraft_xray</tt>.  This
is located at:
</p>

<ul>
<li><strong>Windows:</strong> <tt>%appdata%\.minecraft_xray\blockdefs\</tt></li>
<li><strong>OSX:</strong> <tt>~/Library/Application Support/.minecraft_xray/blockdefs/</tt></li>
<li><strong>Linux:</strong> <tt>~/.minecraft_xray/blockdefs/</tt></li>
</ul>

<p>
Each file must have a "<tt>.yaml</tt>" extension, and X-Ray won't read any file
named "<tt>minecraft.yaml</tt>".  It would be best practice to name the file
after the mod you're intending to support, such as "<tt>aether.yaml</tt>".  The
file format is in <a href="http://yaml.org/spec/1.1/">YAML 1.1</a>
(more info at <a href="http://en.wikipedia.org/wiki/YAML">wikipedia</a>).
</p>

<p>
Detailed documentation about the format can be found inside the master
<tt><a href="minecraft.yaml">minecraft.yaml</a></tt> file.  As an example
of what a user file might look like, here's a partial file which adds
support for a number of blocks for Aethermod:
<tt><a href="aether.yaml">aether.yaml</a></tt>.  Note that it doesn't
include support for even the majority of the Aether blocks.
</p>

<p>
As mentioned above, X-Ray will automatically attempt to load any YAML 
file it finds in the <tt>blockdefs</tt> directory, and it will display which ones
it was able to load on the opening dialog.  If your file doesn't show up
in the list, there's probably an error in it - you should be able to 
find that error in the file <tt>minecraft_xray_output_log.txt</tt> in the root
X-Ray directory.
Linux and OSX users (and Windows users who use the .BAT file instead of the
.EXE) will see the errors on the console X-Ray was launched
from, as well.
</p>

<p>
If people do start using this feature, I think it would be nice to have
a central repository for YAML files, for various mods.  For now, if you
complete a YAML file for a mod and want it up here, you can just
<a href="mailto:pez@apocalyptech.com?subject=Minecraft X-Ray Block Definition Submission">email me</a>
with the file and I'll put it up here manually.  Eventually I might do
something a little more fancy.
</p>

<p style="text-align: center;">
<a href="xray_aether.png"><img src="xray_aether_thumb.png" border="0"></a><br>
<em>Aether, with partial block definitions</em>
</p>

<?
xray_footer();
?>
