<div id="addTeacherModal" tabindex="-1" aria-hidden="true" 
    class="hidden fixed inset-0 z-50 justify-center items-center w-full h-full overflow-y-auto flex">

    <div class="relative w-full max-w-lg p-4">
        <div class="bg-white rounded-lg shadow dark:bg-gray-700">

            <div class="flex items-center justify-between p-4 border-b dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Add Teacher</h3>
                <button data-modal-hide="addTeacherModal" class="text-gray-400 hover:bg-gray-200 p-2 rounded">✕</button>
            </div>

            <form action="{{ route('admin.teacher.store') }}" method="POST" class="p-6 space-y-4">
                @csrf

                <div>
                    <label class="block mb-2 font-medium text-gray-900 dark:text-white">Nama *</label>
                    <input type="text" name="name" value="{{ old('name') }}" required
                        class="w-full p-2.5 border rounded-lg dark:bg-gray-600 dark:text-white dark:border-gray-500 
                        @error('name') border-red-500 @enderror">
                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block mb-2 font-medium text-gray-900 dark:text-white">Email *</label>
                    <input type="email" name="email" value="{{ old('email') }}" required
                        class="w-full p-2.5 border rounded-lg dark:bg-gray-600 dark:text-white dark:border-gray-500
                        @error('email') border-red-500 @enderror">
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block mb-2 font-medium text-gray-900 dark:text-white">Mata Pelajaran *</label>
                    <input type="text" name="subject_name" value="{{ old('subject_name') }}" required
                        class="w-full p-2.5 border rounded-lg dark:bg-gray-600 dark:text-white dark:border-gray-500
                        @error('subject_name') border-red-500 @enderror">
                    @error('subject_name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block mb-2 font-medium text-gray-900 dark:text-white">Deskripsi Mata Pelajaran *</label>
                    <textarea name="subject_description" required rows="3"
                        class="w-full p-2.5 border rounded-lg dark:bg-gray-600 dark:text-white dark:border-gray-500
                        @error('subject_description') border-red-500 @enderror">{{ old('subject_description') }}</textarea>
                    @error('subject_description')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block mb-2 font-medium text-gray-900 dark:text-white">Telepon *</label>
                    <input type="text" name="phone" value="{{ old('phone') }}" required
                        class="w-full p-2.5 border rounded-lg dark:bg-gray-600 dark:text-white dark:border-gray-500
                        @error('phone') border-red-500 @enderror">
                    @error('phone')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block mb-2 font-medium text-gray-900 dark:text-white">Alamat *</label>
                    <textarea name="address" required rows="3"
                        class="w-full p-2.5 border rounded-lg dark:bg-gray-600 dark:text-white dark:border-gray-500
                        @error('address') border-red-500 @enderror">{{ old('address') }}</textarea>
                    @error('address')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-end gap-3 pt-4">
                    <button type="button" data-modal-hide="addTeacherModal" 
                        class="px-5 py-2.5 bg-gray-300 hover:bg-gray-400 rounded-lg font-medium">
                        Cancel
                    </button>
                    <button type="submit" 
                        class="px-5 py-2.5 bg-blue-700 hover:bg-blue-800 text-white rounded-lg font-medium">
                        Save Teacher
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>