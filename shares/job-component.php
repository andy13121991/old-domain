<?php

    $path = '../data/jobs.json';
    $jsonUrl = file_get_contents($path);
    $jobs = json_decode($jsonUrl);

    foreach ($jobs as $job) {
        echo '<li>
                <h2>
                    '.$job->name.'<br>
                    '.$job->date.' - '.$job->company.'
                </h2>
                <p class="work-descr">
                    '.$job->desc.'
                </p>
            </li>';
    }
?>
