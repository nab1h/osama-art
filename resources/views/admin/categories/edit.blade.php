<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            تعديل التصنيف
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('admin.categories.update', $category) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-6">
                            <label for="name" class="block text-gray-700 mb-2 font-medium">
                                اسم التصنيف
                            </label>
                            <input type="text" name="name" id="name"
                                class="w-full border border-gray-300 text-gray-900 rounded-lg p-2.5 focus:ring-amber-500 focus:border-amber-500"
                                value="{{ old('name', $category->name) }}" required>

                            @error('name')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center gap-4">
                            <button type="submit" class="bg-amber-500 text-white font-bold py-2 px-6 rounded-lg hover:bg-amber-600 transition">
                                تحديث
                            </button>
                            <a href="{{ route('admin.categories.index') }}" class="text-gray-600 hover:text-gray-900">
                                إلغاء
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
