<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script type="text/javascript" src="jquery-1.9.0.min.js"></script>
        <script type="text/javascript" src="jPagingNextDay.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        
        <a class="next_link" href="javascript:next();">Next</a>
  
        <input type='hidden' id='lastStop' value="0" />  

        <div id='content'>
                        <?php
                include "dbConn.php";
                $eventNumPerDay=array("0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");

                $stmt = $pdo->prepare("SELECT eventName,UNIX_TIMESTAMP(eventDATETIME) as eventDATETIME FROM events ORDER BY eventDATETIME");
                $stmt->execute();
                $rows = $stmt->fetchall();

                foreach ($rows as $row){
                    $eventDayNum=date("j",$row["eventDATETIME"]);
                    $eventNumPerDay[$eventDayNum]++;
                     echo "<p>". $eventDayNum. "-". $row["eventName"]. "</p>";
                }
            ?>
        </div>
        <?php
                foreach ($eventNumPerDay as $key => $value) {
                    echo"<input type='hidden' id='".$key."' value='".$value."'/>  ";
                    
                }   
        ?>

    </body>
</html>