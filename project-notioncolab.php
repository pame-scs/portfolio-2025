<?php require_once("traduction/trad.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pamela Castaneda Portfolio</title>
    <link rel="icon" href="assets/favicon.png" type="image/png">
    <link href="style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
</head>

<body>
    <?php include "php/nav.php" ?>
    <main class="project-page">
        <h1><?php echo $TRAD["notioncolab-title"] ?></h1>
        <section>
            <p><?php echo $TRAD["notioncolab-desc"] ?></p>
        </section>
        <section>
            <h2><?php echo $TRAD["used-tech"] ?></h2>
            <div class="skills">
                <div class="skill-item">
                    <img src="assets/Notion.png" alt="Notion logo">
                    <p>Notion</p>
                </div>
                <div class="skill-item">
                    <img src="assets/google-workspace.png" alt="Google Workspace logo">
                    <p>Google Workspace</p>
                </div>
                <div class="skill-item">
                    <img src="assets/overleaf.jpg" alt="Overleaf logo">
                    <p>Overleaf</p>
                </div>
                <div class="skill-item">
                    <img src="assets/canva.png" alt="Canva logo">
                    <p>Canva</p>
                 </div>
            </div>
        </section>
        <section>
            <h2><?php echo $TRAD["galery"] ?></h2>
            <div class="galery">
                <img src="assets/project-7/notioncolab-1.png" alt="notioncolab1">
                <img src="assets/project-7/notioncolab-2.png" alt="notioncolab2">
                <img src="assets/project-7/notioncolab-3.png" alt="notioncolab3">
            </div>
        </section>
    </main>
    <?php include "php/footer.php" ?>
    <script src="script.js"></script>
</body>

</html>