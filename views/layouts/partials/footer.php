<footer class="footer d-flex flex-lg-column bg-light border-top mt-5" id="kt_footer">
    <div class="container align-items-center py-4">
        <div class="row">
            <div class="col-12 col-lg-4 py-5">
                <img alt="Logo" src="../assets/images/logo.svg" class="mb-4 logo-default" width="150px" />
                <p>Website PuskesmasKu yang menyajikan data dan informasi tentang PuskesmasKu dari mulai layanan hingga riwayat berobat.</p>
            </div>
            <div class="col-12 col-lg-4 py-5">
                <h3>Akses Info</h3>
                <div class="list-group">
                    <a href="<?= base_url().'#layanankami' ?>" class="ps-0 list-group-item list-group-item-action bg-light border-0">Layanan</a>
                    <a href="<?= base_url().'#dokterjaga' ?>" class="ps-0 list-group-item list-group-item-action bg-light border-0">Dokter Jaga</a>
                    <a href="<?= base_url().'#jadwal' ?>" class="ps-0 list-group-item list-group-item-action bg-light border-0">Jadwal</a>
                    <a href="<?= base_url().'#lokasi' ?>" class="ps-0 list-group-item list-group-item-action bg-light border-0">Lokasi</a>
                    <!-- <a href="javascript:void(0);" class="ps-0 list-group-item list-group-item-action bg-light border-0">Antrian</a> -->
                </div>
            </div>
            <div class="col-12 col-lg-4 py-5">
                <h3>Kontak Kami</h3>
                <p>
                    <span class="svg-icon svg-icon-muted svg-icon-2x">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <path d="M11.914857,14.1427403 L14.1188827,11.9387145 C14.7276032,11.329994 14.8785122,10.4000511 14.4935235,9.63007378 L14.3686433,9.38031323 C13.9836546,8.61033591 14.1345636,7.680393 14.7432841,7.07167248 L17.4760882,4.33886839 C17.6713503,4.14360624 17.9879328,4.14360624 18.183195,4.33886839 C18.2211956,4.37686904 18.2528214,4.42074752 18.2768552,4.46881498 L19.3808309,6.67676638 C20.2253855,8.3658756 19.8943345,10.4059034 18.5589765,11.7412615 L12.560151,17.740087 C11.1066115,19.1936265 8.95659008,19.7011777 7.00646221,19.0511351 L4.5919826,18.2463085 C4.33001094,18.1589846 4.18843095,17.8758246 4.27575484,17.613853 C4.30030124,17.5402138 4.34165566,17.4733009 4.39654309,17.4184135 L7.04781491,14.7671417 C7.65653544,14.1584211 8.58647835,14.0075122 9.35645567,14.3925008 L9.60621621,14.5173811 C10.3761935,14.9023698 11.3061364,14.7514608 11.914857,14.1427403 Z" fill="#000000"/>
                        </svg>
                    </span>
                    <span id="no-telp">+62 888-8888-0000</span>
                </p>
                <p>
                    <span class="svg-icon svg-icon-muted svg-icon-2x">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <path d="M5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000"/>
                        </svg>
                    </span>
                    <span id="email">info@puskesmasku.id</span>
                </p>
            </div>
        </div>
        <hr class="fw-bolder mx-2">
        <div class="text-dark order-2 order-md-1 text-center w-100">
            <span class="text-muted fw-bold">Copyright © PuskesmasKu <?= date('Y') ?>. All rights reserved</span>
        </div>
    </div>
</footer>
