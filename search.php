<?php

$con = mysqli_connect("localhost","root","","test");


   // echo "hhhhhhhhh";
    $qry = "SELECT * FROM test WHERE name like '%".$_POST['search']."%'" ;
    
     $result = mysqli_query($GLOBALS['con'] ,$qry);
  
        
        while($row = mysqli_fetch_assoc($result))
        {
            //var_dump($row);
            echo "<h1>".$row['name']."</h1>";
            //echo $_POST['search2'];
        }
    // }else 
    // {
    //     echo 'data not found';
    // }

?>