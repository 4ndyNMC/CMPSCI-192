<!DOCTYPE html>
<html>
    <body>
        <div>
            yay i did it :)
            <?php
              function make_table($s1,$s2,$s3,$s4){
                  //echo "<table border=\"1\">";
                  //echo "<tr><td colspan=\"3\">";
                  //echo "</td></tr><tr>";
                  //echo "<td>14</td><td>32</td><td>71</td>";
                  //echo "</tr></table>";
                  return "<style>table, th, td {border: 1px solid black;}</style>
                         <table border=\"1\"><tr>
                         <td>$s1</td><td>$s2</td><td>$s3</td><td>$s4</td>";
              }
              echo make_table("head","shoulders","knees","toes");
            ?>
        </div>
    </body>
</html>