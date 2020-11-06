<?php
    error_reporting(0);
    $conn = mysqli_connect("localhost", "root", "", "mydb");//MYSQLI_CONNECT，必須要設定IP;帳、密、連結的資料庫
    
    $result=mysqli_query($conn, "select * from user");//mysqli_query從表和user找出資料

    $row=mysqli_fetch_array($result);//從$result擷取資料

    echo $row[id] + " " + $row[pwd]; //輸出ID、密碼
?>