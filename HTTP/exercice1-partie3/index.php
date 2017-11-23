<?php
/**
 * Created by PhpStorm.
 * User: Brunet Sylvain
 * Date: 23/11/2017
 * Time: 14:45
 */
$files = scandir(__DIR__.'/images');


?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

    foreach($files as $file){
        if(!in_array($file, ['.','..']))
        echo '<img src="images/'.$file.'"/> </br>';
    }


?>
</body>
</html>
