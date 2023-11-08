<?php
    // $title = 'Dashboard';
    ob_start();
?>

<div data-bs-spy="scroll" data-bs-target="#navbar" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" tabindex="0">
    <section class="py-5 px-3">
        <div class="container my-5">
            <div class="row py-5 my-4">
                <div class="col d-flex align-items-center">
                    <h1><span class="text-success">PuskesmasKu</span> memberikan pelayanan kesehatan dasar, menyeluruh, paripurna, dan terpadu.</h1>
                </div>
                <div class="col d-flex justify-content-center d-none d-lg-block">
                    <img src="<?= base_url().'/assets/images/vector_puskesmas.svg' ?>" width="85%" alt="Gbr Vector Puskesmas">
                </div>
            </div>
        </div>
    </section>

    <section id="layanankami" class="bg-primary bg-opacity-25 py-5 px-3">
        <div class="container">
            <div class="d-flex justify-content-center">
                <div>
                    <h3 class="text-center">Layanan Kami</h3>
                    <hr class="border-bottom border-3 border-primary opacity-100 mx-5" />
                </div>
            </div>
            <div class="row py-5 d-flex justify-content-center">
                <div class="col-lg-2 col-md-4 col-sm-12 p-2">
                    <div class="card shadow border border-2 border-success" style="min-height: 250px;">
                        <div class="card-header bg-primary">
                            <h1 class="text-white text-center">1</h1>
                        </div>
                        <div class="card-body">
                            <h4>Konsultasi Dokter</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-12 p-2">
                    <div class="card shadow border border-2 border-success" style="min-height: 250px;">
                        <div class="card-header bg-primary">
                            <h1 class="text-white text-center">2</h1>
                        </div>
                        <div class="card-body">
                            <h4>Pemeriksaan Medis</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-12 p-2">
                    <div class="card shadow border border-2 border-success" style="min-height: 250px;">
                        <div class="card-header bg-primary">
                            <h1 class="text-white text-center">3</h1>
                        </div>
                        <div class="card-body">
                            <h4>Pembuatan Surat Rujukan</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-12 p-2">
                    <div class="card shadow border border-2 border-success" style="min-height: 250px;">
                        <div class="card-header bg-primary">
                            <h1 class="text-white text-center">4</h1>
                        </div>
                        <div class="card-body">
                            <h4>Pembuatan Surat Keterangan Kesehatan</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-12 p-2">
                    <div class="card shadow border border-2 border-success" style="min-height: 250px;">
                        <div class="card-header bg-primary">
                            <h1 class="text-white text-center">5</h1>
                        </div>
                        <div class="card-body">
                            <h4>Pembuatan Surat Keterangan Sakit</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-12 p-2">
                    <div class="card shadow border border-2 border-success" style="min-height: 250px;">
                        <div class="card-header bg-primary">
                            <h1 class="text-white text-center">6</h1>
                        </div>
                        <div class="card-body">
                            <h4>Pembuatan Surat Keterangan Buta Warna</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="dokterjaga" class="bg-opacity-25 py-5 px-3">
        <div class="container">
            <div class="d-flex justify-content-center">
                <div>
                    <h3 class="text-center">Dokter Jaga</h3>
                    <hr class="border-bottom border-3 border-primary opacity-100 mx-5" />
                </div>
            </div>
            <div class="row py-5 my-4">
                <div class="col-lg-6 col-sm-12 d-flex justify-content-center">
                    <img src="<?= base_url().'/assets/images/fotodokter.png' ?>" width="55%" alt="Foto Dokter">
                </div>
                <div class="col-lg-6 col-sm-12 d-flex align-items-center">
                    <div>
                        <h1>Dr. Jhon Doe</h1>
                        <p>"Salam, saya adalah Dr. John Doe, seorang dokter umum yang telah berpraktik selama lebih dari 5 tahun. Saya 
                            memahami bahwa kesehatan adalah aset berharga bagi kita semua, dan saya berkomitmen untuk memberikan perawatan 
                            medis yang terbaik kepada setiap pasien. Saya telah berpengalaman dalam merawat berbagai kondisi medis dan 
                            bekerja keras untuk memastikan pasien merasa didengar dan dipahami. Kesehatan Anda adalah prioritas saya, dan 
                            saya siap membantu Anda dalam perjalanan menuju kesejahteraan."</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="jadwal" class="bg-primary bg-opacity-25 py-5 px-3">
        <div class="container">
            <div class="d-flex justify-content-center">
                <div>
                    <h3 class="text-center">Jadwal</h3>
                    <hr class="border-bottom border-3 border-primary opacity-100 mx-3" />
                </div>
            </div>
            <div class="row py-5 d-flex justify-content-center">
                <div class="col-lg-4 col-md-4 col-sm-12 p-2">
                    <div class="card shadow border border-2 border-success">
                        <div class="card-header bg-primary">
                            <h1 class="text-white text-center">Senin</h1>
                        </div>
                        <div class="card-body">
                            <h4>08.00 - 17.00 WIB</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 p-2">
                    <div class="card shadow border border-2 border-success">
                        <div class="card-header bg-primary">
                            <h1 class="text-white text-center">Selasa</h1>
                        </div>
                        <div class="card-body">
                            <h4>08.00 - 17.00 WIB</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 p-2">
                    <div class="card shadow border border-2 border-success">
                        <div class="card-header bg-primary">
                            <h1 class="text-white text-center">Rabu</h1>
                        </div>
                        <div class="card-body">
                            <h4>08.00 - 17.00 WIB</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 p-2">
                    <div class="card shadow border border-2 border-success">
                        <div class="card-header bg-primary">
                            <h1 class="text-white text-center">Kamis</h1>
                        </div>
                        <div class="card-body">
                            <h4>08.00 - 17.00 WIB</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 p-2">
                    <div class="card shadow border border-2 border-success">
                        <div class="card-header bg-primary">
                            <h1 class="text-white text-center">Jum'at</h1>
                        </div>
                        <div class="card-body">
                            <h4>08.00 - 17.00 WIB</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 p-2">
                    <div class="card shadow border border-2 border-success">
                        <div class="card-header bg-warning">
                            <h1 class="text-white text-center">Sabtu</h1>
                        </div>
                        <div class="card-body">
                            <h4>08.00 - 12.00 WIB</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 p-2">
                    <div class="card shadow border border-2 border-success">
                        <div class="card-header bg-danger">
                            <h1 class="text-white text-center">Minggu</h1>
                        </div>
                        <div class="card-body">
                            <h4>(Tutup)</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="lokasi" class="bg-opacity-25 py-5 px-3">
        <div class="container">
            <div class="d-flex justify-content-center">
                <div>
                    <h3 class="text-center">Lokasi</h3>
                    <hr class="border-bottom border-3 border-primary opacity-100 mx-3" />
                </div>
            </div>
            <div class="row py-2">
                <div class="col-12 d-flex align-items-center">
                    <div style="width: 100%">
                        <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Jln%20Jakarta+(PuskesmasKu)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                            <a href="https://www.maps.ie/population/">Population mapping</a>
                        </iframe>
                    </div>
                </div>
                <div class="col-12">
                    <p><b>Alamat : </b> Jl. Jakarta No.28, Kebonwaru, Kec. Batununggal, Kota Bandung, Jawa Barat 40272</p>
                </div>
            </div>
        </div>
    </section>
</div>

<?php $content = ob_get_clean(); ?>
<?php include './views/layouts/app-master.php'; ?>
