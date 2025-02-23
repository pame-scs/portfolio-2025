<nav>
    <ul class="nav-a">
        <li><a href="#home"><?php echo $TRAD["home"] ?></a></li>
        <li><a href="#about"><?php echo $TRAD["skills"] ?></a></li>
        <li><a href="#timeline"><?php echo $TRAD["timeline"] ?></a></li>
        <li><a href="#"><?php echo $TRAD["projects"] ?></a></li>
    </ul>

    <img src="/assets/pame.png" alt="logo: pame scs">

    <ul class="traduction">
        <li><a href="?<?php echo isset($_GET['id']) ? 'id=' . htmlspecialchars($_GET['id']) . '&' : ''; ?>lang=fr"
            class="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'fr') ? 'active' : ''; ?>">Français</a></li>
        <li><a href="?<?php echo isset($_GET['id']) ? 'id=' . htmlspecialchars($_GET['id']) . '&' : ''; ?>lang=en"
            class="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'active' : ''; ?>">English</a></li>
        <li><a href="?<?php echo isset($_GET['id']) ? 'id=' . htmlspecialchars($_GET['id']) . '&' : ''; ?>lang=esp"
            class="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'esp') ? 'active' : ''; ?>">Español</a></li>
    </ul>
</nav>
