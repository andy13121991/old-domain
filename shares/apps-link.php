<?php

    $path = '../data/apps.json';
    $jsonUrl = file_get_contents($path);
    $apps = json_decode($jsonUrl);

    foreach ($apps as $app) {
        echo '<li class="angular-js applist">
                <a href="'.$app->link.'" target="_blank" class="applink">
                    <img src="'.$app->img.'" class="img-app-link">
                    '.$app->name.'
                </a>
            </li>';
    }
?>
