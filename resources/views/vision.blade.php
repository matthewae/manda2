<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
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

        .info-box:hover {
            transform: translateY(-10px);
            transition: transform 0.3s ease-in-out;
        }

        .accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s ease-in-out, padding 0.5s ease-in-out;
        }

        .accordion-content.open {
            max-height: 1000px;
            padding-top: 1rem;
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

        body.menu-open {
            overflow: hidden;
        }

        main {
            position: relative;
            z-index: 1;
            margin-top: 64px;
            /* Adjust based on your navbar height */
        }
    </style>
</head>

<body class="font-roboto">
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
                <li>
                    <a href="https://drive.google.com/file/d/1_OuB8-CuDZPOWyo8zdetd3FRSMIm29gJ/view?usp=sharing"
                        target="_blank"
                        class="bg-blue-500 text-white px-6 py-2 rounded-full hover:bg-blue-600 transition duration-300 flex items-center space-x-2">
                        <span>Company Profile</span>
                        <i class="fas fa-external-link-alt text-sm"></i>
                    </a>
                </li>
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
                    <li><a class="block text-lg text-gray-300 hover:text-blue-400 transition duration-300 py-2" href="/">Home</a></li>
                    <li><a class="block text-lg text-gray-300 hover:text-blue-400 transition duration-300 py-2" href="service">Services</a></li>
                    <li><a class="block text-lg text-gray-300 hover:text-blue-400 transition duration-300 py-2" href="project">Projects</a></li>
                    <li><a class="block text-lg text-gray-300 hover:text-blue-400 transition duration-300 py-2" href="team">Our Team</a></li>
                    <li><a class="block text-lg text-gray-300 hover:text-blue-400 transition duration-300 py-2" href="client">Clients</a></li>
                    <li><a class="block text-lg text-gray-300 hover:text-blue-400 transition duration-300 py-2" href="contact">Contact Us</a></li>
                    <li class="pt-4">
                        <a href="https://drive.google.com/file/d/1_OuB8-CuDZPOWyo8zdetd3FRSMIm29gJ/view?usp=sharing"
                            target="_blank"
                            class="block w-full text-center bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-600 transition duration-300">
                            <i class="fas fa-download mr-2"></i>Company Profile
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Vision Section -->
    <section class="py-16 bg-gradient-to-b from-gray-100 to-white fade-in mt-24">
        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold mb-4">Our Vision & Mission</h2>
                <div class="w-24 h-1 bg-blue-500 mx-auto mb-6"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Building the future through excellence, innovation, and sustainable practices
                </p>
            </div>

            <!-- Vision Content -->
            <div class="grid md:grid-cols-2 gap-12 items-center mb-20">
                <div class="relative">
                    <img alt="Vision illustration"
                        src="https://storage.googleapis.com/a1aa/image/P9kjMmH9qJ-culHOdUhmqxc908kaLaxjgl1yS0OqKAs.jpg"
                        class="rounded-xl shadow-xl w-full h-[400px] object-cover transform hover:scale-105 transition duration-500" />
                    <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-blue-500 rounded-lg opacity-10 z-0"></div>
                </div>
                <div class="space-y-6">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-blue-50 rounded-lg flex items-center justify-center">
                            <i class="fas fa-eye text-2xl text-blue-500"></i>
                        </div>
                        <h3 class="text-2xl font-bold">Our Vision</h3>
                    </div>
                    <p class="text-gray-700 leading-relaxed">
                        Our vision is to be the most trusted and innovative construction consulting firm, delivering exceptional value to our clients. We aim to set the standard for excellence in the industry by:
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-check-circle text-blue-500"></i>
                            <span class="text-gray-700">Setting industry benchmarks for quality and innovation</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-check-circle text-blue-500"></i>
                            <span class="text-gray-700">Building lasting client relationships based on trust</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-check-circle text-blue-500"></i>
                            <span class="text-gray-700">Fostering sustainable construction practices</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Mission Content -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="space-y-6 order-2 md:order-1">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-blue-50 rounded-lg flex items-center justify-center">
                            <i class="fas fa-flag text-2xl text-blue-500"></i>
                        </div>
                        <h3 class="text-2xl font-bold">Our Mission</h3>
                    </div>
                    <p class="text-gray-700 leading-relaxed">
                        Our mission is to provide top-notch construction consulting services that exceed our clients' expectations through:
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                            <div class="flex items-center space-x-3 mb-2">
                                <i class="fas fa-award text-blue-500"></i>
                                <h4 class="font-semibold">Quality Excellence</h4>
                            </div>
                            <p class="text-sm text-gray-600">Delivering high-quality and cost-effective projects on schedule</p>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                            <div class="flex items-center space-x-3 mb-2">
                                <i class="fas fa-handshake text-blue-500"></i>
                                <h4 class="font-semibold">Professional Integrity</h4>
                            </div>
                            <p class="text-sm text-gray-600">Maintaining highest levels of professionalism and fairness</p>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                            <div class="flex items-center space-x-3 mb-2">
                                <i class="fas fa-users text-blue-500"></i>
                                <h4 class="font-semibold">Client Satisfaction</h4>
                            </div>
                            <p class="text-sm text-gray-600">Building lasting relationships through exceptional service</p>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                            <div class="flex items-center space-x-3 mb-2">
                                <i class="fas fa-shield-alt text-blue-500"></i>
                                <h4 class="font-semibold">Safety First</h4>
                            </div>
                            <p class="text-sm text-gray-600">Ensuring safe and productive work environments</p>
                        </div>
                    </div>
                </div>
                <div class="relative order-1 md:order-2">
                    <img alt="Mission illustration"
                        src="https://storage.googleapis.com/a1aa/image/yKPd55IbXbVNc7FUUXwfVK4upPmoM9vmwTCfuBGMdRg.jpg"
                        class="rounded-xl shadow-xl w-full h-[400px] object-cover transform hover:scale-105 transition duration-500" />
                    <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-blue-500 rounded-lg opacity-10 z-0"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Goals Section -->
    <section class="py-16 bg-gray-100 fade-in">
        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold mb-4">Our Strategic Goals</h2>
                <div class="w-24 h-1 bg-blue-500 mx-auto mb-6"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Driving excellence through clear objectives and continuous improvement
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Excellence in Quality Card -->
                <div class="group">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:-translate-y-2 transition duration-300">
                        <div class="relative h-48">
                            <img src="https://storage.googleapis.com/a1aa/image/EAWT9lUVLNKce2OGyOHHsrRGiEiejxOjuwgG_JyTQ5c.jpg"
                                alt="Excellence in Quality"
                                class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500" />
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <div class="absolute bottom-4 left-4 text-white">
                                    <p class="text-sm font-medium">Goal 01</p>
                                    <p class="text-xs opacity-75">Industry Leadership</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center space-x-3 mb-3">
                                <div class="w-10 h-10 bg-blue-50 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-award text-xl text-blue-500"></i>
                                </div>
                                <h3 class="text-xl font-bold">Excellence in Quality</h3>
                            </div>
                            <p class="text-gray-600 mb-4">
                                To be recognized as a leader in the construction consulting industry by consistently delivering projects that meet the highest standards of quality and safety.
                            </p>
                            <ul class="space-y-2">
                                <li class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check-circle text-blue-500 mr-2"></i>
                                    <span>Quality management systems</span>
                                </li>
                                <li class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check-circle text-blue-500 mr-2"></i>
                                    <span>Industry certifications</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Client Relationships Card -->
                <div class="group">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:-translate-y-2 transition duration-300">
                        <div class="relative h-48">
                            <img src="https://storage.googleapis.com/a1aa/image/uekJHMxMi-fvYgdPHcXIDS0yZsiR0-xsgMt4yQ9clcE.jpg"
                                alt="Client Relationships"
                                class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500" />
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <div class="absolute bottom-4 left-4 text-white">
                                    <p class="text-sm font-medium">Goal 02</p>
                                    <p class="text-xs opacity-75">Client Success</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center space-x-3 mb-3">
                                <div class="w-10 h-10 bg-blue-50 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-handshake text-xl text-blue-500"></i>
                                </div>
                                <h3 class="text-xl font-bold">Client Relationships</h3>
                            </div>
                            <p class="text-gray-600 mb-4">
                                To foster long-term relationships with our clients by providing exceptional service and value, ensuring their satisfaction and loyalty.
                            </p>
                            <ul class="space-y-2">
                                <li class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check-circle text-blue-500 mr-2"></i>
                                    <span>Client satisfaction surveys</span>
                                </li>
                                <li class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check-circle text-blue-500 mr-2"></i>
                                    <span>Relationship management</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Innovation Card -->
                <div class="group">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:-translate-y-2 transition duration-300">
                        <div class="relative h-48">
                            <img src="https://storage.googleapis.com/a1aa/image/yKPd55IbXbVNc7FUUXwfVK4upPmoM9vmwTCfuBGMdRg.jpg"
                                alt="Innovation and Improvement"
                                class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500" />
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <div class="absolute bottom-4 left-4 text-white">
                                    <p class="text-sm font-medium">Goal 03</p>
                                    <p class="text-xs opacity-75">Continuous Innovation</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center space-x-3 mb-3">
                                <div class="w-10 h-10 bg-blue-50 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-lightbulb text-xl text-blue-500"></i>
                                </div>
                                <h3 class="text-xl font-bold">Innovation & Growth</h3>
                            </div>
                            <p class="text-gray-600 mb-4">
                                To continuously improve our processes and services through innovation, training, and the adoption of new technologies.
                            </p>
                            <ul class="space-y-2">
                                <li class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check-circle text-blue-500 mr-2"></i>
                                    <span>Technology adoption</span>
                                </li>
                                <li class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check-circle text-blue-500 mr-2"></i>
                                    <span>Staff development</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- vision section -->
    <!-- <section class="py-12 bg-gray-100 fade-in">
        <div class="container mx-auto flex flex-wrap items-center px-4">
            <div class="w-full md:w-1/2 p-4">
                <img alt="A blueprint and construction tools on a table" class="w-full h-64 object-cover rounded-lg" height="400" src="https://storage.googleapis.com/a1aa/image/P9kjMmH9qJ-culHOdUhmqxc908kaLaxjgl1yS0OqKAs.jpg" width="600" />
            </div>
            <div class="w-full md:w-1/2 p-4">
                <h3 class="text-2xl font-bold mb-4">
                    Our Vision
                </h3>
                <p class="text-gray-700 text-justify">
                    Our vision is to be the most trusted and innovative construction consulting firm, delivering exceptional value to our clients. We aim to set the standard for excellence in the industry by consistently exceeding our clients' expectations and fostering long-term relationships built on trust and mutual respect.
                </p>
            </div>
        </div>
    </section> -->
    <!-- Mission Section -->
    <!-- <section class="py-12 fade-in">
        <div class="container mx-auto flex flex-wrap items-center px-4">
            <div class="w-full md:w-1/2 p-4 order-2 md:order-1">
                <h3 class="text-2xl font-bold mb-4">
                    Our Mission
                </h3>
                <p class="text-gray-700 text-justify">
                    Our mission is to provide top-notch construction consulting services that exceed our clients' expectations. We aim to achieve this through:
                </p>
                <ul class="list-disc list-inside text-left text-gray-700 mt-4">
                    <li>Delivering high-quality and cost-effective projects on schedule.</li>
                    <li>Maintaining the highest levels of professionalism, integrity, and fairness in our relationships with our suppliers, subcontractors, and clients.</li>
                    <li>Ensuring the longevity of our company through repeat and referral business achieved by customer satisfaction in all areas including timeliness, attention to detail, and service-minded attitudes.</li>
                    <li>Providing a safe, productive, and rewarding work environment for our employees.</li>
                </ul>
            </div>
            <div class="w-full md:w-1/2 p-4 order-1 md:order-2">
                <img alt="A team of construction consultants in a meeting" class="w-full h-64 object-cover rounded-lg" height="400" src="https://storage.googleapis.com/a1aa/image/yKPd55IbXbVNc7FUUXwfVK4upPmoM9vmwTCfuBGMdRg.jpg" width="600" />
            </div>
        </div>
    </section> -->

    <!-- Goals Section -->
    <!-- <section class="py-12 bg-gray-100 fade-in">
        <div class="container mx-auto text-center px-4">
            <h2 class="text-3xl font-bold mb-6">Our Goals</h2>
            <div class="flex flex-wrap justify-center"> -->
    <!-- Card 1 -->
    <!-- <div class="w-full md:w-1/3 p-4">
                    <div class="bg-white p-6 rounded-lg shadow-lg transform hover:scale-105 hover:shadow-xl transition-transform duration-300">
                        <img alt="A construction site with cranes and building materials" class="w-full h-48 object-cover mb-4 rounded-lg" height="400" src="https://storage.googleapis.com/a1aa/image/EAWT9lUVLNKce2OGyOHHsrRGiEiejxOjuwgG_JyTQ5c.jpg" width="600" />
                        <h3 class="text-xl font-bold mb-2">Excellence in Quality</h3>
                        <p class="text-gray-700">
                            To be recognized as a leader in the construction consulting industry by consistently delivering projects that meet the highest standards of quality and safety.
                        </p>
                    </div>
                </div> -->
    <!-- Card 2 -->
    <!-- <div class="w-full md:w-1/3 p-4">
                    <div class="bg-white p-6 rounded-lg shadow-lg transform hover:scale-105 hover:shadow-xl transition-transform duration-300">
                        <img alt="A modern commercial building" class="w-full h-48 object-cover mb-4 rounded-lg" height="400" src="https://storage.googleapis.com/a1aa/image/uekJHMxMi-fvYgdPHcXIDS0yZsiR0-xsgMt4yQ9clcE.jpg" width="600" />
                        <h3 class="text-xl font-bold mb-2">Client Relationships</h3>
                        <p class="text-gray-700">
                            To foster long-term relationships with our clients by providing exceptional service and value, ensuring their satisfaction and loyalty.
                        </p>
                    </div>
                </div> -->
    <!-- Card 3 -->
    <!-- <div class="w-full md:w-1/3 p-4">
                    <div class="bg-white p-6 rounded-lg shadow-lg transform hover:scale-105 hover:shadow-xl transition-transform duration-300">
                        <img alt="A team of construction consultants in a meeting" class="w-full h-48 object-cover mb-4 rounded-lg" height="400" src="https://storage.googleapis.com/a1aa/image/yKPd55IbXbVNc7FUUXwfVK4upPmoM9vmwTCfuBGMdRg.jpg" width="600" />
                        <h3 class="text-xl font-bold mb-2">Innovation and Improvement</h3>
                        <p class="text-gray-700">
                            To continuously improve our processes and services through innovation, training, and the adoption of new technologies.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->


    <!-- Footer Section -->
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
                    <a href="https://drive.google.com/file/d/1_OuB8-CuDZPOWyo8zdetd3FRSMIm29gJ/view?usp=sharing"
                        target="_blank"
                        class="inline-flex items-center space-x-2 bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition duration-300">
                        <i class="fas fa-download"></i>
                        <span>Download Company Profile</span>
                    </a>
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

        // Update the JavaScript for menu toggle
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
    </script>
</body>

</html>