<?php
function arrayToDB($placeProgram){
        try {
           include "dbConn.php";

          $stmt = $pdo->prepare('INSERT INTO
                                                              events (eventPlace, eventName,  eventDesc, eventPrice, eventURL,eventDATETIME)
                                                              VALUES(:eventPlace,:eventName, :eventDesc,:eventPrice,:eventURL,:eventDATETIME)');
          foreach ($placeProgram as $event) {
              if (eventExist($pdo,$event["DATETIME"],$event["Place"])!=0)
                      echo $event["Number"]+1 . ") " . $event["Name"].   "- Exist! <BR/>";
              elseif  ($stmt->execute(array(
                   'eventPlace' =>$event["Place"],
                  'eventName' =>$event["Name"],
                  'eventDesc' =>$event["Desc"],
                  'eventPrice' =>$event["Price"],
                  'eventURL' =>$event["URL"],
                  'eventDATETIME' =>$event["DATETIME"],
              ))) echo $event["Number"]+1 . ") " . $event["Name"].   "- Inserted successfully! <BR/>";
          }
          

        } catch(PDOException $e) {
          echo 'Error: ' . $e->getMessage();
        }
}

function eventExist($pdo,$eventDATETIME,$eventPlace){
        $query = "SELECT eventPlace FROM events WHERE 
                                                eventPlace=:eventPlace AND eventDATETIME=:eventDATETIME"  ;
        $stmt = $pdo->prepare( $query );
        $stmt->execute(array("eventPlace"=>$eventPlace,
                                                            "eventDATETIME"=>$eventDATETIME
                                                                                                                                ) );
        return $stmt->rowCount();
}
?>
