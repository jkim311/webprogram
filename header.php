<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content ="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hangman</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hangman</title>
    <link rel="stylesheet" href = "bootstrap.min.css">
    <link rel="stylesheet" href = "style.css">
</head>
<body>
    <div class="container">
        <?php include "menu.php" ?>
        <?php if (isset($_SESSION['username'])) : ?>
            <form method="post" action="logout.php" class="float-end me-3">
                <button type="submit" name="logout" class="btn btn-outline-danger">Logout</button>
            </form>
        <?php endif; ?>