<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        Our Team - Mandajaya Rekayasa Konstruksi
    </title>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/alpinejs" defer></script>
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

        .team-card {
            backface-visibility: hidden;
            transform: translateZ(0);
            -webkit-font-smoothing: subpixel-antialiased;
        }

        .team-card:hover {
            transform: translateY(-10px);
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        .animate-float {
            animation: float 3s ease-in-out infinite;
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

        .card {
            perspective: 1000px;
        }

        .card:hover .social-links {
            opacity: 1;
            transform: translateY(0);
        }

        .social-links {
            opacity: 0;
            transform: translateY(10px);
            transition: all 0.3s ease;
        }

        .card img {
            backface-visibility: hidden;
        }

        .card:hover img {
            filter: brightness(0.9);
        }

        .card {
            cursor: pointer;
            /* Make cards clickable */
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
                <li><a class="nav-link text-gray-300 hover:text-yellow-400 transition duration-300" href="/">Home</a></li>
                <li><a class="nav-link text-gray-300 hover:text-yellow-400 transition duration-300" href="service">Services</a></li>
                <li><a class="nav-link text-gray-300 hover:text-yellow-400 transition duration-300" href="project">Projects</a></li>
                <li><a class="nav-link text-gray-300 hover:text-yellow-400 transition duration-300" href="team">Our Team</a></li>
                <li><a class="nav-link text-gray-300 hover:text-yellow-400 transition duration-300" href="client">Clients</a></li>
                <li><a class="nav-link text-gray-300 hover:text-yellow-400 transition duration-300" href="contact">Contact Us</a></li>
                <li><a class="nav-link text-gray-300 hover:text-yellow-400 transition duration-300" href="news">News</a></li>
                <!-- <li>
                    <a href="https://drive.google.com/file/d/1_OuB8-CuDZPOWyo8zdetd3FRSMIm29gJ/view?usp=sharing"
                        target="_blank"
                        class="bg-blue-500 text-white px-6 py-2 rounded-full hover:bg-blue-600 transition duration-300 flex items-center space-x-2">
                        <span>Company Profile</span>
                        <i class="fas fa-external-link-alt text-sm"></i>
                    </a>
                </li> -->
            </ul>
            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button id="menu-toggle" class="text-gray-300 focus:outline-none text-2xl">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="md:hidden">
            <div class="flex flex-col h-full">
                <ul class="flex flex-col space-y-4 mt-16">
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


    <section class="py-12 bg-gray-100 fade-in mt-24">
        <div class="container mx-auto text-center px-4">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold mb-4">Our Team</h2>
                <div class="w-24 h-1 bg-blue-500 mx-auto mb-6"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Meet the dedicated professionals behind our success
                </p>
            </div>

            <!-- Founders Section -->
            <div class="mb-16">
                <h3 class="text-2xl font-bold mb-8">Founders</h3>
                <div class="flex flex-wrap justify-center -mx-4">
                    <!-- Card 1 -->
                    <div class="w-full md:w-1/3 p-4 card">
                        <div onclick="openModal('modal1')" class="bg-white p-6 rounded-lg shadow-lg group hover:shadow-xl transition-all duration-300 cursor-pointer">
                            <div class="relative overflow-hidden rounded-lg mb-4">
                                <img
                                    alt="Portrait of Lukman Subangi"
                                    class="w-[450px] h-[420px] object-cover transform group-hover:scale-105 transition duration-500"
                                    src="{{ url('images/F11.jpg') }}" />
                            </div>
                            <div class="text-center">
                                <h3 class="text-xl font-bold mb-2 text-gray-800 group-hover:text-blue-500 transition-colors duration-300">
                                    Dr (c)., Ir., Lukman Subangi, S.Pd., M.T., IPM., Asean Eng
                                </h3>
                                <p class="text-blue-500 font-semibold mb-3">
                                    Commissioner
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="w-full md:w-1/3 p-4 card">
                        <div onclick="openModal('modal2')" class="bg-white p-6 rounded-lg shadow-lg group hover:shadow-xl transition-all duration-300 cursor-pointer">
                            <div class="relative overflow-hidden rounded-lg mb-4">
                                <img
                                    alt="Portrait of M. Sarwono Purwa Jayadi"
                                    class="w-[450px] h-[420px] object-cover transform group-hover:scale-105 transition duration-500"
                                    src="{{ url('images/F13.jpg') }}" />
                            </div>
                            <div class="text-center">
                                <h3 class="text-xl font-bold mb-2 text-gray-800 group-hover:text-blue-500 transition-colors duration-300">
                                    M. Sarwono Purwa Jayadi, S.T., M.T.
                                </h3>
                                <p class="text-blue-500 font-semibold mb-3">
                                    Director
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="w-full md:w-1/3 p-4 card">
                        <div onclick="openModal('modal3')" class="bg-white p-6 rounded-lg shadow-lg group hover:shadow-xl transition-all duration-300 cursor-pointer">
                            <div class="relative overflow-hidden rounded-lg mb-4">
                                <img
                                    alt="Portrait of Felix H."
                                    class="w-[450px] h-[420px] object-cover transform group-hover:scale-105 transition duration-500"
                                    src="{{ url('images/F12.jpg') }}" />
                            </div>
                            <div class="text-center">
                                <h3 class="text-xl font-bold mb-2 text-gray-800 group-hover:text-blue-500 transition-colors duration-300">
                                    Dr., Ir., Felix H., S.T., M.T., IPU., Asean Eng.
                                </h3>
                                <p class="text-blue-500 font-semibold mb-3">
                                    Deputy Director
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal 1 -->
            <div id="modal1" class="fixed inset-0 z-50 hidden flex items-center justify-center bg-black/60 p-4 opacity-0 scale-95 transition-transform transition-opacity duration-300" onclick="closeModal(event, 'modal1')">
                <div class="relative bg-white rounded-[30px] overflow-hidden shadow-xl max-w-[90%] md:max-w-2xl w-full transform transition-transform duration-300" onclick="event.stopPropagation()">
                    <button onclick="closeModal(event, 'modal1')" class="absolute top-4 right-4 text-gray-200 text-3xl hover:text-gray-400 z-10">
                        &times;
                    </button>
                    <div class="relative">
                        <img src="{{ url('images/F11.jpg') }}" alt="Lukman Subangi" class="w-full h-[600px] object-contain">
                        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/80 rounded-[30px]"></div>
                        <div class="absolute bottom-0 left-0 w-full flex flex-col items-center justify-end text-center p-8 text-white">
                            <h3 class="text-2xl font-bold">Dr (c)., Ir., Lukman Subangi, S.Pd., M.T., IPM., Asean Eng</h3>
                            <p class="text-blue-200 font-semibold">Commissioner</p>
                            <p class="text-gray-300 text-sm mt-4">
                                Lukman Subangi memiliki pengalaman lebih dari 20 tahun di bidang teknik dan manajemen.
                                Beliau dikenal sebagai pemimpin visioner yang berfokus pada inovasi teknologi.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal 2 -->
            <div id="modal2" class="fixed inset-0 z-50 hidden flex items-center justify-center bg-black/60 p-4 opacity-0 scale-95 transition-transform transition-opacity duration-300" onclick="closeModal(event, 'modal2')">
                <div class="relative bg-white rounded-[30px] overflow-hidden shadow-xl max-w-[90%] md:max-w-2xl w-full transform transition-transform duration-300" onclick="event.stopPropagation()">
                    <button onclick="closeModal(event, 'modal2')" class="absolute top-4 right-4 text-gray-200 text-3xl hover:text-gray-400 z-10">
                        &times;
                    </button>
                    <div class="relative">
                        <img src="{{ url('images/F13.jpg') }}" alt="M. Sarwono Purwa Jayadi" class="w-full h-[600px] object-contain">
                        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/80 rounded-[30px]"></div>
                        <div class="absolute bottom-0 left-0 w-full flex flex-col items-center justify-end text-center p-8 text-white">
                            <h3 class="text-2xl font-bold">M. Sarwono Purwa Jayadi, S.T., M.T.</h3>
                            <p class="text-blue-200 font-semibold">Director</p>
                            <p class="text-gray-300 text-sm mt-4">
                                M. Sarwono Purwa Jayadi memiliki keahlian dalam pengembangan proyek infrastruktur.
                                Dedikasinya pada efisiensi operasional telah membawa perusahaan ke level berikutnya.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal 3 -->
            <div id="modal3" class="fixed inset-0 z-50 hidden flex items-center justify-center bg-black/60 p-4 opacity-0 scale-95 transition-transform transition-opacity duration-300" onclick="closeModal(event, 'modal3')">
                <div class="relative bg-white rounded-[30px] overflow-hidden shadow-xl max-w-[90%] md:max-w-2xl w-full transform transition-transform duration-300" onclick="event.stopPropagation()">
                    <button onclick="closeModal(event, 'modal3')" class="absolute top-4 right-4 text-gray-200 text-3xl hover:text-gray-400 z-10">
                        &times;
                    </button>
                    <div class="relative">
                        <img src="{{ url('images/F12.jpg') }}" alt="Felix H." class="w-full h-[600px] object-contain">
                        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/80 rounded-[30px]"></div>
                        <div class="absolute bottom-0 left-0 w-full flex flex-col items-center justify-end text-center p-8 text-white">
                            <h3 class="text-2xl font-bold">Dr., Ir., Felix H., S.T., M.T., IPU., Asean Eng.</h3>
                            <p class="text-blue-200 font-semibold">Deputy Director</p>
                            <p class="text-gray-300 text-sm mt-4">
                                Felix H. memiliki latar belakang akademis yang kuat dan kepakaran di bidang teknik sipil.
                                Beliau aktif dalam riset dan pengembangan inovasi struktural.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Expert Section -->
            <div class="mb-16">
                <h3 class="text-2xl font-bold mb-8 text-center">Experts</h3>

                <!-- Founders Section -->
                <div class="mb-16">
                    <h3 class="text-2xl font-bold mb-8">Founders</h3>
                    <div class="flex flex-wrap justify-center -mx-4">
                        <!-- Card 4 -->
                        <div class="w-full md:w-1/3 p-4 card">
                            <div onclick="openModal('modal4')" class="bg-white p-6 rounded-lg shadow-lg group hover:shadow-xl transition-all duration-300 cursor-pointer">
                                <div class="relative overflow-hidden rounded-lg mb-4">
                                    <img alt="Portrait of Founder 4" class="w-[450px] h-[420px] object-cover transform group-hover:scale-105 transition duration-500" src="{{ url('images/E15.jpg') }}" />
                                </div>
                                <div class="text-center">
                                    <h3 class="text-xl font-bold mb-2 text-gray-800 group-hover:text-blue-500 transition-colors duration-300">
                                        Ryan Gilang Wicaksono, S.T.
                                    </h3>
                                    <p class="text-blue-500 font-semibold mb-3">
                                        Chief Engineer
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 5 -->
                        <div class="w-full md:w-1/3 p-4 card">
                            <div onclick="openModal('modal5')" class="bg-white p-6 rounded-lg shadow-lg group hover:shadow-xl transition-all duration-300 cursor-pointer">
                                <div class="relative overflow-hidden rounded-lg mb-4">
                                    <img alt="Portrait of Founder 5" class="w-[450px] h-[420px] object-cover transform group-hover:scale-105 transition duration-500" src="{{ url('images/E12.jpg') }}" />
                                </div>
                                <div class="text-center">
                                    <h3 class="text-xl font-bold mb-2 text-gray-800 group-hover:text-blue-500 transition-colors duration-300">
                                        Krisma Jumeindri, A.Md.T
                                    </h3>
                                    <p class="text-blue-500 font-semibold mb-3">
                                        Head Finance/GA
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 6 -->
                        <div class="w-full md:w-1/3 p-4 card">
                            <div onclick="openModal('modal6')" class="bg-white p-6 rounded-lg shadow-lg group hover:shadow-xl transition-all duration-300 cursor-pointer">
                                <div class="relative overflow-hidden rounded-lg mb-4">
                                    <img alt="Portrait of Founder 6" class="w-[450px] h-[420px] object-cover transform group-hover:scale-105 transition duration-500" src="{{ url('images/E14.jpg') }}" />
                                </div>
                                <div class="text-center">
                                    <h3 class="text-xl font-bold mb-2 text-gray-800 group-hover:text-blue-500 transition-colors duration-300">
                                        Rahadya Darajat, S.S.
                                    </h3>
                                    <p class="text-blue-500 font-semibold mb-3">
                                        Digital Engineer
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 7 -->
                        <div class="w-full md:w-1/3 p-4 card">
                            <div onclick="openModal('modal7')" class="bg-white p-6 rounded-lg shadow-lg group hover:shadow-xl transition-all duration-300 cursor-pointer">
                                <div class="relative overflow-hidden rounded-lg mb-4">
                                    <img alt="Portrait of Founder 7" class="w-[450px] h-[420px] object-cover transform group-hover:scale-105 transition duration-500" src="{{ url('images/E13.jpg') }}" />
                                </div>
                                <div class="text-center">
                                    <h3 class="text-xl font-bold mb-2 text-gray-800 group-hover:text-blue-500 transition-colors duration-300">
                                        M. Zidan Pahlevi, S.Tr.T.
                                    </h3>
                                    <p class="text-blue-500 font-semibold mb-3">
                                        Support Engineer
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 8 -->
                        <div class="w-full md:w-1/3 p-4 card">
                            <div onclick="openModal('modal8')" class="bg-white p-6 rounded-lg shadow-lg group hover:shadow-xl transition-all duration-300 cursor-pointer">
                                <div class="relative overflow-hidden rounded-lg mb-4">
                                    <img alt="Portrait of Founder 8" class="w-[450px] h-[420px] object-cover transform group-hover:scale-105 transition duration-500" src="{{ url('images/E11.jpg') }}" />
                                </div>
                                <div class="text-center">
                                    <h3 class="text-xl font-bold mb-2 text-gray-800 group-hover:text-blue-500 transition-colors duration-300">
                                        Abdul Aziz Mundzir, S.Tr.T.
                                    </h3>
                                    <p class="text-blue-500 font-semibold mb-3">
                                        Support Engineer
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 9 -->
                        <div class="w-full md:w-1/3 p-4 card">
                            <div onclick="openModal('modal9')" class="bg-white p-6 rounded-lg shadow-lg group hover:shadow-xl transition-all duration-300 cursor-pointer">
                                <div class="relative overflow-hidden rounded-lg mb-4">
                                    <img alt="Portrait of Founder 9" class="w-[450px] h-[420px] object-cover transform group-hover:scale-105 transition duration-500" src="{{ url('images/E16.jpg') }}" />
                                </div>
                                <div class="text-center">
                                    <h3 class="text-xl font-bold mb-2 text-gray-800 group-hover:text-blue-500 transition-colors duration-300">
                                        Yana Suryana
                                    </h3>
                                    <p class="text-blue-500 font-semibold mb-3">
                                        Building Management
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<!-- modal 4 -->
                <div id="modal4" class="fixed inset-0 z-50 hidden flex items-center justify-center bg-black/60 p-4 opacity-0 scale-95 transition-transform transition-opacity duration-300" onclick="closeModal(event, 'modal4')">
                    <div class="relative bg-white rounded-[30px] overflow-hidden shadow-xl max-w-[90%] md:max-w-2xl w-full transform transition-transform duration-300" onclick="event.stopPropagation()">
                        <button onclick="closeModal(event, 'modal4')" class="absolute top-4 right-4 text-gray-200 text-3xl hover:text-gray-400 z-10">&times;</button>
                        <div class="relative">
                            <img src="{{ url('images/E15.jpg') }}" alt="Ryan Gilang Wicaksono, S.T." class="w-full h-[600px] object-contain">
                            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/80 rounded-[30px]"></div>
                            <div class="absolute bottom-0 left-0 w-full flex flex-col items-center justify-end text-center p-8 text-white">
                                <h3 class="text-2xl font-bold">Ryan Gilang Wicaksono, S.T.</h3>
                                <p class="text-blue-200 font-semibold">Chief Engineer</p>
                                <p class="text-gray-300 text-sm mt-4">Deskripsi tentang Ryan Gilang Wicaksono.</p>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Modal 5 -->
                <div id="modal5" class="fixed inset-0 z-50 hidden flex items-center justify-center bg-black/60 p-4 opacity-0 scale-95 transition-transform transition-opacity duration-300" onclick="closeModal(event, 'modal5')">
                    <div class="relative bg-white rounded-[30px] overflow-hidden shadow-xl max-w-[90%] md:max-w-2xl w-full transform transition-transform duration-300" onclick="event.stopPropagation()">
                        <button onclick="closeModal(event, 'modal5')" class="absolute top-4 right-4 text-gray-200 text-3xl hover:text-gray-400 z-10">
                            &times;
                        </button>
                        <div class="relative">
                            <img src="{{ url('images/E12.jpg') }}" alt="Krisma Jumeindri, A.Md.T" class="w-full h-[600px] object-contain">
                            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/80 rounded-[30px]"></div>
                            <div class="absolute bottom-0 left-0 w-full flex flex-col items-center justify-end text-center p-8 text-white">
                                <h3 class="text-2xl font-bold">Krisma Jumeindri, A.Md.T</h3>
                                <p class="text-blue-200 font-semibold">Head Finance/GA</p>
                                <p class="text-gray-300 text-sm mt-4">
                                    M. Sarwono Purwa Jayadi memiliki keahlian dalam pengembangan proyek infrastruktur.
                                    Dedikasinya pada efisiensi operasional telah membawa perusahaan ke level berikutnya.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal 6 -->
                <div id="modal6" class="fixed inset-0 z-50 hidden flex items-center justify-center bg-black/60 p-4 opacity-0 scale-95 transition-transform transition-opacity duration-300" onclick="closeModal(event, 'modal6')">
                    <div class="relative bg-white rounded-[30px] overflow-hidden shadow-xl max-w-[90%] md:max-w-2xl w-full transform transition-transform duration-300" onclick="event.stopPropagation()">
                        <button onclick="closeModal(event, 'modal6')" class="absolute top-4 right-4 text-gray-200 text-3xl hover:text-gray-400 z-10">
                            &times;
                        </button>
                        <div class="relative">
                            <img src="{{ url('images/E14.jpg') }}" alt="Rahadya Darajat, S.S." class="w-full h-[600px] object-contain">
                            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/80 rounded-[30px]"></div>
                            <div class="absolute bottom-0 left-0 w-full flex flex-col items-center justify-end text-center p-8 text-white">
                                <h3 class="text-2xl font-bold">Rahadya Darajat, S.S.</h3>
                                <p class="text-blue-200 font-semibold">Digital Engineer</p>
                                <p class="text-gray-300 text-sm mt-4">
                                    Felix H. memiliki latar belakang akademis yang kuat dan kepakaran di bidang teknik sipil.
                                    Beliau aktif dalam riset dan pengembangan inovasi struktural.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- modal 7 -->
                <div id="modal7" class="fixed inset-0 z-50 hidden flex items-center justify-center bg-black/60 p-4 opacity-0 scale-95 transition-transform transition-opacity duration-300" onclick="closeModal(event, 'modal7')">
                    <div class="relative bg-white rounded-[30px] overflow-hidden shadow-xl max-w-[90%] md:max-w-2xl w-full transform transition-transform duration-300" onclick="event.stopPropagation()">
                        <button onclick="closeModal(event, 'modal7')" class="absolute top-4 right-4 text-gray-200 text-3xl hover:text-gray-400 z-10">&times;</button>
                        <div class="relative">
                            <img src="{{ url('images/E13.jpg') }}" alt="Ryan Gilang Wicaksono, S.T." class="w-full h-[600px] object-contain">
                            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/80 rounded-[30px]"></div>
                            <div class="absolute bottom-0 left-0 w-full flex flex-col items-center justify-end text-center p-8 text-white">
                                <h3 class="text-2xl font-bold">M. Zidan Pahlevi, S.Tr.T.</h3>
                                <p class="text-blue-200 font-semibold">Support Engineer</p>
                                <p class="text-gray-300 text-sm mt-4">Deskripsi tentang Ryan Gilang Wicaksono.</p>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Modal 8 -->
                <div id="modal8" class="fixed inset-0 z-50 hidden flex items-center justify-center bg-black/60 p-4 opacity-0 scale-95 transition-transform transition-opacity duration-300" onclick="closeModal(event, 'modal8')">
                    <div class="relative bg-white rounded-[30px] overflow-hidden shadow-xl max-w-[90%] md:max-w-2xl w-full transform transition-transform duration-300" onclick="event.stopPropagation()">
                        <button onclick="closeModal(event, 'modal8')" class="absolute top-4 right-4 text-gray-200 text-3xl hover:text-gray-400 z-10">
                            &times;
                        </button>
                        <div class="relative">
                            <img src="{{ url('images/E11.jpg') }}" alt="Krisma Jumeindri, A.Md.T" class="w-full h-[600px] object-contain">
                            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/80 rounded-[30px]"></div>
                            <div class="absolute bottom-0 left-0 w-full flex flex-col items-center justify-end text-center p-8 text-white">
                                <h3 class="text-2xl font-bold">Abdul Aziz Mundzir, S.Tr.T.</h3>
                                <p class="text-blue-200 font-semibold">Support Engineer</p>
                                <p class="text-gray-300 text-sm mt-4">
                                    M. Sarwono Purwa Jayadi memiliki keahlian dalam pengembangan proyek infrastruktur.
                                    Dedikasinya pada efisiensi operasional telah membawa perusahaan ke level berikutnya.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal  -->
                <div id="modal9" class="fixed inset-0 z-50 hidden flex items-center justify-center bg-black/60 p-4 opacity-0 scale-95 transition-transform transition-opacity duration-300" onclick="closeModal(event, 'modal9')">
                    <div class="relative bg-white rounded-[30px] overflow-hidden shadow-xl max-w-[90%] md:max-w-2xl w-full transform transition-transform duration-300" onclick="event.stopPropagation()">
                        <button onclick="closeModal(event, 'modal9')" class="absolute top-4 right-4 text-gray-200 text-3xl hover:text-gray-400 z-10">
                            &times;
                        </button>
                        <div class="relative">
                            <img src="{{ url('images/E16.jpg') }}" alt="Rahadya Darajat, S.S." class="w-full h-[600px] object-contain">
                            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/80 rounded-[30px]"></div>
                            <div class="absolute bottom-0 left-0 w-full flex flex-col items-center justify-end text-center p-8 text-white">
                                <h3 class="text-2xl font-bold">Yana Suryana</h3>
                                <p class="text-blue-200 font-semibold">Building Management</p>
                                <p class="text-gray-300 text-sm mt-4">
                                    Felix H. memiliki latar belakang akademis yang kuat dan kepakaran di bidang teknik sipil.
                                    Beliau aktif dalam riset dan pengembangan inovasi struktural.
                                </p>
                            </div>
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

        function showOverlay(title, subtitle, imageUrl, description) {
            document.getElementById('overlay-title').innerText = title;
            document.getElementById('overlay-subtitle').innerText = subtitle;
            document.getElementById('overlay-image').src = imageUrl;
            document.getElementById('overlay-description').innerText = description;
            document.getElementById('overlay-card').classList.remove('hidden');
        }

        function hideOverlay() {
            document.getElementById('overlay-card').classList.add('hidden');
        }

        document.addEventListener('DOMContentLoaded', () => {
            // Get all cards
            const cards = document.querySelectorAll('.card');
            const modal = document.getElementById('modal');
            const modalTitle = document.getElementById('modal-title');
            const modalDescription = document.getElementById('modal-description');
            const closeModal = document.getElementById('closeModal');

            // Sample data for demonstration
            const modalData = {
                1: {
                    title: "Katlya Anggraini Siswosoebrotho",
                    description: "Warga negara Indonesia. Berlatarkan pendidikan dokter gigi dari Fakultas Kedokteran Gigi (FKG) - Universitas Gadjah Mada dan spesialis orthodontist dari Fakultas Kedokteran Gigi (FKG) - Universitas Gadjah Mada. Saat ini, yang bersangkutan menjabat sebagai komisaris di Varian."
                }
            };

            // Add click event to each card
            cards.forEach(card => {
                card.addEventListener('click', () => {
                    const id = card.getAttribute('data-id');
                    const data = modalData[id];
                    if (data) {
                        modalTitle.textContent = data.title;
                        modalDescription.textContent = data.description;
                        modal.classList.remove('hidden');
                        modal.classList.add('flex');
                    }
                });
            });

            // Close modal
            closeModal.addEventListener('click', () => {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            });

            // Close modal when clicking outside the content
            window.addEventListener('click', (event) => {
                if (event.target === modal) {
                    modal.classList.add('hidden');
                    modal.classList.remove('flex');
                }
            });
        });

        function openModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.classList.remove('hidden', 'opacity-0', 'scale-95');
            modal.classList.add('opacity-100', 'scale-100');
        }

        function closeModal(event, modalId) {
            const modal = document.getElementById(modalId);
            if (event.target === modal || event.target.classList.contains('absolute')) {
                modal.classList.add('opacity-0', 'scale-95');
                setTimeout(() => {
                    modal.classList.add('hidden');
                }, 300); // Durasi harus sama dengan duration-300
            }
        }

        function toggleModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.classList.toggle('hidden');
        }
    </script>
</body>

</html>