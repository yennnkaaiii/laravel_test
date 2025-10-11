<x-layout>
    <x-slot:title>{{ $title }} </x-slot:title>

    <div class="w-full max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold mb-4 text-center">Daftar Siswa</h1>

        <table class="w-full border border-gray-300 text-sm text-left">
            <thead class="bg-gray-200">
                <tr>
                    <th class="border px-4 py-2">No</th>
                    <th class="border px-4 py-2">Name</th>
                    <th class="border px-4 py-2">Email</th>
                    <th class="border px-4 py-2">Address</th>
                    <th class="border px-4 py-2">Class</th>
                    <th class="border px-4 py-2">Birthday</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                <tr class = "odd:bg-white even:bg-gray-50 hover:bg-gray-100 transition">
                    <td class="border px-6 py-4 font-medium text-gray-700">{{ $loop->iteration }}</td>
                    <td class="border px-6 py-4">{{ $student->name}}</td>
                    <td class="border px-6 py-4">{{ $student->email }}</td>
                    <td class="border px-6 py-4">{{ $student->address }}</td>
                    <td class="border px-6 py-4">{{ $student->classroom->name }}</td>
                    <td class="border px-6 py-4">{{ $student['birthday'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
