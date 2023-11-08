<?php if (!empty($success)) { ?>
    <div class="toast align-items-center position-fixed text-bg-success top-0 end-0 m-4 show z-index-up" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                <?= $success ?>
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
<?php } ?>

<?php if (!empty($error)) { ?>
    <div class="toast align-items-center position-fixed text-bg-danger top-0 end-0 m-4 show z-index-up" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                <?= $error ?>
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
<?php } ?>
