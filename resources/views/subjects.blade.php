<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="w-full max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold mb-4 text-center">Daftar Mata Pelajaran</h1>

        <table class="w-full border border-gray-300 text-sm text-left">
            <thead class="bg-gray-200">
                <tr>
                    <th class="border px-4 py-2">No</th>
                    <th class="border px-4 py-2">Nama Mata Pelajaran</th>
                    <th class="border px-4 py-2">Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subjects as $subject)
                    <tr class="odd:bg-white even:bg-gray-50 hover:bg-gray-100 transition">
                        <td class="border px-6 py-4 font-medium text-gray-700">{{ $loop->iteration }}</td>
                        <td class="border px-6 py-4">{{ $subject->name }}</td>
                        <td class="border px-6 py-4">{{ $subject->description }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
