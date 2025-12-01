<div id="deleteTeacherModal{{ $teacher->id }}" tabindex="-1" aria-hidden="true"
    class="hidden fixed inset-0 z-50 justify-center items-center w-full h-full overflow-y-auto flex">

    <div class="relative w-full max-w-md p-4">
        <div class="bg-white rounded-lg shadow dark:bg-gray-700">

            <div class="p-6 text-center">
                
                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" 
                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                        d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>

                <h3 class="mb-5 text-lg font-medium text-gray-900 dark:text-gray-300">
                    Apakah Anda yakin ingin menghapus teacher<br>
                    <strong class="text-red-600">{{ $teacher->name }}</strong>?
                </h3>

                <form action="{{ route('admin.teacher.destroy', $teacher->id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')

                    <button type="button"
                        data-modal-hide="deleteTeacherModal{{ $teacher->id }}"
                        class="px-5 py-2.5 bg-gray-300 hover:bg-gray-400 rounded-lg font-medium mr-3">
                        Cancel
                    </button>

                    <button type="submit" 
                        class="px-5 py-2.5 bg-red-600 hover:bg-red-700 text-white rounded-lg font-medium">
                        Yes, Delete
                    </button>
                </form>

            </div>

        </div>
    </div>
</div>