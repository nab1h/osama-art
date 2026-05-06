<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            إضافة عمل فني جديد
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg border border-gray-100">
                <form action="{{ route('admin.portfolios.store') }}" method="POST" enctype="multipart/form-data" class="p-6 space-y-6">
                    @csrf

                    <!-- العنوان -->
                    <div>
                        <label for="title" class="block text-gray-700 mb-2 font-medium">العنوان</label>
                        <input type="text" name="title" id="title"
                            class="w-full border border-gray-300 rounded-lg p-2.5 focus:ring-amber-500 focus:border-amber-500"
                            value="{{ old('title') }}" required>
                        @error('title')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- التصنيف -->
                    <div>
                        <label for="category_id" class="block text-gray-700 mb-2 font-medium">التصنيف</label>
                        <select name="category_id" id="category_id"
                            class="w-full border border-gray-300 rounded-lg p-2.5 focus:ring-amber-500 focus:border-amber-500" required>
                            <option value="">اختر التصنيف</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                            @endforeach
                        </select>
                        @error('category_id')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- الوصف -->
                    <div>
                        <label for="description" class="block text-gray-700 mb-2 font-medium">الوصف</label>
                        <textarea name="description" id="description" rows="4"
                            class="w-full border border-gray-300 rounded-lg p-2.5 focus:ring-amber-500 focus:border-amber-500">{{ old('description') }}</textarea>
                    </div>

                    <!-- الصور (Multiple) -->
                    <div>
                        <label for="images" class="block text-gray-700 mb-2 font-medium">الصور (يمكنك اختيار أكثر من صورة)</label>
                        <input type="file" name="images[]" id="images" multiple
                            class="w-full border border-gray-300 rounded-lg p-2.5 text-gray-600 file:mr-4 file:py-2 file:px-4 file:border-0 file:bg-amber-50 file:text-amber-700 hover:file:bg-amber-100 file:rounded-lg file:font-medium cursor-pointer" required>
                        @error('images')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                        @error('images.*')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center gap-4 pt-4 border-t">
                        <button type="submit" class="bg-amber-500 text-white font-bold py-2 px-6 rounded-lg hover:bg-amber-600 transition">
                            حفظ العمل
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
