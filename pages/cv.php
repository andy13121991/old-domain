<!DOCTYPE html>
<html>

<head>
	<?php include '../shares/head.php' ; ?>
    <link rel="stylesheet" href="../css/jquery.fancybox.min.css">
    <script type="text/javascript" src="../js/jquery.fancybox.min.js"></script>
    <script type="text/javascript" src="../js/fancybox.js"></script>
</head>

<body>

    <?php 
        include '../shares/header.php';
        include './loading-screen.php' 
    ?>
    <div class="gridcontainer">
        <div class="next-bg">
        <div class="skill-overlay">
            <aside class="aside-nav">
                <ul class="scroll-nav">
                    <li class="item1">
                        <a href="#item1" class="aside-itembtn navbtn-job">Jobs</a>
                    </li>
                    <li class="item2">
                        <a href="#item2" class="aside-itembtn navbtn-certif">Certificates</a>
                    </li>
                    <li class="item3">
                        <a href="#item3" class="aside-itembtn navbtn-dwn">Download</a>
                    </li>
                </ul>
            </aside>
            <article class="main-cv-page">
                <div id="item1">
                    <h1>Jobs</h1>
                    <ul class="worked-jobs">
                        <?php include '../shares/job-component.php'; ?>
                    </ul>
                </div>
                <div id="item2" class="gallery">
                    <h1>Certificates</h1>
                    <?php include '../shares/certificate-component.php'; ?>
                </div>
                <div id="item3" class="prefooter">
                    <h2 class="title-dwn-btns">To download certificates, CV or website source code go below and press button</h2>
                    <ul class="download-menu">
                        <li class="dwn-btn1">
                            <a class="dwnlink1" href="../download/Documents.zip" download="documents.zip">
                                <img src="../img/download.png" class="imgdwn1">Download certificates</a></li>
                        <li class="dwn-btn2">
                            <a class="dwnlink2" href="../download/domain-source-code.zip" download="domain.zip">
                                <img src="../img/download1.png" class="imgdwn2">Download Website source code</a></li>
                    </ul>
                </div>
        </article>
        </div>
        </div>
    </div>
    <?php include '../shares/footer.php' ; ?>
</body>
</html>
