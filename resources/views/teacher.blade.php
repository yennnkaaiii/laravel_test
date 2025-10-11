<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="w-full max-w-5xl mx-auto bg-white p-6 rounded-lg shadow-lg mt-6">
        <h1 class="text-2xl font-bold mb-4 text-center text-gray-800">Daftar Data Guru</h1>

        <div class="overflow-x-auto">
            <table class="w-full border border-gray-300 text-sm text-left rounded-lg overflow-hidden">
                <thead class="bg-gray-200 text-gray-800">
                    <tr>
                        <th class="border px-4 py-2">No</th>
                        <th class="border px-4 py-2">Name</th>
                        <th class="border px-4 py-2">Subject</th>
                        <th class="border px-4 py-2">Phone</th>
                        <th class="border px-4 py-2">Email</th>
                        <th class="border px-4 py-2">Address</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($teachers as $teacher)
                    <tr class="odd:bg-white even:bg-gray-50 hover:bg-gray-100 transition">
                        <td class="border px-6 py-4 font-medium text-gray-700">{{ $loop->iteration }}</td>
                        <td class="border px-6 py-4">{{ $teacher->name }}</td>
                        <td class="border px-6 py-4">{{ $teacher->subject->name }}</td>
                        <td class="border px-6 py-4">{{ $teacher->phone }}</td>
                        <td class="border px-6 py-4">{{ $teacher->email }}</td>
                        <td class="border px-6 py-4">{{ $teacher->address }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
