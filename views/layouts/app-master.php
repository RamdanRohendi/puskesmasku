<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <title>Puskesmasku <?= @$title ? '- ' . @$title : '' ?></title>
    <meta name="keywords" content="Puskesmas, Kesehatan, Puskesmasku" />
    <meta name="description" content="Sebuah website yang memberikan informasi mengenai data puskesmas." />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="<?= base_url().'/assets/images/favicon.ico' ?>" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url().'/assets/css/styles.css' ?>">
    <?php echo @$styles; ?>
</head>
<body>
    <?php include 'partials/alert.php'; ?>

    <?php include 'partials/navbar.php'; ?>

    <div class="mt-5 pt-3">
        <?php echo @$content; ?>
    </div>
    
    <?php include 'partials/footer.php'; ?>

    <img id="scrolltotop" src="../assets/images/scroll_top.svg" class="cursor-pointer position-fixed bottom-0 end-0 m-4 d-none bg-transparent shadow rounded-circle opacity-50 hover-opacity-100" width="50" alt="To top">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        $(window).scroll(function(){
            if ($(this).scrollTop() > 50) {
                $('.navbar').addClass('shadow');
                $('#scrolltotop').removeClass('d-none');
            } else {
                $('.navbar').removeClass('shadow');
                $('#scrolltotop').addClass('d-none');
            }
        });

        $('#scrolltotop').click(function() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        })
    </script>
    <?php echo @$scripts; ?>
</body>
</html>
