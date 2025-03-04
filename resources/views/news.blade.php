<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construction News | Mandajaya</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        .navbar {
            background: rgba(17, 24, 39, 0.95);
            backdrop-filter: blur(8px);
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            right: 0;
            z-index: 50;
            transition: all 0.3s ease;
            padding: 1rem;
            /* Reduced padding */
        }

        .navbar.scrolled {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            background: rgba(17, 24, 39, 0.98);
        }

        .nav-link {
            position: relative;
            padding-bottom: 2px;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #3B82F6;
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .company-logo {
            transition: transform 0.3s ease;
        }

        .company-logo:hover {
            transform: scale(1.05);
        }

        /* mobile */
        #mobile-menu {
            backdrop-filter: blur(8px);
        }

        .overflow-hidden {
            overflow: hidden;
        }

        main {
            min-height: calc(100vh - 64px);
            /* Adjust based on your navbar height */
        }

        #mobile-menu {
            position: fixed;
            top: 0;
            left: -300px;
            width: 300px;
            height: 100vh;
            background-color: rgb(17, 24, 39);
            z-index: 50;
            transition: left 0.3s ease-in-out;
            padding: 2rem;
            overflow-y: auto;
        }

        #mobile-menu.active {
            left: 0;
        }

        .menu-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 40;
        }

        .menu-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        #menu-toggle {
            position: relative;
            z-index: 60;
        }

        body.menu-open {
            overflow: hidden;
        }

        main {
            position: relative;
            z-index: 1;
            margin-top: 64px;
        }
    </style>
</head>


<body class="font-roboto">
    <!-- Navbar -->
    <nav class="navbar p-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <img alt="Company logo" class="h-12 w-12 company-logo" src="{{ url('images/logo fix2.png') }}" />
                <a class="text-white text-2xl font-bold tracking-wide hover:text-blue-400 transition duration-300 group" href="/">
                    <span class="text-white group-hover:text-yellow-500 transition duration-300">Mandajaya Rekayasa Konstruksi</span>
                </a>
            </div>

            <!-- Desktop Menu -->
            <ul class="hidden md:flex space-x-8 items-center">
                <li>
                    <a class="nav-link {{ Request::is('/') ? 'text-yellow-400 font-bold' : 'text-gray-300 hover:text-yellow-400' }} transition duration-300" href="/">Home</a>
                </li>
                <li>
                    <a class="nav-link {{ Request::is('service') ? 'text-yellow-400 font-bold' : 'text-gray-300 hover:text-yellow-400' }} transition duration-300" href="service">Services</a>
                </li>
                <li>
                    <a class="nav-link {{ Request::is('project') ? 'text-yellow-400 font-bold' : 'text-gray-300 hover:text-yellow-400' }} transition duration-300" href="project">Projects</a>
                </li>
                <li>
                    <a class="nav-link {{ Request::is('team') ? 'text-yellow-400 font-bold' : 'text-gray-300 hover:text-yellow-400' }} transition duration-300" href="team">Our Team</a>
                </li>
                <li>
                    <a class="nav-link {{ Request::is('client') ? 'text-yellow-400 font-bold' : 'text-gray-300 hover:text-yellow-400' }} transition duration-300" href="client">Clients</a>
                </li>
                <li>
                    <a class="nav-link {{ Request::is('contact') ? 'text-yellow-400 font-bold' : 'text-gray-300 hover:text-yellow-400' }} transition duration-300" href="contact">Contact Us</a>
                </li>
                <li>
                    <a class="nav-link {{ Request::is('news') ? 'text-yellow-400 font-bold' : 'text-gray-300 hover:text-yellow-400' }} transition duration-300" href="news">News</a>
                </li>
            </ul>


            <!-- Mobile Menu -->
            <div id="mobile-menu">
                <div class="container px-4 py-2">
                    <ul class="flex flex-col space-y-4">
                        <li><a class="block text-gray-300 hover:text-yellow-400 transition duration-300 py-2" href="/">Home</a></li>
                        <li><a class="block text-gray-300 hover:text-yellow-400 transition duration-300 py-2" href="service">Services</a></li>
                        <li><a class="block text-gray-300 hover:text-yellow-400 transition duration-300 py-2" href="project">Projects</a></li>
                        <li><a class="block text-gray-300 hover:text-yellow-400 transition duration-300 py-2" href="team">Our Team</a></li>
                        <li><a class="block text-gray-300 hover:text-yellow-400 transition duration-300 py-2" href="client">Clients</a></li>
                        <li><a class="block text-gray-300 hover:text-yellow-400 transition duration-300 py-2" href="contact">Contact Us</a></li>
                        <li><a class="block text-gray-300 hover:text-yellow-400 transition duration-300 py-2" href="news">News</a></li>
                        <!-- <li class="pt-4">
                            <a href="https://drive.google.com/file/d/1_OuB8-CuDZPOWyo8zdetd3FRSMIm29gJ/view?usp=sharing"
                                target="_blank"
                                class="block w-full text-center bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-600 transition duration-300">
                                <i class="fas fa-download mr-2"></i>Company Profile
                            </a>
                        </li> -->
                    </ul>
                </div>
            </div>
    </nav>

    <!-- Main Content -->
    <main class="py-24">
        <div class="container mx-auto px-4">
            <!-- Header -->
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold mb-4">Construction Industry News</h1>
                <div class="w-24 h-1 bg-blue-500 mx-auto mb-6"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Stay updated with the latest news and developments in the construction industry
                </p>
            </div>

            <!-- News Grid -->
            <div class="grid grid-cols-1 md:grid-cols-6 gap-8">
                <!-- Featured News (4 columns) -->
                <div class="w-full md:col-span-4 bg-white rounded-xl shadow-lg overflow-hidden group hover:shadow-xl transition-all duration-300">
                    <div class="aspect-[16/9] h-[300px] md:h-[500px] relative">
                        <iframe
                            src="https://www.constructiondive.com"
                            class="w-full h-full"
                            loading="lazy"
                            allowfullscreen
                            scrolling="yes"
                            frameborder="1"
                            style="width: 100%; height: 100%; border: none;">
                        </iframe>
                    </div>
                    <div class="p-4 md:p-6">
                        <h3 class="font-bold text-xl md:text-2xl mb-2">Construction Dive</h3>
                        <p class="text-gray-600 text-sm md:text-base mb-4">
                            Stay ahead in the construction industry with in-depth news and analysis from Construction Dive. Explore trends, innovations, and strategic insights impacting the global construction market. Get updates on major projects, business strategies, and regulatory changes to make informed decisions and grow your business.
                        </p>
                        <a href="https://www.constructiondive.com"
                            target="_blank"
                            class="inline-flex items-center justify-center bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition-all duration-300 transform hover:scale-105">
                            <i class="fas fa-external-link-alt mr-2"></i>Visit Website
                        </a>
                    </div>
                </div>


                <!-- News Item 2 (2 columns) -->
                <div class="w-full md:col-span-2 bg-white rounded-xl shadow-lg overflow-hidden group hover:shadow-xl transition-all duration-300">
                    <div class="aspect-video h-[300px] md:h-[400px] relative">
                        <iframe
                            src="https://www.medcom.id/tag/2500/konstruksi"
                            class="w-full h-full"
                            loading="lazy"
                            allowfullscreen
                            scrolling="yes"
                            frameborder="0"
                            style="width: 100%; height: 100%; border: none;">
                        </iframe>
                    </div>
                    <div class="p-4 md:p-6">
                        <h3 class="font-bold text-lg md:text-xl mb-2">Medcom Id</h3>
                        <p class="text-gray-600 text-sm md:text-base mb-4">
                            Discover the latest construction industry news and updates in Indonesia with Medcom Id. Stay informed about infrastructure projects, market trends, and government regulations that impact the construction sector. Get reliable insights and comprehensive reports to keep you ahead in the industry.
                        </p>
                        <a href="https://www.medcom.id/tag/2500/konstruksi"
                            target="_blank"
                            class="inline-flex items-center justify-center bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition-all duration-300 transform hover:scale-105">
                            <i class="fas fa-external-link-alt mr-2"></i>Visit Website
                        </a>
                    </div>
                </div>

                <!-- News Item 3 (2 columns) -->
                <div class="w-full md:col-span-2 bg-white rounded-xl shadow-lg overflow-hidden group hover:shadow-xl transition-all duration-300">
                    <div class="aspect-video h-[300px] md:h-[400px] relative">
                        <iframe
                            src="https://www.bisnis.com/topic/223/konstruksi"
                            class="w-full h-full"
                            loading="lazy"
                            allowfullscreen
                            scrolling="yes"
                            frameborder="0"
                            style="width: 100%; height: 100%; border: none;">
                        </iframe>
                    </div>
                    <div class="p-4 md:p-6">
                        <h3 class="font-bold text-lg md:text-xl mb-2">Bisnis.com</h3>
                        <p class="text-gray-600 text-sm md:text-base mb-4">
                            Stay informed with the latest news on construction and infrastructure development in Indonesia. Bisnis.com provides in-depth analysis, market trends, and updates on major construction projects, helping you stay ahead in the industry with reliable insights and reports.
                        </p>
                        <a href="https://www.bisnis.com/topic/223/konstruksi"
                            target="_blank"
                            class="inline-flex items-center justify-center bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition-all duration-300 transform hover:scale-105">
                            <i class="fas fa-external-link-alt mr-2"></i>Visit Website
                        </a>
                    </div>
                </div>


                <!-- News Item 4 (2 columns) -->
                <div class="w-full md:col-span-2 bg-white rounded-xl shadow-lg overflow-hidden group hover:shadow-xl transition-all duration-300">
                    <div class="aspect-video h-[300px] md:h-[400px] relative">
                        <iframe
                            src="https://www.merdeka.com/tag/konstruksi-bangunan"
                            class="w-full h-full"
                            loading="lazy"
                            allowfullscreen
                            scrolling="yes"
                            frameborder="0"
                            style="width: 100%; height: 100%; border: none;">
                        </iframe>
                    </div>
                    <div class="p-4 md:p-6">
                        <h3 class="font-bold text-lg md:text-xl mb-2">Merdeka.com</h3>
                        <p class="text-gray-600 text-sm md:text-base mb-4">
                            Discover the latest updates on construction and building projects across Indonesia. Get insights into urban development, infrastructure advancements, and industry trends from Merdeka.com, a trusted news source with comprehensive coverage on construction-related topics.
                        </p>
                        <a href="https://www.merdeka.com/tag/konstruksi-bangunan"
                            target="_blank"
                            class="inline-flex items-center justify-center bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition-all duration-300 transform hover:scale-105">
                            <i class="fas fa-external-link-alt mr-2"></i>Visit Website
                        </a>
                    </div>
                </div>


                <!-- News Item 5 (2 columns) -->
                <div class="w-full md:col-span-2 bg-white rounded-xl shadow-lg overflow-hidden group hover:shadow-xl transition-all duration-300">
                    <div class="aspect-video h-[300px] md:h-[400px] relative">
                        <iframe
                            src="https://www.kompas.com/tag/konstruksi-bangunan"
                            class="w-full h-full"
                            loading="lazy"
                            scrolling="yes"
                            frameborder="0"
                            style="width: 100%; height: 100%; border: none;">
                        </iframe>
                    </div>
                    <div class="p-4 md:p-6">
                        <h3 class="font-bold text-lg md:text-xl mb-2">Kompas.com</h3>
                        <p class="text-gray-600 text-sm md:text-base mb-4">
                            Stay updated with the latest Indonesian construction news, trends, and project developments. Discover in-depth articles, expert opinions, and real-time updates on infrastructure projects across Indonesia.
                        </p>
                        <a href="https://www.kompas.com/tag/konstruksi-bangunan"
                            target="_blank"
                            class="inline-flex items-center justify-center bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition-all duration-300 transform hover:scale-105">
                            <i class="fas fa-external-link-alt mr-2"></i>Visit Website
                        </a>
                    </div>
                </div>


                <!-- News Item 6 (3 columns) -->
                <div class="w-full md:col-span-3 bg-white rounded-xl shadow-lg overflow-hidden group hover:shadow-xl transition-all duration-300">
                    <div class="aspect-video h-[300px] md:h-[450px] relative">
                        <iframe
                            src="https://www.detik.com/tag/konstruksi"
                            class="w-full h-full"
                            loading="lazy"
                            allowfullscreen
                            scrolling="yes"
                            frameborder="0"
                            style="width: 100%; height: 100%; border: none;">
                        </iframe>
                    </div>
                    <div class="p-4 md:p-6">
                        <h3 class="font-bold text-lg md:text-xl mb-2">Detik.Com</h3>
                        <p class="text-gray-600 text-sm md:text-base mb-4">
                            Discover the latest updates on government construction projects, infrastructure developments, and industry trends in Indonesia. Stay informed with comprehensive news coverage from one of the leading news portals.
                        </p>
                        <a href="https://www.detik.com/tag/konstruksi"
                            target="_blank"
                            class="inline-flex items-center justify-center bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition-all duration-300 transform hover:scale-105">
                            <i class="fas fa-external-link-alt mr-2"></i>Visit Website
                        </a>
                    </div>
                </div>


                <!-- News Item 7 (3 columns) -->
                <div class="w-full md:col-span-3 bg-white rounded-xl shadow-lg overflow-hidden group hover:shadow-xl transition-all duration-300">
                    <div class="aspect-video h-[300px] md:h-[450px] relative">
                        <iframe
                            src="https://www.tempo.co/tag/pembangunan-gedung"
                            class="w-full h-full"
                            loading="lazy"
                            allowfullscreen
                            scrolling="yes"
                            frameborder="0"
                            style="width: 100%; height: 100%; border: none;">
                        </iframe>
                    </div>
                    <div class="p-4 md:p-6">
                        <h3 class="font-bold text-lg md:text-xl mb-2">Tempo News</h3>
                        <p class="text-gray-600 text-sm md:text-base mb-4">
                            Stay updated on government construction projects and infrastructure developments. Explore detailed reports and insightful news coverage on building projects and urban planning from one of Indonesia's leading news sources.
                        </p>
                        <a href="https://www.tempo.co/tag/pembangunan-gedung"
                            target="_blank"
                            class="inline-flex items-center justify-center bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition-all duration-300 transform hover:scale-105">
                            <i class="fas fa-external-link-alt mr-2"></i>Visit Website
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Additional News Section -->
    <!-- <div class="container mx-auto px-4 my-12"> -->
    <!-- Section Title -->
    <!-- <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-4">More Industry Updates</h2>
            <div class="w-20 h-1 bg-blue-500 mx-auto"></div>
        </div> -->

    <!-- Asymmetrical Grid -->
    <div class="grid grid-cols-1 md:grid-cols-12 gap-8">
        <!-- Large Card (Spans 7 columns) -->
        <div class="md:col-span-7 bg-white rounded-xl shadow-lg overflow-hidden group hover:shadow-xl transition-all duration-300">
            <div class="h-[500px] relative">
                <iframe
                    src="https://www.pikiran-rakyat.com/"
                    class="w-full h-full"
                    loading="lazy"
                    allowfullscreen
                    scrolling="yes"
                    frameborder="0"
                    style="width: 100%; height: 100%; border: none;">
                </iframe>
            </div>
            <div class="p-8">
                <h3 class="font-bold text-2xl mb-3">Pikiran Rakyat</h3>
                <p class="text-gray-600 mb-4">
                    Stay updated with the latest construction industry developments, project updates, and insightful analyses.
                    Pikiran Rakyat provides comprehensive coverage on infrastructure growth, urban planning, and architectural innovations.
                    Explore expert opinions, industry trends, and in-depth reports on ongoing and upcoming construction projects in Indonesia.
                </p>
                <a href="https://www.pikiran-rakyat.com/" target="_blank" class="bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-600 transition-all duration-300">
                    Visit Website
                </a>

            </div>
        </div>


        <!-- Vertical Stack (Spans 5 columns) -->
        <div class="md:col-span-5 space-y-8">
            <!-- Medium Card 1 -->
            <div class="w-full bg-white rounded-xl shadow-lg overflow-hidden group hover:shadow-xl transition-all duration-300">
                <div class="aspect-video h-[300px] relative">
                    <iframe
                        src="https://wartaekonomi.co.id/category-261/infrastruktur"
                        class="w-full h-full"
                        loading="lazy"

                        scrolling="yes"
                        frameborder="0"
                        style="width: 100%; height: 100%; border: none;">
                    </iframe>
                </div>
                <div class="p-4 md:p-6">
                    <h3 class="font-bold text-xl mb-2">Warta Ekonomi</h3>
                    <p class="text-gray-600 text-sm md:text-base mb-4">
                        Discover the economic impact and budget allocations for construction projects by the Ministry of Public Works in 2025. Explore strategic insights and financial implications affecting the industry.
                    </p>
                    <a href="https://wartaekonomi.co.id/category-261/infrastruktur"
                        target="_blank"
                        class="inline-flex items-center justify-center bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition-all duration-300 transform hover:scale-105">
                        <i class="fas fa-external-link-alt mr-2"></i>Visit Website
                    </a>
                </div>
            </div>



            <!-- Medium Card 2 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden group hover:shadow-xl transition-all duration-300">
                <div class="h-[300px] relative">
                    <iframe
                        src="https://kanalsatu.com/id/post/64974/pln-percepat-modernisasi-pertanian-dengan-program-electrifying-agriculture"
                        class="w-full h-full"
                        loading="lazy"
                        allowfullscreen
                        scrolling="yes"
                        frameborder="0"
                        style="width: 100%; height: 100%; border: none;">
                    </iframe>
                </div>
                <div class="p-6">
                    <h3 class="font-bold text-xl mb-2">Kanal Satu.com</h3>
                    <p class="text-gray-600 mb-4">
                        Explore the latest insights into the construction industry, technological innovations, and infrastructure project developments on Kanal Satu. This article discusses how PLN is accelerating agricultural modernization through the Electrifying Agriculture program, providing efficient and sustainable solutions for the farming sector.
                    </p>
                    <a href="https://kanalsatu.com/id/post/64974/pln-percepat-modernisasi-pertanian-dengan-program-electrifying-agriculture" target="_blank" class="bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-600 transition-all duration-300">
                        Visit Website
                    </a>
                </div>
            </div>
        </div>

        <!-- Bottom Full Width Card (Spans 12 columns) -->
        <div class="md:col-span-12 bg-white rounded-xl shadow-lg overflow-hidden group hover:shadow-xl transition-all duration-300">
            <div class="h-[400px] relative">
                <iframe
                    src="https://www.forconstructionpros.com/"
                    class="w-full h-full"
                    loading="lazy"
                    allowfullscreen
                    scrolling="yes"
                    frameborder="0"
                    style="width: 100%; height: 100%; border: none;">
                </iframe>
            </div>
            <div class="p-8">
                <h3 class="font-bold text-2xl mb-3">Construction Pros</h3>
                <p class="text-gray-600 mb-4">Discover the latest trends and developments in the construction industry with Construction Pros. </p>
                <a href="https://www.forconstructionpros.com/" target="_blank" class="bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-600 transition-all duration-300">
                    Visit Website
                </a>
            </div>
        </div>
    </div>
    </div>


    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300">
        <!-- Main Footer -->
        <div class="container mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div class="space-y-4">
                    <div class="flex items-center space-x-3 mb-6">
                        <img src="{{ url('images/logo fix2.png') }}" alt="MRK Logo" class="h-10 w-10">
                        <h3 class="text-xl font-bold text-white">Mandajaya Rekayasa Konstruksi</h3>
                    </div>
                    <p class="text-sm text-gray-400 leading-relaxed">
                        Providing top-notch construction consulting services with a commitment to excellence, innovation, and client satisfaction.
                    </p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-semibold text-white mb-6">Quick Links</h4>
                    <ul class="space-y-3">
                        <li>
                            <a href="/" class="text-gray-400 hover:text-yellow-400 transition duration-300">Home</a>
                        </li>
                        <li>
                            <a href="service" class="text-gray-400 hover:text-yellow-400 transition duration-300">Services</a>
                        </li>
                        <li>
                            <a href="project" class="text-gray-400 hover:text-yellow-400 transition duration-300">Projects</a>
                        </li>
                        <li>
                            <a href="team" class="text-gray-400 hover:text-yellow-400 transition duration-300">Our Team</a>
                        </li>
                        <li>
                            <a href="client" class="text-gray-400 hover:text-yellow-400 transition duration-300">Clients</a>
                        </li>
                        <li>
                            <a href="news" class="text-gray-400 hover:text-yellow-400 transition duration-300">News</a>
                        </li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h4 class="text-lg font-semibold text-white mb-6">Contact Us</h4>
                    <ul class="space-y-3">
                        <li class="flex items-start space-x-3">
                            <i class="fas fa-map-marker-alt mt-1 text-red-400"></i>
                            <span class="text-gray-400">Jl. Kota Mas 1 No.18, Kota Cimahi, Jawa Barat, 40511</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-phone text-white-400"></i>
                            <span class="text-gray-400">+62 852 2080 1593</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-envelope text-white-400"></i>
                            <a href="mailto:contact.us@mandajayarekayasakonstruksi.com" class="text-gray-400 hover:text-yellow-400 transition duration-300">
                                contact.us@mandajayarekayasakonstruksi.com
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Social Media & Newsletter -->
                <div>
                    <h4 class="text-lg font-semibold text-white mb-6">Connect With Us</h4>
                    <div class="flex space-x-4 mb-6">
                        <a href="https://www.facebook.com/profile.php?id=61569553317515"
                            class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-blue-600 transition duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <!-- <a href="#"
                            class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-sky-700 transition duration-300">
                            <i class="fab fa-linkedin-in"></i>
                        </a> -->
                        <a href="https://www.instagram.com/mandajaya_rekayasa_konstruksi?igsh=MW1kdTFxb2kycWNheg=="
                            class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-pink-600 transition duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>

                    <!-- Company Profile Button -->
                    <!-- <a href="https://drive.google.com/file/d/1_OuB8-CuDZPOWyo8zdetd3FRSMIm29gJ/view?usp=sharing"
                        target="_blank"
                        class="inline-flex items-center space-x-2 bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition duration-300">
                        <i class="fas fa-download"></i>
                        <span>Download Company Profile</span>
                    </a> -->
                </div>
            </div>
        </div>

        <!-- Bottom Footer -->
        <div class="border-t border-gray-800">
            <div class="container mx-auto px-4 py-6">
                <div class="md:flex md:items-center md:justify-between text-sm">
                    <div class="text-center md:text-left">
                        <p>&copy; 2022 Mandajaya Rekayasa Konstruksi. All rights reserved.</p>
                    </div>
                    <div class="mt-4 md:mt-0 text-center md:text-right">
                        <a href="privacy" class="text-gray-400 hover:text-yellow-400 transition duration-300 mx-2">Privacy Policy</a>
                        <span class="text-gray-600">|</span>
                        <a href="term" class="text-gray-400 hover:text-yellow-400 transition duration-300 mx-2">Terms of Service</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.getElementById('menu-toggle');
            const mobileMenu = document.getElementById('mobile-menu');

            // Create overlay
            const overlay = document.createElement('div');
            overlay.className = 'menu-overlay';
            document.body.appendChild(overlay);

            function toggleMenu() {
                mobileMenu.classList.toggle('active');
                overlay.classList.toggle('active');
                document.body.classList.toggle('menu-open');
            }

            menuToggle.addEventListener('click', function(e) {
                e.stopPropagation();
                toggleMenu();
            });

            // Close on overlay click
            overlay.addEventListener('click', toggleMenu);

            // Close on link click
            const mobileLinks = mobileMenu.getElementsByTagName('a');
            Array.from(mobileLinks).forEach(link => {
                link.addEventListener('click', toggleMenu);
            });
        });
    </script>
</body>

</html>