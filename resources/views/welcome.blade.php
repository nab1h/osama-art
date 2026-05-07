<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>بورتفوليو الفنان | أسامة </title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts (Cairo for Arabic) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    <!-- icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'cairo': ['Cairo', 'sans-serif'],
                    },
                }
            }
        }
    </script>

    <style>
        body {
            font-family: 'Cairo', sans-serif;
        }

        .hero-bg {
            background: linear-gradient(135deg, rgba(17, 24, 39, 0.9) 0%, rgba(31, 41, 55, 0.8) 100%), url('https://source.unsplash.com/1600x900/?art,painting');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
    </style>
</head>

<body class="bg-gray-900 text-white">

    <!-- Navbar -->
    <nav class="fixed w-full z-50 bg-gray-900/80 backdrop-blur-md border-b border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <img src="{{ asset('logo.png') }}" alt="logo" class="h-20 w-20 my-5">
                </div>
                <div class="hidden md:block">
                    <div class="flex items-center space-x-8 space-x-reverse">
                        <a href="#home" class="text-gray-300 hover:text-amber-500 transition duration-300">الرئيسية</a>
                        <a href="#portfolio" class="text-gray-300 hover:text-amber-500 transition duration-300">أعمالي</a>
                        <a href="#achievements" class="text-gray-300 hover:text-amber-500 transition duration-300">إنجازاتي</a>
                        <a href="#certificates" class="text-gray-300 hover:text-amber-500 transition duration-300">الشهادات</a>
                        <a href="#contact" class="bg-amber-500 text-gray-900 px-4 py-2 rounded-full font-bold hover:bg-amber-400 transition duration-300">تواصل معي</a>
                    </div>
                </div>
                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button id="mobile-menu-btn" class="text-gray-300 hover:text-white">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-gray-900 border-t border-gray-800">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="#home" class="block px-3 py-2 text-gray-300 hover:text-amber-500">الرئيسية</a>
                <a href="#portfolio" class="block px-3 py-2 text-gray-300 hover:text-amber-500">أعمالي</a>
                <a href="#achievements" class="block px-3 py-2 text-gray-300 hover:text-amber-500">إنجازاتي</a>
                <a href="#certificates" class="block px-3 py-2 text-gray-300 hover:text-amber-500">الشهادات</a>
                <a href="#contact" class="block px-3 py-2 text-amber-500 font-bold">تواصل معي</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-bg min-h-screen flex items-center justify-center text-center px-4">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-4xl md:text-6xl font-extrabold mb-6 leading-tight">
                أرسم <span class="text-amber-500">أحلامك</span> وألون <span class="text-amber-500">واقعك</span>
            </h1>
            <p class="text-lg md:text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
                فنان تشكيلي متخصص في اللوحات الزيتية والبورتريه، أحاول نقل المشاعر الإنسانية إلى اللوحة من خلال ريشتي.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#portfolio" class="bg-amber-500 text-gray-900 px-8 py-3 rounded-full font-bold text-lg hover:bg-amber-400 transition transform hover:scale-105 shadow-lg">
                    استعرض أعمالي
                </a>
                <a href="#contact" class="border border-gray-500 text-white px-8 py-3 rounded-full font-bold text-lg hover:bg-gray-800 transition duration-300">
                    اطلب لوحة
                </a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center gap-12 md:gap-16">
                <div class="md:w-1/3 relative">
                    <div class="w-64 h-64 md:w-80 md:h-80 mx-auto relative">
                        <div class="absolute inset-0 bg-amber-500 rounded-full transform -translate-x-4 -translate-y-4"></div>
                        <img src="{{ asset('about.jpeg') }}" alt="صورة الفنان" class="relative z-10 w-full h-full object-cover rounded-full border-4 border-gray-900 shadow-2xl">
                    </div>
                </div>
                <div class="md:w-2/3 text-center md:text-right">
                    <h2 class="text-amber-500 text-xl font-bold mb-2">مرحباً، أنا أسامة</h2>
                    <h3 class="text-3xl md:text-4xl font-extrabold text-white mb-6">فنان تشكيلي ومصمم جرافيك</h3>
                    <p class="text-gray-300 leading-relaxed mb-6 text-lg">
                        منذ أكثر من 10 سنوات وأنا أتنفس الفن. بدأت رحلتي برسم الزيتية الكلاسيكية، وتطور شغفي ليشمل الفن الرقمي الحديث.
                    </p>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-6 mb-8 text-right">
                        <div class="bg-gray-900/50 p-4 rounded-lg border-r-4 border-amber-500">
                            <span class="block text-amber-500 font-bold text-2xl">+10</span>
                            <span class="text-gray-400 text-sm">سنوات خبرة</span>
                        </div>
                        <div class="bg-gray-900/50 p-4 rounded-lg border-r-4 border-amber-500">
                            <span class="block text-amber-500 font-bold text-2xl">+200</span>
                            <span class="text-gray-400 text-sm">مشروع مكتمل</span>
                        </div>
                        <div class="bg-gray-900/50 p-4 rounded-lg border-r-4 border-amber-500 col-span-2 md:col-span-1">
                            <span class="block text-amber-500 font-bold text-2xl">100%</span>
                            <span class="text-gray-400 text-sm">رضا العملاء</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="py-20 bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-amber-500 mb-4">أعمالي الفنية</h2>
                <div class="w-24 h-1 bg-amber-500 mx-auto"></div>
            </div>

            <div class="flex flex-wrap justify-center gap-3 mb-12">
                <a href="{{ route('home') }}#portfolio" class="px-6 py-2 rounded-full font-medium transition {{ !request('category_id') ? 'bg-amber-500 text-gray-900 shadow-lg' : 'bg-gray-800 text-gray-400 hover:bg-gray-700 border border-gray-700' }}">الكل</a>
                @foreach($categories as $cat)
                <a href="{{ route('home', ['category_id' => $cat->id]) }}#portfolio" class="px-6 py-2 rounded-full font-medium transition {{ request('category_id') == $cat->id ? 'bg-amber-500 text-gray-900 shadow-lg' : 'bg-gray-800 text-gray-400 hover:bg-gray-700 border border-gray-700' }}">{{ $cat->name }}</a>
                @endforeach
            </div>

            @if($portfolios->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($portfolios as $portfolio)
                <a href="{{ route('portfolio.show', $portfolio->id) }}" class="group relative overflow-hidden rounded-lg shadow-xl cursor-pointer bg-gray-800 block">
                    <div class="swiper card-swiper h-80">
                        <div class="swiper-wrapper">
                            @if($portfolio->images->count() > 0)
                            @foreach($portfolio->images as $image)
                            <div class="swiper-slide"><img src="{{ asset('storage/' . $image->path) }}" alt="{{ $portfolio->title }}" class="w-full h-full object-cover"></div>
                            @endforeach
                            @endif
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end p-6 pointer-events-none">
                        <div>
                            <h3 class="text-xl font-bold text-white">{{ $portfolio->title }}</h3>
                            <p class="text-amber-400">{{ $portfolio->category->name ?? 'غير مصنف' }}</p>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
            <div class="mt-12 flex justify-center">{{ $portfolios->links() }}</div>
            @else
            <div class="text-center text-gray-500 py-12">
                <p>لا توجد أعمال فنية حالياً.</p>
            </div>
            @endif
        </div>
    </section>

    <!-- Swiper Scripts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cardSwipers = document.querySelectorAll('.card-swiper');
            cardSwipers.forEach(function(swiperEl) {
                new Swiper(swiperEl, {
                    slidesPerView: 1,
                    spaceBetween: 20,
                    loop: true,
                    autoplay: {
                        delay: 3000,
                        disableOnInteraction: false,
                    },
                    loop: true,
                });
            });
        });
    </script>

    <!-- Achievements Section -->
    <section id="achievements" class="py-20 bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-amber-500 mb-4">إنجازاتي ومحطاتي</h2>
                <div class="w-24 h-1 bg-amber-500 mx-auto"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($achievements as $achievement )
                <div class="bg-gray-900 rounded-xl overflow-hidden shadow-lg border border-gray-700 hover:border-amber-500 transition duration-300 group">
                    <div class="overflow-hidden h-56">
                        <img src="{{asset('storage/' . $achievement->image)}}" alt="{{ $achievement->name }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    </div>
                    <div class="p-6">
                        <span class="text-amber-500 text-sm font-bold">{{ $achievement->year }}</span>
                        <h3 class="text-xl font-bold text-white mt-2 mb-3">{{ $achievement->name }}</h3>
                        <p class="text-gray-400 text-sm leading-relaxed">{{ $achievement->description }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Certificates Section -->
    <section id="certificates" class="py-20 bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-amber-500 mb-4">الشهادات والأكاديميات</h2>
                <div class="w-24 h-1 bg-amber-500 mx-auto"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($certificates as $certificate)
                <div class="bg-gray-800 rounded-xl overflow-hidden shadow-lg border border-gray-700 hover:border-amber-500 transition duration-300 group">
                    <div class="relative overflow-hidden h-48 bg-gray-700">
                        @if($certificate->image)
                        <img src="{{ asset('storage/' . $certificate->image) }}" alt="{{ $certificate->title }}" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition duration-500">
                        @endif
                        <div class="absolute top-4 right-4 bg-amber-500 text-gray-900 text-xs font-bold px-3 py-1 rounded-full">{{ $certificate->name }}</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-white mb-2">{{ $certificate->title }}</h3>
                        <p class="text-gray-500 text-sm mb-3">{{ $certificate->issued_by }} | {{ $certificate->date }}</p>
                        <p class="text-gray-400 text-sm">{{ $certificate->description }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Testimonials Section (UPDATED with Slider & Form) -->
    <section id="testimonials" class="py-20 bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-amber-500 mb-4">آراء العملاء</h2>
                <div class="w-24 h-1 bg-amber-500 mx-auto"></div>
            </div>

            <!-- 1. Slider Container -->
            <div class="swiper testimonialsSwiper pb-16">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    @if($testimonials->count())
                    @foreach ($testimonials as $testimonial)
                    <div class="swiper-slide h-auto">
                        <div class="bg-gray-900 p-8 rounded-2xl shadow-lg border border-gray-700 relative hover:border-amber-500 transition duration-300 h-full flex flex-col justify-center">

                            <div class="flex justify-center mb-6">
                                <i class="fas fa-quote-right text-4xl text-gray-700"></i>
                            </div>

                            <div class="flex justify-center text-amber-500 mb-6">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>

                            <p class="text-gray-300 text-lg leading-relaxed mb-8 italic text-center">
                                "{{ $testimonial->message }}"
                            </p>

                            <div class="border-t border-gray-700 pt-6 text-center">
                                <h4 class="text-xl font-bold text-white">
                                    {{ $testimonial->name }}
                                </h4>
                            </div>

                        </div>
                    </div>
                    @endforeach
                    @else
                    <p class="text-center text-gray-400">لا يوجد آراء حالياً</p>
                    @endif
                </div>

                <!-- Pagination & Navigation -->
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

            <!-- 2. Form for Adding Review -->
            <div class="max-w-2xl mx-auto mt-12 bg-gray-900 p-8 rounded-2xl shadow-xl border border-gray-700">
                <h3 class="text-2xl font-bold text-white mb-6 text-center border-b border-gray-700 pb-4">شاركنا رأيك</h3>
                <form action="{{ route('testimonials.store') }}" method="POST">
                    @csrf
                    <div class="mb-6">
                        <label for="clientName" class="block text-gray-400 text-sm font-bold mb-2">الاسم الكامل</label>
                        <input type="text" id="clientName" name="name" required
                            class="w-full px-4 py-3 rounded-lg bg-gray-800 border border-gray-700 text-white placeholder-gray-500 focus:outline-none focus:border-amber-500 transition duration-300"
                            placeholder="اكتب اسمك هنا">
                    </div>
                    <div class="mb-6">
                        <label for="clientMessage" class="block text-gray-400 text-sm font-bold mb-2">رسالتك</label>
                        <textarea id="clientMessage" name="message" rows="4" required
                            class="w-full px-4 py-3 rounded-lg bg-gray-800 border border-gray-700 text-white placeholder-gray-500 focus:outline-none focus:border-amber-500 transition duration-300"
                            placeholder="اكتب رأيك في خدماتنا..."></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="bg-amber-500 text-gray-900 px-10 py-3 rounded-full font-bold text-lg hover:bg-amber-400 transition transform hover:scale-105 shadow-lg w-full md:w-auto">
                            إرسال الرأي
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </section>


    <script>
        document.addEventListener('DOMContentLoaded', function() {

            new Swiper(".testimonialsSwiper", {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,

                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },

                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },

                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },

                breakpoints: {
                    768: {
                        slidesPerView: 2,
                    },

                    1024: {
                        slidesPerView: 3,
                    }
                }
            });

        });
    </script>
    <!-- Contact Section (Updated) -->
    <section id="contact" class="py-20 bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-amber-500 mb-4">تواصل معي</h2>
                <div class="w-24 h-1 bg-amber-500 mx-auto"></div>
                <p class="text-gray-400 mt-4 max-w-2xl mx-auto">هل لديك مشروع أو استفسار؟ لا تتردد في التواصل معي مباشرة.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- معلومات الاتصال -->
                <div class="space-y-8">
                    @isset($socialLink)
                    <!-- Phone -->
                    @if($socialLink->phone)
                    <div class="flex items-start gap-4">
                        <div class="p-3 bg-amber-500/10 rounded-lg text-amber-500">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-white">الهاتف</h4>
                            <p class="text-gray-400 mt-1">{{ $socialLink->phone }}</p>
                        </div>
                    </div>
                    @endif
                    <!-- WhatsApp -->
                    @if($socialLink->whatsapp)
                    <div class="flex items-start gap-4">
                        <div class="p-3 bg-green-500/10 rounded-lg text-green-500">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-white">واتساب</h4>
                            <p class="text-gray-400 mt-1">{{ $socialLink->whatsapp }}</p>
                        </div>
                    </div>
                    @endif
                    <!-- Address -->
                    @if($socialLink->address)
                    <div class="flex items-start gap-4">
                        <div class="p-3 bg-blue-500/10 rounded-lg text-blue-500">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-white">العنوان</h4>
                            <p class="text-gray-400 mt-1">{{ $socialLink->address }}</p>
                        </div>
                    </div>
                    @endif

                    <!-- Social Icons -->
                    <div class="pt-6 border-t border-gray-700 flex gap-3">
                        @if($socialLink->facebook)
                        <a href="{{ $socialLink->facebook }}" target="_blank" class="p-2 bg-gray-800 rounded-lg text-gray-400 hover:bg-amber-500 hover:text-gray-900 transition">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </a>
                        @endif
                        @if($socialLink->instagram)
                        <a href="{{ $socialLink->instagram }}" target="_blank" class="p-2 bg-gray-800 rounded-lg text-gray-400 hover:bg-pink-600 hover:text-white transition">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </a>
                        @endif
                        @if($socialLink->twitter)
                        <a href="{{ $socialLink->twitter }}" target="_blank" class="p-2 bg-gray-800 rounded-lg text-gray-400 hover:bg-gray-600 hover:text-white transition">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                            </svg>
                        </a>
                        @endif
                        @if($socialLink->youtube)
                        <a href="{{ $socialLink->youtube }}" target="_blank"
                            class="p-2 bg-gray-800 rounded-lg text-gray-400 hover:bg-red-600 hover:text-white transition">

                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.498 6.186a2.997 2.997 0 00-2.11-2.12C19.505 3.5 12 3.5 12 3.5s-7.505 0-9.388.566a2.997 2.997 0 00-2.11 2.12C0 8.074 0 12 0 12s0 3.926.502 5.814a2.997 2.997 0 002.11 2.12C4.495 20.5 12 20.5 12 20.5s7.505 0 9.388-.566a2.997 2.997 0 002.11-2.12C24 15.926 24 12 24 12s0-3.926-.502-5.814zM9.75 15.568V8.432L15.818 12 9.75 15.568z" />
                            </svg>

                        </a>
                        @endif
                        @if($socialLink->linkedin)
                        <a href="{{ $socialLink->linkedin }}" target="_blank"
                            class="p-2 bg-gray-800 rounded-lg text-gray-400 hover:bg-blue-700 hover:text-white transition">

                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-10h3v10zm-1.5-11.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.784 1.764-1.75 1.764zm13.5 11.268h-3v-5.604c0-1.337-.026-3.059-1.865-3.059-1.867 0-2.154 1.459-2.154 2.965v5.698h-3v-10h2.881v1.367h.041c.401-.761 1.381-1.562 2.845-1.562 3.043 0 3.604 2.003 3.604 4.604v5.591z" />
                            </svg>

                        </a>
                        @endif

                    </div>
                    @endisset
                </div>

                <!-- Form -->
                <div class="bg-gray-900 p-8 rounded-2xl shadow-2xl border border-gray-700">
                    <form action="{{ route('contact.send') }}" method="POST">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <input name="name" type="text" placeholder="الاسم الكامل" class="w-full px-4 py-3 rounded-lg bg-gray-800 border border-gray-700 text-white placeholder-gray-400 focus:outline-none focus:border-amber-500">
                            <input name="email" type="email" placeholder="البريد الإلكتروني" class="w-full px-4 py-3 rounded-lg bg-gray-800 border border-gray-700 text-white placeholder-gray-400 focus:outline-none focus:border-amber-500">
                        </div>
                        <input name="subject" type="text" placeholder="عنوان المشروع" class="w-full px-4 py-3 rounded-lg bg-gray-800 border border-gray-700 text-white placeholder-gray-400 mb-6 focus:outline-none focus:border-amber-500">
                        <textarea name="message" rows="4" placeholder="تفاصيل الطلب أو الفكرة" class="w-full px-4 py-3 rounded-lg bg-gray-800 border border-gray-700 text-white placeholder-gray-400 mb-6 focus:outline-none focus:border-amber-500"></textarea>
                        <button type="submit" class="w-full bg-amber-500 text-gray-900 px-8 py-4 rounded-full font-bold text-lg hover:bg-amber-400 transition transform hover:scale-105 shadow-lg">
                            إرسال الرسالة
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer (Updated) -->
    <footer class="bg-gray-950 pt-16 pb-8 border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">

                <!-- Col 1: About -->
                <div>
                    <img src="{{ asset('logo.png') }}" class="h-16 mb-4" alt="Logo">
                    <p class="text-gray-400 text-sm leading-relaxed">
                        فنان تشكيلي متخصص في اللوحات الزيتية والبورتريه، أسعى لنقل المشاعر الإنسانية إلى اللوحة بألوان تعبر عن الواقع.
                    </p>
                </div>

                <!-- Col 2: Quick Links -->
                <div>
                    <h3 class="text-white text-lg font-bold mb-4 border-b border-amber-500 pb-2 inline-block">روابط سريعة</h3>
                    <ul class="space-y-2">
                        <li><a href="#home" class="text-gray-400 hover:text-amber-500 transition">الرئيسية</a></li>
                        <li><a href="#about" class="text-gray-400 hover:text-amber-500 transition">عني</a></li>
                        <li><a href="#portfolio" class="text-gray-400 hover:text-amber-500 transition">أعمالي</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-amber-500 transition">تواصل معي</a></li>

                    </ul>
                </div>

                <!-- Col 3: Categories (Dynamic) -->
                <div>
                    <h3 class="text-white text-lg font-bold mb-4 border-b border-amber-500 pb-2 inline-block">تصنيفات الأعمال</h3>
                    <ul class="space-y-2">
                        @foreach($categories as $cat)
                        <li>
                            <a href="{{ route('home', ['category_id' => $cat->id]) }}#portfolio" class="text-gray-400 hover:text-amber-500 transition">
                                {{ $cat->name }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Col 4: Social -->
                <div>
                    <h3 class="text-white text-lg font-bold mb-4 border-b border-amber-500 pb-2 inline-block">تابعني على</h3>
                    <div class="flex gap-3 mt-2">
                        @isset($socialLink)
                        @if($socialLink->facebook)
                        <a href="{{ $socialLink->facebook }}" target="_blank" class="p-2 bg-gray-800 rounded-lg text-gray-400 hover:bg-amber-500 hover:text-gray-900 transition">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </a>
                        @endif
                        @if($socialLink->instagram)
                        <a href="{{ $socialLink->instagram }}" target="_blank" class="p-2 bg-gray-800 rounded-lg text-gray-400 hover:bg-pink-600 hover:text-white transition">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </a>
                        @endif
                        @if($socialLink->twitter)
                        <a href="{{ $socialLink->twitter }}" target="_blank" class="p-2 bg-gray-800 rounded-lg text-gray-400 hover:bg-gray-600 hover:text-white transition">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                            </svg>
                        </a>
                        @endif
                        @if($socialLink->youtube)
                        <a href="{{ $socialLink->youtube }}" target="_blank"
                            class="p-2 bg-gray-800 rounded-lg text-gray-400 hover:bg-red-600 hover:text-white transition">

                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.498 6.186a2.997 2.997 0 00-2.11-2.12C19.505 3.5 12 3.5 12 3.5s-7.505 0-9.388.566a2.997 2.997 0 00-2.11 2.12C0 8.074 0 12 0 12s0 3.926.502 5.814a2.997 2.997 0 002.11 2.12C4.495 20.5 12 20.5 12 20.5s7.505 0 9.388-.566a2.997 2.997 0 002.11-2.12C24 15.926 24 12 24 12s0-3.926-.502-5.814zM9.75 15.568V8.432L15.818 12 9.75 15.568z" />
                            </svg>

                        </a>
                        @endif
                        @if($socialLink->linkedin)
                        <a href="{{ $socialLink->linkedin }}" target="_blank"
                            class="p-2 bg-gray-800 rounded-lg text-gray-400 hover:bg-blue-700 hover:text-white transition">

                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-10h3v10zm-1.5-11.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.784 1.764-1.75 1.764zm13.5 11.268h-3v-5.604c0-1.337-.026-3.059-1.865-3.059-1.867 0-2.154 1.459-2.154 2.965v5.698h-3v-10h2.881v1.367h.041c.401-.761 1.381-1.562 2.845-1.562 3.043 0 3.604 2.003 3.604 4.604v5.591z" />
                            </svg>

                        </a>
                        @endif
                        @endisset
                    </div>
                </div>
            </div>

            <!-- Copyright -->
            <div class="border-t border-gray-800 pt-8 text-center">
                <p class="text-gray-500 text-sm">© {{ date('Y') }} نبيه العشماوي. جميع الحقوق محفوظة.</p>
            </div>
        </div>
    </footer>

    <script>
        // Simple Mobile Menu Toggle
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });

        // Smooth Scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
                menu.classList.add('hidden');
            });
        });
    </script>
</body>

</html>
