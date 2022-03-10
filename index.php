
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blog Ecommerce</title>
    </head>
    <body>
        <h1>
            <?php 
                // include core
                spl_autoload_register(function($class)
                {
                    include_once('system/libs/'.$class.'.php');
                });
                
                include_once('app/config/config.php');
                
                $main = new Main();  
            ?>
        </h1>
    </body>
</html>
