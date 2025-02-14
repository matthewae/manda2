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
            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button id="menu-toggle" class="text-gray-300 focus:outline-none text-2xl">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
        <!-- Mobile Menu -->
        <!-- Update the mobile menu HTML structure -->
        <div id="mobile-menu" class="md:hidden">
            <div class="flex flex-col h-full">
                <ul class="flex flex-col space-y-4 mt-16">
                    <li><a class="block text-lg text-gray-300 hover:text-blue-400 transition duration-300 py-2" href="/">Home</a></li>
                    <li><a class="block text-lg text-gray-300 hover:text-blue-400 transition duration-300 py-2" href="service">Services</a></li>
                    <li><a class="block text-lg text-gray-300 hover:text-blue-400 transition duration-300 py-2" href="project">Projects</a></li>
                    <li><a class="block text-lg text-gray-300 hover:text-blue-400 transition duration-300 py-2" href="team">Our Team</a></li>
                    <li><a class="block text-lg text-gray-300 hover:text-blue-400 transition duration-300 py-2" href="client">Clients</a></li>
                    <li><a class="block text-lg text-gray-300 hover:text-blue-400 transition duration-300 py-2" href="contact">Contact Us</a></li>
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

            <!-- Founders -->
            <!-- Founders Section -->
            <div class="mb-16">
                <h3 class="text-2xl font-bold mb-8">Founders</h3>
                <div class="flex flex-wrap justify-center -mx-4">
                    <!-- CEO Card -->
                    <div class="w-full md:w-1/3 p-4 card">
                        <div class="bg-white p-6 rounded-lg shadow-lg group hover:shadow-xl transition-all duration-300">
                            <div class="relative overflow-hidden rounded-lg mb-4">
                                <img
                                    alt="Portrait of John Doe, Founder and CEO"
                                    class="w-full h-64 object-cover transform group-hover:scale-105 transition duration-500"
                                    src="https://storage.googleapis.com/a1aa/image/Z4uwvphkmZKGGoxWqyz4DmpIBef1kzfxJkmLfpo2n9c.jpg" />
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="absolute bottom-4 right-4">
                                        <a href="#" class="text-white hover:text-blue-400 transition-colors duration-300">
                                            <i class="fab fa-linkedin text-2xl"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                <h3 class="text-xl font-bold mb-2 text-gray-800 group-hover:text-blue-500 transition-colors duration-300">
                                    John Doe
                                </h3>
                                <p class="text-blue-500 font-semibold mb-3">
                                    Founder & CEO
                                </p>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    John has over 20 years of experience in the construction industry and is the visionary behind our company.
                                </p>
                            </div>

                            <div class="mt-4 pt-4 border-t border-gray-100 flex justify-center space-x-4">
                                <a href="#" class="text-gray-400 hover:text-blue-500 transition-colors duration-300" title="Connect on LinkedIn">
                                    <i class="fab fa-linkedin text-xl"></i>
                                </a>
                                <a href="mailto:john@example.com" class="text-gray-400 hover:text-blue-500 transition-colors duration-300" title="Send email">
                                    <i class="fas fa-envelope text-xl"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- COO Card -->
                    <div class="w-full md:w-1/3 p-4 card">
                        <div class="bg-white p-6 rounded-lg shadow-lg group hover:shadow-xl transition-all duration-300">
                            <div class="relative overflow-hidden rounded-lg mb-4">
                                <img
                                    alt="Portrait of Jane Smith, Co-Founder and COO"
                                    class="w-full h-64 object-cover transform group-hover:scale-105 transition duration-500"
                                    src="https://storage.googleapis.com/a1aa/image/1w8b2Pk0ZBhruWcTFdXRP_QVVeiXNt-2z_7g0_XukOY.jpg" />
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="absolute bottom-4 right-4">
                                        <a href="#" class="text-white hover:text-blue-400 transition-colors duration-300">
                                            <i class="fab fa-linkedin text-2xl"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                <h3 class="text-xl font-bold mb-2 text-gray-800 group-hover:text-blue-500 transition-colors duration-300">
                                    Jane Smith
                                </h3>
                                <p class="text-blue-500 font-semibold mb-3">
                                    Co-Founder & COO
                                </p>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Jane oversees the daily operations and ensures that our projects run smoothly and efficiently.
                                </p>
                            </div>

                            <div class="mt-4 pt-4 border-t border-gray-100 flex justify-center space-x-4">
                                <a href="#" class="text-gray-400 hover:text-blue-500 transition-colors duration-300" title="Connect on LinkedIn">
                                    <i class="fab fa-linkedin text-xl"></i>
                                </a>
                                <a href="mailto:jane@example.com" class="text-gray-400 hover:text-blue-500 transition-colors duration-300" title="Send email">
                                    <i class="fas fa-envelope text-xl"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- CFO Card -->
                    <div class="w-full md:w-1/3 p-4 card">
                        <div class="bg-white p-6 rounded-lg shadow-lg group hover:shadow-xl transition-all duration-300">
                            <div class="relative overflow-hidden rounded-lg mb-4">
                                <img
                                    alt="Portrait of Michael Brown, Co-Founder and CFO"
                                    class="w-full h-64 object-cover transform group-hover:scale-105 transition duration-500"
                                    src="https://storage.googleapis.com/a1aa/image/jdzTtnwfCpb3tZFPmfMYb4ZmqV3ZysS9YqQ0uvCFnA0.jpg" />
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="absolute bottom-4 right-4">
                                        <a href="#" class="text-white hover:text-blue-400 transition-colors duration-300">
                                            <i class="fab fa-linkedin text-2xl"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                <h3 class="text-xl font-bold mb-2 text-gray-800 group-hover:text-blue-500 transition-colors duration-300">
                                    Michael Brown
                                </h3>
                                <p class="text-blue-500 font-semibold mb-3">
                                    Co-Founder & CFO
                                </p>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Michael manages the financial aspects of the company, ensuring fiscal responsibility and growth.
                                </p>
                            </div>

                            <div class="mt-4 pt-4 border-t border-gray-100 flex justify-center space-x-4">
                                <a href="#" class="text-gray-400 hover:text-blue-500 transition-colors duration-300" title="Connect on LinkedIn">
                                    <i class="fab fa-linkedin text-xl"></i>
                                </a>
                                <a href="mailto:michael@example.com" class="text-gray-400 hover:text-blue-500 transition-colors duration-300" title="Send email">
                                    <i class="fas fa-envelope text-xl"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Experts Section -->
            <div class="mb-16">
                <h3 class="text-2xl font-bold mb-8">Experts</h3>
                <div class="flex flex-wrap justify-center -mx-4">
                    <!-- Project Manager Card -->
                    <div class="w-full md:w-1/3 p-4 card">
                        <div class="bg-white p-6 rounded-lg shadow-lg group hover:shadow-xl transition-all duration-300">
                            <div class="relative overflow-hidden rounded-lg mb-4">
                                <img
                                    alt="Portrait of John Wilson, Project Manager"
                                    class="w-full h-64 object-cover transform group-hover:scale-105 transition duration-500"
                                    src="https://storage.googleapis.com/a1aa/image/58_rJirqJUCrFjbK-JRYxNxdVa23JJFoGCIq08HRlb4.jpg" />
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="absolute bottom-4 right-4">
                                        <a href="#" class="text-white hover:text-blue-400 transition-colors duration-300">
                                            <i class="fab fa-linkedin text-2xl"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                <h3 class="text-xl font-bold mb-2 text-gray-800 group-hover:text-blue-500 transition-colors duration-300">
                                    John Wilson
                                </h3>
                                <p class="text-blue-500 font-semibold mb-3">
                                    Project Manager
                                </p>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    15+ years of experience managing large-scale construction projects with exceptional results.
                                </p>
                            </div>

                            <div class="mt-4 pt-4 border-t border-gray-100 flex justify-center space-x-4">
                                <a href="#" class="text-gray-400 hover:text-blue-500 transition-colors duration-300" title="Connect on LinkedIn">
                                    <i class="fab fa-linkedin text-xl"></i>
                                </a>
                                <a href="mailto:john.wilson@example.com" class="text-gray-400 hover:text-blue-500 transition-colors duration-300" title="Send email">
                                    <i class="fas fa-envelope text-xl"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Lead Architect Card -->
                    <div class="w-full md:w-1/3 p-4 card">
                        <div class="bg-white p-6 rounded-lg shadow-lg group hover:shadow-xl transition-all duration-300">
                            <div class="relative overflow-hidden rounded-lg mb-4">
                                <img
                                    alt="Portrait of Sarah Anderson, Lead Architect"
                                    class="w-full h-64 object-cover transform group-hover:scale-105 transition duration-500"
                                    src="https://storage.googleapis.com/a1aa/image/wGh2zXMsGIMx98jqq9xCUCpIdWcUg2OEeKFE6wrSxCo.jpg" />
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="absolute bottom-4 right-4">
                                        <a href="#" class="text-white hover:text-blue-400 transition-colors duration-300">
                                            <i class="fab fa-linkedin text-2xl"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                <h3 class="text-xl font-bold mb-2 text-gray-800 group-hover:text-blue-500 transition-colors duration-300">
                                    Sarah Anderson
                                </h3>
                                <p class="text-blue-500 font-semibold mb-3">
                                    Lead Architect
                                </p>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Passionate about sustainable design and innovative architectural solutions.
                                </p>
                            </div>

                            <div class="mt-4 pt-4 border-t border-gray-100 flex justify-center space-x-4">
                                <a href="#" class="text-gray-400 hover:text-blue-500 transition-colors duration-300" title="Connect on LinkedIn">
                                    <i class="fab fa-linkedin text-xl"></i>
                                </a>
                                <a href="mailto:sarah.anderson@example.com" class="text-gray-400 hover:text-blue-500 transition-colors duration-300" title="Send email">
                                    <i class="fas fa-envelope text-xl"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Construction Supervisor Card -->
                    <div class="w-full md:w-1/3 p-4 card">
                        <div class="bg-white p-6 rounded-lg shadow-lg group hover:shadow-xl transition-all duration-300">
                            <div class="relative overflow-hidden rounded-lg mb-4">
                                <img
                                    alt="Portrait of David Chen, Construction Supervisor"
                                    class="w-full h-64 object-cover transform group-hover:scale-105 transition duration-500"
                                    src="https://storage.googleapis.com/a1aa/image/R-tpEYSnwRmxr50CpHeIbGSRqn5yZUrt2UZxLsEFXf4.jpg" />
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="absolute bottom-4 right-4">
                                        <a href="#" class="text-white hover:text-blue-400 transition-colors duration-300">
                                            <i class="fab fa-linkedin text-2xl"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                <h3 class="text-xl font-bold mb-2 text-gray-800 group-hover:text-blue-500 transition-colors duration-300">
                                    David Chen
                                </h3>
                                <p class="text-blue-500 font-semibold mb-3">
                                    Construction Supervisor
                                </p>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Ensures project quality and safety standards are met with precision and expertise.
                                </p>
                            </div>

                            <div class="mt-4 pt-4 border-t border-gray-100 flex justify-center space-x-4">
                                <a href="#" class="text-gray-400 hover:text-blue-500 transition-colors duration-300" title="Connect on LinkedIn">
                                    <i class="fab fa-linkedin text-xl"></i>
                                </a>
                                <a href="mailto:david.chen@example.com" class="text-gray-400 hover:text-blue-500 transition-colors duration-300" title="Send email">
                                    <i class="fas fa-envelope text-xl"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Staff Section -->
            <div class="mb-16">
                <h3 class="text-2xl font-bold mb-8">Staff</h3>

                <!-- First Row - 3 Cards -->
                <div class="flex flex-wrap justify-center -mx-4 mb-8">
                    <!-- Staff 1 - Admin Assistant -->
                    <div class="w-full md:w-1/3 p-4 card">
                        <div class="bg-white p-6 rounded-lg shadow-lg group hover:shadow-xl transition-all duration-300">
                            <div class="relative overflow-hidden rounded-lg mb-4">
                                <img
                                    alt="Portrait of Emily Davis, Administrative Assistant"
                                    class="w-full h-64 object-cover transform group-hover:scale-105 transition duration-500"
                                    src="https://storage.googleapis.com/a1aa/image/-BMTdgGSJ9Hi9fL1JONZS1bGjUBtAiJrDWAef3eHrPY.jpg" />
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="absolute bottom-4 right-4">
                                        <a href="#" class="text-white hover:text-blue-400 transition-colors duration-300">
                                            <i class="fab fa-linkedin text-2xl"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                <h3 class="text-xl font-bold mb-2 text-gray-800 group-hover:text-blue-500 transition-colors duration-300">
                                    Mark Andrew
                                </h3>
                                <p class="text-blue-500 font-semibold mb-3">Administrative Assistant</p>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Manages office operations and provides excellent administrative support.
                                </p>
                            </div>

                            <div class="mt-4 pt-4 border-t border-gray-100 flex justify-center space-x-4">
                                <a href="#" class="text-gray-400 hover:text-blue-500 transition-colors duration-300" title="Connect on LinkedIn">
                                    <i class="fab fa-linkedin text-xl"></i>
                                </a>
                                <a href="mailto:emily.davis@example.com" class="text-gray-400 hover:text-blue-500 transition-colors duration-300" title="Send email">
                                    <i class="fas fa-envelope text-xl"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Staff 2 - Technical Assistant -->
                    <div class="w-full md:w-1/3 p-4 card">
                        <div class="bg-white p-6 rounded-lg shadow-lg group hover:shadow-xl transition-all duration-300">
                            <div class="relative overflow-hidden rounded-lg mb-4">
                                <img
                                    alt="Portrait of Emily Davis, Administrative Assistant"
                                    class="w-full h-64 object-cover transform group-hover:scale-105 transition duration-500"
                                    src="https://storage.googleapis.com/a1aa/image/z6m57vf5iQew7k92qHzsXpDHjJi1DR3T8liAANP3UbY.jpg" />
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="absolute bottom-4 right-4">
                                        <a href="#" class="text-white hover:text-blue-400 transition-colors duration-300">
                                            <i class="fab fa-linkedin text-2xl"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                <h3 class="text-xl font-bold mb-2 text-gray-800 group-hover:text-blue-500 transition-colors duration-300">
                                    Emily Davis
                                </h3>
                                <p class="text-blue-500 font-semibold mb-3">Technical Assistant</p>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Manages office operations and provides excellent administrative support.
                                </p>
                            </div>

                            <div class="mt-4 pt-4 border-t border-gray-100 flex justify-center space-x-4">
                                <a href="#" class="text-gray-400 hover:text-blue-500 transition-colors duration-300" title="Connect on LinkedIn">
                                    <i class="fab fa-linkedin text-xl"></i>
                                </a>
                                <a href="mailto:emily.davis@example.com" class="text-gray-400 hover:text-blue-500 transition-colors duration-300" title="Send email">
                                    <i class="fas fa-envelope text-xl"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Staff 3 - Site Inspector -->
                    <div class="w-full md:w-1/3 p-4 card">
                        <div class="bg-white p-6 rounded-lg shadow-lg group hover:shadow-xl transition-all duration-300">
                            <div class="relative overflow-hidden rounded-lg mb-4">
                                <img
                                    alt="Portrait of Emily Davis, Administrative Assistant"
                                    class="w-full h-64 object-cover transform group-hover:scale-105 transition duration-500"
                                    src="https://storage.googleapis.com/a1aa/image/fv8YkifnZpn2OxU6PJ3B8Q5Jsyl9uC9MvlJelhjZifs.jpg" />
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="absolute bottom-4 right-4">
                                        <a href="#" class="text-white hover:text-blue-400 transition-colors duration-300">
                                            <i class="fab fa-linkedin text-2xl"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                <h3 class="text-xl font-bold mb-2 text-gray-800 group-hover:text-blue-500 transition-colors duration-300">
                                    Frank Johnson
                                </h3>
                                <p class="text-blue-500 font-semibold mb-3">Site Inspector</p>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Manages office operations and provides excellent administrative support.
                                </p>
                            </div>

                            <div class="mt-4 pt-4 border-t border-gray-100 flex justify-center space-x-4">
                                <a href="#" class="text-gray-400 hover:text-blue-500 transition-colors duration-300" title="Connect on LinkedIn">
                                    <i class="fab fa-linkedin text-xl"></i>
                                </a>
                                <a href="mailto:emily.davis@example.com" class="text-gray-400 hover:text-blue-500 transition-colors duration-300" title="Send email">
                                    <i class="fas fa-envelope text-xl"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Second Row - 2 Cards -->
                    <!-- Staff 4 - Safety Officer -->
                    <div class="w-full md:w-1/3 p-4 card">
                        <div class="bg-white p-6 rounded-lg shadow-lg group hover:shadow-xl transition-all duration-300">
                            <div class="relative overflow-hidden rounded-lg mb-4">
                                <img
                                    alt="Portrait of Emily Davis, Administrative Assistant"
                                    class="w-full h-64 object-cover transform group-hover:scale-105 transition duration-500"
                                    src="https://storage.googleapis.com/a1aa/image/FlEnDH2myV0hHDJFpjHIw7FeaHx3O0zloBFz1CWy6BA.jpg" />
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="absolute bottom-4 right-4">
                                        <a href="#" class="text-white hover:text-blue-400 transition-colors duration-300">
                                            <i class="fab fa-linkedin text-2xl"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                <h3 class="text-xl font-bold mb-2 text-gray-800 group-hover:text-blue-500 transition-colors duration-300">
                                    Maria Brinson
                                </h3>
                                <p class="text-blue-500 font-semibold mb-3">Safety Officer</p>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Manages office operations and provides excellent administrative support.
                                </p>
                            </div>

                            <div class="mt-4 pt-4 border-t border-gray-100 flex justify-center space-x-4">
                                <a href="#" class="text-gray-400 hover:text-blue-500 transition-colors duration-300" title="Connect on LinkedIn">
                                    <i class="fab fa-linkedin text-xl"></i>
                                </a>
                                <a href="mailto:emily.davis@example.com" class="text-gray-400 hover:text-blue-500 transition-colors duration-300" title="Send email">
                                    <i class="fas fa-envelope text-xl"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Staff 5 - Quality Control -->
                    <div class="w-full md:w-1/3 p-4 card">
                        <div class="bg-white p-6 rounded-lg shadow-lg group hover:shadow-xl transition-all duration-300">
                            <div class="relative overflow-hidden rounded-lg mb-4">
                                <img
                                    alt="Portrait of Emily Davis, Administrative Assistant"
                                    class="w-full h-64 object-cover transform group-hover:scale-105 transition duration-500"
                                    src="https://storage.googleapis.com/a1aa/image/a33wk-58zXK8TPPi7tkOj5ZnKYvMAmqBgqyC8Zr9UlI.jpg" />
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="absolute bottom-4 right-4">
                                        <a href="#" class="text-white hover:text-blue-400 transition-colors duration-300">
                                            <i class="fab fa-linkedin text-2xl"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                <h3 class="text-xl font-bold mb-2 text-gray-800 group-hover:text-blue-500 transition-colors duration-300">
                                    Kurt Morse
                                </h3>
                                <p class="text-blue-500 font-semibold mb-3">Quality Control</p>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Manages office operations and provides excellent administrative support.
                                </p>
                            </div>

                            <div class="mt-4 pt-4 border-t border-gray-100 flex justify-center space-x-4">
                                <a href="#" class="text-gray-400 hover:text-blue-500 transition-colors duration-300" title="Connect on LinkedIn">
                                    <i class="fab fa-linkedin text-xl"></i>
                                </a>
                                <a href="mailto:emily.davis@example.com" class="text-gray-400 hover:text-blue-500 transition-colors duration-300" title="Send email">
                                    <i class="fas fa-envelope text-xl"></i>
                                </a>
                            </div>
                        </div>
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
                                        <i class="fas fa-map-marker-alt mt-1 text-red-400"></i>
                                        <span class="text-gray-400">Jl. Kota Mas 1 No.18, Kota Cimahi, Jawa Barat, 40511</span>
                                    </li>
                                    <li class="flex items-center space-x-3">
                                        <i class="fas fa-phone text-white-400"></i>
                                        <span class="text-gray-400">+62 852 2080 1593</span>
                                    </li>
                                    <li class="flex items-center space-x-3">
                                        <i class="fas fa-envelope text-white-400"></i>
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
                                        class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-sky-700 transition duration-300">
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
                                    <a href="privacy" class="text-gray-400 hover:text-blue-400 transition duration-300 mx-2">Privacy Policy</a>
                                    <span class="text-gray-600">|</span>
                                    <a href="term" class="text-gray-400 hover:text-blue-400 transition duration-300 mx-2">Terms of Service</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <script>
                    // Replace the existing mobile menu JavaScript
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