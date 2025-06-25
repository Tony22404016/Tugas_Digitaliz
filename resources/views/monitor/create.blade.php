<!DOCTYPE html>
<html>
<head>
    <title>Tambah Barang Baru</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h1 class="h4"><i class="bi bi-plus-circle"></i> Tambah Project Baru</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('monitor.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Nama Project</label>
                        <input type="text" name="nama_proyek" class="form-control" required placeholder="contoh: Pembuatan Web">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Client</label>
                        <input type="text" name="client" class="form-control" required placeholder="contoh: Bayu Sentosa ">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Kepala Project</label>
                        <input type="text" name="kepala_proyek" class="form-control" required placeholder="contoh: Junaidi">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tanggal Mulai</label>
                        <input type="date" name="tanggal_mulai" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tanggal Selesai</label>
                        <input type="date" name="tanggal_selesai" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Progress (%)</label>
                        <input type="text" name="kemajuan" class="form-control" required placeholder="Angka saja contoh:20">
                    </div>

                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> Simpan
                    </button>
                    <a href="{{ route('monitor.index') }}" class="btn btn-secondary">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>