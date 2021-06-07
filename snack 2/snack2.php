<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack2</title>
</head>
<body>
  


<?php

  $data = $_GET;

  if(empty($data['name']) || empty($data['mail']) || empty($data['age'])){
    echo "ERROR";
  }
  elseif(strlen($data['name']) <=2){
    echo "ERROR: nome troppo corto!";
  }
  elseif(strpos($data['mail'], '@') === false || strpos($data['mail'], '.') === false){
    echo "ERROR: deve contenere @ , .";
  }
  elseif(!is_numeric($data['age'])){
    echo "ERROR: inserire età corretta!";
  }
  else{
    echo "Benvenuto!";
  }
?>
 

</body>
</html>