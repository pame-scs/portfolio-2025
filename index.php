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
    <main>
        <div id="landing">
            <section>
                <h1>Pamela Castaneda</h1>
                <h2><?php echo $TRAD["job"] ?></h2>
                <p><?php echo $TRAD["about"] ?></p>
                <div class="landing-buttons">
                    <a href="index.php#Projects" class="landing-button1"><?php echo $TRAD["project-button"] ?></a>
                    <a href="https://www.linkedin.com/in/pamela-castaneda-s/" class="landing-button2">LinkedIn</a>
                </div>
            </section>
            <div class="landing-img"></div>
        </div>
        <div id="skills">
            <h1><?php echo $TRAD["skills-h1"] ?></h1>
            <div class="skills-container">
                <h2><?php echo $TRAD["skills-h2-dev"] ?></h2>
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
                        <img src="assets/mysql.png" alt="MySQL logo">
                        <p>MySQL</p>
                    </div>
                    <div class="skill-item">
                        <img src="assets/git.png" alt="git logo">
                        <p>Git</p>
                    </div>
                    <div class="skill-item">
                        <img src="assets/C.png" alt="C programming language logo">
                        <p>C</p>
                    </div>
                    <div class="skill-item">
                        <img src="assets/python.png" alt="Python logo">
                        <p>Python</p>
                    </div>
                    <div class="skill-item">
                        <img src="assets/java.png" alt="Java programming language logo">
                        <p>Java</p>
                    </div>
                    <div class="skill-item">
                        <img src="assets/IntelliJ.png" alt="IntelliJ logo">
                        <p>IntelliJ</p>
                    </div>
                </div>
                <h2><?php echo $TRAD["skills-h2-design"] ?></h2>
                <div class="skills">
                    <div class="skill-item">
                        <img src="assets/ps.png" alt="Photoshop logo">
                        <p>Photoshop</p>
                    </div>
                    <div class="skill-item">
                        <img src="assets/affinityP.png" alt="Affinity Publisher logo">
                        <p>Affinity Publisher</p>
                    </div>
                    <div class="skill-item">
                        <img src="assets/canva.png" alt="Canva logo">
                        <p>Canva</p>
                    </div>
                    <div class="skill-item">
                        <img src="assets/Lunacy.png" alt="Lunacy logo">
                        <p>Lunacy</p>
                    </div>
                </div>
                <h2><?php echo $TRAD["skills-h2-gestion"] ?></h2>
                <div class="skills">

                    <div class="skill-item">
                        <img src="assets/odoo.png" alt="Odoo logo">
                        <p>Odoo</p>
                    </div>
                    <div class="skill-item">
                        <img src="assets/google-workspace.png" alt="Google Workspace logo">
                        <p>Google Workspace</p>
                    </div>
                    <div class="skill-item">
                        <img src="assets/amazon-workdocs.png" alt="Amazon logo">
                        <p>Amazon WorkDocs</p>
                    </div>
                    <div class="skill-item">
                        <img src="assets/OneNote.png" alt="Microsoft OneNote logo">
                        <p>Microsoft OneNote</p>
                    </div>
                    <div class="skill-item">
                        <img src="assets/Notion.png" alt="Notion logo">
                        <p>Notion</p>
                    </div>
                </div>
                <h2><?php echo $TRAD["skills-h2-other"] ?></h2>
                <div class="skills">

                    <div class="skill-item">
                        <img src="assets/wordpress.png" alt="WordPress logo">
                        <p>WordPress</p>
                    </div>
                    <div class="skill-item">
                        <img src="assets/OBS.png" alt="OBS logo">
                        <p>Open Broadcaster Software</p>
                    </div>
                    <div class="skill-item">
                        <img src="assets/capcut.png" alt="CapCut logo">
                        <p>CapCut</p>
                    </div>
                    <div class="skill-item">
                        <img src="assets/overleaf.jpg" alt="Overleaf logo">
                        <p>Overleaf</p>
                    </div>
                    <div>
                        <img src="assets/latex-logo.png" alt="LaTeX logo" style="width:50px">
                        <p>LaTeX</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="timeline">
            <h1><?php echo $TRAD["timeline-h1"] ?></h1>
            <h2>2021</h2>

            <div class="year-desc">
                <h3><?php echo $TRAD["bac-h3"] ?></h3>
                <address>
                    <p><?php echo $TRAD["bac-location"] ?></p>
                </address>
                <h3><?php echo $TRAD["licence-h3"] ?></h3>
                <address>
                    <p><?php echo $TRAD["licence-location"] ?></p>
                </address>
            </div>
            <h2>2022</h2>
            <div class="year-desc">
                <h3><?php echo $TRAD["adem-h3"] ?></h3>
                <address>
                    <p><?php echo $TRAD["adem-location"] ?></p>
                </address>
                <h3><?php echo $TRAD["touch-tech-h3"] ?></h3>
                <address>
                    <p><?php echo $TRAD["touch-tech-location"] ?></p>
                </address>
            </div>
            <h2>2023</h2>
            <div class="year-desc">
                <h3><?php echo $TRAD["aius-h3"] ?></h3>
                <address>
                    <p><?php echo $TRAD["aius-location"] ?></p>
                </address>
            </div>
            <h2>2024</h2>
            <div class="year-desc">
                <h3><?php echo $TRAD["lp-h3"] ?></h3>
                <address>
                    <p><?php echo $TRAD["lp-location"] ?></p>
                </address>
                <h3><?php echo $TRAD["studio-h3"] ?></h3>
                <address>
                    <p><?php echo $TRAD["studio-location"] ?></p>
                </address>
            </div>
            <h2>2025</h2>
            <div class="year-desc">
                <h3><?php echo $TRAD["master-h3"] ?></h3>
                <address>
                    <p><?php echo $TRAD["master-location"] ?></p>
                </address>
            </div>
        </div>
        <div id="Projects">
            <h1><?php echo $TRAD["project-h1"] ?></h1>
            <div class="project-container">
                <a href="\project-portfolio.php" class="project">
                    <article class="project-portfolio p-img">

                    </article>
                    <h3>Website</h3>
                </a>
                <a href="\project-touchtech.php" class="project">
                    <article class="project-touchtech p-img">

                    </article>
                    <h3>Touch Tech</h3>
                </a>
                <a href="\project-studiolabut-site.php" class="project">
                    <article class="project-studio p-img">

                    </article>
                    <h3>STUDIO LAB'UT site</h3>
                </a>
                <a href="\project-studiolabut-com.php" class="project">
                    <article class="project-studio-com p-img">

                    </article>
                    <h3>STUDIO LAB'UT com</h3>
                </a>
                <a href="\project-spacegame.php" class="project">
                    <article class="project-spacegame p-img">

                    </article>
                    <h3>My New Solar System</h3>
                </a>
                <a href="\project-memoire.php" class="project">
                    <article class="project-memoire p-img">

                    </article>
                    <h3><?php echo $TRAD["memoire-title"] ?></h3>
                </a>
                <a href="\project-notioncolab.php" class="project">
                    <article class="project-notioncolab p-img">

                    </article>
                    <h3><?php echo $TRAD["notioncolab-title"] ?></h3>
                </a>
            </div>
        </div>

        </div>
    </main>
    <?php include "php/footer.php" ?>
    <script src="script.js"></script>
</body>