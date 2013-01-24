<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>יוקוללה</title>
        <script type="text/javascript" src="<?php echo base_url(); ?>javascript/jquery-1.9.0.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>javascript/showOneDay.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/main.css">

    </head>
    <body>
        <div id="container">
            <h1>יוקוללה</h1>
            <div id="body">

                <a class="next_link" href="javascript:next();">Next</a>
                <a class="previous_link" href="javascript:previous();">Previous</a>

                <div id='content'>
                    <?php foreach ($result as $row): ?>
                        <p id="<?php echo $lastDay = date("j", $row->eventDATETIME); ?>"><?php echo $row->eventName; ?></p>
                    <?php endforeach; ?>
                    <input id="lastDay" value="<?php echo $lastDay ?>" type="hidden">
                    <input id="currentDay" value="<?php echo $currentDay ?>" type="hidden">
                </div>

                <p class="footer">הדף נוצר תוך <strong>{elapsed_time}</strong> שניות</p>
            </div>
    </body>
</html>