<?
require_once('func.php');
xray_header();

$shots_per_row = 2;
$shots = array(
    'xray_river' => 'Above Ground',
    'xray_slime' => 'Underground, Slime-Spawn Highlighting',
    'xray_explored' => '"Explored" Highlighting',
    'xray_ores_and_slime' => 'Ore Toggles',
    'xray_nether' => 'The Nether',
    'xray_chasm' => 'Chasm'
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
    printf('<a href="%s"><img src="%s" border="0" alt="%s"></a><br>',
        $basefile . '.png', $basefile . '_thumb.png', htmlentities($desc));
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
xray_footer();
?>
