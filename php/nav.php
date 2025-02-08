<nav>
<div class="traduction">
    <a href="?<?php echo isset($_GET['id']) ? 'id=' . htmlspecialchars($_GET['id']) . '&' : ''; ?>lang=fr" class="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'fr') ? 'active' : ''; ?>">Français</a>
    <a href="?<?php echo isset($_GET['id']) ? 'id=' . htmlspecialchars($_GET['id']) . '&' : ''; ?>lang=en" class="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'active' : ''; ?>">English</a>
    <a href="?<?php echo isset($_GET['id']) ? 'id=' . htmlspecialchars($_GET['id']) . '&' : ''; ?>lang=esp" class="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'esp') ? 'active' : ''; ?>">Español</a>
</div>
    <a href="#home"><?php echo $TRAD["home"] ?></a>
    <a href="#about"><?php echo $TRAD["skills"] ?></a>
    <a href="#timeline"><?php echo $TRAD["timeline"] ?></a>
    <a href="#"><?php echo $TRAD["projects"] ?></a>
</nav>