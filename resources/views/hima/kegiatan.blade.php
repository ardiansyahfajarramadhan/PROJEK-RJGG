<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kegiatan HIMA</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #28a745; color: white; } /* Warna hijau untuk membedakan halaman */
    </style>
</head>
<body>

    <h2>Daftar Program Kerja HIMA SAINTEK</h2>

    <table>
        <thead>
            <tr>
                <th>ID Kegiatan</th>
                <th>Nama Program Kerja</th>
                <th>Status Persetujuan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($daftarKegiatan as $kegiatan)
            <tr>
                <td>{{ $kegiatan['id_kegiatan'] }}</td>
                <td>{{ $kegiatan['nama_proker'] }}</td>
                <td>
                    <strong>{{ $kegiatan['status'] }}</strong>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>