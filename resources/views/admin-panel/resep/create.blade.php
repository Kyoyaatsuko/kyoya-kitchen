@extends('admin-panel.layouts.app')
@section('content')
    <main class="nxl-container">
        <div class="nxl-content">
            <!-- [ page-header ] start -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Resep</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Buat</li>
                    </ul>
                </div>
                <div class="page-header-right ms-auto">
                    <div class="page-header-right-items">
                        <div class="d-flex d-md-none">
                            <a href="javascript:void(0)" class="page-header-right-close-toggle">
                                <i class="feather-arrow-left me-2"></i>
                                <span>Back</span>
                            </a>
                        </div>
                        <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                            <a href="javascript:void(0);" class="btn btn-primary successAlertMessage">
                                <i class="feather-save me-2"></i>
                                <span>Simpan Resep</span>
                            </a>
                        </div>
                    </div>
                    <div class="d-md-none d-flex align-items-center">
                        <a href="javascript:void(0)" class="page-header-right-open-toggle">
                            <i class="feather-align-right fs-20"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- [ page-header ] end -->
            <!-- [ Main Content ] start -->
            <div class="main-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Tambah Resep</h5>
                            </div>

                            <div class="card-body">
                                <form action=" {{ route('resep.store') }} " method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row">

                                        <!-- Judul Resep -->
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Judul Resep</label>
                                            <input type="text" name="title" class="form-control"
                                                placeholder="Contoh: Nasi Goreng Spesial" required>
                                        </div>

                                        <!-- Deskripsi -->
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label">Deskripsi</label>
                                            <textarea name="description" class="form-control" rows="3"></textarea>
                                        </div>

                                        <!-- Bahan -->
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label">Bahan-bahan</label>
                                            <textarea name="ingredients" class="form-control" rows="4" placeholder="Pisahkan dengan baris baru"></textarea>
                                        </div>

                                        <!-- Langkah -->
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label">Langkah-langkah</label>
                                            <textarea name="steps" class="form-control" rows="5"></textarea>
                                        </div>

                                        <!-- Waktu Memasak -->
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Waktu (menit)</label>
                                            <input type="number" name="cook_time" class="form-control">
                                        </div>

                                        <!-- Porsi -->
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Porsi</label>
                                            <input type="number" name="servings" class="form-control">
                                        </div>

                                        <!-- Gambar -->
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Gambar Resep</label>
                                            <input type="file" name="image" class="form-control">
                                        </div>

                                    </div>

                                    <!-- Submit -->
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary">
                                            Simpan Resep
                                        </button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Main Content ] end -->
        </div>
        <!-- [ Footer ] start -->
        <footer class="footer">
            <p class="fs-11 text-muted fw-medium text-uppercase mb-0 copyright">
                <span>Copyright ©</span>
                <script>
                    document.write(new Date().getFullYear());
                </script>
            </p>
            <p><span>By: <a target="_blank" href="https://wrapbootstrap.com/user/theme_ocean"
                        target="_blank">theme_ocean</a></span> • <span>Distributed by: <a target="_blank"
                        href="https://themewagon.com" target="_blank">ThemeWagon</a></span></p>
            <div class="d-flex align-items-center gap-4">
                <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Help</a>
                <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Terms</a>
                <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Privacy</a>
            </div>
        </footer>
        <!-- [ Footer ] end -->
    </main>
@endsection
