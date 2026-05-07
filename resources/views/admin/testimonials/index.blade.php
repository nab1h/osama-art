<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                إدارة الاراء
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- رسائل النجاح -->
            @if(session('success'))
            <div class="mb-4 bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded shadow-sm" role="alert">
                <div class="flex items-center">
                    <svg class="h-5 w-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <p class="font-medium">{{ session('success') }}</p>
                </div>
            </div>
            @endif

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg border border-gray-100">

                <!--_CONTAINER TABLE-->
                <div class="overflow-x-auto">
                    <table class="w-full divide-y divide-gray-200">
                        <thead class="bg-gray-500">
                            <tr>
                                <th scope="col" class="px-6 py-4 text-right text-xs font-bold text-amber-500 uppercase tracking-wider">
                                    اسم العميل
                                </th>
                                <th scope="col" class="px-6 py-4 text-center text-sm font-bold text-amber-500 uppercase tracking-wider">
                                    رساله العميل
                                </th>
                                <th scope="col" class="px-6 py-4 text-center text-sm font-bold text-amber-500 uppercase tracking-wider">
                                    عرض الرساله
                                </th>
                                <th scope="col" class="px-6 py-4 text-center text-sm font-bold text-amber-500 uppercase tracking-wider">
                                    الإجراءات
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($testimonials as $testimonial)
                            <tr class="hover:bg-gray-50 transition duration-200">
                                <!-- Name -->
                                <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-semibold text-gray-800">
                                    {{ $testimonial->name }}
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-semibold text-gray-800">
                                    {{ $testimonial->message }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-center text-sm">

                                    <form action="{{ route('admin.testimonials.toggle', $testimonial) }}" method="POST">
                                        @csrf
                                        @method('PATCH')

                                        <button type="submit"
                                            class="px-3 py-1 rounded-full text-xs font-bold transition
                                                {{ $testimonial->is_visible
                                                    ? 'btn-toggle-on' : 'btn-toggle-off' }}">

                                            {{ $testimonial->is_visible ? 'مفعل' : 'غير مفعل' }}
                                        </button>
                                    </form>

                                </td>
                                <!-- Actions -->
                                <td class="px-6 py-4 whitespace-nowrap text-center">
                                    <div class="flex items-center justify-center gap-2">
                                        <!-- Delete Form -->
                                        <form action="{{ route('admin.testimonials.destroy',$testimonial) }}" method="POST" onsubmit="return confirm('هل أنت متأكد من الحذف؟')">
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
                <!-- END CONTAINER TABLE -->
            </div>
        </div>
    </div>
</x-app-layout>
