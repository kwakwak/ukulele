<!DOCTYPE html>
<html lang="heb">
    <head>
        <meta charset="utf-8">
        <title><?php echo $this->lang->line('main_title')?></title>
        <script type="text/javascript" src="<?php echo base_url(); ?>javascript/jquery-1.9.0.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>javascript/showOneDay.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/main.css">

    </head>
    <body>
        <div id="container">
            <h1><?php echo $this->lang->line('main_title')?></h1>
            <div id="body">

                <a class="next_link" href="javascript:next();"><?php echo $this->lang->line('showDay_next')?></a>
                <a class="previous_link" href="javascript:previous();"><?php echo $this->lang->line('showDay_previous')?></a>

                <div id='content'>
                    <div id="date"></div>
                    <?php foreach ($result as $row): ?>
                        <p id="<?php echo $lastDay = date("j", $row->eventDATETIME); ?>">
                            <?php echo $row->eventName; ?>
                        </p>
                    <?php endforeach; ?>
                        
                    <input id="lastDay" value="<?php echo $lastDay ?>" type="hidden">
                    <input id="currentDay" value="<?php echo $currentDay ?>" type="hidden">
                </div>

                <p class="footer">
                    <?php echo $this->lang->line('main_timeCreated')?> 
                    <strong>{elapsed_time}</strong> 
                    <?php echo $this->lang->line('main_sec')?>  
                </p>
            </div>
    </body>
</html>