<? // vim: set expandtab tabstop=4 shiftwidth=4: ?>
<?
require_once('config.php');
// note that cols is a var here, but it's hardcoded in the report
$cols = 3;
$total_res = count($resources);
$num_per = (int)($total_res / $cols);
if ($total_res % $cols > 0)
{
    $num_per++;
}

// Create the three arrays
$column_vals = array();
$max_lengths = array();
for ($i=0; $i<$cols; $i++)
{
    $column_vals[] = array();
    $max_lengths[] = 0;
}

// Now add to the arrays
for ($i=0; $i<$cols; $i++)
{
    for ($j=($num_per * $i); $j<($num_per * ($i+1)); $j++)
    {
        if ($j >= $total_res)
        {
            break;
        }
        $column_vals[$i][] = $resources[$j];
        if (strlen($resources[$j]) > $max_lengths[$i])
        {
            $max_lengths[$i] = strlen($resources[$j]);
        }
    }
}

// Now report
print "<pre>\n";
for ($i=0; $i<$num_per; $i++)
{
    printf('    %-' . ($max_lengths[0] + 4) . 's%-' .
        ($max_lengths[1] + 4) . 's%-' .
        ($max_lengths[2] + 4) . "s\n",
        $column_vals[0][$i],
        $column_vals[1][$i],
        ($i >= count($column_vals[2]) ? '' : $column_vals[2][$i]));
}
print "</pre>\n";
?>
