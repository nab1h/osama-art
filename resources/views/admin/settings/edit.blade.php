<x-app-layout>

    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                إعدادات الموقع
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if(session('success'))
            <div class="mb-4 bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded shadow-sm">
                <p class="font-medium">{{ session('success') }}</p>
            </div>
            @endif

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg border border-gray-100">

                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="p-8 space-y-8">

                        <!-- Hero -->
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-3">
                                عنوان الهيرو
                            </label>

                            <input
                                type="text"
                                name="hero"
                                value="{{ old('hero', $setting->hero ?? '') }}"
                                class="w-full rounded-lg border-gray-300 shadow-sm focus:border-amber-500 focus:ring-amber-500"
                                placeholder="اكتب عنوان الهيرو">
                        </div>

                        <!-- About -->
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-3">
                                نبذة عنك
                            </label>

                            <textarea
                                name="about"
                                rows="6"
                                class="w-full rounded-lg border-gray-300 shadow-sm focus:border-amber-500 focus:ring-amber-500"
                                placeholder="اكتب نبذة عنك">{{ old('about', $setting->about ?? '') }}</textarea>
                        </div>

                        <!-- Image -->
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-3">
                                الصورة الشخصية
                            </label>

                            <input
                                type="file"
                                name="image"
                                class="w-full rounded-lg border-gray-300 shadow-sm focus:border-amber-500 focus:ring-amber-500">

                            @if(!empty($setting?->image))
                            <div class="mt-4">
                                <img
                                    src="{{ asset('storage/' . $setting->image) }}"
                                    class="w-28 h-28 rounded-full object-cover border shadow">
                            </div>
                            @endif
                        </div>

                        <!-- CV -->
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-3">
                                ملف الـ CV
                            </label>

                            <input
                                type="file"
                                name="cv"
                                class="w-full rounded-lg border-gray-300 shadow-sm focus:border-amber-500 focus:ring-amber-500">

                            @if(!empty($setting?->cv))
                            <div class="mt-4">
                                <a
                                    href="{{ asset('storage/' . $setting->cv) }}"
                                    target="_blank"
                                    class="inline-flex items-center gap-2 bg-amber-500 text-white px-4 py-2 rounded-lg hover:bg-amber-600 transition">

                                    عرض الـ CV الحالي
                                </a>
                            </div>
                            @endif
                        </div>

                    </div>

                    <!-- Footer -->
                    <div class="px-8 py-5 bg-gray-50 border-t border-gray-100 flex justify-end">

                        <button
                            type="submit"
                            class="bg-amber-500 text-white px-6 py-3 rounded-lg font-semibold hover:bg-amber-600 transition shadow-sm">

                            حفظ الإعدادات

                        </button>

                    </div>

                </form>

            </div>

        </div>
    </div>

</x-app-layout>
