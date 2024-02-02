<!DOCTYPE html>
<html>

<head>
    <?php include '../shares/head.php'; ?>
    <link rel="prefetch" href="../apps/dist/index.php" as="php">
    <link rel="prefetch" href="../apps/public/index.php" as="php">
</head>

<body>
    
    <?php 
        include '../shares/header.php';
        include './loading-screen.php' 
    ?>
    <main>
        <div class="apps-overlay">
            <div class="apps-nav">
                <ul class="list-apps">
                    <?php include '../shares/apps-link.php'; ?>
                </ul>
            </div>
        </div>
    </main>
    <?php include '../shares/footer.php'; ?>
</body>
</html>
