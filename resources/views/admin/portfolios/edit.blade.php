<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            تعديل العمل الفني
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg border border-gray-100">
                <form action="{{ route('admin.portfolios.update', $portfolio) }}" method="POST" enctype="multipart/form-data" class="p-6 space-y-6">
                    @csrf @method('PUT')

                    <!-- العنوان -->
                    <div>
                        <label for="title" class="block text-gray-700 mb-2 font-medium">العنوان</label>
                        <input type="text" name="title" id="title"
                            class="w-full border border-gray-300 rounded-lg p-2.5"
                            value="{{ old('title', $portfolio->title) }}" required>
                    </div>

                    <!-- التصنيف -->
                    <div>
                        <label for="category_id" class="block text-gray-700 mb-2 font-medium">التصنيف</label>
                        <select name="category_id" id="category_id" class="w-full border border-gray-300 rounded-lg p-2.5" required>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ $portfolio->category_id == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- الوصف -->
                    <div>
                        <label for="description" class="block text-gray-700 mb-2 font-medium">الوصف</label>
                        <textarea name="description" id="description" rows="4"
                            class="w-full border border-gray-300 rounded-lg p-2.5">{{ old('description', $portfolio->description) }}</textarea>
                    </div>

                    <!-- الصور الحالية -->
                    <div>
                        <label class="block text-gray-700 mb-2 font-medium">الصور الحالية</label>
                        <div class="grid grid-cols-3 gap-4">
                            @if(!empty($portfolio->images))
                            @foreach($portfolio->images as $image)
                            <div class="...">
                                <img src="{{ asset('storage/' . $image->path) }}">

                                {{-- زر الحذف --}}
                                <a href="{{ route('admin.portfolios.delete.image', $image->id) }}"
                                    onclick="return confirm('حذف الصورة؟')">
                                    <button>...</button>
                                </a>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>

                    <!-- إضافة صور جديدة -->
                    <div>
                        <label for="images" class="block text-gray-700 mb-2 font-medium">إضافة صور جديدة (اختياري)</label>
                        <input type="file" name="images[]" id="images" multiple
                            class="w-full border border-gray-300 rounded-lg p-2.5 text-gray-600 file:mr-4 file:py-2 file:px-4 file:border-0 file:bg-gray-50 file:text-gray-700 hover:file:bg-gray-100 file:rounded-lg file:font-medium cursor-pointer">
                        <p class="text-xs text-gray-500 mt-1">سيتم إضافة الصور الجديدة للصور الحالية.</p>
                    </div>

                    <div class="flex items-center gap-4 pt-4 border-t">
                        <button type="submit" class="bg-amber-500 text-white font-bold py-2 px-6 rounded-lg hover:bg-amber-600 transition">
                            تحديث
                        </button>
                        <a href="{{ route('admin.portfolios.index') }}" class="text-gray-600 hover:text-gray-900">
                            إلغاء
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
