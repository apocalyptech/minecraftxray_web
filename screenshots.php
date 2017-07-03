<?
require_once('func.php');
$page->set_title('Screenshots');
$page->apoc_header();

$shots_per_row = 2;
$shots = array(
    'xray_river' => 'Above Ground',
    'xray_slime' => 'Underground, Slime-Spawn Highlighting',
    'xray_explored' => '"Explored" Highlighting',
    'xray_ores_and_slime' => 'Ore Toggles',
    'xray_nether' => 'The Nether',
    'xray_chasm' => 'Chasm',
    'xray_key_binding' => 'Keybinding Dialog',
    'xray_block_highlight' => 'Block Highlight Dialog',
);

?>

<p style="text-align: center;"><em>Click for fullsize versions</em></p>

<blockquote>
<table class="screenshots">

<?
$i = 0;
foreach ($shots as $basefile => $desc)
{
    if ($i % $shots_per_row == 0)
    {
        print "<tr>\n";
    }
    print "<td>\n";

    $fullfile = sprintf('%s.png', $basefile);
    $thumbfile = sprintf('%s_thumb.png', $basefile);
    if (file_exists($thumbfile))
    {
        printf('<a href="%s"><img src="%s" border="0" alt="%s"></a><br>',
            $fullfile, $thumbfile, htmlentities($desc));
    }
    else
    {
        printf('<img src="%s" border="0" alt="%s"><br>',
            $fullfile, htmlentities($desc));
    }
    printf("%s\n", $desc);
    print "</td>\n";
    if ($i % $shots_per_row == $shots_per_row - 1)
    {
        print "</tr>\n";
    }
    $i++;
}
if ($i % $shots_per_row == $shots_per_row - 1)
{
    print "<td>&nbsp;</td>\n";
    print "</tr>\n";
}
?>

</table>
</blockquote>

<?
$page->apoc_footer();
?>
