<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title><?php echo $title;?></title>
    <meta name="description" content="JLPT N4">
    <link rel="stylesheet" href="/assets/css/style.css">

</head>

<body>

    <div class="main">
        <h1>JLPT N4</h1>


        <?php
foreach ($sheet as $i => $row) {

        ?>
        <div class="kanji" style="<?php echo $row[0];?>">
            <h2 style="height: 2mm;">
                <?php echo $row[1]; ?>
            </h2>
            <h1>
                <?php echo $row[2]; ?>
            </h1>
            <h2 ><?php echo $row[3];?></h2>
        </div>
        <?php

    }

?>
    <p style = "margin-top: 4mm;
	width: 62mm;
    float: left;
    font-size: 0.6em;">このテーブルはタニイルによって作られました。</p>
    </div>

</body>

</html>