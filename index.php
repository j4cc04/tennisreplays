<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php

    $str = file_get_contents('list.json');
    $json = json_decode($str, true);
    foreach($json as $match){
        echo '<span>' . $match["p1"] . '</span><span>' . $match["p2"] . '</span><br />';
    }
?> 
 <?php echo '<p>Hello Worlda</p>'; ?> 
 </body>
</html>

