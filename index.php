<?php require_once("traduction/trad.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pamela Castaneda</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <?php include "php/nav.php" ?>
    <main>
        <div class="landing">
            <section>
                <h1>Pamela Castaneda</h1>
                <h2><?php echo $TRAD["job"] ?></h2>
                <p><?php echo $TRAD["about"] ?></p>
                <a href=""><?php echo $TRAD["project-button"] ?></a>
                <a href=""><?php echo $TRAD["contact-button"] ?></a>
            </section>
            <img src="assets/me-paris.jpg" alt="Pamela Castaneda smiling and posing in a street in Paris">
        </div>
    </main>
</body>