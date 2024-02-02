<!DOCTYPE html>
<html>
<head>
    <?php include '../shares/head.php' ; ?>
    <link rel="stylesheet" href="../css/progressbar.css">
    <script defer src="../js/progressbar.js"></script>
</head>
<body>
    <?php 
        include '../shares/header.php';
        include './loading-screen.php' 
    ?>
    <div class="skills-container">
        <div class="next-bg">
            <div class="skill-overlay">
                <?php include '../shares/skill-component.php' ; ?>
                <article>
                    <h4>Hobbies</h4>
                    <p class="hobbies">Cars, Programming, Investing, Video games, 
                        Guitar, Piano, Dance, Music, Teaching, Learning new staffs</p>
                </article>
            </div>
        </div>
    </div>
    <?php include '../shares/footer.php' ; ?>
</body>
</html>
