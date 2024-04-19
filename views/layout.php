<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
    <title>Document</title>

    <link rel="stylesheet" href="/build/css/app.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&display=swap" rel="stylesheet">

</head>
<body>
    <div class="container-fluid">
        <div class="container mx-auto pt-3">
            <?php echo $contenido; ?>
        </div>
    </div>



    <?php include_once __DIR__ . '/templates/footer.php'; ?>

    <script src="/build/js/boostrap/boostrap.min.js"></script>
</body>
</html>