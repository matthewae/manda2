<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Our Projects - Mandajaya Rekayasa Konstruksi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet" />
    <link href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" rel="stylesheet" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <style>
        .fade-in {
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .card:hover {
            transform: translateY(-10px);
            transition: transform 0.3s ease-in-out;
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 50;
        }

        .overlay.open {
            display: flex;
        }

        .overlay-content {
            background: white;
            padding: 24px;
            border-radius: 8px;
            max-width: 800px;
            width: 90%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow-y: auto;
            max-height: 90%;
        }

        .overlay-content p {
            text-align: justify;
        }

        .navbar {
            background: rgba(17, 24, 39, 0.95);
            backdrop-filter: blur(8px);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 50;
            transition: all 0.3s ease;
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

        .aspect-w-16 {
            position: relative;
            padding-bottom: 56.25%;
        }

        .aspect-w-16>* {
            position: absolute;
            height: 100%;
            width: 100%;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
        }

        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
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
            inset: 0;
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

        #article-link:hover {
            text-decoration: underline;
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

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button id="menu-toggle" class="text-gray-300 hover:text-white focus:outline-none p-2 rounded-lg">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>

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

    <section class="py-16 bg-gradient-to-b from-gray-100 to-white fade-in mt-24"> <!-- mt-24 adds spacing from navbar -->
        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold mb-4">Our Projects</h2>
                <div class="w-24 h-1 bg-blue-500 mx-auto mb-6"></div>
                <p class="text-gray-600 max-w-2xl mx-auto mb-8">
                    Explore our diverse portfolio of successful projects across various sectors
                </p>
            </div>


            <!-- Project Categories -->
            <div class="flex justify-center mb-8">
                <div class="flex flex-wrap gap-4 justify-center">
                    <button data-category="all" class="filter-btn px-6 py-2 rounded-full bg-blue-500 text-white hover:bg-blue-600 transition duration-300">All</button>
                    <button data-category="commercial" class="filter-btn px-6 py-2 rounded-full bg-gray-200 text-gray-700 hover:bg-blue-500 hover:text-white transition duration-300">Commercial</button>
                    <button data-category="residential" class="filter-btn px-6 py-2 rounded-full bg-gray-200 text-gray-700 hover:bg-blue-500 hover:text-white transition duration-300">Residential</button>
                    <button data-category="industrial" class="filter-btn px-6 py-2 rounded-full bg-gray-200 text-gray-700 hover:bg-blue-500 hover:text-white transition duration-300">Industrial</button>
                    <button data-category="healthcare" class="filter-btn px-6 py-2 rounded-full bg-gray-200 text-gray-700 hover:bg-blue-500 hover:text-white transition duration-300">Healthcare</button>
                    <button data-category="Infrastructure" class="filter-btn px-6 py-2 rounded-full bg-gray-200 text-gray-700 hover:bg-blue-500 hover:text-white transition duration-300">Infrastructure</button>
                </div>
            </div>

            <!-- project cards with different categories -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Commercial Project -->
                <div class="project-card group relative overflow-hidden rounded-xl bg-white shadow-lg hover:shadow-xl transition duration-300" data-category="commercial">
                    <div class="relative overflow-hidden aspect-w-16 aspect-h-9">
                        <img alt="Commercial Building" src="{{ url('images/img149.jpg') }}" class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition duration-300">
                            <div class="absolute bottom-4 left-4 right-4">
                                <span class="px-3 py-1 bg-blue-500 text-white text-sm rounded-full">Commercial</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 group-hover:text-blue-500 transition duration-300">Design Gudang PT.POS INDONESIA</h3>
                        <p class="text-gray-600 mb-4 line-clamp-2">A state-of-the-art commercial building designed and managed by our expert team.</p>
                        <a href="{{ url('/articleCOM?title=Design Gudang PT.POS INDONESIA') }}" class="text-blue-500 hover:text-blue-600 transition duration-300 flex items-center gap-2">
                            Learn More
                            <i class="fas fa-arrow-right text-sm transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>

                <!-- Residential Project -->
                <div class="project-card group relative overflow-hidden rounded-xl bg-white shadow-lg hover:shadow-xl transition duration-300" data-category="residential">
                    <div class="relative overflow-hidden aspect-w-16 aspect-h-9">
                        <img alt="Residential Building" src="{{ url('images/img163.jpg') }}" class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition duration-300">
                            <div class="absolute bottom-4 left-4 right-4">
                                <span class="px-3 py-1 bg-blue-500 text-white text-sm rounded-full">Residential</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 group-hover:text-blue-500 transition duration-300">Renovasi Gedung Penambangan BBPMB Tekmira</h3>
                        <p class="text-gray-600 mb-4 line-clamp-2">A state-of-the-art residential building designed and managed by our expert team.</p>
                        <a href="{{ url('/articleRES?title=Renovasi Gedung BBPMB Tekmira') }}" class="text-blue-500 hover:text-blue-600 transition duration-300 flex items-center gap-2">
                            Learn More
                            <i class="fas fa-arrow-right text-sm transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>

                <!-- Industrial Project -->
                <div class="project-card group relative overflow-hidden rounded-xl bg-white shadow-lg hover:shadow-xl transition duration-300" data-category="industrial">
                    <div class="relative overflow-hidden aspect-w-16 aspect-h-9">
                        <img alt="Industrial Building" src="{{ url('images/img172.jpg') }}" class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition duration-300">
                            <div class="absolute bottom-4 left-4 right-4">
                                <span class="px-3 py-1 bg-blue-500 text-white text-sm rounded-full">Industrial</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 group-hover:text-blue-500 transition duration-300">Pekerjaan Ruang Customer Service IPC Jakarta</h3>
                        <p class="text-gray-600 mb-4 line-clamp-2">A state-of-the-art Industriial building designed and managed by our expert team.</p>
                        <a href="{{ url('/articleIND?title=Ruang Customer Service IPC Jakarta') }}" class="text-blue-500 hover:text-blue-600 transition duration-300 flex items-center gap-2">
                            Learn More
                            <i class="fas fa-arrow-right text-sm transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>

                <!-- Infrastructure Project -->
                <div class="project-card group relative overflow-hidden rounded-xl bg-white shadow-lg hover:shadow-xl transition duration-300" data-category="Infrastructure">
                    <div class="relative overflow-hidden aspect-w-16 aspect-h-9">
                        <img alt="Infrastructure Building" src="{{ url('images/infra.jpeg') }}" class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition duration-300">
                            <div class="absolute bottom-4 left-4 right-4">
                                <span class="px-3 py-1 bg-blue-500 text-white text-sm rounded-full">Infrastructure</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 group-hover:text-blue-500 transition duration-300">Infrastructure Project</h3>
                        <p class="text-gray-600 mb-4 line-clamp-2">A state-of-the-art Infrastructure project designed and managed by our expert team.</p>
                        <a href="{{ url('/articleINF?title=Sertidikat Laik Fungsi') }}" class="text-blue-500 hover:text-blue-600 transition duration-300 flex items-center gap-2">
                            Learn More
                            <i class="fas fa-arrow-right text-sm transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>

                <!-- Healthcare Project -->
                <div class="project-card group relative overflow-hidden rounded-xl bg-white shadow-lg hover:shadow-xl transition duration-300" data-category="healthcare">
                    <div class="relative overflow-hidden aspect-w-16 aspect-h-9">
                        <img alt="Healthcare Building" src="{{ url('images/img183.jpg') }}" class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition duration-300">
                            <div class="absolute bottom-4 left-4 right-4">
                                <span class="px-3 py-1 bg-blue-500 text-white text-sm rounded-full">Hospital</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 group-hover:text-blue-500 transition duration-300">Renovasi Ruang Dewan Komisaris lt.2 GPI Jakarta</h3>
                        <p class="text-gray-600 mb-4 line-clamp-2">A state-of-the-art Hospital building designed and managed by our expert team.</p>
                        <a href="{{ url('/articleHOS?title=Ruang Dewan Komisaris') }}" class="text-blue-500 hover:text-blue-600 transition duration-300 flex items-center gap-2">
                            Learn More
                            <i class="fas fa-arrow-right text-sm transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>

                <!-- Epoxy Project -->
                <div class="project-card group relative overflow-hidden rounded-xl bg-white shadow-lg hover:shadow-xl transition duration-300" data-category="healthcare">
                    <div class="relative overflow-hidden aspect-w-16 aspect-h-9">
                        <img alt="Healthcare Building" src="{{ url('images/img195.jpg') }}" class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition duration-300">
                            <div class="absolute bottom-4 left-4 right-4">
                                <span class="px-3 py-1 bg-blue-500 text-white text-sm rounded-full">Hospital</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 group-hover:text-blue-500 transition duration-300">Renovasi Ruang Dewan Komisaris lt.2 GPI Jakarta</h3>
                        <p class="text-gray-600 mb-4 line-clamp-2">A state-of-the-art Hospital building designed and managed by our expert team.</p>
                        <a href="{{ url('/articleEPO?title=Epoxy Gedung') }}" class="text-blue-500 hover:text-blue-600 transition duration-300 flex items-center gap-2">
                            Learn More
                            <i class="fas fa-arrow-right text-sm transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>

                <!-- RSN Project -->
                <div class="project-card group relative overflow-hidden rounded-xl bg-white shadow-lg hover:shadow-xl transition duration-300" data-category="healthcare">
                    <div class="relative overflow-hidden aspect-w-16 aspect-h-9">
                        <img alt="Healthcare Building" src="{{ url('images/img218.jpg') }}" class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition duration-300">
                            <div class="absolute bottom-4 left-4 right-4">
                                <span class="px-3 py-1 bg-blue-500 text-white text-sm rounded-full">Hospital</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 group-hover:text-blue-500 transition duration-300">Pemasangan Teralis Rusunawa Pulo</h3>
                        <p class="text-gray-600 mb-4 line-clamp-2">A state-of-the-art Hospital building designed and managed by our expert team.</p>
                        <a href="{{ url('/articleRSN?title=Design Gudang PT.POS INDONESIA&desc=A state-of-the-art commercial building designed and managed by our expert team.&image=images/img149.jpg') }}" class="text-blue-500 hover:text-blue-600 transition duration-300 flex items-center gap-2">
                            Learn More
                            <i class="fas fa-arrow-right text-sm transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>

                <!-- SPP Project -->
                <div class="project-card group relative overflow-hidden rounded-xl bg-white shadow-lg hover:shadow-xl transition duration-300" data-category="healthcare">
                    <div class="relative overflow-hidden aspect-w-16 aspect-h-9">
                        <img alt="Healthcare Building" src="{{ url('images/img230.jpg') }}" class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition duration-300">
                            <div class="absolute bottom-4 left-4 right-4">
                                <span class="px-3 py-1 bg-blue-500 text-white text-sm rounded-full">Hospital</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 group-hover:text-blue-500 transition duration-300">Assessment Struktur SPP Bandung</h3>
                        <p class="text-gray-600 mb-4 line-clamp-2">A state-of-the-art Hospital building designed and managed by our expert team.</p>
                        <a href="{{ url('/articleSPP?title=Design Gudang PT.POS INDONESIA&desc=A state-of-the-art commercial building designed and managed by our expert team.&image=images/img149.jpg') }}" class="text-blue-500 hover:text-blue-600 transition duration-300 flex items-center gap-2">
                            Learn More
                            <i class="fas fa-arrow-right text-sm transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Overlay -->
    <!-- <div class="overlay" id="overlay">
        <div class="overlay-content">
            <button class="text-red-500 hover:text-red-700 float-right" onclick="closeOverlay()">
                <i class="fas fa-times"></i>
            </button>
            <img alt="Overlay image" class="w-full h-48 object-cover rounded-lg mb-4" id="overlay-img" />
            <h3 class="text-2xl font-bold mb-4" id="overlay-title"></h3>
            <p class="text-gray-700 mb-4" id="overlay-desc"></p>
            <p class="text-gray-700 mb-6" id="overlay-detail"></p>

            <div class="mt-6 pt-4 border-t border-gray-200">
                <a href="" id="article-link" class="inline-flex items-center text-blue-500 hover:text-blue-600 transition duration-300 group">
                    Read Full Article
                    <i class="fas fa-book-open ml-2 group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
        </div>
    </div> -->



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
        // function showOverlay(title, description, imgSrc, detail) {
        //     document.getElementById('overlay-title').innerText = title;
        //     document.getElementById('overlay-desc').innerText = description;
        //     document.getElementById('overlay-img').src = imgSrc;
        //     document.getElementById('overlay-detail').innerText = detail;

        //     const articleLink = document.getElementById('article-link');
        //     if (articleLink) {
        //         switch (title) {
        //             case 'Commercial Building':
        //                 articleLink.href = '/articleCOM';
        //                 break;
        //             case 'Residential Building':
        //                 articleLink.href = '/articleRES';
        //                 break;
        //             case 'Industrial Building':
        //                 articleLink.href = '/articleIND';
        //                 break;
        //             case 'Infrastructure Building':
        //                 articleLink.href = '/articleINF';
        //                 break;
        //             case 'Hospital Building':
        //                 articleLink.href = '/articleHOS';
        //                 break;
        //             case 'Epoxy Building':
        //                 articleLink.href = '/articleEPO';
        //                 break;
        //             default:
        //                 articleLink.href = '/article';
        //         }
        //     }

        //     const overlay = document.getElementById('overlay');
        //     overlay.classList.add('open');
        // }

        // function closeOverlay() {
        //     document.getElementById('overlay').classList.remove('open');
        // }

        // mobile
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
                document.body.classList.toggle('overflow-hidden');
            }

            // Toggle menu
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

        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('.filter-btn');
            const projectCards = document.querySelectorAll('.project-card');

            filterButtons.forEach(button => {
                button.addEventListener('click', () => {
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => {
                        btn.classList.remove('bg-blue-500', 'text-white');
                        btn.classList.add('bg-gray-200', 'text-gray-700');
                    });

                    // Add active class to clicked button
                    button.classList.remove('bg-gray-200', 'text-gray-700');
                    button.classList.add('bg-blue-500', 'text-white');

                    const category = button.getAttribute('data-category');

                    projectCards.forEach(card => {
                        if (category === 'all' || card.getAttribute('data-category') === category) {
                            card.style.display = 'block';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>
</body>

</html>