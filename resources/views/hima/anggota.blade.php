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
            @forelse (($daftarAnggota ?? []) as $anggota)
            <tr>
                <td>{{ $anggota['id'] }}</td>
                <td>{{ $anggota['nama'] }}</td>
                <td>{{ $anggota['divisi'] }}</td>
                <td>{{ $anggota['status'] }}</td>
            </tr>
            @empty
            <tr><td colspan="4">Belum ada data anggota.</td></tr>
            @endforelse
        </tbody>
    </table>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Tahun Terbit</th>
            </tr>
        </thead>
        <tbody>
            @forelse (($daftarBuku ?? []) as $buku)
            <tr>
                <td>{{ $buku['id'] }}</td>
                <td>{{ $buku['judul'] }}</td>
                <td>{{ $buku['penulis'] }}</td>
                <td>{{ $buku['tahun_terbit'] }}</td>
            </tr>
            @empty
            <tr><td colspan="4">Belum ada data buku.</td></tr>
            @endforelse
        </tbody>
    </table>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Kegiatan</th>
                <th>Tanggal</th>
                <th>Lokasi</th>
            </tr>
        </thead>
        <tbody>
            @forelse (($daftarKegiatan ?? []) as $kegiatan)
            <tr>
                <td>{{ $kegiatan['id'] }}</td>
                <td>{{ $kegiatan['nama_kegiatan'] }}</td>
                <td>{{ $kegiatan['tanggal'] }}</td>
                <td>{{ $kegiatan['lokasi'] }}</td>
            </tr>
            @empty
            <tr><td colspan="4">Belum ada data kegiatan.</td></tr>
            @endforelse
        </tbody>
    </table>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Dokumen</th>
                <th>Jenis</th>
                <th>Tanggal Upload</th>
            </tr>
        </thead>
        <tbody>
            @forelse (($daftarDokumen ?? []) as $dokumen)
            <tr>
                <td>{{ $dokumen['id'] }}</td>
                <td>{{ $dokumen['nama_dokumen'] }}</td>
                <td>{{ $dokumen['jenis'] }}</td>
                <td>{{ $dokumen['tanggal_upload'] }}</td>
            </tr>
            @empty
            <tr><td colspan="4">Belum ada data dokumen.</td></tr>
            @endforelse
        </tbody>
    </table>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Divisi</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @forelse (($daftarDivisi ?? []) as $divisi)
            <tr>
                <td>{{ $divisi['id'] }}</td>
                <td>{{ $divisi['nama'] }}</td>
                <td>{{ $divisi['deskripsi'] }}</td>
            </tr>
            @empty
            <tr><td colspan="3">Belum ada data divisi.</td></tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>