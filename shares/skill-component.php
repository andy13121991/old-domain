<?php

    $path = "../data/skills.json";
    $jsonUrl = file_get_contents($path);
    $skills = json_decode($jsonUrl);
    $technicals = $skills->technical;
    $others = $skills->other;
    $languages = $skills->languages;
?>

<h4 class="start-skill">Programming skills</h4>
    <ul class="skills">

        <?php

            foreach ($technicals as $tech){
            echo '<li class="skill-container">
                    <img src="'.$tech->src.'" alt="" class="iconset">
                    <h3 class="skill-title">'.ucfirst($tech->name).'</h3>
                    <p class="counter">'.$tech->skill.'</p>
                    <div class="progress-bar">
                        <span id="progress" class="'.$tech->name.'">
                        </span>
                    </div>
                </li>
                <style>.'.$tech->name.'{
                    width: '.$tech->skill.';
                    animation: '.$tech->name.'  2s ease-out ;
                    -webkit-animation: '.$tech->name.'  2s ease-out ;
                </style>';
            }
        ?>

    </ul>
<h4 class="start-skill">Other skills</h4>
    <ul class="skills">
        <?php

            foreach ($others as $other){
            echo '<li class="skill-container">
                    <img src="'.$other->src.'" alt="" class="iconset">
                    <h3 class="skill-title">'.ucfirst($other->name).'</h3>
                    <p class="counter">'.$other->skill.'</p>
                    <div class="progress-bar">
                        <span id="progress" class="'.$other->name.'">
                        </span>
                    </div>
                </li>
                <style>.'.$other->name.'{
                    width: '.$other->skill.';
                    animation:'.$other->name.'  2s ease-out ;
                    -webkit-animation:'.$other->name.'  2s ease-out ;
                </style>';
            }
        ?>
    </ul>

<h4>Language skills</h4>
    <ul class="skills">
        <?php

            foreach ($languages as $lang){
            echo '<li class="skill-container">
                    <img src="'.$lang->src.'" alt="" class="iconset">
                    <h3 class="skill-title">'.ucfirst($lang->name).'</h3>
                    <p class="counter">'.$lang->skill.'</p>
                    <div class="progress-bar">
                        <span id="progress" class="'.$lang->name.'">
                        </span>
                    </div>
                </li>
                <style>.'.$lang->name.'{
                    width: '.$lang->skill.';
                    animation:'.$lang->name.'  2s ease-out ;
                    -webkit-animation:'.$lang->name.'  2s ease-out ;
                </style>';
            }
        ?>
    </ul>
