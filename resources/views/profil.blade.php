<!DOCTYPE html>
<html>
<head>
    <title>Profil Saya</title>
       <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
  <nav>
        <a href="/">Beranda</a>
        <a href="/profil">Profil</a>
        <a href="/kontak">Kontak</a>
    </nav>
<body>
    <h1>Profil Diri</h1>
    <p>Nama: {{ $nama }}</p>
    <p>Kelas: {{ $kelas }}</p>
    <p>Sekolah: {{ $sekolah }}</p>
</body>
</html>
