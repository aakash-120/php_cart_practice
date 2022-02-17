<?php
echo "received value from session";
function display2()
{
    $html = "";
    $html .= "<table>"; 
    foreach ($_SESSION['cart'] as $key => $value) {
        $html .= "<tr>"; 
        foreach($value as $key2 => $value2)
        {
                $html.= "<td>$value2</td>";                 
        }
        $html.= "<td><input type = 'button' name = 'delete' value = 'delete'><input type = 'button' name = 'edit' value = 'edit'></td>";
        $html .= "</tr>";
    }
    $html .= "</table>";
    return $html;
}
?>

 <?php echo $html; ?>

