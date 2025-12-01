<div id="updateTeacherModal{{ $teacher->id }}" tabindex="-1" aria-hidden="true"
    class="hidden fixed inset-0 z-50 justify-center items-center w-full h-full overflow-y-auto flex">

    <div class="relative w-full max-w-lg p-4">
        <div class="bg-white rounded-lg shadow dark:bg-gray-700">

            <div class="flex items-center justify-between p-4 border-b dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Edit Teacher: {{ $teacher->name }}
                </h3>
                <button 
                    data-modal-hide="updateTeacherModal{{ $teacher->id }}"
                    class="text-gray-400 hover:bg-gray-200 p-2 rounded">
                    ✕
                </button>
            </div>

            <form action="{{ route('admin.teacher.update', $teacher->id) }}" method="POST" class="p-6 space-y-4">
                @csrf
                @method('PUT')

                <div>
                    <label class="block mb-2 font-medium text-gray-900 dark:text-white">Nama *</label>
                    <input type="text" name="name" value="{{ old('name', $teacher->name) }}" required
                        class="w-full p-2.5 border rounded-lg dark:bg-gray-600 dark:text-white dark:border-gray-500">
                </div>

                <div>
                    <label class="block mb-2 font-medium text-gray-900 dark:text-white">Email *</label>
                    <input type="email" name="email" value="{{ old('email', $teacher->email) }}" required
                        class="w-full p-2.5 border rounded-lg dark:bg-gray-600 dark:text-white dark:border-gray-500">
                </div>

                <div>
                    <label class="block mb-2 font-medium text-gray-900 dark:text-white">Mata Pelajaran *</label>
                    <input type="text" name="subject_name" 
                        value="{{ old('subject_name', $teacher->subject->name ?? '') }}" required
                        class="w-full p-2.5 border rounded-lg dark:bg-gray-600 dark:text-white dark:border-gray-500">
                </div>

                <div>
                    <label class="block mb-2 font-medium text-gray-900 dark:text-white">Deskripsi Mata Pelajaran *</label>
                    <textarea name="subject_description" required rows="3"
                        class="w-full p-2.5 border rounded-lg dark:bg-gray-600 dark:text-white dark:border-gray-500">{{ old('subject_description', $teacher->subject->description ?? '') }}</textarea>
                </div>

                <div>
                    <label class="block mb-2 font-medium text-gray-900 dark:text-white">Telepon *</label>
                    <input type="text" name="phone" value="{{ old('phone', $teacher->phone) }}" required
                        class="w-full p-2.5 border rounded-lg dark:bg-gray-600 dark:text-white dark:border-gray-500">
                </div>

                <div>
                    <label class="block mb-2 font-medium text-gray-900 dark:text-white">Alamat *</label>
                    <textarea name="address" required rows="3"
                        class="w-full p-2.5 border rounded-lg dark:bg-gray-600 dark:text-white dark:border-gray-500">{{ old('address', $teacher->address) }}</textarea>
                </div>

                <div class="flex justify-end gap-3 pt-4">
                    <button type="button"
                        data-modal-hide="updateTeacherModal{{ $teacher->id }}"
                        class="px-5 py-2.5 bg-gray-300 hover:bg-gray-400 rounded-lg font-medium">
                        Cancel
                    </button>
                    <button type="submit" 
                        class="px-5 py-2.5 bg-blue-700 hover:bg-blue-800 text-white rounded-lg font-medium">
                        Update Teacher
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>