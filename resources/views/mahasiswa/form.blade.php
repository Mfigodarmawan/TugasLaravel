<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Form Mahasiswa</h1>
    <form action="{{ route('mahasiswa.store') }}" method="post">
        @csrf
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required>
        <p></p>
        <label for="nim">NIM:</label>
        <input type="text" name="nim" required>
        <p></p>
        <label for="jurusan">Jurusan:</label>
        <input type="text" name="jurusan" required>
        <p></p>
        <label for="fakultas">Fakultas:</label>
        <input type="text" name="fakultas" required>
        <p></p>
        <label for="total_sks">Total SKS:</label>
        <input type="number" name="total_sks" required>
        <p></p>
        <label for="ipk">IPK:</label>
        <input type="text" name="ipk" required>
        <p></p>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>