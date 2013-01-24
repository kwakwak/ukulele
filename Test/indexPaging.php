<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script type="text/javascript" src="jquery-1.9.0.min.js"></script>
        <script type="text/javascript" src="jPaging.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <input type='hidden' id='current_page' />  
        <input type='hidden' id='show_per_page' />  

        <div id='content'>
            <?php
                include "dbConn.php";

                $stmt = $pdo->prepare("SELECT eventName FROM events");
                $stmt->execute();
                $rows = $stmt->fetchall();

                foreach ($rows as $row){
                    echo "<p>". $row["eventName"]. "</p>";
                }
            ?>
        </div>
        
        <div id='page_navigation'></div>
    </body>
</html>