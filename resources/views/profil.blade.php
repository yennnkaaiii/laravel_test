<!DOCTYPE html>
<html>
<head>
    <title>Document - Profil</title>
</head>
<x-layout></x-layout>
<body class="bg-gray-900 text-white">
    <div class="flex items-center justify-center min-h-screen">
        <div class="text-center">
            <h1 class="text-3xl font-bold mb-6">Profil Diri</h1>
            <p class="text-lg">Nama: {{ $nama }}</p>
            <p class="text-lg">Kelas: {{ $kelas }}</p>
            <p class="text-lg">Sekolah: {{ $sekolah }}</p>
        </div>
    </div>
    <style>
  body {
    background-color: #0b1a2a; /* Warna gelap */
    color: white; /* Ubah teks menjadi putih */
    font-family: Arial, sans-serif;
  }
</style>
</body>
</html>
