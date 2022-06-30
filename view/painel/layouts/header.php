<?php
if (file_exists('../../Config/global.php')) {
    require_once('../../Config/global.php');
} else {
    require_once('../../../Config/global.php');
}
?>

<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">



    <link rel="stylesheet" href="/../agenda_virtual/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/../agenda_virtual/assets/css/menu.css">
    <link rel="stylesheet" href="/../agenda_virtual/assets/css/semantic.min.css">
    <link rel="stylesheet" href="/../agenda_virtual/assets/css/dataTables.semanticui.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">


    <title><?= $titilePrefix ?><?= $titile ?><?= $titileSufix ?></title>
</head>

<body>