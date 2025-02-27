<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CSS -->
     <link rel="stylesheet" href="/css/style.css">
    <title>Guaviare Directory | <?php echo $title; ?></title>
</head>

<body>

    <?php include_once __DIR__ . "/../includes/generalHeader.php"; ?>

    <main id="main__content">
        <?php echo $contenido; ?>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="/js/carouselCategories.js"></script>

    <?php include_once __DIR__ . "/../includes/generalFooter.php"; ?>

</body>



</html>