<!DOCTYPE html>
<html>
<body>
<table width="270px" border="1px" cellspacing="0px">
        <?php
        echo "";
        $value = 0;
        $col = 0;
  
        do {
            $row = 0;
            echo "<tr>";
            $value = $col;
  
            do {  
                if($value%2 == 0) {
                    echo 
"<td height=30px width=30px bgcolor=black></td>";
                    $value++;
                }
                else {
                    echo 
"<td height=30px width=30px bgcolor=white></td>";
                    $value++;
                }
                $row++;
            }while($row < 8);
            echo "</tr>";
            $col++;
        }while($col < 8);
        ?>
    </table>
</body>
</html>