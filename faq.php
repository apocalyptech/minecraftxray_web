<?
require_once('func.php');
$page->set_title('FAQ');
$page->apoc_header();
?>

<h2>Frequently Asked Questions</h2>

<blockquote>
<dl>

<dt>How do I start X-Ray?</dt>
<dd>
See the <a href="usage.php">Usage section</a>, but either unzip or untar the archive, and then run the appropriate shortcut:
<table style="margin-left: 2em;">
<tr>
<th style="text-align: right;">Windows</th>
<td style="padding-left: .5em;"><tt>minecraft_xray.exe</tt> or <tt>minecraft_xray.bat</tt></td>
</tr>
<tr>
<th style="text-align: right;">Linux / OSX</th>
<td style="padding-left: .5em;"><tt>minecraft_xray.sh</tt> or <tt>minecraft_xray_osx.command</tt></td>
</tr>
</table>
</dd>

<dt>How do I load an SMP/multiplayer world?</dt>
<dd>
X-Ray needs to have access to the actual world directory in order to load
a multiplayer world.  Once you have a copy of the world directory on your
local hard drive (or on a network share you have access to), just start
up X-Ray, choose "Other..." from the world list, and browse to where
the world directory is.  If you hear people talking about using X-Ray
on an SMP world, it's pretty likely that they're either talking about the
unrelated
<a href="http://www.minecraftforum.net/topic/240772-v19pre5-cjb-mods-v500pre-02-11-2011/">XRay mod</a>
or the also-unrelated
<a href="http://www.minecraftforum.net/viewtopic.php?f=1021&t=171726">X-Ray Texture Pack</a>.
</dd>

<dt>How do I see my current position?</dt>
<dd>
The default key for this is the "grave" accent, also known as a backtick.
It's the same key as the tilde (~) on American keyboards.  You can override
the key in the config file if you want; for details see the
<a href="config.php">configuration page</a>.  A full list of available keys
is on the <a href="usage.php">usage page</a>.
</dd>

<dt>Why won't X-Ray start up?</dt>
<dd>
<p>
If there's an error, X-Ray should report it to you in a popup window.
You could report that error (with the full text of the Exception shown)
either
<a href="http://www.minecraftforum.net/viewtopic.php?f=1022&t=119356">in the forums</a> or
<a href="https://sourceforge.net/tracker/?group_id=398856&atid=1654251">at the bug tracker</a>, or mail me at cj@apocalyptech.com.  Additionally, X-Ray
should generate a file called "<tt>minecraft_xray_output_log.txt</tt>" in
the main directory where X-Ray is contained.  That file may contain useful
information to include in the bug report as well.
</p>
<!-- I actually haven't seen this in quite awhile; perhaps it's no longer
     an issue...
<p>
There's one error that some people are having that I can't seem to reproduce:
<pre>Exception in thread "main" java.lang.NoClassDefFoundError: com/apocalyptech/minecraft/xray/XRay
Caused by: java.lang.ClassNotFoundException: com.apocalyptech.minecraft.xray.XRay
at java.net.URLClassLoader$1.run(Unknown Source)
at java.security.AccessController.doPrivileged(Native Method)
at java.net.URLClassLoader.findClass(Unknown Source)
at java.lang.ClassLoader.loadClass(Unknown Source)
at sun.misc.Launcher$AppClassLoader.loadClass(Unknown Source)
at java.lang.ClassLoader.loadClass(Unknown Source)
Could not find the main class: com.apocalyptech.minecraft.xray.XRay. Program will exit.</pre>
So far I've seen that on folks running Windows XP.  I really have no idea
what's going on there, though I suspect that it's something to do with an
improper Java installation on their machines.  If this does happen to you
and you want to help track it down, it would be a big help to see what
happens if you run the development version from git.  To do so, you'd first
<a href="https://github.com/apocalyptech/minecraftxray/zipball/master">download
a zipfile from git</a>,
and then <a href="http://ant.apache.org/bindownload.cgi">install ant</a>,
the build tool used to build the project.  There are some instructions for
installing it on Windows <a href="http://ant.apache.org/manual/install.html">in
its manual</a>, though it looks like it may be a little complex for Windows
folks.  From there, you'd go into the unzipped directory inside <tt>cmd.exe</tt>
and run "<tt>ant run</tt>" (without the quotes).  If you do take this upon
yourself, please let me know what happens!
</p>
-->
</dd>

</dl>
</blockquote>

<?
$page->apoc_footer();
?>
