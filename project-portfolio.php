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
        <h1>Portfolio</h1>
        <section>
                <p><?php echo $TRAD["portfolio-project-desc"] ?> <a href="https://github.com/pame-scs/portfolio-2025">GitHub</a></p>
        </section>
        <section>
            <h2><?php echo $TRAD["used-tech"] ?></h2>
            <div class="skills">
                <div class="skill-item">
                    <img src="assets/html5.png" alt="HTML5 logo">
                    <p>HTML5</p>
                </div>
                <div class="skill-item">
                    <img src="assets/css3.png" alt="CSS3 logo">
                    <p>CSS3</p>
                </div>
                <div class="skill-item">
                    <img src="assets/js.png" alt="JavaScript logo">
                    <p>JavaScript</p>
                </div>
                <div class="skill-item">
                    <img src="assets/php.png" alt="PHP logo">
                    <p>PHP</p>
                </div>
                <div class="skill-item">
                    <img src="assets/Lunacy.png" alt="Lunacy logo">
                    <p>Lunacy</p>
                </div>
                <div class="skill-item">
                    <img src="assets/git.png" alt="git logo">
                    <p>Git</p>
                </div>
            </div>
        </section>
        <section>
            <h2><?php echo $TRAD["galery"] ?></h2>
            <div class="galery">
                <img src="assets/project-1/portfolio-skecth.PNG" alt="portfolio1">
                <img src="assets/project-1/project-code.PNG" alt="portfolio2">
                <img src="assets/project-1/project-result.PNG" alt="portfolio2">
            </div>
        </section>
    </main>
    <?php include "php/footer.php" ?>
    <script src="script.js"></script>
</body>

</html>