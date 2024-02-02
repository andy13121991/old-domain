<?php

    $path = "../data/certificates.json";
    $jsonUrl = file_get_contents($path);
    $certificates = json_decode($jsonUrl);

    foreach ($certificates as $item) {
        echo '<a href="'.$item->src.'" 
        data-fancybox="gallery" data-type="image">
        <img src="'.$item->src.'" 
        class="certif-img"></a>';
    }
?>
