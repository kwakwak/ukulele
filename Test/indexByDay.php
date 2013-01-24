<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script type="text/javascript" src="jquery-1.9.0.min.js"></script>
        <script type="text/javascript" src="jPagingByDay.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>



        <div id='content'>
            <?php
            
                include "dbConn.php";
                $stmt = $pdo->prepare("SELECT eventName,UNIX_TIMESTAMP(eventDATETIME) as datetime FROM events
                                                                      WHERE YEARWEEK(eventDATETIME) = YEARWEEK(CURRENT_DATE)
                                                                      ORDER BY eventDATETIME");
                $stmt->execute();
                $rows = $stmt->fetchall();
                
                $dayDivArr= array("d1","d1","d2","d2","d3","d3","d4","d4","d5","d5","d6","d6","d7","d7");


                foreach ($rows as $key=>$row){
                    $eventDayofWeek= date("w",  $row["datetime"]);
                    $key++;
                    $displayFirst ="";
                    
                    switch ($eventDayofWeek) {
                        case 0:
                            $dayDivArr[0]=="d1"?$dayDivArr[0]=$key:$dayDivArr[1]=$key;
                            $displayFirst="style='display:block'";
                            break;
                        case 1:
                            $dayDivArr[2]=="d2"?$dayDivArr[2]=$key:$dayDivArr[3]=$key;
                            break;
                        case 2:
                            $dayDivArr[4]=="d3"?$dayDivArr[4]=$key:$dayDivArr[5]=$key;
                            break;
                        case 3:
                            $dayDivArr[6]=="d4"?$dayDivArr[6]=$key:$dayDivArr[7]=$key;
                            break;
                        case 4:
                            $dayDivArr[8]=="d5"?$dayDivArr[8]=$key:$dayDivArr[9]=$key;
                            break;
                        case 5:
                            $dayDivArr[10]=="d6"?$dayDivArr[10]=$key:$dayDivArr[11]=$key;
                            break;
                        case 6:
                            $dayDivArr[12]=="d7"?$dayDivArr[12]=$key:$dayDivArr[13]=$key;
                            break;
                    }

                    echo "<p ". $displayFirst  .">".$key.")". $row["eventName"]. "-". $eventDayofWeek ."</p>";

                }
            ?>
        </div>
   <?php
   echo  "<a  href='javascript:showDay(". $dayDivArr[0]. ",".$dayDivArr[1].")' >1</a> ";
   echo  "<a  href='javascript:showDay(". $dayDivArr[2]. ",".$dayDivArr[3].")' >2</a> ";
   echo  "<a  href='javascript:showDay(". $dayDivArr[4]. ",".$dayDivArr[5].")' >3</a> ";
   echo  "<a  href='javascript:showDay(". $dayDivArr[6]. ",".$dayDivArr[7].")' >4</a> ";
   echo  "<a  href='javascript:showDay(". $dayDivArr[8]. ",".$dayDivArr[9].")' >5</a> ";
   echo  "<a  href='javascript:showDay(". $dayDivArr[10]. ",".$dayDivArr[11].")' >6</a> ";
   echo  "<a  href='javascript:showDay(". $dayDivArr[12]. ",".$dayDivArr[13].")' >7</a> ";

   ?>
        
    </body>
</html>