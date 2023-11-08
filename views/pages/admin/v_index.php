<?php
    // $title = 'Dashboard';
    ob_start();
?>

<div class="card mx-3 shadow mt-4 min-vh-admin bg-primary-subtle">
    <div class="card-body">
        <div class="container my-5">
            <div class="row py-5 my-4">
                <div class="col-lg-6 col-sm-12 d-flex align-items-center">
                    <h1><span class="text-success">PuskesmasKu</span> memberikan pelayanan kesehatan dasar, menyeluruh, paripurna, dan terpadu.</h1>
                </div>
                <div class="col-lg-6 col-sm-12 d-flex justify-content-center mt-5">
                    <img src="<?= base_url().'/assets/images/vector_puskesmas.svg' ?>" width="85%" alt="Gbr Vector Puskesmas">
                </div>
            </div>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php include '../views/layouts/app-admin-master.php'; ?>
