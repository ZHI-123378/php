<?php
    error_reporting(0);
    
    $conn = mysqli_connect("localhost","root","", "mydb");//連接資料庫
    //帳號、密碼、以及連結的資料庫(mybd)
    if (mysqli_connect_error($conn))//沒連結到顯示結果
        die("資料庫連線錯誤");

    mysqli_set_charset($conn, "utf8");//使用UTF8編碼
    $result=mysqli_query($conn, "select * from user");//mysqli_query從表和user找出資料
    while ($row=mysqli_fetch_array($result)) {//從$result擷取每個個資料
        echo $row[id];
        echo " ";
        echo $row[pwd];
        echo "<br>";
    }
?>