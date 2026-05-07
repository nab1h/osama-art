<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">تعديل الشهادة</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg border border-gray-100">
                <form action="{{ route('admin.certificates.update', $certificate) }}" method="POST" enctype="multipart/form-data" class="p-6 space-y-6">
                    @csrf @method('PUT')

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 mb-2 font-medium">نوع الشهاده</label>
                            <input type="text" name="name" value="{{ old('name', $certificate->name) }}" class="w-full border border-gray-300 rounded-lg p-2.5" required>
                        </div>
                        <div>
                            <label class="block text-gray-700 mb-2 font-medium">العنوان (Title)</label>
                            <input type="text" name="title" value="{{ old('title', $certificate->title) }}" class="w-full border border-gray-300 rounded-lg p-2.5" required>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 mb-2 font-medium">مكان الإصدار / الجهة</label>
                            <input type="text" name="issued_by" value="{{ old('issued_by', $certificate->issued_by) }}" class="w-full border border-gray-300 rounded-lg p-2.5" required>
                        </div>
                        <div>
                            <label class="block text-gray-700 mb-2 font-medium">التاريخ</label>
                            <input type="date" name="date" value="{{ old('date', $certificate->date) }}" class="w-full border border-gray-300 rounded-lg p-2.5" required>
                        </div>
                    </div>

                    <div>
                        <label class="block text-gray-700 mb-2 font-medium">الوصف</label>
                        <textarea name="description" rows="3" class="w-full border border-gray-300 rounded-lg p-2.5">{{ old('description', $certificate->description) }}</textarea>
                    </div>

                    @if($certificate->image)
                    <div>
                        <label class="block text-gray-700 mb-2 font-medium">الصورة الحالية</label>
                        <img src="{{ asset('storage/' . $certificate->image) }}" class="w-48 h-32 object-cover rounded shadow border">
                    </div>
                    @endif

                    <div>
                        <label class="block text-gray-700 mb-2 font-medium">تغيير الصورة (اختياري)</label>
                        <input type="file" name="image" class="w-full border border-gray-300 rounded-lg p-2">
                    </div>

                    <div class="flex items-center gap-4 pt-4 border-t">
                        <button type="submit" class="bg-amber-500 text-white font-bold py-2 px-6 rounded-lg hover:bg-amber-600 transition">تحديث</button>
                        <a href="{{ route('admin.certificates.index') }}" class="text-gray-600 hover:text-gray-900">إلغاء</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
