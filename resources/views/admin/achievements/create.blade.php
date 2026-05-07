<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">إضافة إنجاز جديد</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg border border-gray-100">
                <form action="{{ route('admin.achievements.store') }}" method="POST" enctype="multipart/form-data" class="p-6 space-y-6">
                    @csrf

                    <!-- الاسم -->
                    <div>
                        <label class="block text-gray-700 mb-2 font-medium">اسم الإنجاز</label>
                        <input type="text" name="name" class="w-full border border-gray-300 rounded-lg p-2.5" required>
                    </div>

                    <!-- السنة -->
                    <div>
                        <label class="block text-gray-700 mb-2 font-medium">السنة</label>
                        <input type="text" name="year" class="w-full border border-gray-300 rounded-lg p-2.5" placeholder="مثال: 2023" required>
                    </div>

                    <!-- الوصف -->
                    <div>
                        <label class="block text-gray-700 mb-2 font-medium">الوصف</label>
                        <textarea name="description" rows="3" class="w-full border border-gray-300 rounded-lg p-2.5"></textarea>
                    </div>

                    <!-- الصورة -->
                    <div>
                        <label class="block text-gray-700 mb-2 font-medium">الصورة</label>
                        <input type="file" name="image" class="w-full border border-gray-300 rounded-lg p-2 file:mr-4 file:py-2 file:px-4 file:border-0 file:bg-amber-50 file:text-amber-700 hover:file:bg-amber-100">
                    </div>

                    <div class="flex items-center gap-4 pt-4 border-t">
                        <button type="submit" class="bg-amber-500 text-white font-bold py-2 px-6 rounded-lg hover:bg-amber-600 transition">حفظ</button>
                        <a href="{{ route('admin.achievements.index') }}" class="text-gray-600 hover:text-gray-900">إلغاء</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
