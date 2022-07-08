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
    <link rel="stylesheet" href="/../agenda_virtual/assets/css/formularios.css">
    <link rel="stylesheet" href="/../agenda_virtual/assets/css/dataTables.bootstrap5.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">


    <title><?= $titilePrefix ?><?= $titile ?><?= $titileSufix ?></title>
</head>

<body>