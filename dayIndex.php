<?php
    include "dbConn.php";
    $eventNumPerDay=array("0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");

    $stmt = $pdo->prepare("SELECT UNIX_TIMESTAMP(eventDATETIME) as eventDATETIME FROM events ORDER BY eventDATETIME");
    $stmt->execute();
    $rows = $stmt->fetchall();

    foreach ($rows as $row){
        $eventDayNum=date("j",$row["eventDATETIME"]);
        $eventNumPerDay[$eventDayNum]++;
    }

    $fileOutput= "var eventByDay=new Array(";
    foreach ($eventNumPerDay as $key=>$value) {
       $fileOutput .= "'". $value. "'";
       end($eventNumPerDay);
       if ($key!=key($eventNumPerDay)) $fileOutput .=",";
    }   
    $fileOutput .=");";
    
    $fp = fopen('eventByDay.js', 'w');
    fwrite($fp, $fileOutput);
    fclose($fp);
 ?>
