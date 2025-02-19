<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Industrial Building Project</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }

        .fade-in {
            animation: fadeIn 0.5s ease-in;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }
    </style>
</head>

<body class="bg-gray-50">

    <!-- Back to Projects Button -->
    <a href="/project"
        class="fixed bottom-8 right-8 bg-blue-500 text-white p-4 rounded-full shadow-lg hover:bg-blue-600 transition-all duration-300 z-50 group">
        <i class="fas fa-th text-xl group-hover:scale-110 transition-transform"></i>
        <span class="absolute right-full mr-2 bg-gray-900 text-white px-2 py-1 rounded text-sm whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity">
            Back to Projects
        </span>
    </a>

    <!-- Hero Section -->
    <header class="relative h-[60vh] overflow-hidden">
        <img src="{{ url('images/industrial.jpg') }}"
            alt="Industrial Building Project"
            class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/50">
            <div class="container mx-auto px-4 h-full flex items-end pb-16">
                <div class="text-white fade-in">
                    <span class="px-4 py-2 bg-blue-500 rounded-full text-sm">Industrial Project</span>
                    <h1 class="text-5xl font-bold mt-4 mb-2">Modern Industrial Complex</h1>
                    <p class="text-xl text-gray-200">State-of-the-art industrial facility with advanced manufacturing capabilities</p>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="py-16">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                <!-- Left Column - Main Content -->
                <div class="lg:col-span-2">
                    <section class="bg-white p-8 rounded-xl shadow-lg mb-8">
                        <h2 class="text-3xl font-bold mb-6">Project Overview</h2>
                        <p class="text-gray-600 leading-relaxed mb-8">
                            Our industrial complex represents the future of manufacturing facilities.
                            With advanced automation systems and sustainable practices, this facility
                            sets new standards for industrial architecture and operational efficiency.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                            <div class="aspect-[4/3] overflow-hidden rounded-lg shadow-lg">
                                <img src="{{ url('images/stsinter.jpeg') }}"
                                    alt="Station Interior"
                                    class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                            </div>
                            <div class="aspect-[4/3] overflow-hidden rounded-lg shadow-lg">
                                <img src="{{ url('images/stexter.jpeg') }}"
                                    alt="Train Platform"
                                    class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                            </div>
                        </div>
                        <div class="mt-8">
                            <h3 class="text-2xl font-bold mb-4">Facility Features</h3>
                            <ul class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <li class="flex items-center gap-2 text-gray-600">
                                    <i class="fas fa-check-circle text-green-500"></i>
                                    Automated Production Lines
                                </li>
                                <li class="flex items-center gap-2 text-gray-600">
                                    <i class="fas fa-check-circle text-green-500"></i>
                                    Advanced Security Systems
                                </li>
                                <li class="flex items-center gap-2 text-gray-600">
                                    <i class="fas fa-check-circle text-green-500"></i>
                                    Energy Efficient Design
                                </li>
                                <li class="flex items-center gap-2 text-gray-600">
                                    <i class="fas fa-check-circle text-green-500"></i>
                                    Loading Bay Facilities
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>

                <!-- Right Column - Sidebar -->
                <aside class="lg:col-span-1">
                    <div class="sticky top-8 space-y-6">
                        <!-- Project Info Card -->
                        <div class="bg-white p-6 rounded-xl shadow-lg">
                            <h3 class="text-xl font-bold mb-4">Project Information</h3>
                            <ul class="space-y-3 text-gray-600">
                                <li class="flex justify-between">
                                    <span>Location:</span>
                                    <span>Industrial Zone</span>
                                </li>
                                <li class="flex justify-between">
                                    <span>Status:</span>
                                    <span class="text-green-500">Operational</span>
                                </li>
                                <li class="flex justify-between">
                                    <span>Completion:</span>
                                    <span>2024</span>
                                </li>
                                <li class="flex justify-between">
                                    <span>Area:</span>
                                    <span>100,000 sqft</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Contact Card -->
                        <div class="bg-blue-50 p-6 rounded-xl shadow-lg">
                            <h3 class="text-xl font-bold mb-4">Interested?</h3>
                            <p class="text-gray-600 mb-6">
                                Contact us to learn more about our industrial facilities or discuss your manufacturing needs.
                            </p>
                            <a href="/contact"
                                class="block text-center bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-600 transition duration-300">
                                Contact Us
                            </a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-16">
        <div class="container mx-auto px-4">
            <!-- Navigation -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 border-b border-gray-700 pb-8 md:pb-12 mb-8 md:mb-12">
                <!-- Previous Project - Mobile Optimized -->
                <a href="/articleRES" class="group block p-4 md:p-0 bg-gray-800/50 md:bg-transparent rounded-lg md:rounded-none hover:bg-gray-800 md:hover:bg-transparent transition-colors">
                    <div class="flex flex-col md:block">
                        <span class="text-gray-400 text-xs md:text-sm mb-2 md:mb-0"></span>
                        <div class="flex items-center gap-3">
                            <i class="fas fa-arrow-left text-sm md:text-base group-hover:-translate-x-2 transition-transform"></i>
                            <span class="text-base md:text-xl font-medium">Residential Complex</span>
                        </div>
                    </div>
                </a>

                <!-- Next Project - Mobile Optimized -->
                <a href="/articleINF" class="group block p-4 md:p-0 bg-gray-800/50 md:bg-transparent rounded-lg md:rounded-none hover:bg-gray-800 md:hover:bg-transparent transition-colors">
                    <div class="flex flex-col items-end md:block">
                        <span class="text-gray-400 text-xs md:text-sm mb-2 md:mb-0"></span>
                        <div class="flex items-center justify-end gap-3">
                            <span class="text-base md:text-xl font-medium">Infrastructure Project</span>
                            <i class="fas fa-arrow-right text-sm md:text-base group-hover:translate-x-2 transition-transform"></i>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Footer Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div>
                    <h4 class="text-xl font-bold mb-4">About This Project</h4>
                    <p class="text-gray-400">
                        A cutting-edge industrial facility designed to meet modern manufacturing
                        demands while maintaining environmental responsibility.
                    </p>
                </div>

                <div>
                    <h4 class="text-xl font-bold mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li>
                            <a href="#" class="hover:text-blue-400 transition-colors flex items-center gap-2">
                                <i class="fas fa-file-pdf"></i>
                                Download Specifications
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-blue-400 transition-colors flex items-center gap-2">
                                <i class="fas fa-images"></i>
                                View Gallery
                            </a>
                        </li>
                        <li>
                            <a href="/contact" class="hover:text-blue-400 transition-colors flex items-center gap-2">
                                <i class="fas fa-envelope"></i>
                                Contact Team
                            </a>
                        </li>
                    </ul>
                </div>

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
                </div>
            </div>

            <!-- Copyright -->
            <div class="text-center text-gray-500 mt-12 pt-8 border-t border-gray-700">
                <p>&copy; 2022 Mandajaya Rekayasa Konstruksi. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>

</html>