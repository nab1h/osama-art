<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                إدارة الشهادات
            </h2>
            <a href="{{ route('admin.certificates.create') }}" class="bg-amber-500 text-white px-4 py-2 rounded-md font-semibold text-sm hover:bg-amber-600 transition shadow-sm flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                </svg>
                إضافة شهادة
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if(session('success'))
            <div class="mb-4 bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded shadow-sm" role="alert">
                <p class="font-medium">{{ session('success') }}</p>
            </div>
            @endif

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg border border-gray-100">
                <div class="overflow-x-auto custom-scroll-container">
                    <table class="w-full min-w-[1000px] divide-y divide-gray-200">
                        <thead class="bg-gray-500">
                            <tr>
                                <th class="px-6 py-4 text-right text-xs font-bold text-amber-500 uppercase">#</th>
                                <th class="px-6 py-4 text-right text-xs font-bold text-amber-500 uppercase">الصورة</th>
                                <th class="px-6 py-4 text-right text-xs font-bold text-amber-500 uppercase">نوع الشهادة</th>
                                <th class="px-6 py-4 text-right text-xs font-bold text-amber-500 uppercase">العنوان (Title)</th>
                                <th class="px-6 py-4 text-right text-xs font-bold text-amber-500 uppercase">مكان الإصدار</th>
                                <th class="px-6 py-4 text-center text-xs font-bold text-amber-500 uppercase">التاريخ</th>
                                <th class="px-6 py-4 text-center text-xs font-bold text-amber-500 uppercase">الإجراءات</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($certificates as $certificate)
                            <tr class="hover:bg-gray-50 transition duration-200">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $certificate->id }}</td>
                                <td class="achievement-image-wrapper">
                                    @if($certificate->image)
                                    <img src="{{ asset('storage/' . $certificate->image) }}" class="achievement-image">
                                    @else
                                    <div class="w-16 h-12 bg-gray-100 rounded flex items-center justify-center text-gray-400 border">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                    </div>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-800">{{ $certificate->name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">{{ $certificate->title }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">{{ $certificate->issued_by }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">{{ $certificate->date }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-center">
                                    <div class="flex items-center justify-center gap-2">
                                        <a href="{{ route('admin.certificates.edit', $certificate) }}" class="p-2 rounded-lg text-blue-600 hover:text-blue-900 bg-blue-50 hover:bg-blue-100 transition" title="تعديل">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </a>
                                        <form action="{{ route('admin.certificates.destroy', $certificate) }}" method="POST" onsubmit="return confirm('هل أنت متأكد؟')">
                                            @csrf @method('DELETE')
                                            <button type="submit" class="p-2 rounded-lg text-red-600 hover:text-red-900 bg-red-50 hover:bg-red-100 transition" title="حذف">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="p-4 bg-gray-50 border-t border-gray-100">
                    {{ $certificates->links() }}
                </div>
            </div>
        </div>
    </div>

    <style>
        .custom-scroll-container::-webkit-scrollbar {
            height: 8px;
        }

        .custom-scroll-container::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        .custom-scroll-container::-webkit-scrollbar-thumb {
            background: #f59e0b;
            border-radius: 10px;
        }
    </style>
</x-app-layout>
