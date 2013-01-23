  <?php
        function importLevontin7() {
            // Config
             $placeID=1; //Levontin7 ID
             $placeURL="http://www.levontin7.com/calendar.asp";
             $placeProgram=array(); // All Events

            libxml_use_internal_errors(true);
            $doc = new DOMDocument();
            $doc->loadHTMLFile($placeURL);
            // END Config

            // Levontin7 Event Descrption
            function desc($doc) {
                  $xpath = new DOMXPath($doc);
                  $linkQuery = "//a[@class='jTip']/@href";
                  $links = $xpath->query($linkQuery);
                  $desArr =array();

                  foreach ($links as $link) {
                        $desLink= "http://www.levontin7.com/". $link->nodeValue;
                        $data = file_get_contents($desLink); 
                        array_push($desArr, $data);
                  }
                  return  ($desArr);
            }
            // END Levontin7 Event Descrption

            $eventDescArr=  desc($doc);
            $eventNum=0;

            for ($i=1; $i<=31;$i++) {
                     $event=$doc->getElementById('z'.$i)->nodeValue;

                      $bandNames = preg_split("/[0-2][0-9]\:[0-5][0-9]/", $event);
                      preg_match_all("/[0-2][0-9]\:[0-5][0-9]/",$event, $bandTimeArr);
                      
                      $eventNumDay=0; // Event Number in $i Day

                      foreach ($bandNames as $bandName) {
                          $eventArr=array();
                         if ($bandName !="") {

                                preg_match("/\ [\/\d\s]+ \₪/",$eventDescArr[$eventNum], $eventPriceArr); // Find price from description
                                if(isset($eventPriceArr[0])) $eventPrice= preg_replace("/₪/", "" , $eventPriceArr[0]); // Remove ₪
                                $eventDescArr[$eventNum] = preg_replace("/(\\d+)(:)(\\d+)(.+)/", " ", $eventDescArr[$eventNum]); //Remove time and date from desc
                                
                                $bandTime=$bandTimeArr[0][$eventNumDay];
                                if ($bandTime=="24:00")$bandTime="00:00";
                                
                                
                                $eventArr["Place"]=$placeID;
                                $eventArr["Number"]=$eventNum ;
                                $eventArr["Name"]=$bandName ;
                                // DATETIME YYYY-MM-DD HH:MM:SS
                                $eventArr["DATETIME"]= date('Y-m-') .$i." " .$bandTime;
                                $eventArr["Desc"]=$eventDescArr[$eventNum];
                                if (isset($eventPrice[0]))$eventArr["Price"]=$eventPrice;
                                $eventArr["URL"]="";
                                
                                $eventNumDay++; // Event Number in $i Day
                                $eventNum++; // General Event Number
                                array_push($placeProgram, $eventArr);
                         }   
                      }
            }   
            return $placeProgram;
        }
        ?>