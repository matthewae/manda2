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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <style>
        /* Animations */
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

        .carousel-inner.no-transition {
            transition: none;
        }

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
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1.5rem;
            background: white;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            height: 140px;
        }

        .client-box:hover {
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        }

        .client-box img {
            max-height: 100%;
            width: auto;
            object-fit: contain;
            transition: transform 0.3s ease;
        }

        .client-box img:hover {
            transform: scale(1.05);
        }

        .swiper-pagination {
            bottom: -5px !important;
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
                        <li><a class="block text-gray-300 hover:text-yellow-400 transition duration-300 py-2" href="/">Home</a></li>
                        <li><a class="block text-gray-300 hover:text-yellow-400 transition duration-300 py-2" href="service">Services</a></li>
                        <li><a class="block text-gray-300 hover:text-yellow-400 transition duration-300 py-2" href="project">Projects</a></li>
                        <li><a class="block text-gray-300 hover:text-yellow-400 transition duration-300 py-2" href="team">Our Team</a></li>
                        <li><a class="block text-gray-300 hover:text-yellow-400 transition duration-300 py-2" href="client">Clients</a></li>
                        <li><a class="block text-gray-300 hover:text-yellow-400 transition duration-300 py-2" href="contact">Contact Us</a></li>
                        <li><a class="block text-gray-300 hover:text-yellow-400 transition duration-300 py-2" href="news">News</a></li>
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
                    src="{{ url('images/hero1.jpeg') }}" />
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
                    src="{{ url('images/hero2.jpeg') }}" />
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
                    src="{{ url('images/hero3.jpeg') }}" />
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
                    <p class="text-gray-700 leading-relaxed text-justify">
                        PT. Mandajaya Rekayasa Konstruksi (MRK) was founded in 2022 with a vision of providing top-notch construction consulting services. Over the years, we have grown into a leading firm in the industry, known for our commitment to quality, innovation, and client satisfaction.
                    </p>
                    <p class="text-gray-700 leading-relaxed text-justify">
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
                            <img src="{{ url('images/story1.jpeg') }}"
                                alt="Construction project"
                                class="w-full h-full object-cover transform hover:scale-110 transition duration-500" />
                        </div>
                        <div class="relative overflow-hidden rounded-lg h-32">
                            <img src="{{ url('images/story3.jpeg') }}"
                                alt="Team meeting"
                                class="w-full h-full object-cover transform hover:scale-110 transition duration-500" />
                        </div>
                    </div>
                    <div class="space-y-4 pt-8">
                        <div class="relative overflow-hidden rounded-lg h-32">
                            <img src="{{ url('images/story2.jpeg') }}"
                                alt="Construction site"
                                class="w-full h-full object-cover transform hover:scale-110 transition duration-500" />
                        </div>
                        <div class="relative overflow-hidden rounded-lg h-48">
                            <img src="{{ url('images/story4.jpeg') }}"
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
                <!-- Feasibility Study -->
                <div class="group">
                    <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300">
                        <div class="w-16 h-16 bg-blue-50 rounded-lg mb-6 flex items-center justify-center group-hover:bg-orange-500 transition-colors duration-300">
                            <i class="fas fa-chart-line text-3xl text-orange-500 group-hover:text-white transition-colors duration-300"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-4">Feasibility Study</h3>
                        <p class="text-gray-600 leading-relaxed text-justify">
                            Comprehensive analysis of project viability, market conditions, and potential returns on investment.
                        </p>
                    </div>
                </div>

                <!-- Risk Analysis -->
                <div class="group">
                    <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300">
                        <div class="w-16 h-16 bg-blue-50 rounded-lg mb-6 flex items-center justify-center group-hover:bg-orange-500 transition-colors duration-300">
                            <i class="fas fa-shield-alt text-3xl text-orange-500 group-hover:text-white transition-colors duration-300"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-4">Risk Analysis</h3>
                        <p class="text-gray-600 leading-relaxed text-justify">
                            Detailed assessment of project risks, mitigation strategies, and safety compliance measures.
                        </p>
                    </div>
                </div>

                <!-- Claim, Contract, Dispute Resolution -->
                <div class="group">
                    <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300">
                        <div class="w-16 h-16 bg-blue-50 rounded-lg mb-6 flex items-center justify-center group-hover:bg-orange-500 transition-colors duration-300">
                            <i class="fas fa-gavel text-3xl text-orange-500 group-hover:text-white transition-colors duration-300"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-4">Claim, Contract, Dispute Resolution</h3>
                        <p class="text-gray-600 leading-relaxed text-justify">
                            Expert handling of construction claims, contract management, and effective dispute resolution services.
                        </p>
                    </div>
                </div>

                <!-- Auditor & Loss Adjuster -->
                <div class="group">
                    <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300">
                        <div class="w-16 h-16 bg-blue-50 rounded-lg mb-6 flex items-center justify-center group-hover:bg-orange-500 transition-colors duration-300">
                            <i class="fas fa-clipboard-check text-3xl text-orange-500 group-hover:text-white transition-colors duration-300"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-4">Auditor & Loss Adjuster</h3>
                        <p class="text-gray-600 leading-relaxed text-justify">
                            Professional assessment of construction losses and thorough project auditing services.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Additional Services (3 columns) -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Quantity Surveyor & Construction Management -->
                <div class="bg-white p-6 rounded-xl shadow-lg group hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300">
                    <i class="fas fa-calculator text-3xl text-orange-500 mb-4"></i>
                    <h3 class="text-lg font-bold mb-2">Quantity Surveyor & Construction Management</h3>
                    <p class="text-gray-600 text-sm">
                        Expert cost estimation, quantity take-offs, and comprehensive construction project management.
                    </p>
                </div>

                <!-- Other Engineering Consultation -->
                <div class="bg-white p-6 rounded-xl shadow-lg group hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300">
                    <i class="fas fa-cogs text-3xl text-orange-500 mb-4"></i>
                    <h3 class="text-lg font-bold mb-2">Other Engineering Consultation</h3>
                    <p class="text-gray-600 text-sm">
                        Specialized engineering solutions and technical consultation across various construction disciplines.
                    </p>
                </div>
            </div>

            <!-- Sustainability Consulting -->
            <!-- <div class="bg-white p-6 rounded-xl shadow-lg group hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300">
                    <i class="fas fa-recycle text-3xl text-orange-500 mb-4"></i>
                    <h3 class="text-lg font-bold mb-2">Sustainability Consulting</h3>
                    <p class="text-gray-600 text-sm">Green building and sustainable development solutions</p>
                </div>
            </div> -->
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
                            src="{{ url('images/img149.jpg') }}"
                            alt="Commercial Building"
                            class="w-full h-[300px] object-cover transform group-hover:scale-110 transition duration-500" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition duration-300"></div>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-6 group-hover:translate-y-0 transition duration-300">
                        <h3 class="text-xl font-bold mb-2">Design</h3>
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
                            src="{{ url('images/img183.jpg') }}"
                            alt="Residential Complex"
                            class="w-full h-[300px] object-cover transform group-hover:scale-110 transition duration-500" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition duration-300"></div>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-6 group-hover:translate-y-0 transition duration-300">
                        <h3 class="text-xl font-bold mb-2">Supervision</h3>
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
                            src="{{ url('images/infra.jpeg') }}"
                            alt="Industrial Facility"
                            class="w-full h-[300px] object-cover transform group-hover:scale-110 transition duration-500" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition duration-300"></div>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-6 group-hover:translate-y-0 transition duration-300">
                        <h3 class="text-xl font-bold mb-2">Functionality Certificate</h3>
                        <p class="text-sm text-gray-200 opacity-0 group-hover:opacity-100 transition duration-300 delay-100">
                            A comfortable infratructure facility that fullfill the needs.
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
            <h2 class="text-3xl font-bold mb-6">Our Clients</h2>
            <p class="text-gray-700 mb-6">
                We are proud to have worked with a diverse range of clients from various industries.
            </p>

            <!-- Swiper Container -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide flex flex-wrap justify-center">
                        <div class="w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img src="{{ url('images/bandung.png') }}" alt="Bandung" class="w-full h-24 object-contain mb-4" />
                            </div>
                        </div>
                        <div class="w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img src="{{ url('images/pertamina.png') }}" alt="Cimahi" class="w-full h-24 object-contain mb-4" />
                            </div>
                        </div>
                        <div class="w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img src="{{ url('images/Kota Bogor.png') }}" alt="Bogor" class="w-full h-24 object-contain mb-4" />
                            </div>
                        </div>
                        <div class="w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img src="{{ url('images/Kabupaten Takalar.png') }}" alt="Takalar" class="w-full h-24 object-contain mb-4" />
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="swiper-slide flex flex-wrap justify-center">
                        <div class="w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img src="{{ url('images/jakarta.png') }}" alt="Jakarta" class="w-full h-24 object-contain mb-4" />
                            </div>
                        </div>
                        <div class="w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img src="{{ url('images/esdm.png') }}" alt="ESDM" class="w-full h-24 object-contain mb-4" />
                            </div>
                        </div>
                        <div class="w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img src="{{ url('images/BAP.png') }}" alt="BAP" class="w-full h-24 object-contain mb-4" />
                            </div>
                        </div>
                        <div class="w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img src="{{ url('images/pupr 2.png') }}" alt="PUPR" class="w-full h-24 object-contain mb-4" />
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="swiper-slide flex flex-wrap justify-center">
                        <div class="w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img src="{{ url('images/BI.png') }}" alt="Jakarta" class="w-full h-24 object-contain mb-4" />
                            </div>
                        </div>
                        <div class="w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img src="{{ url('images/BNI.png') }}" alt="ESDM" class="w-full h-24 object-contain mb-4" />
                            </div>
                        </div>
                        <div class="w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img src="{{ url('images/KAI.jpg') }}" alt="BAP" class="w-full h-24 object-contain mb-4" />
                            </div>
                        </div>
                        <div class="w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img src="{{ url('images/POS.png') }}" alt="PUPR" class="w-full h-24 object-contain mb-4" />
                            </div>
                        </div>
                    </div>

                    <!-- Slide 4 -->
                    <div class="swiper-slide flex flex-wrap justify-center">
                        <div class="w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img src="{{ url('images/bukit.png') }}" alt="Jakarta" class="w-full h-24 object-contain mb-4" />
                            </div>
                        </div>
                        <div class="w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img src="{{ url('images/rskgm.png') }}" alt="ESDM" class="w-full h-24 object-contain mb-4" />
                            </div>
                        </div>
                        <div class="w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img src="{{ url('images/KimiaFarma.png') }}" alt="BAP" class="w-full h-24 object-contain mb-4" />
                            </div>
                        </div>
                        <div class="w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img src="{{ url('images/dpkp 3.png') }}" alt="PUPR" class="w-full h-24 object-contain mb-4" />
                            </div>
                        </div>
                    </div>

                    <!-- Slide 5 -->
                    <div class="swiper-slide flex flex-wrap justify-center">
                        <div class="w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img src="{{ url('images/mclarens2.png') }}" alt="Mclarens" class="w-full h-24 object-contain mb-4" />
                            </div>
                        </div>
                        <div class="w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img src="{{ url('images/angkasa.png') }}" alt="Mclarens" class="w-full h-24 object-contain mb-4" />
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation Arrows -->
                <!-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> -->

                <!-- Pagination -->
                <div class="swiper-pagination mt-6"></div>
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

        var swiper = new Swiper(".mySwiper", {
            loop: true, // Infinite loop
            autoplay: {
                delay: 5000, // 3 seconds per slide
                disableOnInteraction: false, 
            },
            speed: 800, 
            slidesPerView: 1, 
            spaceBetween: 20, 
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            // navigation: {
            //     nextEl: ".swiper-button-next",
            //     prevEl: ".swiper-button-prev",
            // },
        });
    </script>
</body>

</html>