<x-layout>
    <x-slot:judul>{{ $title }} </x-slot:judul>

    <div class="w-full max-w-4xl mx-auto p-6 rounded-lg">
        <h1 class="text-2xl font-bold mb-4 text-center text-black">Daftar Kelas</h1>

        <table class="w-full border border-gray-600 text-sm text-black">
            <thead class="bg-slate-700/50">
                <tr>
                    <th class="border border-gray-600 px-4 py-2 text-center">No</th>
                    <th class="border border-gray-600 px-4 py-2 text-center">Name</th>
                    <th class="border border-gray-600 px-4 py-2 text-center">Students</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($classroom as $classroom)
                    <tr>
                        <td class="border border-gray-600 px-4 py-2 text-center">{{ $loop->iteration }}</td>
                        <td class="border border-gray-600 px-4 py-2 text-center">{{ $classroom->name }}</td>
                        <td class="border border-gray-600 px-4 py-2 text-center">
                            @foreach ($classroom->students as $student)
                                {{ $student->name }} <br>
                            @endforeach
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
