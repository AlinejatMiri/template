<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>موسسه خیریه - کمک رسانی به نیازمندان</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=vazirmatn:400,500,600,700&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> --}}

    <style>
        * {
            font-family: 'Vazirmatn', sans-serif;
        }
    </style>
</head>
<body class="bg-white text-gray-900">
    <!-- Navigation -->
    <nav class="sticky top-0 z-50 bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center gap-2">
                    <div class="w-10 h-10 bg-gradient-to-br from-red-500 to-red-600 rounded-full flex items-center justify-center text-white font-bold text-lg">
                        ♥
                    </div>
                    <span class="text-xl font-bold text-gray-900">موسسه خیریه</span>
                </div>
                <div class="hidden md:flex gap-8">
                    <a href="#about" class="text-gray-700 hover:text-red-600 transition">درباره ما</a>
                    <a href="#services" class="text-gray-700 hover:text-red-600 transition">خدمات</a>
                    <a href="#team" class="text-gray-700 hover:text-red-600 transition">تیم ما</a>
                    <a href="#contact" class="text-gray-700 hover:text-red-600 transition">تماس با ما</a>
                </div>
                <button class="bg-red-600 text-white px-6 py-2 rounded-lg hover:bg-red-700 transition font-medium">
                    کمک مالی
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative h-screen bg-gradient-to-br from-red-600 via-red-500 to-red-700 flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 opacity-20">
            <div class="absolute top-20 right-20 w-72 h-72 bg-white rounded-full mix-blend-multiply filter blur-3xl"></div>
            <div class="absolute bottom-20 left-20 w-72 h-72 bg-white rounded-full mix-blend-multiply filter blur-3xl"></div>
        </div>
        <div class="relative z-10 text-center text-white max-w-4xl mx-auto px-4">
            <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight">
                کمک رسانی به نیازمندان
            </h1>
            <p class="text-xl md:text-2xl mb-8 text-red-100">
                ما در کنار شما برای ایجاد تغییر مثبت در جامعه هستیم
            </p>
            <div class="flex gap-4 justify-center flex-wrap">
                <button class="bg-white text-red-600 px-8 py-4 rounded-lg font-bold text-lg hover:bg-gray-100 transition transform hover:scale-105">
                    شروع کمک
                </button>
                <button class="border-2 border-white text-white px-8 py-4 rounded-lg font-bold text-lg hover:bg-white hover:text-red-600 transition">
                    بیشتر بدانید
                </button>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">درباره موسسه ما</h2>
                <div class="w-20 h-1 bg-red-600 mx-auto"></div>
            </div>
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <img src="{{asset('images/about.jpg')}}" alt="درباره ما" class="rounded-lg shadow-lg">
                </div>
                <div>
                    <h3 class="text-3xl font-bold text-gray-900 mb-6">ماموریت ما</h3>
                    <p class="text-gray-700 text-lg mb-4 leading-relaxed">
                        موسسه خیریه ما با هدف کاهش فقر و بهبود شرایط زندگی افراد نیازمند تأسیس شده است. ما معتقد هستیم که هر فرد شایسته زندگی شریف و سالم است.
                    </p>
                    <p class="text-gray-700 text-lg mb-6 leading-relaxed">
                        از طریق برنامه‌های متنوع و مؤثر، ما سعی می‌کنیم تا به هزاران خانواده کمک رسانی کنیم و امید را در دل آنها زنده نگاه داریم.
                    </p>
                    <div class="grid grid-cols-3 gap-4">
                        <div class="bg-white p-4 rounded-lg shadow text-center">
                            <div class="text-3xl font-bold text-red-600">۵۰۰۰+</div>
                            <div class="text-gray-600 text-sm">خانواده کمک شده</div>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow text-center">
                            <div class="text-3xl font-bold text-red-600">۲۰+</div>
                            <div class="text-gray-600 text-sm">سال تجربه</div>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow text-center">
                            <div class="text-3xl font-bold text-red-600">۱۰۰%</div>
                            <div class="text-gray-600 text-sm">شفافیت</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">خدمات ما</h2>
                <div class="w-20 h-1 bg-red-600 mx-auto"></div>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-8 rounded-lg shadow-lg hover:shadow-2xl transition transform hover:scale-105">
                    <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center text-white text-3xl mb-6">
                        🏥
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">کمک های بهداشتی</h3>
                    <p class="text-gray-700 leading-relaxed">
                        فراهم کردن خدمات درمانی و بهداشتی برای افراد بی‌بضاعه و نیازمند
                    </p>
                </div>

                <!-- Service 2 -->
                <div class="bg-gradient-to-br from-green-50 to-green-100 p-8 rounded-lg shadow-lg hover:shadow-2xl transition transform hover:scale-105">
                    <div class="w-16 h-16 bg-green-600 rounded-full flex items-center justify-center text-white text-3xl mb-6">
                        📚
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">کمک های آموزشی</h3>
                    <p class="text-gray-700 leading-relaxed">
                        تأمین بودجه تحصیل کودکان نیازمند و فراهم کردن منابع یادگیری
                    </p>
                </div>

                <!-- Service 3 -->
                <div class="bg-gradient-to-br from-purple-50 to-purple-100 p-8 rounded-lg shadow-lg hover:shadow-2xl transition transform hover:scale-105">
                    <div class="w-16 h-16 bg-purple-600 rounded-full flex items-center justify-center text-white text-3xl mb-6">
                        🏠
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">کمک های مسکن</h3>
                    <p class="text-gray-700 leading-relaxed">
                        کمک به خانواده‌های بی‌خانمان برای تأمین محل سکونت شایسته
                    </p>
                </div>

                <!-- Service 4 -->
                <div class="bg-gradient-to-br from-yellow-50 to-yellow-100 p-8 rounded-lg shadow-lg hover:shadow-2xl transition transform hover:scale-105">
                    <div class="w-16 h-16 bg-yellow-600 rounded-full flex items-center justify-center text-white text-3xl mb-6">
                        🍲
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">کمک های غذایی</h3>
                    <p class="text-gray-700 leading-relaxed">
                        توزیع غذای سالم و مغذی برای خانواده‌های کم‌درآمد
                    </p>
                </div>

                <!-- Service 5 -->
                <div class="bg-gradient-to-br from-pink-50 to-pink-100 p-8 rounded-lg shadow-lg hover:shadow-2xl transition transform hover:scale-105">
                    <div class="w-16 h-16 bg-pink-600 rounded-full flex items-center justify-center text-white text-3xl mb-6">
                        👨‍👩‍👧‍👦
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">حمایت اجتماعی</h3>
                    <p class="text-gray-700 leading-relaxed">
                        ارائه مشاوره و حمایت روانی برای افراد در بحران
                    </p>
                </div>

                <!-- Service 6 -->
                <div class="bg-gradient-to-br from-indigo-50 to-indigo-100 p-8 rounded-lg shadow-lg hover:shadow-2xl transition transform hover:scale-105">
                    <div class="w-16 h-16 bg-indigo-600 rounded-full flex items-center justify-center text-white text-3xl mb-6">
                        🎓
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">برنامه‌های مهارتی</h3>
                    <p class="text-gray-700 leading-relaxed">
                        آموزش مهارت‌های شغلی برای ایجاد فرصت کار و استقلال مالی
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">تیم ما</h2>
                <div class="w-20 h-1 bg-red-600 mx-auto"></div>
            </div>
            <div class="grid md:grid-cols-4 gap-8">
                <!-- Team Member 1 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=400&fit=crop" alt="مدیر" class="w-full h-64 object-cover">
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">علی محمدی</h3>
                        <p class="text-red-600 font-semibold mb-3">مدیر عمومی</p>
                        <p class="text-gray-600 text-sm">۲۰ سال تجربه در حوزه خیریه و توسعه اجتماعی</p>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition">
                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=400&h=400&fit=crop" alt="مسئول آموزش" class="w-full h-64 object-cover">
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">فاطمه رضایی</h3>
                        <p class="text-red-600 font-semibold mb-3">مسئول برنامه‌های آموزشی</p>
                        <p class="text-gray-600 text-sm">متخصص در برنامه‌های توسعه مهارت و آموزش</p>
                    </div>
                </div>

                <!-- Team Member 3 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=400&fit=crop" alt="مسئول مالی" class="w-full h-64 object-cover">
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">حسن احمدی</h3>
                        <p class="text-red-600 font-semibold mb-3">مسئول امور مالی</p>
                        <p class="text-gray-600 text-sm">تضمین شفافیت و مسئولیت‌پذیری مالی</p>
                    </div>
                </div>

                <!-- Team Member 4 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition">
                    <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=400&h=400&fit=crop" alt="مسئول برنامه‌ها" class="w-full h-64 object-cover">
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">مریم کریمی</h3>
                        <p class="text-red-600 font-semibold mb-3">مسئول برنامه‌های اجتماعی</p>
                        <p class="text-gray-600 text-sm">طراحی و اجرای برنامه‌های کمک‌رسانی</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Impact Section -->
    <section class="py-20 bg-gradient-to-r from-red-600 to-red-700 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4">تأثیر ما</h2>
                <div class="w-20 h-1 bg-white mx-auto"></div>
            </div>
            <div class="grid md:grid-cols-4 gap-8 text-center">
                <div>
                    <div class="text-5xl font-bold mb-2">۵۰۰۰+</div>
                    <p class="text-red-100 text-lg">خانواده کمک شده</p>
                </div>
                <div>
                    <div class="text-5xl font-bold mb-2">۱۰۰۰۰+</div>
                    <p class="text-red-100 text-lg">کودک تحت تعلیم</p>
                </div>
                <div>
                    <div class="text-5xl font-bold mb-2">۲۰۰+</div>
                    <p class="text-red-100 text-lg">پروژه اجتماعی</p>
                </div>
                <div>
                    <div class="text-5xl font-bold mb-2">۱۰۰۰+</div>
                    <p class="text-red-100 text-lg">داوطلب فعال</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">تماس با ما</h2>
                <div class="w-20 h-1 bg-red-600 mx-auto"></div>
            </div>
            <div class="grid md:grid-cols-2 gap-12">
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-8">اطلاعات تماس</h3>
                    <div class="space-y-6">
                        <div class="flex gap-4">
                            <div class="w-12 h-12 bg-red-600 rounded-full flex items-center justify-center text-white text-xl flex-shrink-0">
                                📍
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-1">آدرس</h4>
                                <p class="text-gray-600">کابل ، شهرنو ، پلاک 23</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-12 h-12 bg-red-600 rounded-full flex items-center justify-center text-white text-xl flex-shrink-0">
                                📞
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-1">تلفن</h4>
                                <p class="text-gray-600">0798203578</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-12 h-12 bg-red-600 rounded-full flex items-center justify-center text-white text-xl flex-shrink-0">
                                ✉️
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-1">ایمیل</h4>
                                <p class="text-gray-600">info@charity.org</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-8">فرم تماس</h3>
                    <form class="space-y-4">
                        <input type="text" placeholder="نام شما" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-red-600">
                        <input type="email" placeholder="ایمیل شما" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-red-600">
                        <textarea placeholder="پیام شما" rows="5" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-red-600"></textarea>
                        <button type="submit" class="w-full bg-red-600 text-white py-3 rounded-lg font-bold hover:bg-red-700 transition">
                            ارسال پیام
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div>
                    <h4 class="font-bold text-lg mb-4">درباره</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition">درباره ما</a></li>
                        <li><a href="#" class="hover:text-white transition">ماموریت</a></li>
                        <li><a href="#" class="hover:text-white transition">تاریخچه</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold text-lg mb-4">خدمات</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition">کمک‌های آموزشی</a></li>
                        <li><a href="#" class="hover:text-white transition">کمک‌های بهداشتی</a></li>
                        <li><a href="#" class="hover:text-white transition">کمک‌های مسکن</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold text-lg mb-4">پیوند‌ها</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition">بلاگ</a></li>
                        <li><a href="#" class="hover:text-white transition">اخبار</a></li>
                        <li><a href="#" class="hover:text-white transition">رویدادها</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold text-lg mb-4">شبکه‌های اجتماعی</h4>
                    <div class="flex gap-4">
                        <a href="#" class="w-10 h-10 bg-red-600 rounded-full flex items-center justify-center hover:bg-red-700 transition">f</a>
                        <a href="#" class="w-10 h-10 bg-red-600 rounded-full flex items-center justify-center hover:bg-red-700 transition">𝕏</a>
                        <a href="#" class="w-10 h-10 bg-red-600 rounded-full flex items-center justify-center hover:bg-red-700 transition">📷</a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 pt-8 text-center text-gray-400">
                <p>&copy; ۱۴۰۳ موسسه خیریه. تمام حقوق محفوظ است.</p>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });
    </script>
    {{-- <script src="{{asset('js/app.js')}}"></script> --}}
</body>
</html>
