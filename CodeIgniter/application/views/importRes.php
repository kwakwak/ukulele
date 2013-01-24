<!DOCTYPE html>
<html lang="heb">
    <head>
        <meta charset="utf-8">
        <title><?php echo $this->lang->line('main_title')?></title>

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/main.css">

    </head>
    <body>
        <div id="container">
            <h1><?php echo $this->lang->line('main_title')?></h1>
            <div id="body">
                <pre>
                    <?php echo $result ?>
                </pre>
            </div>
                <p class="footer">
                    <?php echo $this->lang->line('main_timeCreated')?> 
                    <strong>{elapsed_time}</strong> 
                    <?php echo $this->lang->line('main_sec')?>  
                </p>
            </div>
    </body>
</html>