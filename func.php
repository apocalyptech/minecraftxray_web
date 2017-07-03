<?

require_once('../inc/apoc.php');
$page->set_base_title('Minecraft X-Ray');
$page->use_base_title_in_page_only = true;
$page->set_app_menu(new MenuItem('/minecraft-xray/', 'Root', array(
    new MenuItem(NULL, 'Home'),
    new MenuItem('usage.php', 'Usage'),
    new MenuItem('config.php', 'Configuration'),
    new MenuItem('modsupport.php', 'Mod Support'),
    new MenuItem('faq.php', 'FAQ'),
    new MenuItem('screenshots.php', 'Screenshots'),
)));
$page->add_css('main.css', 2);

function xray_rel($ver, $date, $tgz=false)
{
    $tag_ver = str_replace('.', '_', $ver);
    printf("<p>%s (released %s)</p>\n", $ver, $date);
    printf("<ul>\n");
    printf("    <li>Windows: <a href=\"http://sourceforge.net/projects/minecraftxray/files/xray_%s/minecraft_xray_%s.zip/download\">.zip</a> | Linux/OSX: <a href=\"http://sourceforge.net/projects/minecraftxray/files/xray_%s/minecraft_xray_%s.tbz2/download\">.tbz2</a>",
        $ver, $ver, $ver, $ver);
    if ($tgz)
    {
        printf(" or <a href=\"http://sourceforge.net/projects/minecraftxray/files/xray_%s/minecraft_xray_%s.tgz/download\">.tgz</a>", $ver, $ver);
    }
    printf(" <em>(includes full source)</em></li>\n");
    printf("    <li>Standalone sourcecode - <tt><a href=\"https://github.com/apocalyptech/minecraftxray/zipball/XRAY_%s\">from github</a></tt></li>\n",
        $tag_ver);
    printf("</ul>\n");
}

?>
