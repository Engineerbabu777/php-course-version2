<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <form action="" method="post">
          

            <button name="button" type="button" >Hello</button>
        </form>

    
    </body>
</html>


<?php

if(isset($_REQUEST["button"])){
    hello();
}
function hello(){
    echo "<p style='color:red;'>Ho</p>";
}



?>