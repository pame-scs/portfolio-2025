<nav>
    <div class="menu-icon nav-menu-icon">
        <img src="/assets/menu-icon.png" alt="Menu">
    </div>

    <ul class="nav-a">
        <li><a href="#landing"><?php echo $TRAD["home"] ?></a></li>
        <li><a href="#skills"><?php echo $TRAD["skills"] ?></a></li>
        <li><a href="#timeline"><?php echo $TRAD["timeline"] ?></a></li>
        <li><a href="#"><?php echo $TRAD["projects"] ?></a></li>
    </ul>
    <img src="/assets/pame.png" alt="logo: pame scs" class="logo">
    <div class="menu-icon traduction-menu-icon">
        <img src="/assets/trad-icon.png" alt="Translate">
    </div>
    <ul class="traduction">
        <li><a href="?<?php echo isset($_GET['id']) ? 'id=' . htmlspecialchars($_GET['id']) . '&' : ''; ?>lang=fr"
            class="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'fr') ? 'active' : ''; ?>">Français</a></li>
        <li><a href="?<?php echo isset($_GET['id']) ? 'id=' . htmlspecialchars($_GET['id']) . '&' : ''; ?>lang=en"
            class="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'active' : ''; ?>">English</a></li>
        <li><a href="?<?php echo isset($_GET['id']) ? 'id=' . htmlspecialchars($_GET['id']) . '&' : ''; ?>lang=esp"
            class="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'esp') ? 'active' : ''; ?>">Español</a></li>
    </ul>
</nav>
