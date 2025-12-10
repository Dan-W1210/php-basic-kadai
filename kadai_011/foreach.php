<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>PHP基礎課題11</title>
</head>

<body>
    <p>
        <?php

        $vegetable = ['名前' => '玉ねぎ',
                      '値段' => '200',
                      '産地' => '北海道'
                      ];
        foreach ($vegetable as $key => $value){
               echo "{$key} : {$value}<br>";
        } 
        ?>

    </p>
</body>
</html>