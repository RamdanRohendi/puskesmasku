<div class="flex-shrink-0 p-3 border h-100 position-fixed bg-white shadow d-none d-lg-block" style="width: 280px;">
    <div class="mb-3 pb-3 border-bottom">
        <?php include 'sidebar-items/header.php' ?>
    </div>

    <div class="">
        <?php include 'sidebar-items/body.php' ?>
    </div>
</div>

<div class="offcanvas offcanvas-lg offcanvas-start d-lg-none" tabindex="-1" id="canvasSidebar" aria-labelledby="canvasSidebarLabel">
    <div class="offcanvas-header border-bottom">
        <div class="offcanvas-title" id="canvasSidebarLabel">
            <?php include 'sidebar-items/header.php' ?>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <?php include 'sidebar-items/body.php' ?>
    </div>
</div>
