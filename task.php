<?php
     include 'task.html';
    for($row=1;$row<=8;$row++)
    {
        echo "<tr>";
    for($column=1;$column<=8;$column++)
    {
        $total=$row+$column;
        if($total%2==0){
                        echo "<td class='whitetd'></td>";
                        }else{
                             echo "<td class='blacktd'></td>";
                             }
    }
    echo "</tr>";
    }
    //  include 'task2.html';
