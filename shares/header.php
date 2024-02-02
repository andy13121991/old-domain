<?php
    function isCurrentPage($pageName) {
        return basename($_SERVER['PHP_SELF']) == $pageName;
    }

    $navItems = array(
        'home.php' => ['Home', 'galaxy-svgrepo-com.svg'],
        'cv.php' => ['CV', 'death-star-svgrepo-com.svg'],
        'skills.php' => ['Skills', 'space-ship-svgrepo-com.svg'],
        'portfolio.php' => ['Portfolio', 'icons8-baby-yoda.svg']
    );
?>

<header>
    <nav id="nav-fld" class="nav-folders">
        <ul class="menu-navigation">
            <?php foreach ($navItems as $page => $item): ?>
                <li class="main-navbtn <?php echo isCurrentPage($page) ? 'selected' : ''; ?>">
                    <a class="nav-link" href="../pages/<?php echo $page; ?>">
                        <div class="nav-img-wrapper">
                            <img class="nav-img" src="../img/svg/<?php echo $item[1]; ?>" alt="">
                        </div>
                        <?php echo $item[0]; ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
    <span id="hamburger-menu" data-toggle="ham-navigation" class="hamburger-menu-button"><span class="hamburger-menu-button-open">Menu</span></span>
    <div id="ham-navigation" class="ham-menu">
        <ul class="menu">
            <?php foreach ($navItems as $page => $item): ?>
                <li class="<?php echo isCurrentPage($page) ? 'active' : ''; ?>">
                    <a href="../pages/<?php echo $page; ?>">
                        <?php echo $item[0]; ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</header>
