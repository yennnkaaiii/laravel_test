<!DOCTYPE html>
<html>
<head>
    <title>Profil</title>
</head>
<body>
    
    <x-layout>
    <x-slot:judul>Profil</x-slot:judul>
    <h1>Profil Saya</h1>
    <p>Nama: {{ $nama }}</p>
    <p>Kelas: {{ $kelas }}</p>
    <p>Sekolah: {{ $sekolah }}</p>
    </x-layout>
    <!-- <nav>
        <a href="/">Beranda</a> |
        <a href="/profil">Profil</a> |
        <a href="/kontak">Kontak</a>
        <a href="/home">Home</a>
    </nav> -->
</body>
</html>