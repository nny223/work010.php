<?php 
    echo "----------------ข้อ 1-----------------<br>";
        $salary= 10000;
        echo "เงินเดือน".$salary."บาท<br>";
        
        if($salary<=10000){
        $bonus = $salary*3;
        $money = $salary+$bonus;
        echo "ได้รับโบนัส = ".$bonus."บาท<br>";
        echo "ได้รับเงินสุทธิ = ".$money."บาท<br>";
        
    }else if($salary<=50000){
        $bonus = $salary*2;
        $money =$salary + $bonus;
        echo "ได้รับโบนัส = ".$bonus."บาท<br>";
        echo "ได้รับเงินสุทธิ = ".$money."บาท<br>";
        
    }else if($salary>=100000){
        $bonus = $salary*1;
        $money = $salary + $bonus;
        echo "ได้รับโบนัส = ".$bonus."บาท<br>";
        echo "ได้รับเงินสุทธิ = ".$money."บาท<br>";
    }
    echo "----------------ข้อ 2-----------------<br>";
    $name = ["นนทนันท์", "ไตรภพ", "วรรณพรรธน์", "ปัญญาวรรณ","ณัฐกานต์"];
    $year = ["16", "17", "18", "19","20"];
    echo "ชื่อ :" .$name[0]. " อายุ :"  .$year[0]."<br>";
    echo "ชื่อ :" .$name[1]. " อายุ :"  .$year[1]."<br>";
    echo "ชื่อ :" .$name[2]. " อายุ :"  .$year[2]."<br>";
    echo "ชื่อ :" .$name[3]. " อายุ :"  .$year[3]."<br>";
    echo "ชื่อ :" .$name[4]. " อายุ :"  .$year[4]."<br>";
    ?>

