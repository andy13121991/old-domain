<!DOCTYPE html>
<html lang="en">

<head>
	<?php include '../shares/head.php' ; ?>
    <link rel="stylesheet" href="../css/parallax.css">
    <script defer src="../js/fx.js"></script>
</head>

<body>
    <?php 
        include '../shares/header.php';
        include './loading-screen.php' 
    ?>
    <div class="parallax">
        <div class="spaceship">
            <img src="/img/spaceship-orbits-min.jpg" class="sp-orbit">
            <div class="planets1"><img src="/img/spaceship-orbits-planet1-min.png" class="sp-pl1"></div>
            <div class="planets2"><img src="/img/spaceship-orbits-planet2-min.png" class="sp-pl2"></div>
            <div class="planets3"><img src="/img/spaceship-orbits-planet3-min.png" class="sp-pl3"></div>
            <div class="somehow"><img src="/img/somehow-view-min.png" class="sh-vw"></div>
        </div>
        <div id="text-overlay" class="fade-in">
            <article class="text-home">
                <h3 class="text-quotes">"Our lifes is connected through the universe."</h3>
                <p class="name-who-said">-- Andrew King</p> 
                <h3 class="text-quotes">"The structures of the multiverse are hidden by the reality 
                principles of complex numbers. This is why the parallel universes that make up the 
                multiverse can't be seen by each other."</h3>
                <p class="name-who-said">-- Sri Anmit Ray</p>
                <h3 class="text-quotes">"The universe doesn't give you what you ask for with your thoughts; 
                it gives you what you demand with your actions."</h3>
                <p class="name-who-said">-- Dr. Steve Maraboli</p>
            </article>
        </div>
        <div class="galaxy">
            <img src="../img/galaxy.jpg" class="gal-img">
            <div class="asteorid"><img src="../img/asteroid.png" class="aste-img"></div>
            <div class="astronaut"><img src="../img/selfie-astronaut.png" class="astro-img"></div>
        </div>
        <div id="text-overlay" class="fade-in">
            <article class="text-home">
                <h3 class="text-quotes">"Consciousness or basic awareness, whatever one wishes to call this, is beyond spacetime. 
                One must go beyond. That is, one must consider that
                consciousness primarily is not of space or time."</h3> 
                <p class="name-who-said">-- Noel Huntley, Ph.D.Physics</p>
                <h3 class="text-quotes">"Two things are Infinite: 
                The Universe and Human Stupidity; And I'm not sure about the universe."</h3>
                <p class="name-who-said">-- Albert Einstein</p>
                <h3 class="text-quotes">"The people who are crazy enough to think 
                they can change the world are the ones who do."</h3>
                <p class="name-who-said">-- Steve Jobs</p>
            </article>
        </div>
        <div class="earth-view">
            <img src="../img/earth-view-min.jpg" class="ea-vw">
            <div class="mars"><img src="../img/mars-min.png" class="mars-img"></div>
            <div class="jupiter"><img src="../img/jupiter-min.png" class="jupi-img"></div>
            <div class="earth-half"><img src="../img/earth-half-min.png" class="ea-half-img"></div>
        </div>
        <div class="earthhover">
            <img src="../img/pexels-earth-min.jpg" alt="" class="earthzoom">
            <div class="newyork"><img src="../img/newyork1.png" class="ny-img"></div>
            <div class="news">
                <img src="../img/news.png" class="newspaper">
            </div>
        </div>
    </div>
</body>
</html>
