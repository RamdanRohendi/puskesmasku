<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <title>Puskesmasku <?= @$title ? '- ' . @$title : '' ?></title>
    <meta name="keywords" content="Puskesmas, Kesehatan, Puskesmasku" />
    <meta name="description" content="Sebuah website yang memberikan informasi mengenai data puskesmas." />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="<?= base_url().'/assets/images/favicon.ico' ?>" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url().'/assets/css/styles.css' ?>">
    <link rel="stylesheet" href="<?= base_url().'/assets/css/styles-admin.css' ?>">
    <?php echo @$styles; ?>
</head>
<body class="bg-light">
    <?php include 'partials/alert.php'; ?>

    <div class="d-flex flex-nowrap">
        <?php include 'partials/sidebar.php'; ?>
    </div>

    <div class="mt-2 ms-sidebar">
        <?php include 'partials/topbar.php'; ?>
        <?php echo @$content; ?>
        <?php include 'partials/footer-admin.php'; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <?php echo @$scripts; ?>
</body>
</html>
