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
                    <img src="logo.png" alt="logo" class="h-20 w-20 my-5">
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

    <section id="about" class="py-20 bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center gap-12 md:gap-16">

                <!-- الصورة الشخصية -->
                <div class="md:w-1/3 relative">
                    <div class="w-64 h-64 md:w-80 md:h-80 mx-auto relative">
                        <!-- Decorative Background -->
                        <div class="absolute inset-0 bg-amber-500 rounded-full transform -translate-x-4 -translate-y-4"></div>
                        <!-- Image -->
                        <img src="{{ asset('about.jpeg') }}" alt="صورة الفنان" class="relative z-10 w-full h-full object-cover rounded-full border-4 border-gray-900 shadow-2xl">
                    </div>
                </div>

                <!-- النص والوصف -->
                <div class="md:w-2/3 text-center md:text-right">
                    <h2 class="text-amber-500 text-xl font-bold mb-2">مرحباً، أنا أسامة</h2>
                    <h3 class="text-3xl md:text-4xl font-extrabold text-white mb-6">فنان تشكيلي ومصمم جرافيك</h3>

                    <p class="text-gray-300 leading-relaxed mb-6 text-lg">
                        منذ أكثر من 10 سنوات وأنا أتنفس الفن. بدأت رحلتي برسم الزيتية الكلاسيكية، وتطور شغفي ليشمل الفن الرقمي الحديث. أؤمن بأن اللوحة الجيدة ليست مجرد صورة، بل هي نافذة تطل على مشاعر ومواقف لا يمكن التعبير عنها بالكلمات.
                    </p>
                    <p class="text-gray-400 leading-relaxed mb-8">
                        هدفي هو تحويل أفكارك ومشاعرك إلى قطعة فنية فريدة تليق بمكانك وتروي قصتك. سواء كنت تبحث عن بورتريه عائلي كلاسيكي أو لوحة رقمية عصرية، أنا هنا لأجعل رؤيتك حقيقة.
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

                    <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                        <a href="#contact" class="bg-amber-500 text-gray-900 px-6 py-3 rounded-full font-bold hover:bg-amber-400 transition duration-300 inline-block">
                            تواصل معي
                        </a>
                        <a href="#" class="border border-gray-600 text-gray-300 px-6 py-3 rounded-full font-bold hover:bg-gray-700 transition duration-300 inline-block">
                            تحميل السيرة الذاتية
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <!-- Portfolio Section -->
    <section id="portfolio" class="py-20 bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-amber-500 mb-4">أعمالي الفنية</h2>
                <div class="w-24 h-1 bg-amber-500 mx-auto"></div>
                <p class="text-gray-400 mt-4 max-w-2xl mx-auto">مجموعة مختارة من أحدث اللوحات.</p>
            </div>

            <div class="flex flex-wrap justify-center gap-3 mb-12">
                <a href="{{ route('home') }}#portfolio"
                    class="px-6 py-2 rounded-full font-medium transition {{ !request('category_id') ? 'bg-amber-500 text-gray-900 shadow-lg' : 'bg-gray-800 text-gray-400 hover:bg-gray-700 border border-gray-700' }}">
                    الكل
                </a>

                @foreach($categories as $cat)
                <a href="{{ route('home', ['category_id' => $cat->id]) }}#portfolio"
                    class="px-6 py-2 rounded-full font-medium transition {{ request('category_id') == $cat->id ? 'bg-amber-500 text-gray-900 shadow-lg' : 'bg-gray-800 text-gray-400 hover:bg-gray-700 border border-gray-700' }}">
                    {{ $cat->name }}
                </a>
                @endforeach
            </div>

            @if($portfolios->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($portfolios as $portfolio)

                <a href="{{ route('portfolio.show', $portfolio->id) }}" class="group relative overflow-hidden rounded-lg shadow-xl cursor-pointer bg-gray-800 block">
                    <div class="group relative overflow-hidden rounded-lg shadow-xl cursor-pointer bg-gray-800">

                        <div class="swiper card-swiper h-80">
                            <div class="swiper-wrapper">
                                @if($portfolio->images->count() > 0)
                                @foreach($portfolio->images as $image)
                                <div class="swiper-slide">
                                    <img src="{{ asset('storage/' . $image->path) }}"
                                        alt="{{ $portfolio->title }}"
                                        class="w-full h-full object-cover">
                                </div>
                                @endforeach
                                @else
                                <div class="swiper-slide">
                                    <img src="https://via.placeholder.com/600x800?text=No+Image"
                                        alt="No Image"
                                        class="w-full h-full object-cover">
                                </div>
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
                    </div>
                </a>
                @endforeach
            </div>

            <div class="mt-12 flex justify-center">
                {{ $portfolios->links() }}
            </div>

            @else
            <div class="text-center text-gray-500 py-12">
                <p>لا توجد أعمال فنية في هذا التصنيف حالياً.</p>
            </div>
            @endif
        </div>
    </section>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cardSwipers = document.querySelectorAll('.card-swiper');
            cardSwipers.forEach(function(swiperEl) {
                new Swiper(swiperEl, {
                    slidesPerView: 1,
                    pagination: {
                        el: swiperEl.querySelector('.swiper-pagination'),
                        clickable: true,
                    },
                    autoplay: {
                        delay: 800,
                        disableOnInteraction: false,
                    },
                    loop: true,
                    on: {
                        init: function() {
                            if (this.slides.length <= 1) {
                                this.pagination.el.style.display = 'none';
                            }
                        }
                    }
                });
            });
        });



        document.addEventListener('DOMContentLoaded', function() {
            const paginationLinks = document.querySelectorAll('#pagination-links a');

            paginationLinks.forEach(link => {
                if (!link.href.includes('#')) {
                    link.href += '#portfolio';
                }
            });
        });
    </script>
    <!-- Achievements Section (Updated: Image + Description) -->
    <section id="achievements" class="py-20 bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-amber-500 mb-4">إنجازاتي ومحطاتي</h2>
                <div class="w-24 h-1 bg-amber-500 mx-auto"></div>
                <p class="text-gray-400 mt-4">أبرز المحطات والجوائز التي تفخر بها مسيرتي الفنية.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                @foreach ($achievements as $achievement )

                <div class="bg-gray-800 rounded-xl overflow-hidden shadow-lg border border-gray-700 hover:border-amber-500 transition duration-300 group">
                    <div class="overflow-hidden h-56">
                        <img src="{{asset('storage/' . $achievement->image)}}" alt="{{ $achievement->name }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    </div>
                    <div class="p-6">
                        <span class="text-amber-500 text-sm font-bold">{{ $achievement->year }}</span>
                        <h3 class="text-xl font-bold text-white mt-2 mb-3">{{ $achievement->name }}</h3>
                        <p class="text-gray-400 text-sm leading-relaxed">
                            {{ $achievement->description }}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Certificates Section (Updated: Image + Description) -->
    <section id="certificates" class="py-20 bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-amber-500 mb-4">الشهادات والأكاديميات</h2>
                <div class="w-24 h-1 bg-amber-500 mx-auto"></div>
                <p class="text-gray-400 mt-4">الدرجات العلمية والدورات التدريبية التي شكلت أساس مهاراتي.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Certificate Card 1 -->

                @foreach ($certificates as $certificate)
                <div class="bg-gray-900 rounded-xl overflow-hidden shadow-lg border border-gray-700 hover:border-amber-500 transition duration-300 group">

                    <div class="relative overflow-hidden h-48 bg-gray-800">

                        @if($certificate->image)
                        <img
                            src="{{ asset('storage/' . $certificate->image) }}"
                            alt="{{ $certificate->title }}"
                            class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition duration-500">
                        @else
                        <div class="w-full h-full flex items-center justify-center text-gray-500">
                            No Image
                        </div>
                        @endif

                        <div class="absolute top-4 right-4 bg-amber-500 text-gray-900 text-xs font-bold px-3 py-1 rounded-full">
                            {{ $certificate->name }}
                        </div>

                    </div>

                    <div class="p-6">
                        <h3 class="text-lg font-bold text-white mb-2">
                            {{ $certificate->title }}
                        </h3>

                        <p class="text-gray-500 text-sm mb-3">
                            {{ $certificate->issued_by }} | {{ $certificate->date }}
                        </p>

                        <p class="text-gray-400 text-sm">
                            {{ $certificate->description }}
                        </p>
                    </div>

                </div>
                @endforeach

                <!-- Certificate Card 2 -->
                <div class="bg-gray-900 rounded-xl overflow-hidden shadow-lg border border-gray-700 hover:border-amber-500 transition duration-300 group">
                    <div class="relative overflow-hidden h-48">
                        <img src="{{asset('7.jpg')}}" alt="شهادة احتراف" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition duration-500">
                        <div class="absolute top-4 right-4 bg-blue-500 text-white text-xs font-bold px-3 py-1 rounded-full">دورة</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-white mb-2">دورة الرقمي المتقدم (Digital Art)</h3>
                        <p class="text-gray-500 text-sm mb-3">أكاديمية نيو يورك | 2020</p>
                        <p class="text-gray-400 text-sm">
                            إجادة استخدام برامج الفوتوشوب والبراشت لتحويل اللوحات التقليدية لرقمية.
                        </p>
                    </div>
                </div>

                <!-- Certificate Card 3 -->
                <div class="bg-gray-900 rounded-xl overflow-hidden shadow-lg border border-gray-700 hover:border-amber-500 transition duration-300 group">
                    <div class="relative overflow-hidden h-48">
                        <img src="{{asset('6.jpg')}}" alt="ورشة عمل" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition duration-500">
                        <div class="absolute top-4 right-4 bg-green-500 text-white text-xs font-bold px-3 py-1 rounded-full">ورشة</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-white mb-2">ورشة فنون البورتريه المتقدمة</h3>
                        <p class="text-gray-500 text-sm mb-3">مرسم باريس الدولي | 2022</p>
                        <p class="text-gray-400 text-sm">
                            تدريب عملي مكثف على يد الفنان العالمي جان بيير في تقنيات رسم الوجوه.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-900">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-amber-500 mb-4">هل لديك مشروع في بالك؟</h2>
            <p class="text-gray-400 mb-8">أنا متاح للطلبات الخاصة والتعاونات الفنية. تواصل معي لنجعل فكرتك حقيقة.</p>

            <div class="bg-gray-800 p-8 rounded-2xl shadow-2xl border border-gray-700">
                <form action="#" method="POST">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <input type="text" placeholder="الاسم الكامل" class="w-full px-4 py-3 rounded-lg bg-gray-700 border border-gray-600 text-white placeholder-gray-400 focus:outline-none focus:border-amber-500">
                        <input type="email" placeholder="البريد الإلكتروني" class="w-full px-4 py-3 rounded-lg bg-gray-700 border border-gray-600 text-white placeholder-gray-400 focus:outline-none focus:border-amber-500">
                    </div>
                    <input type="text" placeholder="عنوان المشروع" class="w-full px-4 py-3 rounded-lg bg-gray-700 border border-gray-600 text-white placeholder-gray-400 mb-6 focus:outline-none focus:border-amber-500">
                    <textarea rows="4" placeholder="تفاصيل الطلب أو الفكرة" class="w-full px-4 py-3 rounded-lg bg-gray-700 border border-gray-600 text-white placeholder-gray-400 mb-6 focus:outline-none focus:border-amber-500"></textarea>
                    <button type="submit" class="w-full bg-amber-500 text-gray-900 px-8 py-4 rounded-full font-bold text-lg hover:bg-amber-400 transition transform hover:scale-105 shadow-lg">
                        إرسال الرسالة
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-950 py-8 border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="flex justify-center space-x-6 space-x-reverse mb-4">
                <a href="#" class="text-gray-400 hover:text-amber-500 transition"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                    </svg></a>
                <a href="#" class="text-gray-400 hover:text-amber-500 transition"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                    </svg></a>
                <a href="#" class="text-gray-400 hover:text-amber-500 transition"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                    </svg></a>
            </div>
            <p class="text-gray-500 text-sm">
                © 2023 أحمد الفنان. جميع الحقوق محفوظة.
            </p>
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
                // Close mobile menu if open
                menu.classList.add('hidden');
            });
        });
    </script>
</body>

</html>
