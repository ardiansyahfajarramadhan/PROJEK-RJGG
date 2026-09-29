<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arsip Dokumen HIMA</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #dc3545; color: white; } /* Warna merah untuk dokumen */
    </style>
</head>
<body>

    <h2>Arsip Dokumen Kegiatan HIMA SAINTEK</h2>

    <table>
        <thead>
            <tr>
                <th>ID Dokumen</th>
                <th>ID Kegiatan (Relasi)</th>
                <th>Jenis Dokumen</th>
                <th>Nama File</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($daftarDokumen as $dokumen)
            <tr>
                <td>{{ $dokumen['id_dok'] }}</td>
                <td>{{ $dokumen['id_kegiatan'] }}</td>
                <td>{{ $dokumen['jenis'] }}</td>
                <td><em>{{ $dokumen['file'] }}</em></td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>