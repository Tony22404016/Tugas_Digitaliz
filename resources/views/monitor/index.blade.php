<!DOCTYPE html>
<html>
<head>
    <title>Daftar Project</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h1 class="h4" style="text-align: center;">Project monitoring</h1>
            </div>
            <div class="card-body">
                <a href="{{ route('monitor.create') }}" class="btn btn-success mb-3">
                    <i class="bi bi-plus-circle"></i> Tambah Project
                </a>

                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>ID_Project</th>
                            <th>Nama Proyek</th>
                            <th>Client</th>
                            <th>Kepala Proyek</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>Progress</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $item)
                        <tr>
                            <td>{{ $item->id_proyek }}</td>
                            <td>{{ $item->nama_proyek }}</td>
                            <td>{{ $item->client }}</td>
                            <td>{{ $item->kepala_proyek}}</td>
                            <td>{{ $item->tanggal_mulai}}</td>
                            <td>{{ $item->tanggal_selesai}}</td>
                            <td>{{$item->kemajuan}}%</td>


                            <td>
                                <a href="{{ route('monitor.edit', $item->id_proyek) }}" class="btn btn-sm btn-warning">
                                    <i class="bi bi-pencil"></i> Edit
                                </a>
                                <form action="{{ route('monitor.destroy', $item->id_proyek) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus?')">
                                        <i class="bi bi-trash"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS + Icons (Biar icon bisa dipakai) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>