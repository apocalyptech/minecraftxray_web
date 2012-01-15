<?

$links = array('index.php', 'usage.php', 'config.php', 'modsupport.php', 'faq.php', 'screenshots.php');
$link_labels = array(
    'index.php' => 'Home',
    'usage.php' => 'Usage',
    'config.php' => 'Configuration',
    'modsupport.php' => 'Mod Support',
    'faq.php' => 'FAQ',
    'screenshots.php' => 'Screenshots',
);

function xray_header($extrahead='', $extrabody='', $extracss='')
{
    global $links;
    global $link_labels;

    $main_css = 'main.css?v=2';

    # Any extra CSS?
    if (is_array($extracss))
    {
        array_unshift($extracss, $main_css);
    }
    else
    {
        $extracss = array($main_css);
    }

    # Figure out what page we're loading
    $pagearr = explode('/', $_SERVER['SCRIPT_NAME']);
    $whichpage = end($pagearr);
    if (!array_key_exists($whichpage, $link_labels))
    {
        $whichpage = $links[0];
    }

    # Custom title
    $base_title = 'Minecraft X-Ray';
    $title = $base_title . ' | ' . $link_labels[$whichpage];

    $cssarrtext = array();
    foreach ($extracss as $css)
    {
        $cssarrtext[] = '<link rel="stylesheet" type="text/css" media="all" href="' . $css . '"></link>';
    }
    $csstext = join("\n", $cssarrtext);

	?>
<html>
<head>
<title><?=$title?></title>
<?=$csstext?>
<?=$extrahead?>
</head>
<body>
<?=$extrabody?>
<div class="header">
<h2><?=$base_title?></h2>
<div class="navigation">
	<?
    $linkarr = array();
    foreach ($links as $link)
    {
        if ($link == $whichpage)
        {
            $linkarr[] = '<span class="section">' . $link_labels[$link] . '</span>';
        }
        else
        {
            $linkarr[] = '<span class="section"><a href="' . $link . '">' . $link_labels[$link] . '</a></span>';
        }
    }
    print implode(" |\n ", $linkarr) . "\n";
    print "</div>\n";
    print "</div>\n";
}

function xray_footer()
{
	print '</body></html>';
}

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
