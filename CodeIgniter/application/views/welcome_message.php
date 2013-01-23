<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>יוקוללה</title>
        <script type="text/javascript" src="javascript/eventByDay.js"></script>
        <script type="text/javascript" src="javascript/jquery-1.9.0.min.js"></script>
        <script type="text/javascript" src="javascript/jPagingNextDay.js"></script>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <style type="text/css">
        </style>
    </head>
    <body>
        <div id="container">
            <h1>יוקוללה</h1>
            <div id="body">

                <a class="next_link" href="javascript:next();">Next</a>
                
                <div id='content'>
                    <?php foreach ($result as $item): ?>
                        <p><?php echo $item->eventName; ?></p>
                    <?php endforeach; ?>
                </div>
                
                <p class="footer">הדף נוצר תוך <strong>{elapsed_time}</strong> שניות</p>
            </div>
    </body>
</html>