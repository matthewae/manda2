<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Train Station Project</title>
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
        <img src="{{ url('images/infra.jpeg') }}"
            alt="Train Station Project"
            class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/50">
            <div class="container mx-auto px-4 h-full flex items-end pb-16">
                <div class="text-white fade-in">
                    <span class="px-4 py-2 bg-blue-500 rounded-full text-sm">Infrastructure Project</span>
                    <h1 class="text-5xl font-bold mt-4 mb-2">Modern Train Station Development</h1>
                    <p class="text-xl text-gray-200">Revolutionizing public transportation with state-of-the-art facilities</p>
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
                            Our cutting-edge train station project represents a major leap forward in public transportation
                            infrastructure. This multi-modal transit hub combines modern architecture with advanced
                            technology to create a seamless travel experience for thousands of daily commuters.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                            <img src="{{ url('images/infra-bridge.jpg') }}"
                                alt="Station Interior"
                                class="rounded-lg shadow-lg">
                            <img src="{{ url('images/infra-road.jpg') }}"
                                alt="Train Platform"
                                class="rounded-lg shadow-lg">
                        </div>
                        <div class="mt-8">
                            <h3 class="text-2xl font-bold mb-4">Station Features</h3>
                            <ul class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <li class="flex items-center gap-2 text-gray-600">
                                    <i class="fas fa-train text-blue-500"></i>
                                    6 Train Platforms
                                </li>
                                <li class="flex items-center gap-2 text-gray-600">
                                    <i class="fas fa-shopping-bag text-blue-500"></i>
                                    Commercial Area
                                </li>
                                <li class="flex items-center gap-2 text-gray-600">
                                    <i class="fas fa-parking text-blue-500"></i>
                                    500-Car Parking
                                </li>
                                <li class="flex items-center gap-2 text-gray-600">
                                    <i class="fas fa-wheelchair text-blue-500"></i>
                                    Full Accessibility
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
                                    <span>Central District</span>
                                </li>
                                <li class="flex justify-between">
                                    <span>Status:</span>
                                    <span class="text-yellow-500">In Progress</span>
                                </li>
                                <li class="flex justify-between">
                                    <span>Completion:</span>
                                    <span>2025</span>
                                </li>
                                <li class="flex justify-between">
                                    <span>Daily Capacity:</span>
                                    <span>50,000 passengers</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Transportation Impact -->
                        <div class="bg-blue-50 p-6 rounded-xl shadow-lg">
                            <h3 class="text-xl font-bold mb-4">Station Benefits</h3>
                            <ul class="space-y-3 text-gray-600">
                                <li class="flex items-center gap-2">
                                    <i class="fas fa-clock text-blue-500"></i>
                                    Faster Transit Times
                                </li>
                                <li class="flex items-center gap-2">
                                    <i class="fas fa-map-marker-alt text-blue-500"></i>
                                    Central Location
                                </li>
                                <li class="flex items-center gap-2">
                                    <i class="fas fa-leaf text-blue-500"></i>
                                    Eco-Friendly Design
                                </li>
                            </ul>
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
                <a href="/articleIND" class="group block p-4 md:p-0 bg-gray-800/50 md:bg-transparent rounded-lg md:rounded-none hover:bg-gray-800 md:hover:bg-transparent transition-colors">
                    <div class="flex flex-col md:block">
                        <span class="text-gray-400 text-xs md:text-sm mb-2 md:mb-0"></span>
                        <div class="flex items-center gap-3">
                            <i class="fas fa-arrow-left text-sm md:text-base group-hover:-translate-x-2 transition-transform"></i>
                            <span class="text-base md:text-xl font-medium">Industrial Complex</span>
                        </div>
                    </div>
                </a>

                <!-- Next Project - Mobile Optimized -->
                <a href="/articleHOS" class="group block p-4 md:p-0 bg-gray-800/50 md:bg-transparent rounded-lg md:rounded-none hover:bg-gray-800 md:hover:bg-transparent transition-colors">
                    <div class="flex flex-col items-end md:block">
                        <span class="text-gray-400 text-xs md:text-sm mb-2 md:mb-0"></span>
                        <div class="flex items-center justify-end gap-3">
                            <span class="text-base md:text-xl font-medium">Healthcare Facility</span>
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
                        A modern train station development designed to transform public transportation
                        and enhance connectivity in the urban landscape.
                    </p>
                </div>

                <div>
                    <h4 class="text-xl font-bold mb-4">Resources</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li>
                            <a href="#" class="hover:text-blue-400 transition-colors flex items-center gap-2">
                                <i class="fas fa-file-pdf"></i>
                                Station Layout
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-blue-400 transition-colors flex items-center gap-2">
                                <i class="fas fa-images"></i>
                                Construction Progress
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