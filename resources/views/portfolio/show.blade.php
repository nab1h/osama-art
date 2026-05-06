<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $portfolio->title }}</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700;800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Tajawal', sans-serif;
            background-color: #111827;
            /* اللون المطلوب */
        }

        /* تخصيص ألوان أسهم Swiper */
        .swiper-button-next,
        .swiper-button-prev {
            color: #333;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 25px;
            border-radius: 50%;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        .swiper-button-next:hover,
        .swiper-button-prev:hover {
            background-color: #fff;
            color: #D97706;
            /* Amber color on hover */
        }

        .swiper-button-next::after,
        .swiper-button-prev::after {
            font-size: 18px !important;
            font-weight: bold;
        }

        .swiper-slide-thumb-active {
            border-color: #D97706 !important;
            opacity: 1 !important;
        }

        .thumbs-swiper .swiper-slide {
            border: 2px solid transparent;
            transition: all 0.3s ease;
        }
    </style>
</head>

<body class="min-h-screen py-8 md:py-12">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- زر العودة -->
        <div class="mb-8">
            <a href="{{ url()->previous() ?: route('home') }}" class="inline-flex items-center text-gray-600 hover:text-amber-600 transition group font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 transform group-hover:-translate-x-1 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
                العودة للأعمال
            </a>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-start">

            <!-- قسم الصور -->
            <div class="space-y-4">
                <!-- الصورة الرئيسية (Swiper) -->
                <div class="swiper main-swiper rounded-2xl overflow-hidden shadow-xl bg-white border border-gray-200">
                    <div class="swiper-wrapper">
                        @if($portfolio->images->count() > 0)
                        @foreach($portfolio->images as $image)
                        <div class="swiper-slide bg-gray-100 flex items-center justify-center">
                            <img src="{{ asset('storage/' . $image->path) }}"
                                alt="{{ $portfolio->title }}"
                                class="w-full h-[400px] md:h-[500px] object-contain">
                        </div>
                        @endforeach
                        @else
                        <div class="swiper-slide bg-gray-100">
                            <img src="https://via.placeholder.com/800x600?text=No+Image" class="w-full h-[500px] object-cover">
                        </div>
                        @endif
                    </div>
                    <!-- أزرار التنقل -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>

                <!-- معرض الصور المصغرة (Thumbs) -->
                @if($portfolio->images->count() > 1)
                <div class="swiper thumbs-swiper rounded-xl overflow-hidden">
                    <div class="swiper-wrapper">
                        @foreach($portfolio->images as $image)
                        <div class="swiper-slide cursor-pointer opacity-60 hover:opacity-100 transition rounded-lg overflow-hidden">
                            <img src="{{ asset('storage/' . $image->path) }}" class="w-full h-20 object-cover">
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>

            <!-- قسم التفاصيل -->
            <div class="lg:sticky lg:top-8 space-y-6 bg-white p-6 md:p-8 rounded-2xl shadow-lg border border-gray-200">

                <!-- العنوان والتصنيف -->
                <div>
                    @if($portfolio->category)
                    <span class="inline-block bg-amber-100 text-amber-700 text-sm font-bold px-4 py-1.5 rounded-full mb-4">
                        {{ $portfolio->category->name }}
                    </span>
                    @endif

                    <h1 class="text-3xl md:text-4xl font-extrabold text-gray-900 leading-tight">
                        {{ $portfolio->title }}
                    </h1>
                </div>

                <!-- خط فاصل -->
                <div class="w-24 h-1.5 bg-amber-500 rounded-full"></div>

                <!-- الوصف -->
                <div class="text-gray-700 leading-relaxed text-justify">
                    <p>{{ $portfolio->description }}</p>
                </div>

                <!-- معلومات إضافية -->
                <div class="grid grid-cols-2 gap-6 pt-6 border-t border-gray-100">
                    <div class="bg-gray-50 p-4 rounded-xl">
                        <p class="text-gray-400 text-xs uppercase tracking-wider mb-1">تاريخ النشر</p>
                        <p class="text-gray-800 font-bold text-lg">{{ $portfolio->created_at->format('d M, Y') }}</p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded-xl">
                        <p class="text-gray-400 text-xs uppercase tracking-wider mb-1">عدد الصور</p>
                        <p class="text-gray-800 font-bold text-lg">{{ $portfolio->images->count() }} صورة</p>
                    </div>
                </div>

                <!-- أزرار المشاركة -->
                <div class="flex items-center gap-4 pt-4">
                    <span class="text-gray-500 text-sm font-medium">مشاركة:</span>
                    <a href="#" class="p-2.5 bg-gray-100 rounded-full text-gray-500 hover:text-white hover:bg-blue-500 transition">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                        </svg>
                    </a>
                    <a href="#" class="p-2.5 bg-gray-100 rounded-full text-gray-500 hover:text-white hover:bg-blue-800 transition">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                        </svg>
                    </a>
                    <a href="#" class="p-2.5 bg-gray-100 rounded-full text-gray-500 hover:text-white hover:bg-green-500 transition">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // تهيئة السلايدر المصغر
            var thumbsSwiper = new Swiper('.thumbs-swiper', {
                spaceBetween: 10,
                slidesPerView: 4,
                freeMode: true,
                watchSlidesProgress: true,
            });

            // تهيئة السلايدر الرئيسي وربطه بالمصغر
            new Swiper('.main-swiper', {
                spaceBetween: 10,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                thumbs: {
                    swiper: thumbsSwiper,
                },
                // دعم RTL
                rtl: true,
            });
        });
    </script>
</body>

</html>
