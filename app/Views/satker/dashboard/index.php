<?= $this->extend('satker/layout/template') ?>

<?= $this->section('content') ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Dashboard User</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                <div class="container mt-5">
                    <!-- Welcome Section -->
                    <div class="card">
                        <div class="card-body bg-light">
                            <h5 class="card-title">Selamat Datang di aplikasi Sistem Informasi Gangguan dan Permohonan (SIGAP) TIK Kementerian Agama.</h5>
                            <p>Aplikasi ini dapat digunakan oleh seluruh PIC di pusat maupun di daerah untuk mempercepat proses komplain/pengaduan terkait dengan jaringan, aplikasi di Data Center PINMAS, dan layanan permohonan (Email Dinas, Subdomain, Webhosting, Pointing, dll).</p>
                            <p>Diharapkan dengan adanya layanan ini, dapat meningkatkan performa tata kelola TIK di Satuan Kerja/Unit Kerja baik di tingkat pusat maupun daerah.</p>
                            <p><strong>Selamat menggunakan.</strong></p>
                        </div>
                    </div>

                    <!-- Status Order Section -->
                    <div class="mt-4">
                        <h4 class="text-primary">Status Order Saya</h4>
                        <div class="row text-center">
                            <!-- Waiting Card -->
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-danger fs-1">
                                            <i class="bi bi-exclamation-circle-fill"></i>
                                        </div>
                                        <h1 class="text-danger"><?= $waitingCount ?></h1>
                                        <p class="text-muted">Waiting</p>
                                    </div>
                                </div>
                            </div>

                            <!-- On Process Card -->
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-primary fs-1">
                                            <i class="bi bi-arrow-repeat"></i>
                                        </div>
                                        <h1 class="text-primary"><?= $processCount ?></h1>
                                        <p class="text-muted">On Process</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Completed Card -->
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-success fs-1">
                                            <i class="bi bi-check-circle-fill"></i>
                                        </div>
                                        <h1 class="text-success"><?= $completedCount ?></h1>
                                        <p class="text-muted">Completed</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    
<?= $this->endSection(); ?>
