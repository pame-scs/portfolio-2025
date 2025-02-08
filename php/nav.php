<nav>
<div class="traduction">
    <a href="?<?php echo isset($_GET['id']) ? 'id=' . htmlspecialchars($_GET['id']) . '&' : ''; ?>lang=fr">Français</a>
    <a href="?<?php echo isset($_GET['id']) ? 'id=' . htmlspecialchars($_GET['id']) . '&' : ''; ?>lang=en">English</a>
    <a href="?<?php echo isset($_GET['id']) ? 'id=' . htmlspecialchars($_GET['id']) . '&' : ''; ?>lang=esp">Español</a>
</div>
    <a href="#home"><?php echo $TRAD["home"] ?></a>
    <a href="#about"><?php echo $TRAD["skills"] ?></a>
    <a href="#timeline"><?php echo $TRAD["timeline"] ?></a>
    <a href="#"><?php echo $TRAD["projects"] ?></a>
</nav>