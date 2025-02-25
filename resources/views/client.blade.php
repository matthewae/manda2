<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Our trusted clients at Mandajaya Rekayasa Konstruksi include government institutions, private corporations, and more.">
    <meta name="keywords" content="construction clients, Indonesian construction, government projects">

    <title>
        Mandajaya Rekayasa Konstruksi
    </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet" />

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

        .client-box:hover {
            transform: translateY(-10px);
            transition: transform 0.3s ease-in-out;
        }
    </style>

    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <title>
            Mandajaya Rekayasa Konstruksi - Clients
        </title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet" />
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

            .client-box:hover {
                transform: translateY(-10px);
                transition: transform 0.3s ease-in-out;
            }

            .carousel {
                position: relative;
                /* Important for absolute positioning of dots */
                overflow: hidden;
                width: 100%;
                padding-bottom: 3rem;
                /* Add space for dots */
            }

            .carousel-track {
                display: flex;
                transition: transform 0.5s ease-in-out;
            }

            .carousel-slide {
                min-width: 100%;
                box-sizing: border-box;
            }

            /* Navigation Dots */
            .carousel-dots {
                position: absolute;
                /* Change from relative to absolute */
                bottom: 0;
                /* Position at bottom */
                left: 0;
                right: 0;
                display: flex;
                justify-content: center;
                gap: 8px;
                padding: 1rem 0;
                z-index: 20;
                /* Ensure dots are above content */
            }

            .dot {
                width: 12px;
                height: 12px;
                border-radius: 50%;
                background: rgba(0, 0, 0, 0.3);
                cursor: pointer;
                transition: all 0.3s ease;
                border: none;
                padding: 0;
            }

            .dot:hover {
                background: rgba(0, 0, 0, 0.6);
            }

            .dot.active {
                background: rgba(0, 0, 0, 0.8);
                transform: scale(1.2);
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

            /* Replace the existing mobile menu styles in the <style> section */
            #mobile-menu {
                position: fixed;
                top: 0;
                left: -300px;
                /* Start off-screen */
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

            .client-skeleton {
                animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
            }

            @keyframes pulse {

                0%,
                100% {
                    opacity: 1;
                }

                50% {
                    opacity: .5;
                }
            }
        </style>
    </head>

<body class="font-montserrat">
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

    <!-- Clients Section -->
    <section class="py-12 fade-in mt-24"> <!-- Added mt-24 for navbar spacing -->
        <div class="container mx-auto text-center px-4">
            <h2 class="text-3xl font-bold mb-6">
                Our Clients
            </h2>
            <p class="text-gray-700 mb-6">
                We are proud to have worked with a diverse range of clients from various industries.
            </p>
            <div class="carousel">
                <div class="carousel-track">
                    <!-- Slide 1 -->
                    <div class="carousel-slide flex flex-wrap justify-center">
                        <!-- Client 1 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Bandung" class="w-full h-24 object-contain mb-4" src="{{ url('images/bandung.png') }}" />
                            </div>
                        </div>
                        <!-- Client 2 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Cimahi" class="w-full h-24 object-contain mb-4" src="{{ url('images/Logo-Cimahi.png') }}" />
                            </div>
                        </div>
                        <!-- Client 3 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Bogor" class="w-full h-24 object-contain mb-4" src="{{ url('images/Kota Bogor.png') }}" />
                            </div>
                        </div>
                        <!-- Client 4 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Takalar" class="w-full h-24 object-contain mb-4" src="{{ url('images/Kabupaten Takalar.png') }}" />
                            </div>
                        </div>
                        <!-- Client 5 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Jakarta" class="w-full h-24 object-contain mb-4" src="{{ url('images/jakarta.png') }}" />
                            </div>
                        </div>
                        <!-- Client 6 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="ESDM" class="w-full h-24 object-contain mb-4" src="{{ url('images/esdm.png') }}" />
                            </div>
                        </div>
                        <!-- Client 7 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="BAP" class="w-full h-24 object-contain mb-4" src="{{ url('images/BAP.png') }}" />
                            </div>
                        </div>
                        <!-- Client 8 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="PUPR" class="w-full h-24 object-contain mb-4" src="{{ url('images/pupr 2.png') }}" />
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="carousel-slide flex flex-wrap justify-center">
                        <!-- Client 9 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="BI" class="w-full h-24 object-contain mb-4" height="100" src="{{ url('images/BI.png') }}" width="200" />
                            </div>
                        </div>
                        <!-- Client 10 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="BNI" class="w-full h-24 object-contain mb-4" height="100" src="{{ url('images/BNI.png') }}" width="200" />
                            </div>
                        </div>
                        <!-- Client 11 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="KAI" class="w-full h-24 object-contain mb-4" height="100" src="{{ url('images/KAI.jpg') }}" width="200" />
                            </div>
                        </div>
                        <!-- Client 12 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="POS" class="w-full h-24 object-contain mb-4" height="100" src="{{ url('images/POS.png') }}" width="200" />
                            </div>
                        </div>
                        <!-- Client 13 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Bukit Asam" class="w-full h-24 object-contain mb-4" height="100" src="{{ url('images/bukit.png') }}" width="200" />
                            </div>
                        </div>
                        <!-- Client 14 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="RSKGM" class="w-full h-24 object-contain mb-4" height="100" src="{{ url('images/rskgm.png') }}" width="200" />
                            </div>
                        </div>
                        <!-- Client 15 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Kimia Farma" class="w-full h-24 object-contain mb-4" height="100" src="{{ url('images/KimiaFarma.png') }}" width="200" />
                            </div>
                        </div>
                        <!-- Client 16 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="DPKP" class="w-full h-24 object-contain mb-4" height="100" src="{{ url('images/dpkp 3.png') }}" width="200" />
                            </div>
                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div class="carousel-slide flex flex-wrap justify-center">
                        <!-- Client 17 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 17" class="w-full h-24 object-contain mb-4" height="100" src="{{ url('images/mclarens2.png') }}" width="200" />
                            </div>
                        </div>
                        <!-- Client 18 -->
                        <!-- <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 18" class="w-full h-24 object-contain mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/S20oaOWT8s2eaTGzdgQmcHZGK8Pq-rJZ39N6lGDbPns.jpg" width="200" />
                            </div>
                        </div> -->
                        <!-- Client 19 -->
                        <!-- <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 19" class="w-full h-24 object-contain mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/lg4LKe0I2G2i4tnO0TNoiiOOFPeMm8cGm-Rx6RIICVg.jpg" width="200" />
                            </div>
                        </div> -->
                        <!-- Client 20 -->
                        <!-- <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 20" class="w-full h-24 object-contain mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/Trr55l8kxtQh_CxjmdKKSKfbvtjaKxIUyA7k9R6TkZE.jpg" width="200" />
                            </div>
                        </div> -->
                        <!-- Client 21 -->
                        <!-- <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 21" class="w-full h-24 object-contain mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/o1HKmHV7sOv-DjDiJ1vseTQWAs9_TUr68TujvftgpDk.jpg" width="200" />
                            </div>
                        </div> -->
                        <!-- Client 22 -->
                        <!-- <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 22" class="w-full h-24 object-contain mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/4aFC0Z4SbYNOTcKproTPHUe6fBMnoFLowsU2Xe6eEVM.jpg" width="200" />
                            </div>
                        </div> -->
                        <!-- Client 23 -->
                        <!-- <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 23" class="w-full h-24 object-contain mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/f0TneKS1zb9hKsdu27_MMnXvtzcmePNZb6TnLxuiWls.jpg" width="200" />
                            </div>
                        </div> -->
                        <!-- Client 24 -->
                        <!-- <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 24" class="w-full h-24 object-contain mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/WeSuQ5WdirZgN4mu1COHfQh9KSnIDRqPUjzg3kSfFRQ.jpg" width="200" />
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="carousel-dots">
                    <button class="dot active" onclick="goToSlide(0)" aria-label="Slide 1"></button>
                    <button class="dot" onclick="goToSlide(1)" aria-label="Slide 2"></button>
                    <button class="dot" onclick="goToSlide(2)" aria-label="Slide 3"></button>
                </div>
            </div>
        </div>
    </section>


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
                            <a href="mailto:info@mandajaya.com" class="text-gray-400 hover:text-yellow-400 transition duration-300">
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
        // Mobile menu toggle
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

        // Carousel functionality
        let currentIndex = 0;
        const slides = document.querySelectorAll('.carousel-slide');
        const dots = document.querySelectorAll('.dot');
        const totalSlides = slides.length;
        let slideInterval;

        function updateDots() {
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === currentIndex);
            });
        }

        function showSlide(index) {
            // Handle circular navigation
            if (index >= totalSlides) {
                currentIndex = 0;
            } else if (index < 0) {
                currentIndex = totalSlides - 1;
            } else {
                currentIndex = index;
            }

            // Move carousel
            const track = document.querySelector('.carousel-track');
            track.style.transform = `translateX(-${currentIndex * 100}%)`;

            // Update dots
            updateDots();
        }

        function nextSlide() {
            showSlide(currentIndex + 1);
        }

        function prevSlide() {
            showSlide(currentIndex - 1);
        }

        function goToSlide(index) {
            showSlide(index);
            resetInterval();
        }

        function resetInterval() {
            clearInterval(slideInterval);
            slideInterval = setInterval(nextSlide, 5000);
        }

        // Initialize carousel
        function initCarousel() {
            // Add click events to arrows
            const prevButton = document.querySelector('.carousel-arrow.prev');
            const nextButton = document.querySelector('.carousel-arrow.next');

            if (prevButton && nextButton) {
                prevButton.addEventListener('click', () => {
                    prevSlide();
                    resetInterval();
                });

                nextButton.addEventListener('click', () => {
                    nextSlide();
                    resetInterval();
                });
            }

            // Add click events to dots
            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    goToSlide(index);
                });
            });

            // Start auto-advance
            resetInterval();

            // Pause on hover
            const carousel = document.querySelector('.carousel');
            carousel.addEventListener('mouseenter', () => {
                clearInterval(slideInterval);
            });

            carousel.addEventListener('mouseleave', () => {
                resetInterval();
            });

            // Initial state
            updateDots();
        }

        // Initialize when DOM is loaded
        document.addEventListener('DOMContentLoaded', initCarousel);

        // Optional: Add keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowLeft') {
                prevSlide();
                resetInterval();
            } else if (e.key === 'ArrowRight') {
                nextSlide();
                resetInterval();
            }
        });

        // Optional: Add touch support
        let touchStartX = 0;
        let touchEndX = 0;

        const carousel = document.querySelector('.carousel');

        carousel.addEventListener('touchstart', (e) => {
            touchStartX = e.changedTouches[0].screenX;
        }, false);

        carousel.addEventListener('touchend', (e) => {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        }, false);

        function handleSwipe() {
            const swipeThreshold = 50;
            const difference = touchStartX - touchEndX;

            if (Math.abs(difference) > swipeThreshold) {
                if (difference > 0) {
                    nextSlide();
                } else {
                    prevSlide();
                }
                resetInterval();
            }
        }
    </script>

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "Mandajaya Rekayasa Konstruksi",
            "url": "https://mandajayarekayasakonstruksi.com",
            "logo": "{{ url('images/logo fix2.png') }}"
        }
    </script>
</body>

</html>