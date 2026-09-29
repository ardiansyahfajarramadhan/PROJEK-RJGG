<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Anggota HIMA</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #007bff; color: white; }
    </style>
</head>
<body>

    <h2>Data Pengurus HIMA SAINTEK</h2>

    <table>
        <thead>
            <tr>
                <th>ID / NIM</th>
                <th>Nama Anggota</th>
                <th>Divisi</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <!-- Looping data dari Variabel Controller -->
            @foreach ($daftarAnggota as $anggota)
            <tr>
                <td>{{ $anggota['id'] }}</td>
                <td>{{ $anggota['nama'] }}</td>
                <td>{{ $anggota['divisi'] }}</td>
                <td>{{ $anggota['status'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>