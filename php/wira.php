<?php
require_once('dbcontroller.php');
$DB = new dbController();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta nama="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.ccs">
    <title>Document</title>
</head>

<body>
    <?php
    $sql = "insert into t_siswa values (null, 'Dharma', 1,1)";

    $row = $db->getITEM($sql);
    echo $row['f_nama'];
    ?>
</body>