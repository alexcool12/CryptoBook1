<!DOCTYPE html>

<?php require_once './assets/prefabs/db.php';  ?>


<html lang="en">
    <head>
        
        <title>CryptoBook - Информационный сервис о криптовалютах</title>
        <?php require_once './assets/prefabs/meta.php';  ?>
    </head>
    <body>
        <div id="loader-wrapper">
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
        
        <?php require_once './assets/prefabs/header.php';  ?>
        <?php 
            $page_data = explode('?', $_SERVER['REQUEST_URI']);
        
            if($page_data[0] == '/' || $page_data[0] == '/index')
            {
                require_once 'contents/index.php';
            }
            else
           {
               
               require_once 'contents'.$page_data[0].'.php';
           }
        
        ?>
     

    
    <?php require_once './assets/prefabs/footer.php'; ?>

    <?php require_once './assets/prefabs/scripts.php'; ?>
        
    </body>
</html>