<?php

use Illuminate\Support\Facades\Storage;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
    <title>
        Mandajaya Rekayasa Konstruksi
    </title>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet" />
    <style>
        /* Animations */
        .fade-in {
            animation: fadeIn 2s ease-in-out;
        }

        .slide-in {
            animation: slideIn 0.5s ease-out;
        }

        .fade-up {
            animation: fadeUp 0.5s ease-out;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @keyframes slideIn {
            from {
                transform: translateX(-100%);
                opacity: 0;
            }

            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes fadeUp {
            from {
                transform: translateY(20px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        /* Carousel Styles */
        .carousel {
            position: relative;
            overflow: hidden;
        }

        .carousel-inner {
            display: flex;
            transition: transform 1s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .carousel-item {
            flex: 0 0 100%;
            opacity: 0.8;
            transition: opacity 1s ease;
        }

        .carousel-item.active {
            opacity: 1;
        }

        /* Add this for smooth infinite loop */
        .carousel-inner.no-transition {
            transition: none;
        }

        /* Interactive Elements */
        .card {
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .service-icon {
            transition: transform 0.3s ease-in-out, color 0.3s ease-in-out;
        }

        .service-icon:hover {
            transform: scale(1.1);
            color: #f59e0b;
        }

        /* Navigation Dots */
        .carousel-dots {
            position: absolute;
            bottom: 20px;
            left: 0;
            right: 0;
            display: flex;
            justify-content: center;
            gap: 8px;
            z-index: 10;
        }

        .dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            transition: background-color 0.3s ease;
            border: none;
            padding: 0;
        }

        .dot.active {
            background: white;
            transform: scale(1.2);
        }

        .dot:hover {
            background: rgba(255, 255, 255, 0.8);
        }

        .loading {
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .loaded {
            opacity: 1;
        }

        .carousel .carousel-dots .client-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(0, 0, 0, 0.3);
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
            padding: 0;
        }

        .carousel .carousel-dots .client-dot.active {
            background: rgba(0, 0, 0, 0.8);
            transform: scale(1.2);
        }

        .carousel .carousel-dots .client-dot:hover {
            background: rgba(0, 0, 0, 0.6);
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

        @keyframes fade-in-up {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fade-in-up 0.5s ease-out forwards;
        }

        .delay-200 {
            animation-delay: 0.2s;
        }

        .delay-300 {
            animation-delay: 0.3s;
        }

        .carousel-track {
            display: flex;
            transition: transform 0.5s ease-in-out;
            width: 100%;
        }

        .carousel-slide {
            flex: 0 0 100%;
            width: 100%;
        }

        .client-box {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.3s ease;
        }

        .client-box:hover {
            transform: scale(1.05);
        }
    </style>
</head>

<body class="font-roboto">
    <!-- Navbar -->
    <nav class="navbar p-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <img alt="Company logo" class="h-12 w-12 company-logo" src="{{ asset('storage/Logo FI.png') }}" />
                <a class="text-white text-2xl font-bold tracking-wide hover:text-blue-400 transition duration-300 group" href="/">
                    <span class="text-white group-hover:text-yellow-500 transition duration-300">Mandajaya Rekayasa Konstruksi</span>
                </a>
            </div>

            <!-- Desktop Menu -->
            <ul class="hidden md:flex space-x-8 items-center">
                <li><a class="nav-link text-gray-300 hover:text-blue-400 transition duration-300" href="/">Home</a></li>
                <li><a class="nav-link text-gray-300 hover:text-blue-400 transition duration-300" href="service">Services</a></li>
                <li><a class="nav-link text-gray-300 hover:text-blue-400 transition duration-300" href="project">Projects</a></li>
                <li><a class="nav-link text-gray-300 hover:text-blue-400 transition duration-300" href="team">Our Team</a></li>
                <li><a class="nav-link text-gray-300 hover:text-blue-400 transition duration-300" href="client">Clients</a></li>
                <li><a class="nav-link text-gray-300 hover:text-blue-400 transition duration-300" href="contact">Contact Us</a></li>
                <!-- <li>
                    <a href="https://drive.google.com/file/d/1_OuB8-CuDZPOWyo8zdetd3FRSMIm29gJ/view?usp=sharing"
                        target="_blank"
                        class="bg-blue-500 text-white px-6 py-2 rounded-full hover:bg-blue-600 transition duration-300 flex items-center space-x-2">
                        <span>Company Profile</span>
                        <i class="fas fa-external-link-alt text-sm"></i>
                    </a>
                </li> -->
            </ul>
            <!-- mobile -->
            <div class="md:hidden">
                <button id="menu-toggle" class="text-gray-300 hover:text-white focus:outline-none p-2">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden absolute top-full left-0 right-0 bg-gray-900 shadow-lg z-50">
                <div class="container mx-auto px-4 py-2">
                    <ul class="flex flex-col space-y-3">
                        <li><a class="block text-gray-300 hover:text-blue-400 transition duration-300 py-2" href="/">Home</a></li>
                        <li><a class="block text-gray-300 hover:text-blue-400 transition duration-300 py-2" href="service">Services</a></li>
                        <li><a class="block text-gray-300 hover:text-blue-400 transition duration-300 py-2" href="project">Projects</a></li>
                        <li><a class="block text-gray-300 hover:text-blue-400 transition duration-300 py-2" href="team">Our Team</a></li>
                        <li><a class="block text-gray-300 hover:text-blue-400 transition duration-300 py-2" href="client">Clients</a></li>
                        <li><a class="block text-gray-300 hover:text-blue-400 transition duration-300 py-2" href="contact">Contact Us</a></li>
                        <!-- <li class="py-2">
                            <a href="https://drive.google.com/file/d/1_OuB8-CuDZPOWyo8zdetd3FRSMIm29gJ/view?usp=sharing"
                                target="_blank"
                                class="block w-full text-center bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-600 transition duration-300">
                                Company Profile
                            </a>
                        </li> -->
                    </ul>
                </div>
            </div>
    </nav>

    <!-- Hero Section with Carousel -->
    <section class="relative fade-in carousel min-h-screen">
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item relative">
                <img alt="A construction site with cranes and building materials"
                    class="w-full h-screen object-cover"
                    src="https://storage.googleapis.com/a1aa/image/2w6BKAWJxzyfcjYrrDjt1RYrVFjsM30VudM8t55dJos.jpg" />
                <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/50 to-transparent">
                    <div class="container mx-auto px-4 h-full flex items-center">
                        <div class="max-w-3xl text-white space-y-6">
                            <h1 class="text-5xl md:text-7xl font-bold leading-tight animate-fade-in-up">
                                Building Excellence, <br />
                                <span class="text-blue-400">Shaping Tomorrow</span>
                            </h1>
                            <p class="text-xl md:text-2xl text-gray-300 animate-fade-in-up delay-200">
                                Expert construction consulting services for sustainable and innovative solutions
                            </p>
                            <div class="flex flex-wrap gap-4 animate-fade-in-up delay-300">
                                <a href="service"
                                    class="px-8 py-3 bg-blue-500 text-white rounded-full hover:bg-blue-600 transition duration-300 flex items-center space-x-2">
                                    <span>Our Services</span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                                <a href="contact"
                                    class="px-8 py-3 border-2 border-white text-white rounded-full hover:bg-white hover:text-gray-900 transition duration-300">
                                    Contact Us
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item relative">
                <img alt="A team of construction consultants in a meeting"
                    class="w-full h-screen object-cover"
                    src="https://storage.googleapis.com/a1aa/image/VkfnTaHx8Ms9h7goIZNN_bZAvjX4IVvynWI1esfv6pw.jpg" />
                <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/50 to-transparent">
                    <div class="container mx-auto px-4 h-full flex items-center">
                        <div class="max-w-3xl text-white space-y-6">
                            <h1 class="text-5xl md:text-7xl font-bold leading-tight animate-fade-in-up">
                                Expertise That <br />
                                <span class="text-blue-400">Delivers Results</span>
                            </h1>
                            <p class="text-xl md:text-2xl text-gray-300 animate-fade-in-up delay-200">
                                Professional team dedicated to your project's success
                            </p>
                            <div class="flex flex-wrap gap-4 animate-fade-in-up delay-300">
                                <a href="project"
                                    class="px-8 py-3 bg-blue-500 text-white rounded-full hover:bg-blue-600 transition duration-300 flex items-center space-x-2">
                                    <span>View Projects</span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                                <a href="team"
                                    class="px-8 py-3 border-2 border-white text-white rounded-full hover:bg-white hover:text-gray-900 transition duration-300">
                                    Meet Our Team
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item relative">
                <img alt="A construction site with workers and machinery"
                    class="w-full h-screen object-cover"
                    src="https://storage.googleapis.com/a1aa/image/XhHRNsT_PydtlbeP8FLp-aT0ykQ01SRkYd700FJXAbo.jpg" />
                <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/50 to-transparent">
                    <div class="container mx-auto px-4 h-full flex items-center">
                        <div class="max-w-3xl text-white space-y-6">
                            <h1 class="text-5xl md:text-7xl font-bold leading-tight animate-fade-in-up">
                                Innovation in <br />
                                <span class="text-blue-400">Construction</span>
                            </h1>
                            <p class="text-xl md:text-2xl text-gray-300 animate-fade-in-up delay-200">
                                Leading the way with cutting-edge solutions
                            </p>
                            <div class="flex flex-wrap gap-4 animate-fade-in-up delay-300">
                                <a href="client"
                                    class="px-8 py-3 bg-blue-500 text-white rounded-full hover:bg-blue-600 transition duration-300 flex items-center space-x-2">
                                    <span>Our Clients</span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                                <!-- <a href="https://drive.google.com/file/d/1_OuB8-CuDZPOWyo8zdetd3FRSMIm29gJ/view?usp=sharing"
                                    target="_blank"
                                    class="px-8 py-3 border-2 border-white text-white rounded-full hover:bg-white hover:text-gray-900 transition duration-300 flex items-center space-x-2">
                                    <span>Company Profile</span>
                                    <i class="fas fa-external-link-alt"></i>
                                </a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hero Navigation -->
        <div class="absolute bottom-8 left-0 right-0 z-10">
            <div class="container mx-auto px-4">
                <!-- Centered Dots -->
                <div class="flex justify-center">
                    <div class="flex space-x-3">
                        <button class="dot hero-dot active" onclick="showHeroSlide(0)" aria-label="Slide 1"></button>
                        <button class="dot hero-dot" onclick="showHeroSlide(1)" aria-label="Slide 2"></button>
                        <button class="dot hero-dot" onclick="showHeroSlide(2)" aria-label="Slide 3"></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hero Section with Carousel -->
    <!-- <section class="relative fade-in carousel">
        <div class="carousel-inner">
            <div class="carousel-item">
                <img alt="A construction site with cranes and building materials" class="w-full h-screen object-cover"
                    src="https://storage.googleapis.com/a1aa/image/2w6BKAWJxzyfcjYrrDjt1RYrVFjsM30VudM8t55dJos.jpg" />
            </div>
            <div class="carousel-item">
                <img alt="A team of construction consultants in a meeting" class="w-full h-screen object-cover"
                    src="https://storage.googleapis.com/a1aa/image/VkfnTaHx8Ms9h7goIZNN_bZAvjX4IVvynWI1esfv6pw.jpg" />
            </div>
            <div class="carousel-item">
                <img alt="A construction site with workers and machinery" class="w-full h-screen object-cover"
                    src="https://storage.googleapis.com/a1aa/image/XhHRNsT_PydtlbeP8FLp-aT0ykQ01SRkYd700FJXAbo.jpg" />
            </div>
        </div>
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <div class="text-center text-white px-4">
                <h1 class="text-4xl md:text-6xl font-bold mb-4">Building the Future, Restoring the Past</h1>
                <p class="text-lg md:text-2xl mb-6">Expert construction consulting services for your projects</p>
            </div>
        </div> -->
    <!-- Add Hero Carousel Navigation -->
    <!-- <div class="carousel-dots">
            <button class="dot active" onclick="showHeroSlide(0)" aria-label="Slide 1"></button>
            <button class="dot" onclick="showHeroSlide(1)" aria-label="Slide 2"></button>
            <button class="dot" onclick="showHeroSlide(2)" aria-label="Slide 3"></button>
        </div>
        <button class="carousel-arrow prev" onclick="prevHeroSlide()" aria-label="Previous slide">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button class="carousel-arrow next" onclick="nextHeroSlide()" aria-label="Next slide">
            <i class="fas fa-chevron-right"></i>
        </button>
    </section> -->

    <!-- About Section -->
    <section class="py-16 bg-gray-100 fade-in">
        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold mb-4">About Us</h2>
                <div class="w-24 h-1 bg-blue-500 mx-auto mb-6"></div>
                <p class="text-gray-600 max-w-3xl mx-auto">
                    Building excellence through innovation and expertise since 2022
                </p>
            </div>

            <!-- Main Content -->
            <div class="grid md:grid-cols-2 gap-12 items-center mb-16">
                <div class="space-y-6">
                    <h3 class="text-2xl font-bold text-gray-800">Our Story</h3>
                    <p class="text-gray-700 leading-relaxed">
                        PT. Mandajaya Rekayasa Konstruksi (MRK) was founded in 2022 with a vision of providing top-notch construction consulting services. Over the years, we have grown into a leading firm in the industry, known for our commitment to quality, innovation, and client satisfaction.
                    </p>
                    <p class="text-gray-700 leading-relaxed">
                        Our expertise spans various sectors, including infrastructure, commercial, and residential projects, allowing us to offer comprehensive solutions tailored to each client's unique needs.
                    </p>

                    <!-- Key Points -->
                    <div class="grid grid-cols-2 gap-4 mt-8">
                        <div class="bg-white p-4 rounded-lg shadow-md">
                            <div class="flex items-center space-x-3 mb-2">
                                <div class="w-10 h-10 bg-blue-50 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-medal text-blue-500"></i>
                                </div>
                                <span class="font-semibold">Excellence</span>
                            </div>
                            <p class="text-sm text-gray-600">Committed to delivering the highest quality services</p>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-md">
                            <div class="flex items-center space-x-3 mb-2">
                                <div class="w-10 h-10 bg-blue-50 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-lightbulb text-blue-500"></i>
                                </div>
                                <span class="font-semibold">Innovation</span>
                            </div>
                            <p class="text-sm text-gray-600">Embracing new technologies and methodologies</p>
                        </div>
                    </div>
                </div>

                <!-- Image Grid -->
                <div class="grid grid-cols-2 gap-4">
                    <div class="space-y-4">
                        <div class="relative overflow-hidden rounded-lg h-48">
                            <img src="https://storage.googleapis.com/a1aa/image/6uX7DH_UdlYTo8lGIrgYHyS9ltoithyUY4ZwL3ayTQ4.jpg"
                                alt="Construction project"
                                class="w-full h-full object-cover transform hover:scale-110 transition duration-500" />
                        </div>
                        <div class="relative overflow-hidden rounded-lg h-32">
                            <img src="https://storage.googleapis.com/a1aa/image/Mtzk_0i-wvNSq3E1X0vZsetVrXnh6q78IsdzDzYNlQQ.jpg"
                                alt="Team meeting"
                                class="w-full h-full object-cover transform hover:scale-110 transition duration-500" />
                        </div>
                    </div>
                    <div class="space-y-4 pt-8">
                        <div class="relative overflow-hidden rounded-lg h-32">
                            <img src="https://storage.googleapis.com/a1aa/image/gy0ekscxTGJT9LsrsvJLDnLz16xboHeTBQhkKdiu7pQ.jpg"
                                alt="Construction site"
                                class="w-full h-full object-cover transform hover:scale-110 transition duration-500" />
                        </div>
                        <div class="relative overflow-hidden rounded-lg h-48">
                            <img src="https://storage.googleapis.com/a1aa/image/5GeLStJhXeIzCZz6r3NfaKNUojKTk22cx0Wdxzxwg2Q.jpg"
                                alt="Project planning"
                                class="w-full h-full object-cover transform hover:scale-110 transition duration-500" />
                        </div>
                    </div>
                </div>
            </div>

            <!-- Feature Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <a href="team" class="group">
                    <div class="bg-white rounded-xl shadow-lg p-6 transform hover:-translate-y-2 transition duration-300">
                        <div class="w-14 h-14 bg-blue-50 rounded-lg flex items-center justify-center mb-4">
                            <i class="fas fa-users text-2xl text-blue-500 group-hover:scale-110 transition duration-300"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3 group-hover:text-blue-500 transition duration-300">Our Team</h3>
                        <p class="text-gray-600 mb-4">Expert professionals dedicated to delivering excellence in every project.</p>
                        <span class="text-blue-500 flex items-center">
                            Learn More
                            <i class="fas fa-arrow-right ml-2 group-hover:translate-x-2 transition duration-300"></i>
                        </span>
                    </div>
                </a>

                <a href="project" class="group">
                    <div class="bg-white rounded-xl shadow-lg p-6 transform hover:-translate-y-2 transition duration-300">
                        <div class="w-14 h-14 bg-blue-50 rounded-lg flex items-center justify-center mb-4">
                            <i class="fas fa-building text-2xl text-blue-500 group-hover:scale-110 transition duration-300"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3 group-hover:text-blue-500 transition duration-300">Our Projects</h3>
                        <p class="text-gray-600 mb-4">Diverse portfolio of successful projects across various sectors.</p>
                        <span class="text-blue-500 flex items-center">
                            Learn More
                            <i class="fas fa-arrow-right ml-2 group-hover:translate-x-2 transition duration-300"></i>
                        </span>
                    </div>
                </a>

                <a href="vision" class="group">
                    <div class="bg-white rounded-xl shadow-lg p-6 transform hover:-translate-y-2 transition duration-300">
                        <div class="w-14 h-14 bg-blue-50 rounded-lg flex items-center justify-center mb-4">
                            <i class="fas fa-eye text-2xl text-blue-500 group-hover:scale-110 transition duration-300"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3 group-hover:text-blue-500 transition duration-300">Our Vision</h3>
                        <p class="text-gray-600 mb-4">Building a better future through innovation and excellence.</p>
                        <span class="text-blue-500 flex items-center">
                            Learn More
                            <i class="fas fa-arrow-right ml-2 group-hover:translate-x-2 transition duration-300"></i>
                        </span>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- About Section -->
    <!-- <section class="py-12 bg-gray-100 fade-in">
        <div class="container mx-auto text-center px-4">
            <h2 class="text-3xl font-bold mb-6">
                About Us
            </h2>
            <p class="text-gray-700 mb-6 text-justify">
                PT. Mandajaya Rekayasa Konstruksi (MRK) was founded in 2022 with a vision of providing top-notch construction
                consulting services. Over the years, we have grown into a leading firm in the industry, known for our commitment
                to quality, innovation, and client satisfaction. Our expertise spans various sectors, including infrastructure,
                commercial, and residential projects, allowing us to offer comprehensive solutions tailored to each client’s unique needs.
            </p>
            <p class="text-gray-700 mb-6 text-justify">
                Our team of experienced professionals brings together technical excellence, industry insights, and a client-focused
                approach to ensure that every project is executed with precision and efficiency. We leverage the latest technologies and
                best practices in construction management, ensuring sustainable and cost-effective outcomes. At MRK, we believe in building
                long-term relationships with our clients, partners, and stakeholders by consistently delivering projects that exceed expectations.
                Through continuous improvement and dedication to excellence, we strive to shape the future of the construction industry
                and contribute to the development of a better-built environment.
            </p>
            <div class="flex flex-wrap justify-center">
                <a class="w-full md:w-1/3 p-4 card" href="team">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img alt="A team of construction consultants in a meeting" class="w-full h-48 object-cover mb-4" height="200" src="https://storage.googleapis.com/a1aa/image/VkfnTaHx8Ms9h7goIZNN_bZAvjX4IVvynWI1esfv6pw.jpg" width="300" />
                        <h3 class="text-xl font-bold mb-2">
                            Our Team
                        </h3>
                        <p class="text-gray-700">
                            Our team of experienced consultants is dedicated to providing the best service and solutions for your construction needs.
                        </p>
                    </div>
                </a>
                <a class="w-full md:w-1/3 p-4 card" href="project">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img alt="A construction site with workers and machinery" class="w-full h-48 object-cover mb-4" height="200" src="https://storage.googleapis.com/a1aa/image/XhHRNsT_PydtlbeP8FLp-aT0ykQ01SRkYd700FJXAbo.jpg" width="300" />
                        <h3 class="text-xl font-bold mb-2">
                            Our Projects
                        </h3>
                        <p class="text-gray-700">
                            We have successfully completed numerous projects across various sectors, including commercial, residential, and industrial.
                        </p>
                    </div>
                </a>
                <a class="w-full md:w-1/3 p-4 card" href="vision">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img alt="A blueprint and construction tools on a table" class="w-full h-48 object-cover mb-4" height="200" src="https://storage.googleapis.com/a1aa/image/xhGlafHv9-UB_Qk6X0nW9YjoomS1u90eWqCJObEBk5k.jpg" width="300" />
                        <h3 class="text-xl font-bold mb-2">
                            Our Vision
                        </h3>
                        <p class="text-gray-700">
                            Our vision is to be the most trusted and innovative construction consulting firm, delivering exceptional value to our clients.
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </section> -->
    <!-- Services Section -->
    <section class="py-16 bg-gradient-to-b from-white to-gray-50 fade-in">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold mb-4">Our Services</h2>
                <div class="w-24 h-1 bg-blue-500 mx-auto mb-6"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    We provide comprehensive construction consulting services tailored to meet your project needs
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
                <!-- Project Management -->
                <div class="group">
                    <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300">
                        <div class="w-16 h-16 bg-blue-50 rounded-lg mb-6 flex items-center justify-center group-hover:bg-orange-500 transition-colors duration-300">
                            <i class="fas fa-hard-hat text-3xl text-orange-500 group-hover:text-white transition-colors duration-300"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-4">Project Management</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Professional project planning, execution, and monitoring for optimal results.
                        </p>
                    </div>
                </div>

                <!-- Design Consultation -->
                <div class="group">
                    <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300">
                        <div class="w-16 h-16 bg-blue-50 rounded-lg mb-6 flex items-center justify-center group-hover:bg-orange-500 transition-colors duration-300">
                            <i class="fas fa-drafting-compass text-3xl text-orange-500 group-hover:text-white transition-colors duration-300"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-4">Design Consultation</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Expert design solutions that blend functionality with aesthetics.
                        </p>
                    </div>
                </div>

                <!-- Construction Supervision -->
                <div class="group">
                    <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300">
                        <div class="w-16 h-16 bg-blue-50 rounded-lg mb-6 flex items-center justify-center group-hover:bg-orange-500 transition-colors duration-300">
                            <i class="fas fa-tools text-3xl text-orange-500 group-hover:text-white transition-colors duration-300"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-4">Construction Supervision</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Thorough oversight ensuring quality and compliance throughout construction.
                        </p>
                    </div>
                </div>

                <!-- Quality Assurance -->
                <div class="group">
                    <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300">
                        <div class="w-16 h-16 bg-blue-50 rounded-lg mb-6 flex items-center justify-center group-hover:bg-orange-500 transition-colors duration-300">
                            <i class="fas fa-building text-3xl text-orange-500 group-hover:text-white transition-colors duration-300"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-4">Quality Assurance</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Rigorous quality control standards for superior project outcomes.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Additional Services -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Cost Estimation -->
                <div class="bg-white p-6 rounded-xl shadow-lg group hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300">
                    <i class="fas fa-chart-line text-3xl text-orange-500 mb-4"></i>
                    <h3 class="text-lg font-bold mb-2">Cost Estimation</h3>
                    <p class="text-gray-600 text-sm">Accurate project cost analysis and budgeting</p>
                </div>

                <!-- Contract Administration -->
                <div class="bg-white p-6 rounded-xl shadow-lg group hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300">
                    <i class="fas fa-file-contract text-3xl text-orange-500 mb-4"></i>
                    <h3 class="text-lg font-bold mb-2">Contract Administration</h3>
                    <p class="text-gray-600 text-sm">Comprehensive contract management services</p>
                </div>

                <!-- Sustainability Consulting -->
                <div class="bg-white p-6 rounded-xl shadow-lg group hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300">
                    <i class="fas fa-recycle text-3xl text-orange-500 mb-4"></i>
                    <h3 class="text-lg font-bold mb-2">Sustainability Consulting</h3>
                    <p class="text-gray-600 text-sm">Green building and sustainable development solutions</p>
                </div>
            </div>

            <!-- Call to Action -->
            <div class="text-center mt-12">
                <a href="service" class="inline-flex items-center px-8 py-3 bg-blue-500 text-white rounded-full hover:bg-orange-600 transition duration-300">
                    <span>View All Services</span>
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>
    <!-- Projects Section -->
    <section class="py-16 bg-gray-100 fade-in">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold mb-4">Our Projects</h2>
                <div class="w-24 h-1 bg-blue-500 mx-auto mb-6"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Explore our diverse portfolio of successful projects across various sectors
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Commercial Project -->
                <div class="group relative overflow-hidden rounded-xl">
                    <div class="relative overflow-hidden">
                        <img
                            src="https://storage.googleapis.com/a1aa/image/seYcKjF8wP_Wk6O1puBWMiqbQI2rmvp166DUnlAtO8g.jpg"
                            alt="Commercial Building"
                            class="w-full h-[300px] object-cover transform group-hover:scale-110 transition duration-500" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition duration-300"></div>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-6 group-hover:translate-y-0 transition duration-300">
                        <h3 class="text-xl font-bold mb-2">Commercial Building</h3>
                        <p class="text-sm text-gray-200 opacity-0 group-hover:opacity-100 transition duration-300 delay-100">
                            A state-of-the-art commercial building designed and managed by our expert team.
                        </p>
                        <a href="project" class="inline-flex items-center mt-4 text-blue-400 hover:text-blue-300">
                            Learn More <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Residential Project -->
                <div class="group relative overflow-hidden rounded-xl">
                    <div class="relative overflow-hidden">
                        <img
                            src="https://storage.googleapis.com/a1aa/image/fV8LLHNOLa443yshurbQ0Zy-uUJeUW_YsVfNbFbJ5zY.jpg"
                            alt="Residential Complex"
                            class="w-full h-[300px] object-cover transform group-hover:scale-110 transition duration-500" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition duration-300"></div>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-6 group-hover:translate-y-0 transition duration-300">
                        <h3 class="text-xl font-bold mb-2">Residential Complex</h3>
                        <p class="text-sm text-gray-200 opacity-0 group-hover:opacity-100 transition duration-300 delay-100">
                            A luxury residential complex featuring modern amenities and sustainable design.
                        </p>
                        <a href="project" class="inline-flex items-center mt-4 text-blue-400 hover:text-blue-300">
                            Learn More <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Industrial Project -->
                <div class="group relative overflow-hidden rounded-xl">
                    <div class="relative overflow-hidden">
                        <img
                            src="https://storage.googleapis.com/a1aa/image/BRMUZitZ8CbAo1ZZYxgEj4kBzBMkBLsMyNtW5sEl5Z8.jpg"
                            alt="Industrial Facility"
                            class="w-full h-[300px] object-cover transform group-hover:scale-110 transition duration-500" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition duration-300"></div>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-6 group-hover:translate-y-0 transition duration-300">
                        <h3 class="text-xl font-bold mb-2">Industrial Facility</h3>
                        <p class="text-sm text-gray-200 opacity-0 group-hover:opacity-100 transition duration-300 delay-100">
                            A high-tech industrial facility built to meet modern manufacturing needs.
                        </p>
                        <a href="project" class="inline-flex items-center mt-4 text-blue-400 hover:text-blue-300">
                            Learn More <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- View All Projects Button -->
            <div class="text-center mt-12">
                <a href="project" class="inline-flex items-center px-8 py-3 bg-blue-500 text-white rounded-full hover:bg-blue-600 transition duration-300 group">
                    <span>View All Projects</span>
                    <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform duration-300"></i>
                </a>
            </div>
        </div>
    </section>
    <!-- Our Clients Section -->
    <section class="py-12 fade-in">
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
                            <img alt="bandung" class="h-21 w-20 bandung" src="{{ asset('storage/bandung.png') }}" />                            </div>
                        </div>
                        <!-- Client 2 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 2" class="w-full h-24 object-contain mb-4" src="{{ asset('storage/Logo-cimahi.png') }}" />
                            </div>
                        </div>
                        <!-- Client 3 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 3" class="w-full h-24 object-contain mb-4" src="{{ asset('storage/bogor.png') }}" />
                            </div>
                        </div>
                        <!-- Client 4 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 4" class="w-full h-24 object-contain mb-4" src="{{ asset('storage/takalar.png') }}" />
                            </div>
                        </div>
                    </div>
                    <div class="carousel-slide flex flex-wrap justify-center">
                        <!-- Client 5 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 5" class="w-full h-24 object-contain mb-4" src="{{ asset('storage/jakarta.png') }}" />
                            </div>
                        </div>
                        <!-- Client 6 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 6" class="w-full h-24 object-contain mb-4" src="{{ asset('storage/esdm.png') }}" />
                            </div>
                        </div>
                        <!-- Client 7 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 7" class="w-full h-24 object-contain mb-4" src="{{ asset('storage/BAP.png') }}" />
                            </div>
                        </div>
                        <!-- Client 8 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 8" class="w-full h-24 object-contain mb-4" src="{{ asset('storage/pupr 2.png') }}" />
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="carousel-slide flex flex-wrap justify-center">
                        <!-- Client 9 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 9" class="w-full h-24 object-contain mb-4" height="100" src="{{ asset('storage/Bi.png') }}" width="200" />
                            </div>
                        </div>
                        <!-- Client 10 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 10" class="w-full h-24 object-contain mb-4" height="100" src="{{ asset('storage/BNI.png') }}" width="200" />
                            </div>
                        </div>
                        <!-- Client 11 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 11" class="w-full h-24 object-contain mb-4" height="100" src="{{ asset('storage/KAI.jpg') }}" width="200" />
                            </div>
                        </div>
                        <!-- Client 12 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 12" class="w-full h-24 object-contain mb-4" height="100" src="{{ asset('storage/POS.png') }}" width="200" />
                            </div>
                        </div>
                    </div>
                    <div class="carousel-slide flex flex-wrap justify-center">
                        <!-- Client 13 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 13" class="w-full h-24 object-contain mb-4" height="100" src="{{ asset('storage/bukit.png') }}" width="200" />
                            </div>
                        </div>
                        <!-- Client 14 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 14" class="w-full h-24 object-contain mb-4" height="100" src="{{ asset('storage/rskgm.png') }}" width="200" />
                            </div>
                        </div>
                        <!-- Client 15 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 15" class="w-full h-24 object-contain mb-4" height="100" src="{{ asset('storage/KimiaFarma.png') }}" width="200" />
                            </div>
                        </div>
                        <!-- Client 16 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 16" class="w-full h-24 object-contain mb-4" height="100" src="{{ asset('storage/dpkp 3.png') }}" width="200" />
                            </div>
                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div class="carousel-slide flex flex-wrap justify-center">
                        <!-- Client 17 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 17" class="w-full h-24 object-contain mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/Tlbt6CyVRvFAPc-2LGPMmIQaWnM8T4oCmxj1zpc9YAs.jpg" width="200" />
                            </div>
                        </div>
                        <!-- Client 18 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 18" class="w-full h-24 object-contain mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/S20oaOWT8s2eaTGzdgQmcHZGK8Pq-rJZ39N6lGDbPns.jpg" width="200" />
                            </div>
                        </div>
                        <!-- Client 19 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 19" class="w-full h-24 object-contain mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/lg4LKe0I2G2i4tnO0TNoiiOOFPeMm8cGm-Rx6RIICVg.jpg" width="200" />
                            </div>
                        </div>
                        <!-- Client 20 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 20" class="w-full h-24 object-contain mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/Trr55l8kxtQh_CxjmdKKSKfbvtjaKxIUyA7k9R6TkZE.jpg" width="200" />
                            </div>
                        </div>
                    </div>
                    <div class="carousel-slide flex flex-wrap justify-center">
                        <!-- Client 21 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 21" class="w-full h-24 object-contain mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/o1HKmHV7sOv-DjDiJ1vseTQWAs9_TUr68TujvftgpDk.jpg" width="200" />
                            </div>
                        </div>
                        <!-- Client 22 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 22" class="w-full h-24 object-contain mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/4aFC0Z4SbYNOTcKproTPHUe6fBMnoFLowsU2Xe6eEVM.jpg" width="200" />
                            </div>
                        </div>
                        <!-- Client 23 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 23" class="w-full h-24 object-contain mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/f0TneKS1zb9hKsdu27_MMnXvtzcmePNZb6TnLxuiWls.jpg" width="200" />
                            </div>
                        </div>
                        <!-- Client 24 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 24" class="w-full h-24 object-contain mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/WeSuQ5WdirZgN4mu1COHfQh9KSnIDRqPUjzg3kSfFRQ.jpg" width="200" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-dots" style="position: relative; margin-top: 2rem;">
                    <button class="dot client-dot active" onclick="showClientSlide(0)" aria-label="Client slide 1"></button>
                    <button class="dot client-dot" onclick="showClientSlide(1)" aria-label="Client slide 2"></button>
                    <button class="dot client-dot" onclick="showClientSlide(2)" aria-label="Client slide 3"></button>
                    <button class="dot client-dot" onclick="showClientSlide(3)" aria-label="Client slide 4"></button>
                    <button class="dot client-dot" onclick="showClientSlide(4)" aria-label="Client slide 5"></button>
                    <button class="dot client-dot" onclick="showClientSlide(5)" aria-label="Client slide 6"></button>
                </div>
                <!-- <button class="carousel-arrow prev" onclick="prevClientSlide()" aria-label="Previous clients">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="carousel-arrow next" onclick="nextClientSlide()" aria-label="Next clients">
                    <i class="fas fa-chevron-right"></i>
                </button> -->
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
                        <img src="{{ asset('storage/Logo FI.png') }}" alt="MRK Logo" class="h-10 w-10">
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
                            <a href="/" class="text-gray-400 hover:text-blue-400 transition duration-300">Home</a>
                        </li>
                        <li>
                            <a href="service" class="text-gray-400 hover:text-blue-400 transition duration-300">Services</a>
                        </li>
                        <li>
                            <a href="project" class="text-gray-400 hover:text-blue-400 transition duration-300">Projects</a>
                        </li>
                        <li>
                            <a href="team" class="text-gray-400 hover:text-blue-400 transition duration-300">Our Team</a>
                        </li>
                        <li>
                            <a href="client" class="text-gray-400 hover:text-blue-400 transition duration-300">Clients</a>
                        </li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h4 class="text-lg font-semibold text-white mb-6">Contact Us</h4>
                    <ul class="space-y-3">
                        <li class="flex items-start space-x-3">
                            <i class="fas fa-map-marker-alt mt-1 text-blue-400"></i>
                            <span class="text-gray-400">Jl. Kota Mas 1 No.18, Kota Cimahi, Jawa Barat, 40511</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-phone text-blue-400"></i>
                            <span class="text-gray-400">+62 852 2080 1593</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-envelope text-blue-400"></i>
                            <a href="mailto:info@mandajaya.com" class="text-gray-400 hover:text-blue-400 transition duration-300">
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
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-blue-700 transition duration-300">
                            <i class="fab fa-linkedin-in"></i>
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
                        <a href="#" class="text-gray-400 hover:text-blue-400 transition duration-300 mx-2">Privacy Policy</a>
                        <span class="text-gray-600">|</span>
                        <a href="#" class="text-gray-400 hover:text-blue-400 transition duration-300 mx-2">Terms of Service</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script>
        const heroCarousel = {
            currentSlide: 0,
            slides: document.querySelectorAll('.carousel-item'),
            dots: document.querySelectorAll('.hero-dot'),
            inner: document.querySelector('.carousel-inner'),
            isAnimating: false,

            init() {
                // Clone first and last slides for smooth infinite loop
                const firstSlideClone = this.slides[0].cloneNode(true);
                const lastSlideClone = this.slides[this.slides.length - 1].cloneNode(true);
                this.inner.appendChild(firstSlideClone);
                this.inner.insertBefore(lastSlideClone, this.slides[0]);

                this.showSlide(1); // Start at first actual slide
                this.startAutoPlay();
                this.setupEventListeners();
            },

            showSlide(index, isAuto = false) {
                if (this.isAnimating) return;
                this.isAnimating = true;

                const totalSlides = this.slides.length;
                const offset = -index * 100;
                this.inner.style.transform = `translateX(${offset}%)`;

                // Update dots based on actual slide position
                let actualIndex = index - 1;
                if (actualIndex === -1) actualIndex = totalSlides - 1;
                if (actualIndex === totalSlides) actualIndex = 0;

                this.dots.forEach((dot, i) => {
                    dot.classList.toggle('active', i === actualIndex);
                });

                // Handle infinite scroll transition
                if (index === 0 || index === totalSlides + 1) {
                    setTimeout(() => {
                        this.inner.classList.add('no-transition');
                        const newIndex = index === 0 ? totalSlides : 1;
                        this.inner.style.transform = `translateX(-${newIndex * 100}%)`;

                        // Force reflow
                        this.inner.offsetHeight;

                        this.inner.classList.remove('no-transition');
                        this.isAnimating = false;
                        this.currentSlide = newIndex;
                    }, 1000);
                } else {
                    setTimeout(() => {
                        this.isAnimating = false;
                        this.currentSlide = index;
                    }, 1000);
                }
            },

            nextSlide() {
                this.showSlide(this.currentSlide + 1);
            },

            prevSlide() {
                this.showSlide(this.currentSlide - 1);
            },

            startAutoPlay() {
                setInterval(() => {
                    if (!this.isAnimating) {
                        this.nextSlide();
                    }
                }, 6000);
            },

            setupEventListeners() {
                this.dots.forEach((dot, index) => {
                    dot.addEventListener('click', () => {
                        if (!this.isAnimating) {
                            this.showSlide(index + 1);
                        }
                    });
                });
            }
        };

        // Initialize carousel when DOM is loaded
        document.addEventListener('DOMContentLoaded', () => {
            heroCarousel.init();
        });

        // Client Section Carousel
        let currentClientSlide = 0;
        const clientSlides = document.querySelectorAll('.carousel-slide');
        const clientDots = document.querySelectorAll('.client-dot');

        function showClientSlide(index) {
            if (index >= clientSlides.length) {
                currentClientSlide = 0;
            } else if (index < 0) {
                currentClientSlide = clientSlides.length - 1;
            } else {
                currentClientSlide = index;
            }

            const offset = -currentClientSlide * 100;
            document.querySelector('.carousel-track').style.transform = `translateX(${offset}%)`;

            // Update dots
            document.querySelectorAll('.client-dot').forEach((dot, i) => {
                dot.classList.toggle('active', i === currentClientSlide);
            });
        }

        function nextClientSlide() {
            showClientSlide(currentClientSlide + 1);
        }

        // Auto advance client slides every 4 seconds
        setInterval(() => {
            nextClientSlide();
        }, 4000);

        // Initialize when DOM is loaded
        document.addEventListener('DOMContentLoaded', () => {
            // Show first slide
            showClientSlide(0);
        });

        // Loading animation
        document.addEventListener('DOMContentLoaded', function() {
            document.body.classList.add('loaded');
        });

        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });

            document.addEventListener('scroll', function() {
                const navbar = document.querySelector('.navbar');
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.getElementById('menu-toggle');
            const mobileMenu = document.getElementById('mobile-menu');

            menuToggle.addEventListener('click', function() {
                // Toggle the hidden class
                mobileMenu.classList.toggle('hidden');
                mobileMenu.classList.toggle('slide-in');
            });

            // Close menu when clicking a link
            const mobileLinks = mobileMenu.getElementsByTagName('a');
            Array.from(mobileLinks).forEach(link => {
                link.addEventListener('click', function() {
                    mobileMenu.classList.add('hidden');
                });
            });
        });
    </script>
</body>

</html>