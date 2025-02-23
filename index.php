<?php require_once("traduction/trad.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pamela Castaneda</title>
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
                    <a href="" class="landing-button1"><?php echo $TRAD["project-button"] ?></a>
                    <a href="" class="landing-button2"><?php echo $TRAD["contact-button"] ?></a>
                </div>
            </section>
            <div class="landing-img"></div>
        </div>
        <div id="skills">
            <h1><?php echo $TRAD["skills-h1"] ?></h1>
            <div class="skills-container">
                <h2>🟆<?php echo $TRAD["skills-h2-dev"] ?></h2>
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
                </div>
                <h2>🟆<?php echo $TRAD["skills-h2-design"] ?></h2>
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
                <h2>🟆<?php echo $TRAD["skills-h2-gestion"] ?></h2>
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
                <h2>🟆<?php echo $TRAD["skills-h2-other"] ?></h2>
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
                </div>
            </div>
        </div>
        <div id="timeline">
            <h1><?php echo $TRAD["timeline-h1"] ?></h1>
            <ul>
                <li>2021</li>
                <ul>
                    <li>Bac</li>
                    <li>Math Info</li>
                    <li>Touch Tech</li>
                </ul>
                <li>2022</li>
                <ul>
                    <li>AIUS</li>
                    <li>Math Info</li>
                    <li>Touch Tech</li>
                </ul>
                <li>2023</li>
                <ul>
                    <li>AIUS</li>
                    <li>Math Info</li>
                    <li>Touch Tech</li>
                </ul>
            </ul>
        </div>
    </main>
    <script src="script.js"></script>
</body>