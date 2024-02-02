<!DOCTYPE html>
<html>
    <head>
        <?php include '../shares/head.php' ; ?>
    </head>

    <body>

    <?php 
        include '../shares/header.php';
        include './loading-screen.php' 
    ?>
    <main class="log-article">
        <h4 class="title-log">Change log</h4>
        <div class="log-container">
            <div class="log-wrapper">
            <?php

            $path = '../data/changelog.json';
            $jsonUrl = file_get_contents($path);
            $changelog = json_decode($jsonUrl);

            $upt2 = $changelog->upt2;
            $addedUpt2 = $upt2->added;
            $updatedUpt2 = $upt2->updated;
            $fixedUpt2 = $upt2->fixed;

            echo '<div class ="log-items"><h5 class="changelog-date">
            version:&nbsp' . $upt2->version . ' - ' . $upt2->date . '</h5>
            <p class="comment-of-changes">'.$upt2->comment.'</p>';

            echo '<p class="change-subtitle">Added</p>
                    <ul class="changelog-ul">
                        <li class="changelog-item">'.$addedUpt2->item1.'</li>
                        <li class="changelog-item">'.$addedUpt2->item2.'</li>
                        <li class="changelog-item">'.$addedUpt2->item3.'</li>
                        <li class="changelog-item">'.$addedUpt2->item4.'</li>
                        <li class="changelog-item">'.$addedUpt2->item5.'</li>
                    </ul>';
            
            echo '<p class="change-subtitle">Updated</p>
                    <ul class="changelog-ul">
                        <li class="changelog-item">'.$updatedUpt2->item1.'</li>
                        <li class="changelog-item">'.$updatedUpt2->item2.'</li>
                        <li class="changelog-item">'.$updatedUpt2->item3.'</li>
                        <li class="changelog-item">'.$updatedUpt2->item4.'</li>
                        <li class="changelog-item">'.$updatedUpt2->item5.'</li>
                    </ul>';

            echo '<p class="change-subtitle">Fixed</p>
                    <ul class="changelog-ul">
                        <li class="changelog-item">'.$fixedUpt2->item1.'</li>
                    </ul></div>';

            $upt1 = $changelog->upt1;
            $addedUpt1 = $upt1->added;
            $updatedUpt1 = $upt1->updated;
            $fixedUpt1 = $upt1->fixed;

            echo '<div class ="log-items"><h5 class="changelog-date">
            version:&nbsp' . $upt1->version . ' - ' . $upt1->date . '</h5>
            <p class="comment-of-changes">'.$upt1->comment.'</p>';

            echo '<p class="change-subtitle">Added</p>
                    <ul class="changelog-ul">
                        <li class="changelog-item">'.$addedUpt1->item1.'</li>
                        <li class="changelog-item">'.$addedUpt1->item2.'</li>
                        <li class="changelog-item">'.$addedUpt1->item3.'</li>
                    </ul>';
            
            echo '<p class="change-subtitle">Updated</p>
                    <ul class="changelog-ul">
                        <li class="changelog-item">'.$updatedUpt1->item1.'</li>
                        <li class="changelog-item">'.$updatedUpt1->item2.'</li>
                    </ul>';

            echo '<p class="change-subtitle">Fixed</p>
                    <ul class="changelog-ul">
                        <li class="changelog-item">'.$fixedUpt1->item1.'</li>
                    </ul></div>';

            $born = $changelog->born;

            echo '<div class ="log-items"><h5 class="changelog-date">
            version:&nbsp' . $born->version . ' - ' . $born->date . '</h5>
            <p class="comment-of-changes">'.$born->comment.'</p>';

            ?>
            </div>
        </div>
    </main>
    <?php include '../shares/footer.php' ; ?>
</body>
</html>
