<?php

function papan_catur($angka) {
// tulis kode di sini
    for($row=1;$row<=8;$row++){
        for($col=1;$col<=8;$col++){
            $total=$row+$col;
            if($total%2==0){
                echo "<td> # </td>";
            } else{
            echo "<td>  </td>";
            }
        }
        echo "<br>";
    }
}


echo papan_catur(4) ;
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #*/

echo papan_catur(5) 


?>