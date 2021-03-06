<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $page_title ?></title>
    <meta name="description" content="Guess a wine based on its characteristics. A tool for blind tasters.">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('stylesheets/reset.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('stylesheets/main.css'); ?>">
</head>
<body>
<header>
    <a href="<?php echo url_for('index.php'); ?>">
        <h1>Wine Guesser</h1>
    </a>
</header>
<div class="center">
    <?php echo display_session_message(); ?>
    <?php echo display_errors($errors); ?>
</div>