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
                <button id="menu-toggle" class="text-gray-300 hover:text-white focus:outline-none p-2 rounded-lg">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>

            <!-- Mobile Menu -->
            <!-- Update the mobile menu HTML structure -->
            <div id="mobile-menu">
                <div class="container px-4 py-2">
                    <ul class="flex flex-col space-y-4">
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
                    <button class="px-6 py-2 rounded-full bg-blue-500 text-white hover:bg-blue-600 transition duration-300">All</button>
                    <button class="px-6 py-2 rounded-full bg-gray-200 text-gray-700 hover:bg-blue-500 hover:text-white transition duration-300">Commercial</button>
                    <button class="px-6 py-2 rounded-full bg-gray-200 text-gray-700 hover:bg-blue-500 hover:text-white transition duration-300">Residential</button>
                    <button class="px-6 py-2 rounded-full bg-gray-200 text-gray-700 hover:bg-blue-500 hover:text-white transition duration-300">Industrial</button>
                    <button class="px-6 py-2 rounded-full bg-gray-200 text-gray-700 hover:bg-blue-500 hover:text-white transition duration-300">Healthcare</button>
                </div>
            </div>

            <!-- Projects Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project Card Template -->
                <div class="group relative overflow-hidden rounded-xl bg-white shadow-lg hover:shadow-xl transition duration-300">
                    <div class="relative overflow-hidden aspect-w-16 aspect-h-9">
                        <img alt="Commercial Building"
                            src="https://storage.googleapis.com/a1aa/image/seYcKjF8wP_Wk6O1puBWMiqbQI2rmvp166DUnlAtO8g.jpg"
                            class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition duration-300">
                            <div class="absolute bottom-4 left-4 right-4">
                                <span class="px-3 py-1 bg-blue-500 text-white text-sm rounded-full">Commercial</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 group-hover:text-blue-500 transition duration-300">Commercial Building</h3>
                        <p class="text-gray-600 mb-4 line-clamp-2">A state-of-the-art commercial building designed and managed by our expert team.</p>
                        <button onclick="showOverlay('Commercial Building', 'A state-of-the-art commercial building designed and managed by our expert team.', 'https://storage.googleapis.com/a1aa/image/seYcKjF8wP_Wk6O1puBWMiqbQI2rmvp166DUnlAtO8g.jpg', 'This commercial building features modern architecture and is equipped with the latest technology to support various business needs.')"
                            class="text-blue-500 hover:text-blue-600 transition duration-300 flex items-center gap-2">
                            Learn More
                            <i class="fas fa-arrow-right text-sm transition-transform group-hover:translate-x-1"></i>
                        </button>
                    </div>
                </div>
                <!-- Repeat for other projects -->
                <div class="group relative overflow-hidden rounded-xl bg-white shadow-lg hover:shadow-xl transition duration-300">
                    <div class="relative overflow-hidden aspect-w-16 aspect-h-9">
                        <img alt="Commercial Building"
                            src="https://storage.googleapis.com/a1aa/image/seYcKjF8wP_Wk6O1puBWMiqbQI2rmvp166DUnlAtO8g.jpg"
                            class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition duration-300">
                            <div class="absolute bottom-4 left-4 right-4">
                                <span class="px-3 py-1 bg-blue-500 text-white text-sm rounded-full">Commercial</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 group-hover:text-blue-500 transition duration-300">Commercial Building</h3>
                        <p class="text-gray-600 mb-4 line-clamp-2">A state-of-the-art commercial building designed and managed by our expert team.</p>
                        <button onclick="showOverlay('Commercial Building', 'A state-of-the-art commercial building designed and managed by our expert team.', 'https://storage.googleapis.com/a1aa/image/seYcKjF8wP_Wk6O1puBWMiqbQI2rmvp166DUnlAtO8g.jpg', 'This commercial building features modern architecture and is equipped with the latest technology to support various business needs.')"
                            class="text-blue-500 hover:text-blue-600 transition duration-300 flex items-center gap-2">
                            Learn More
                            <i class="fas fa-arrow-right text-sm transition-transform group-hover:translate-x-1"></i>
                        </button>
                    </div>
                </div>
                <div class="group relative overflow-hidden rounded-xl bg-white shadow-lg hover:shadow-xl transition duration-300">
                    <div class="relative overflow-hidden aspect-w-16 aspect-h-9">
                        <img alt="Commercial Building"
                            src="https://storage.googleapis.com/a1aa/image/seYcKjF8wP_Wk6O1puBWMiqbQI2rmvp166DUnlAtO8g.jpg"
                            class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition duration-300">
                            <div class="absolute bottom-4 left-4 right-4">
                                <span class="px-3 py-1 bg-blue-500 text-white text-sm rounded-full">Commercial</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 group-hover:text-blue-500 transition duration-300">Commercial Building</h3>
                        <p class="text-gray-600 mb-4 line-clamp-2">A state-of-the-art commercial building designed and managed by our expert team.</p>
                        <button onclick="showOverlay('Commercial Building', 'A state-of-the-art commercial building designed and managed by our expert team.', 'https://storage.googleapis.com/a1aa/image/seYcKjF8wP_Wk6O1puBWMiqbQI2rmvp166DUnlAtO8g.jpg', 'This commercial building features modern architecture and is equipped with the latest technology to support various business needs.')"
                            class="text-blue-500 hover:text-blue-600 transition duration-300 flex items-center gap-2">
                            Learn More
                            <i class="fas fa-arrow-right text-sm transition-transform group-hover:translate-x-1"></i>
                        </button>
                    </div>
                </div>
                <div class="group relative overflow-hidden rounded-xl bg-white shadow-lg hover:shadow-xl transition duration-300">
                    <div class="relative overflow-hidden aspect-w-16 aspect-h-9">
                        <img alt="Commercial Building"
                            src="https://storage.googleapis.com/a1aa/image/seYcKjF8wP_Wk6O1puBWMiqbQI2rmvp166DUnlAtO8g.jpg"
                            class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition duration-300">
                            <div class="absolute bottom-4 left-4 right-4">
                                <span class="px-3 py-1 bg-blue-500 text-white text-sm rounded-full">Commercial</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 group-hover:text-blue-500 transition duration-300">Commercial Building</h3>
                        <p class="text-gray-600 mb-4 line-clamp-2">A state-of-the-art commercial building designed and managed by our expert team.</p>
                        <button onclick="showOverlay('Commercial Building', 'A state-of-the-art commercial building designed and managed by our expert team.', 'https://storage.googleapis.com/a1aa/image/seYcKjF8wP_Wk6O1puBWMiqbQI2rmvp166DUnlAtO8g.jpg', 'This commercial building features modern architecture and is equipped with the latest technology to support various business needs.')"
                            class="text-blue-500 hover:text-blue-600 transition duration-300 flex items-center gap-2">
                            Learn More
                            <i class="fas fa-arrow-right text-sm transition-transform group-hover:translate-x-1"></i>
                        </button>
                    </div>
                </div>
                <div class="group relative overflow-hidden rounded-xl bg-white shadow-lg hover:shadow-xl transition duration-300">
                    <div class="relative overflow-hidden aspect-w-16 aspect-h-9">
                        <img alt="Commercial Building"
                            src="https://storage.googleapis.com/a1aa/image/seYcKjF8wP_Wk6O1puBWMiqbQI2rmvp166DUnlAtO8g.jpg"
                            class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition duration-300">
                            <div class="absolute bottom-4 left-4 right-4">
                                <span class="px-3 py-1 bg-blue-500 text-white text-sm rounded-full">Commercial</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 group-hover:text-blue-500 transition duration-300">Commercial Building</h3>
                        <p class="text-gray-600 mb-4 line-clamp-2">A state-of-the-art commercial building designed and managed by our expert team.</p>
                        <button onclick="showOverlay('Commercial Building', 'A state-of-the-art commercial building designed and managed by our expert team.', 'https://storage.googleapis.com/a1aa/image/seYcKjF8wP_Wk6O1puBWMiqbQI2rmvp166DUnlAtO8g.jpg', 'This commercial building features modern architecture and is equipped with the latest technology to support various business needs.')"
                            class="text-blue-500 hover:text-blue-600 transition duration-300 flex items-center gap-2">
                            Learn More
                            <i class="fas fa-arrow-right text-sm transition-transform group-hover:translate-x-1"></i>
                        </button>
                    </div>
                </div>
                <div class="group relative overflow-hidden rounded-xl bg-white shadow-lg hover:shadow-xl transition duration-300">
                    <div class="relative overflow-hidden aspect-w-16 aspect-h-9">
                        <img alt="Commercial Building"
                            src="https://storage.googleapis.com/a1aa/image/seYcKjF8wP_Wk6O1puBWMiqbQI2rmvp166DUnlAtO8g.jpg"
                            class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition duration-300">
                            <div class="absolute bottom-4 left-4 right-4">
                                <span class="px-3 py-1 bg-blue-500 text-white text-sm rounded-full">Commercial</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 group-hover:text-blue-500 transition duration-300">Commercial Building</h3>
                        <p class="text-gray-600 mb-4 line-clamp-2">A state-of-the-art commercial building designed and managed by our expert team.</p>
                        <button onclick="showOverlay('Commercial Building', 'A state-of-the-art commercial building designed and managed by our expert team.', 'https://storage.googleapis.com/a1aa/image/seYcKjF8wP_Wk6O1puBWMiqbQI2rmvp166DUnlAtO8g.jpg', 'This commercial building features modern architecture and is equipped with the latest technology to support various business needs.')"
                            class="text-blue-500 hover:text-blue-600 transition duration-300 flex items-center gap-2">
                            Learn More
                            <i class="fas fa-arrow-right text-sm transition-transform group-hover:translate-x-1"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Projects Section -->
            <!-- <section class="py-16 bg-gradient-to-b from-gray-100 to-white fade-in mt-24"> <!-- Added mt-24 for navbar spacing -->
            <!-- <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold mb-4">Our Projects</h2>
                <div class="w-24 h-1 bg-blue-500 mx-auto mb-6"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Explore our diverse portfolio of successful projects across various sectors
                </p>
            </div> -->
            <!-- Commercial Building -->
            <!-- <div class="w-full md:w-1/3 p-4 card" onclick="showOverlay('Commercial Building', 'A state-of-the-art commercial building designed and managed by our expert team.', 'https://storage.googleapis.com/a1aa/image/seYcKjF8wP_Wk6O1puBWMiqbQI2rmvp166DUnlAtO8g.jpg', 'This commercial building features modern architecture and is equipped with the latest technology to support various business needs. The building includes multiple floors of office space, retail areas, and a spacious lobby. It is designed to be energy-efficient and environmentally friendly, with solar panels and a rainwater harvesting system.')">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img alt="A modern commercial building" class="w-full h-48 object-cover mb-4" src="https://storage.googleapis.com/a1aa/image/seYcKjF8wP_Wk6O1puBWMiqbQI2rmvp166DUnlAtO8g.jpg" />
                    <h3 class="text-xl font-bold mb-2">Commercial Building</h3>
                    <p class="text-gray-700 mb-4">A state-of-the-art commercial building designed and managed by our expert team.</p>
                </div>
            </div> -->
            <!-- Residential Complex -->
            <!-- <div class="w-full md:w-1/3 p-4 card" onclick="showOverlay('Residential Complex', 'A luxury residential complex featuring modern amenities and sustainable design.', 'https://storage.googleapis.com/a1aa/image/fV8LLHNOLa443yshurbQ0Zy-uUJeUW_YsVfNbFbJ5zY.jpg', 'This residential complex offers a blend of luxury and sustainability, with eco-friendly materials and energy-efficient systems. The complex includes multiple apartment buildings, a community center, swimming pools, and landscaped gardens. Residents enjoy modern amenities such as a gym, playgrounds, and 24/7 security.')">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img alt="A luxury residential complex" class="w-full h-48 object-cover mb-4" src="https://storage.googleapis.com/a1aa/image/fV8LLHNOLa443yshurbQ0Zy-uUJeUW_YsVfNbFbJ5zY.jpg" />
                    <h3 class="text-xl font-bold mb-2">Residential Complex</h3>
                    <p class="text-gray-700 mb-4">A luxury residential complex featuring modern amenities and sustainable design.</p>
                </div>
            </div> -->
            <!-- Industrial Facility -->
            <!-- <div class="w-full md:w-1/3 p-4 card" onclick="showOverlay('Industrial Facility', 'A high-tech industrial facility built to meet the needs of modern manufacturing.', 'https://storage.googleapis.com/a1aa/image/BRMUZitZ8CbAo1ZZYxgEj4kBzBMkBLsMyNtW5sEl5Z8.jpg', 'This facility is designed to support advanced manufacturing processes with state-of-the-art machinery and infrastructure. It includes large production halls, storage areas, and administrative offices. The facility is equipped with advanced safety systems and is designed to minimize environmental impact.')">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img alt="An industrial facility with machinery" class="w-full h-48 object-cover mb-4" src="https://storage.googleapis.com/a1aa/image/BRMUZitZ8CbAo1ZZYxgEj4kBzBMkBLsMyNtW5sEl5Z8.jpg" />
                    <h3 class="text-xl font-bold mb-2">Industrial Facility</h3>
                    <p class="text-gray-700 mb-4">A high-tech industrial facility built to meet the needs of modern manufacturing.</p>
                </div>
            </div> -->
            <!-- Office Building -->
            <!-- <div class="w-full md:w-1/3 p-4 card" onclick="showOverlay('Office Building', 'A modern office building equipped with the latest technology and amenities.', 'https://storage.googleapis.com/a1aa/image/i-_V8lIUBcHc_esQyLRv1GnYgjIcgX5MSU4xfONih3w.jpg', 'This office building provides a productive work environment with cutting-edge technology and comfortable workspaces. It includes open-plan offices, meeting rooms, a cafeteria, and recreational areas. The building is designed to foster collaboration and innovation, with high-speed internet and smart building systems.')">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img alt="A modern office building" class="w-full h-48 object-cover mb-4" height="400" src="https://storage.googleapis.com/a1aa/image/i-_V8lIUBcHc_esQyLRv1GnYgjIcgX5MSU4xfONih3w.jpg" width="600" />
                    <h3 class="text-xl font-bold mb-2">Office Building</h3>
                    <p class="text-gray-700 mb-4">A modern office building equipped with the latest technology and amenities.</p>
                </div>
            </div> -->
            <!-- Shopping Mall -->
            <!-- <div class="w-full md:w-1/3 p-4 card" onclick="showOverlay('Shopping Mall', 'A large shopping mall featuring a variety of stores and entertainment options.', 'https://storage.googleapis.com/a1aa/image/fGX5baB8NlBwH-4e-QmwVwbf5AdXUi-gerg4uhYM5R0.jpg', 'This shopping mall offers a diverse range of retail stores, dining options, and entertainment facilities for all ages. It includes a cinema, food court, and play areas for children. The mall is designed to provide a comfortable and enjoyable shopping experience, with ample parking and modern amenities.')">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img alt="A large shopping mall" class="w-full h-48 object-cover mb-4" height="400" src="https://storage.googleapis.com/a1aa/image/fGX5baB8NlBwH-4e-QmwVwbf5AdXUi-gerg4uhYM5R0.jpg" width="600" />
                    <h3 class="text-xl font-bold mb-2">Shopping Mall</h3>
                    <p class="text-gray-700 mb-4">A large shopping mall featuring a variety of stores and entertainment options.</p>
                </div>
            </div> -->
            <!-- Hospital -->
            <!-- <div class="w-full md:w-1/3 p-4 card" onclick="showOverlay('Hospital', 'A modern hospital equipped with state-of-the-art medical facilities.', 'https://storage.googleapis.com/a1aa/image/__YoXUDSrp4MeARDysUEoln0CtH8FPGZyCd-JMbG7BM.jpg', 'This hospital is designed to provide top-notch medical care with advanced equipment and highly trained staff. It includes emergency rooms, operating theaters, patient wards, and specialized clinics. The hospital is equipped with the latest medical technology and follows strict safety and hygiene protocols.')">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img alt="A modern hospital building" class="w-full h-48 object-cover mb-4" height="400" src="https://storage.googleapis.com/a1aa/image/__YoXUDSrp4MeARDysUEoln0CtH8FPGZyCd-JMbG7BM.jpg" width="600" />
                    <h3 class="text-xl font-bold mb-2">Hospital</h3>
                    <p class="text-gray-700 mb-4">A modern hospital equipped with state-of-the-art medical facilities.</p>
                </div>
            </div>
        </div>
        </div> -->
    </section>

    <!-- Overlay -->
    <div class="overlay" id="overlay">
        <div class="overlay-content">
            <button class="text-red-500 hover:text-red-700 float-right" onclick="closeOverlay()">
                <i class="fas fa-times"></i>
            </button>
            <img alt="Overlay image" class="w-full h-48 object-cover rounded-lg mb-4" height="192" id="overlay-img" src="https://storage.googleapis.com/a1aa/image/prt_JyBmYB3zq83EKZFxxoH5q86eIxm5hlypQ8WrBR0.jpg" width="300" />
            <h3 class="text-2xl font-bold mb-4" id="overlay-title">Title</h3>
            <p class="text-gray-700 mb-4" id="overlay-desc">Description</p>
            <p class="text-gray-700" id="overlay-detail">Detailed description</p>
        </div>
    </div>

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
        function showOverlay(title, description, imgSrc, detail) {
            document.getElementById('overlay-title').innerText = title;
            document.getElementById('overlay-desc').innerText = description;
            document.getElementById('overlay-img').src = imgSrc;
            document.getElementById('overlay-detail').innerText = detail;
            const overlay = document.getElementById('overlay');
            overlay.classList.add('open');
        }

        function closeOverlay() {
            document.getElementById('overlay').classList.remove('open');
        }

        // mobile
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









<!-- <script>
        function initMap(mapId, lat, lng) {
            var map = L.map(mapId).setView([lat, lng], 15);
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; OpenStreetMap contributors'
            }).addTo(map);
            L.marker([lat, lng]).addTo(map);
        }

        document.addEventListener("DOMContentLoaded", function() {
            initMap("map1", -6.9175, 107.6191);
            initMap("map2", -6.9214, 107.6079);
            initMap("map3", -6.9308, 107.6186);
        });
    </script> -->


<!-- <section class="py-12 bg-gray-100 fade-in">
        <div class="container mx-auto text-center px-4">
            <h2 class="text-3xl font-bold mb-6">Our Projects</h2>
            <div class="flex flex-wrap justify-center">
                <!-- Commercial Building -->
<!-- <div class="w-full md:w-1/3 p-4 card"> -->
<!-- <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img alt="A modern commercial building" class="w-full h-48 object-cover mb-4"
                            src="https://storage.googleapis.com/a1aa/image/seYcKjF8wP_Wk6O1puBWMiqbQI2rmvp166DUnlAtO8g.jpg" />
                        <h3 class="text-xl font-bold mb-2">Commercial Building</h3>
                        <p class="text-gray-700 mb-4">
                            A state-of-the-art commercial building designed and managed by our expert team.
                        </p> -->
<!-- <div id="map1" class="map-container"></div> -->
<!-- </div>
                </div> --> -->

<!-- Residential Complex -->
<!-- <div class="w-full md:w-1/3 p-4 card">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img alt="A luxury residential complex" class="w-full h-48 object-cover mb-4"
                            src="https://storage.googleapis.com/a1aa/image/fV8LLHNOLa443yshurbQ0Zy-uUJeUW_YsVfNbFbJ5zY.jpg" />
                        <h3 class="text-xl font-bold mb-2">Residential Complex</h3>
                        <p class="text-gray-700 mb-4">
                            A luxury residential complex featuring modern amenities and sustainable design.
                        </p>
                        <!-- <div id="map2" class="map-container"></div> -->
<!-- </div>
                </div> --> -->

<!-- Industrial Facility -->
<!-- <div class="w-full md:w-1/3 p-4 card">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img alt="An industrial facility with machinery" class="w-full h-48 object-cover mb-4"
                            src="https://storage.googleapis.com/a1aa/image/BRMUZitZ8CbAo1ZZYxgEj4kBzBMkBLsMyNtW5sEl5Z8.jpg" />
                        <h3 class="text-xl font-bold mb-2">Industrial Facility</h3>
                        <p class="text-gray-700 mb-4">
                            A high-tech industrial facility built to meet the needs of modern manufacturing.
                        </p>
                        <!-- <div id="map3" class="map-container"></div> -->
<!-- </div>
                </div>
            </div>
        </div>
    </section> --> -->