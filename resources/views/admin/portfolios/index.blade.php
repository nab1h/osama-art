<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                إدارة الأعمال الفنية
            </h2>
            <a href="{{ route('admin.portfolios.create') }}" class="bg-amber-500 text-white px-4 py-2 rounded-md font-semibold text-sm hover:bg-amber-600 transition shadow-sm flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                </svg>
                إضافة عمل جديد
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
                <div class="overflow-x-auto">
                    <table class="w-full divide-y divide-gray-200">
                        <thead class="bg-gray-500">
                            <tr>
                                <th scope="col" class="px-6 py-4 text-right text-xs font-bold text-amber-500 uppercase tracking-wider">
                                    #
                                </th>
                                <th scope="col" class="px-6 py-4 text-right text-sm font-bold text-amber-500 uppercase tracking-wider">
                                    الصورة
                                </th>
                                <th scope="col" class="px-6 py-4 text-right text-sm font-bold text-amber-500 uppercase tracking-wider">
                                    العنوان
                                </th>
                                <th scope="col" class="px-6 py-4 text-center text-sm font-bold text-amber-500 uppercase tracking-wider">
                                    التصنيف
                                </th>
                                <th scope="col" class="px-6 py-4 text-center text-sm font-bold text-amber-500 uppercase tracking-wider">
                                    الإجراءات
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($portfolios as $portfolio)
                            <tr class="hover:bg-gray-50 transition duration-200">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $portfolio->id }}
                                </td>
                                <td class="px-2 w-5 h-5 ">
                                    @if($portfolio->images->count() > 0)
                                    <img class="w-10 h-auto object-cover rounded" src="{{ asset('storage/' . $portfolio->images->first()->path) }}" ...>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-800">
                                    {{ $portfolio->title }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-600">
                                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-xs font-medium">
                                        {{ $portfolio->category->name }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-center">
                                    <div class="flex items-center justify-center gap-2">
                                        <a href="{{ route('admin.portfolios.edit', $portfolio) }}" class="p-2 rounded-lg text-blue-600 hover:text-blue-900 bg-blue-50 hover:bg-blue-100 transition" title="تعديل">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </a>
                                        <form action="{{ route('admin.portfolios.destroy', $portfolio) }}" method="POST" onsubmit="return confirm('هل أنت متأكد من الحذف؟')">
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
                    {{ $portfolios->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
