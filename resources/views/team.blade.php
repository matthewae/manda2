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
    </style>
</head>

<body class="font-roboto">
    <!-- Navbar -->
    <nav class="navbar p-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <img alt="Company logo" class="h-12 w-12 company-logo" src="{{ url('images/Logo FI.png') }}" />
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

    <!-- Our Team Section -->
    <!-- <section class="py-16 bg-gradient-to-b from-gray-100 to-white fade-in">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold mb-4">Meet Our Team</h2>
                <div class="w-24 h-1 bg-blue-500 mx-auto mb-6"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Our diverse team of experts brings together years of experience and dedication to deliver exceptional results
                </p>
            </div> -->

    <!-- Leadership Team -->
    <!-- <div class="mb-16">
                <h3 class="text-2xl font-bold mb-8 text-center">Leadership Team</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    Leaders Card Template -->
    <!-- <div class="group">
                        <div class="relative overflow-hidden rounded-xl bg-white shadow-lg transform hover:-translate-y-2 transition duration-500">
                            <div class="relative h-80">
                                <img alt="Portrait of John Doe, Founder and CEO"
                                    class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500"
                                    src="https://storage.googleapis.com/a1aa/image/Z4uwvphkmZKGGoxWqyz4DmpIBef1kzfxJkmLfpo2n9c.jpg" />
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-1">John Doe</h3>
                                <p class="text-blue-500 font-semibold mb-3">Founder & CEO</p>
                                <p class="text-gray-600 text-sm mb-4">
                                    John has over 20 years of experience in the construction industry and is the visionary behind our company.
                                </p>
                                <div class="flex space-x-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <a href="#" class="text-gray-400 hover:text-blue-500 transition-colors duration-300">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                    <a href="#" class="text-gray-400 hover:text-blue-500 transition-colors duration-300">
                                        <i class="fas fa-envelope"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> -->
    <!-- Repeat for other leadership team members -->
    <!-- <div class="group">
                        <div class="relative overflow-hidden rounded-xl bg-white shadow-lg transform hover:-translate-y-2 transition duration-500">
                            <div class="relative h-80">
                                <img alt="Portrait of John Doe, Founder and CEO"
                                    class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500"
                                    src="https://storage.googleapis.com/a1aa/image/Z4uwvphkmZKGGoxWqyz4DmpIBef1kzfxJkmLfpo2n9c.jpg" />
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-1">John Doe</h3>
                                <p class="text-blue-500 font-semibold mb-3">Founder & CEO</p>
                                <p class="text-gray-600 text-sm mb-4">
                                    John has over 20 years of experience in the construction industry and is the visionary behind our company.
                                </p>
                                <div class="flex space-x-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <a href="#" class="text-gray-400 hover:text-blue-500 transition-colors duration-300">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                    <a href="#" class="text-gray-400 hover:text-blue-500 transition-colors duration-300">
                                        <i class="fas fa-envelope"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="group">
                        <div class="relative overflow-hidden rounded-xl bg-white shadow-lg transform hover:-translate-y-2 transition duration-500">
                            <div class="relative h-80">
                                <img alt="Portrait of John Doe, Founder and CEO"
                                    class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500"
                                    src="https://storage.googleapis.com/a1aa/image/Z4uwvphkmZKGGoxWqyz4DmpIBef1kzfxJkmLfpo2n9c.jpg" />
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-1">John Doe</h3>
                                <p class="text-blue-500 font-semibold mb-3">Founder & CEO</p>
                                <p class="text-gray-600 text-sm mb-4">
                                    John has over 20 years of experience in the construction industry and is the visionary behind our company.
                                </p>
                                <div class="flex space-x-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <a href="#" class="text-gray-400 hover:text-blue-500 transition-colors duration-300">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                    <a href="#" class="text-gray-400 hover:text-blue-500 transition-colors duration-300">
                                        <i class="fas fa-envelope"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

    <!-- Experts Section -->
    <!-- <div class="mb-16">
                <h3 class="text-2xl font-bold mb-8 text-center">Our Experts</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6"> -->
    <!-- Expert Card Template -->
    <!-- <div class="group">
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:-translate-y-2 transition duration-300">
                            <div class="relative h-64">
                                <img alt="Portrait of Expert"
                                    class="w-full h-full object-cover"
                                    src="https://storage.googleapis.com/a1aa/image/58_rJirqJUCrFjbK-JRYxNxdVa23JJFoGCIq08HRlb4.jpg" />
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="absolute bottom-4 left-4 text-white">
                                        <p class="text-sm font-medium">Project Manager</p>
                                        <p class="text-xs opacity-75">15+ years experience</p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4">
                                <h4 class="font-bold mb-1">John Doe</h4>
                                <p class="text-sm text-gray-600">Specializes in large-scale construction management</p>
                            </div>
                        </div>
                    </div> -->
    <!-- Repeat for other experts -->
    <!-- <div class="group">
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:-translate-y-2 transition duration-300">
                            <div class="relative h-64">
                                <img alt="Portrait of Expert"
                                    class="w-full h-full object-cover"
                                    src="https://storage.googleapis.com/a1aa/image/58_rJirqJUCrFjbK-JRYxNxdVa23JJFoGCIq08HRlb4.jpg" />
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="absolute bottom-4 left-4 text-white">
                                        <p class="text-sm font-medium">Project Manager</p>
                                        <p class="text-xs opacity-75">15+ years experience</p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4">
                                <h4 class="font-bold mb-1">John Doe</h4>
                                <p class="text-sm text-gray-600">Specializes in large-scale construction management</p>
                            </div>
                        </div>
                    </div>
                    <div class="group">
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:-translate-y-2 transition duration-300">
                            <div class="relative h-64">
                                <img alt="Portrait of Expert"
                                    class="w-full h-full object-cover"
                                    src="https://storage.googleapis.com/a1aa/image/58_rJirqJUCrFjbK-JRYxNxdVa23JJFoGCIq08HRlb4.jpg" />
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="absolute bottom-4 left-4 text-white">
                                        <p class="text-sm font-medium">Project Manager</p>
                                        <p class="text-xs opacity-75">15+ years experience</p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4">
                                <h4 class="font-bold mb-1">John Doe</h4>
                                <p class="text-sm text-gray-600">Specializes in large-scale construction management</p>
                            </div>
                        </div>
                    </div>
                    <div class="group">
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:-translate-y-2 transition duration-300">
                            <div class="relative h-64">
                                <img alt="Portrait of Expert"
                                    class="w-full h-full object-cover"
                                    src="https://storage.googleapis.com/a1aa/image/58_rJirqJUCrFjbK-JRYxNxdVa23JJFoGCIq08HRlb4.jpg" />
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="absolute bottom-4 left-4 text-white">
                                        <p class="text-sm font-medium">Project Manager</p>
                                        <p class="text-xs opacity-75">15+ years experience</p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4">
                                <h4 class="font-bold mb-1">John Doe</h4>
                                <p class="text-sm text-gray-600">Specializes in large-scale construction management</p>
                            </div>
                        </div>
                    </div>
                    <div class="group">
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:-translate-y-2 transition duration-300">
                            <div class="relative h-64">
                                <img alt="Portrait of Expert"
                                    class="w-full h-full object-cover"
                                    src="https://storage.googleapis.com/a1aa/image/58_rJirqJUCrFjbK-JRYxNxdVa23JJFoGCIq08HRlb4.jpg" />
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="absolute bottom-4 left-4 text-white">
                                        <p class="text-sm font-medium">Project Manager</p>
                                        <p class="text-xs opacity-75">15+ years experience</p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4">
                                <h4 class="font-bold mb-1">John Doe</h4>
                                <p class="text-sm text-gray-600">Specializes in large-scale construction management</p>
                            </div>
                        </div>
                    </div>
                    <div class="group">
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:-translate-y-2 transition duration-300">
                            <div class="relative h-64">
                                <img alt="Portrait of Expert"
                                    class="w-full h-full object-cover"
                                    src="https://storage.googleapis.com/a1aa/image/58_rJirqJUCrFjbK-JRYxNxdVa23JJFoGCIq08HRlb4.jpg" />
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="absolute bottom-4 left-4 text-white">
                                        <p class="text-sm font-medium">Project Manager</p>
                                        <p class="text-xs opacity-75">15+ years experience</p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4">
                                <h4 class="font-bold mb-1">John Doe</h4>
                                <p class="text-sm text-gray-600">Specializes in large-scale construction management</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

    <!-- Staff Section -->
    <!-- <div>
                <h3 class="text-2xl font-bold mb-8 text-center">Supporting Team</h3>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6"> -->
    <!-- Staff Card Template -->
    <!-- <div class="group">
                        <div class="bg-white rounded-lg shadow-md p-4 hover:shadow-xl transition duration-300">
                            <div class="relative w-20 h-20 mx-auto mb-3">
                                <img alt="Staff Member"
                                    class="w-full h-full object-cover rounded-full"
                                    src="https://storage.googleapis.com/a1aa/image/Koaws9GC3mBe5rIzrAdn9ELXnUdG7b7D6mlPuAdNyNA.jpg" />
                            </div>
                            <div class="text-center">
                                <h4 class="font-semibold mb-1">Sarah Johnson</h4>
                                <p class="text-sm text-gray-500">Financial Analyst</p>
                            </div>
                        </div>
                    </div> -->
    <!-- Repeat for other staff members -->
    <!-- <div class="group">
                        <div class="bg-white rounded-lg shadow-md p-4 hover:shadow-xl transition duration-300">
                            <div class="relative w-20 h-20 mx-auto mb-3">
                                <img alt="Staff Member"
                                    class="w-full h-full object-cover rounded-full"
                                    src="https://storage.googleapis.com/a1aa/image/Koaws9GC3mBe5rIzrAdn9ELXnUdG7b7D6mlPuAdNyNA.jpg" />
                            </div>
                            <div class="text-center">
                                <h4 class="font-semibold mb-1">Sarah Johnson</h4>
                                <p class="text-sm text-gray-500">Financial Analyst</p>
                            </div>
                        </div>
                    </div>
                    <div class="group">
                        <div class="bg-white rounded-lg shadow-md p-4 hover:shadow-xl transition duration-300">
                            <div class="relative w-20 h-20 mx-auto mb-3">
                                <img alt="Staff Member"
                                    class="w-full h-full object-cover rounded-full"
                                    src="https://storage.googleapis.com/a1aa/image/Koaws9GC3mBe5rIzrAdn9ELXnUdG7b7D6mlPuAdNyNA.jpg" />
                            </div>
                            <div class="text-center">
                                <h4 class="font-semibold mb-1">Sarah Johnson</h4>
                                <p class="text-sm text-gray-500">Financial Analyst</p>
                            </div>
                        </div>
                    </div>
                    <div class="group">
                        <div class="bg-white rounded-lg shadow-md p-4 hover:shadow-xl transition duration-300">
                            <div class="relative w-20 h-20 mx-auto mb-3">
                                <img alt="Staff Member"
                                    class="w-full h-full object-cover rounded-full"
                                    src="https://storage.googleapis.com/a1aa/image/Koaws9GC3mBe5rIzrAdn9ELXnUdG7b7D6mlPuAdNyNA.jpg" />
                            </div>
                            <div class="text-center">
                                <h4 class="font-semibold mb-1">Sarah Johnson</h4>
                                <p class="text-sm text-gray-500">Financial Analyst</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Our Team Section -->
    <section class="py-12 bg-gray-100 fade-in mt-24"> <!-- Added mt-24 class -->
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
            <h3 class="text-2xl font-bold mb-4">
                Founders
            </h3>
            <div class="flex flex-wrap justify-center mb-12">
                <div class="w-full md:w-1/3 p-4 card">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img alt="Portrait of John Doe, Founder and CEO" class="w-full h-64 object-cover mb-4" height="256" src="https://storage.googleapis.com/a1aa/image/Z4uwvphkmZKGGoxWqyz4DmpIBef1kzfxJkmLfpo2n9c.jpg" width="300" />
                        <h3 class="text-xl font-bold mb-2">
                            John Doe
                        </h3>
                        <p class="text-gray-700 mb-2">
                            Founder &amp; CEO
                        </p>
                        <p class="text-gray-700">
                            John has over 20 years of experience in the construction industry and is the visionary behind our company.
                        </p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 p-4 card">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img alt="Portrait of Jane Smith, Co-Founder and COO" class="w-full h-64 object-cover mb-4" height="256" src="https://storage.googleapis.com/a1aa/image/1w8b2Pk0ZBhruWcTFdXRP_QVVeiXNt-2z_7g0_XukOY.jpg" width="300" />
                        <h3 class="text-xl font-bold mb-2">
                            Jane Smith
                        </h3>
                        <p class="text-gray-700 mb-2">
                            Co-Founder &amp; COO
                        </p>
                        <p class="text-gray-700">
                            Jane oversees the daily operations and ensures that our projects run smoothly and efficiently.
                        </p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 p-4 card">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img alt="Portrait of Michael Brown, Co-Founder and CFO" class="w-full h-64 object-cover mb-4" height="256" src="https://storage.googleapis.com/a1aa/image/jdzTtnwfCpb3tZFPmfMYb4ZmqV3ZysS9YqQ0uvCFnA0.jpg" width="300" />
                        <h3 class="text-xl font-bold mb-2">
                            Michael Brown
                        </h3>
                        <p class="text-gray-700 mb-2">
                            Co-Founder &amp; CFO
                        </p>
                        <p class="text-gray-700">
                            Michael manages the financial aspects of the company, ensuring fiscal responsibility and growth.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Experts -->
            <h3 class="text-2xl font-bold mb-4">
                Experts
            </h3>
            <div class="flex flex-wrap justify-center mb-12">
                <div class="w-full md:w-1/3 p-4 card">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img alt="Portrait of John Doe, Project Manager" class="w-full h-48 object-cover mb-4" height="192" src="https://storage.googleapis.com/a1aa/image/58_rJirqJUCrFjbK-JRYxNxdVa23JJFoGCIq08HRlb4.jpg" width="300" />
                        <h3 class="text-xl font-bold mb-2">
                            John Doe
                        </h3>
                        <p class="text-gray-700 mb-2">
                            Project Manager
                        </p>
                        <p class="text-gray-700">
                            John has over 15 years of experience in project management and has successfully led numerous large-scale construction projects.
                        </p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 p-4 card">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img alt="Portrait of Jane Smith, Lead Architect" class="w-full h-48 object-cover mb-4" height="192" src="https://storage.googleapis.com/a1aa/image/wGh2zXMsGIMx98jqq9xCUCpIdWcUg2OEeKFE6wrSxCo.jpg" width="300" />
                        <h3 class="text-xl font-bold mb-2">
                            Jane Smith
                        </h3>
                        <p class="text-gray-700 mb-2">
                            Lead Architect
                        </p>
                        <p class="text-gray-700">
                            Jane is a highly skilled architect with a passion for sustainable design and innovative solutions.
                        </p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 p-4 card">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img alt="Portrait of Michael Brown, Construction Supervisor" class="w-full h-48 object-cover mb-4" height="192" src="https://storage.googleapis.com/a1aa/image/R-tpEYSnwRmxr50CpHeIbGSRqn5yZUrt2UZxLsEFXf4.jpg" width="300" />
                        <h3 class="text-xl font-bold mb-2">
                            Michael Brown
                        </h3>
                        <p class="text-gray-700 mb-2">
                            Construction Supervisor
                        </p>
                        <p class="text-gray-700">
                            Michael has extensive experience in construction supervision and ensures that all projects meet the highest standards of quality and safety.
                        </p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 p-4 card">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img alt="Portrait of Emily Davis, Design Consultant" class="w-full h-48 object-cover mb-4" height="192" src="https://storage.googleapis.com/a1aa/image/C6ENz2is4itlf83cvngelGU0Q7PjAW1V3xPlpq6hRKU.jpg" width="300" />
                        <h3 class="text-xl font-bold mb-2">
                            Emily Davis
                        </h3>
                        <p class="text-gray-700 mb-2">
                            Design Consultant
                        </p>
                        <p class="text-gray-700">
                            Emily specializes in creating functional and aesthetically pleasing spaces that meet the unique needs of each client.
                        </p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 p-4 card">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img alt="Portrait of David Wilson, Quality Assurance Manager" class="w-full h-48 object-cover mb-4" height="192" src="https://storage.googleapis.com/a1aa/image/8cpUC2nHxvKBPxWe52qQcb_PZFPsF4k3PQ-d3Jo7ymQ.jpg" width="300" />
                        <h3 class="text-xl font-bold mb-2">
                            David Wilson
                        </h3>
                        <p class="text-gray-700 mb-2">
                            Quality Assurance Manager
                        </p>
                        <p class="text-gray-700">
                            David is dedicated to ensuring that all construction projects adhere to the highest standards of quality and safety.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Staff -->
            <h3 class="text-2xl font-bold mb-4">
                Staff
            </h3>
            <div class="flex flex-wrap justify-center">
                <div class="w-full md:w-1/3 p-4 card">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img alt="Portrait of Sarah Johnson, Financial Analyst" class="w-full h-48 object-cover mb-4" height="192" src="https://storage.googleapis.com/a1aa/image/Koaws9GC3mBe5rIzrAdn9ELXnUdG7b7D6mlPuAdNyNA.jpg" width="300" />
                        <h3 class="text-xl font-bold mb-2">
                            Sarah Johnson
                        </h3>
                        <p class="text-gray-700 mb-2">
                            Financial Analyst
                        </p>
                        <p class="text-gray-700">
                            Sarah provides financial analysis and budgeting expertise to ensure the financial success of our projects.
                        </p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 p-4 card">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img alt="Portrait of John Doe, Staff Member" class="w-full h-48 object-cover mb-4" height="192" src="https://storage.googleapis.com/a1aa/image/a33wk-58zXK8TPPi7tkOj5ZnKYvMAmqBgqyC8Zr9UlI.jpg" width="300" />
                        <h3 class="text-xl font-bold mb-2">
                            John Doe
                        </h3>
                        <p class="text-gray-700 mb-2">
                            Staff Member
                        </p>
                        <p class="text-gray-700">
                            John is a dedicated team member who supports various projects and ensures smooth operations.
                        </p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 p-4 card">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img alt="Portrait of Jane Smith, Staff Member" class="w-full h-48 object-cover mb-4" height="192" src="https://storage.googleapis.com/a1aa/image/FlEnDH2myV0hHDJFpjHIw7FeaHx3O0zloBFz1CWy6BA.jpg" width="300" />
                        <h3 class="text-xl font-bold mb-2">
                            Jane Smith
                        </h3>
                        <p class="text-gray-700 mb-2">
                            Staff Member
                        </p>
                        <p class="text-gray-700">
                            Jane is a key player in our team, contributing her skills and expertise to various projects.
                        </p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 p-4 card">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img alt="Portrait of Michael Brown, Staff Member" class="w-full h-48 object-cover mb-4" height="192" src="https://storage.googleapis.com/a1aa/image/fv8YkifnZpn2OxU6PJ3B8Q5Jsyl9uC9MvlJelhjZifs.jpg" width="300" />
                        <h3 class="text-xl font-bold mb-2">
                            Michael Brown
                        </h3>
                        <p class="text-gray-700 mb-2">
                            Staff Member
                        </p>
                        <p class="text-gray-700">
                            Michael is a reliable team member who ensures that all tasks are completed efficiently.
                        </p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 p-4 card">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img alt="Portrait of Emily Davis, Staff Member" class="w-full h-48 object-cover mb-4" height="192" src="https://storage.googleapis.com/a1aa/image/z6m57vf5iQew7k92qHzsXpDHjJi1DR3T8liAANP3UbY.jpg" width="300" />
                        <h3 class="text-xl font-bold mb-2">
                            Emily Davis
                        </h3>
                        <p class="text-gray-700 mb-2">
                            Staff Member
                        </p>
                        <p class="text-gray-700">
                            Emily is a dedicated team member who supports various projects and ensures smooth operations.
                        </p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 p-4 card">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img alt="Portrait of David Wilson, Staff Member" class="w-full h-48 object-cover mb-4" height="192" src="https://storage.googleapis.com/a1aa/image/-BMTdgGSJ9Hi9fL1JONZS1bGjUBtAiJrDWAef3eHrPY.jpg" width="300" />
                        <h3 class="text-xl font-bold mb-2">
                            David Wilson
                        </h3>
                        <p class="text-gray-700 mb-2">
                            Staff Member
                        </p>
                        <p class="text-gray-700">
                            David is a key player in our team, contributing his skills and expertise to various projects.
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
                        <img src="{{ url('images/Logo FI.png') }}" alt="MRK Logo" class="h-10 w-10">
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