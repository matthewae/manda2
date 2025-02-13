<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        Mandajaya Rekayasa Konstruksi - Services
    </title>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&amp;display=swap" rel="stylesheet" />
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

        .service-box:hover {
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
    </style>
</head>

<body class="font-montserrat">
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
                <button class="text-gray-300 focus:outline-none text-2xl" id="menu-toggle">
                    <i class="fas fa-bars">
                    </i>
                </button>
            </div>
        </div>
        <!-- Mobile Menu -->
        <ul class="hidden md:hidden flex flex-col space-y-3 mt-4 bg-gray-800 p-4 rounded-lg shadow-lg" id="mobile-menu">
            <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="/">Home</a></li>
            <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="service">Services</a></li>
            <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="project">Projects</a></li>
            <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="team">Our Team</a></li>
            <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="client">Clients</a></li>
            <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="contact">Contact Us</a></li>
            <!-- Company Profile Button for Mobile -->
            <li>
                <a class="border border-blue-500 text-blue-500 px-5 py-2 rounded-lg hover:bg-blue-500 hover:text-white transition duration-300 text-center" href="https://drive.google.com/file/d/1_OuB8-CuDZPOWyo8zdetd3FRSMIm29gJ/view?usp=sharing" target="_blank">
                    Company Profile
                </a>
            </li>
        </ul>
    </nav>

    <!-- Services Section -->
    <section class="py-16 bg-gradient-to-b from-gray-100 to-white fade-in mt-24">
        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold mb-4">Our Services</h2>
                <div class="w-24 h-1 bg-blue-500 mx-auto mb-6"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    We provide comprehensive construction consulting services tailored to meet your project needs
                </p>
            </div>

            <!-- Service Overview Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-8 mb-16">
                <!-- Project Management Card -->
                <div class="bg-white rounded-xl shadow-lg p-6 transform hover:-translate-y-2 transition duration-300">
                    <div class="w-16 h-16 bg-blue-50 rounded-lg mb-6 flex items-center justify-center">
                        <i class="fas fa-tasks text-3xl text-blue-500"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Project Management</h3>
                    <p class="text-gray-600 mb-4">Comprehensive project planning and execution for optimal results.</p>
                    <a href="#project-management" class="text-blue-500 hover:text-blue-600 flex items-center">
                        Learn More <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>

                <!-- Design Consultation Card -->
                <div class="bg-white rounded-xl shadow-lg p-6 transform hover:-translate-y-2 transition duration-300">
                    <div class="w-16 h-16 bg-blue-50 rounded-lg mb-6 flex items-center justify-center">
                        <i class="fas fa-drafting-compass text-3xl text-blue-500"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Design Consultation</h3>
                    <p class="text-gray-600 mb-4">Expert design solutions that blend functionality with aesthetics.</p>
                    <a href="#design-consultation" class="text-blue-500 hover:text-blue-600 flex items-center">
                        Learn More <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>

                <!-- Construction Supervision Card -->
                <div class="bg-white rounded-xl shadow-lg p-6 transform hover:-translate-y-2 transition duration-300">
                    <div class="w-16 h-16 bg-blue-50 rounded-lg mb-6 flex items-center justify-center">
                        <i class="fas fa-hard-hat text-3xl text-blue-500"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Construction Supervision</h3>
                    <p class="text-gray-600 mb-4">Thorough oversight ensuring quality and compliance throughout construction.</p>
                    <a href="#construction-supervision" class="text-blue-500 hover:text-blue-600 flex items-center">
                        Learn More <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>

                <!-- Quality Assurance Card -->
                <div class="bg-white rounded-xl shadow-lg p-6 transform hover:-translate-y-2 transition duration-300">
                    <div class="w-16 h-16 bg-blue-50 rounded-lg mb-6 flex items-center justify-center">
                        <i class="fas fa-clipboard-check text-3xl text-blue-500"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Quality Assurance</h3>
                    <p class="text-gray-600 mb-4">Rigorous quality control standards for superior project outcomes.</p>
                    <a href="#quality-assurance" class="text-blue-500 hover:text-blue-600 flex items-center">
                        Learn More <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>

                <!-- Cost Estimation Card -->
                <div class="bg-white rounded-xl shadow-lg p-6 transform hover:-translate-y-2 transition duration-300">
                    <div class="w-16 h-16 bg-blue-50 rounded-lg mb-6 flex items-center justify-center">
                        <i class="fas fa-calculator text-3xl text-blue-500"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Cost Estimation</h3>
                    <p class="text-gray-600 mb-4">Accurate project cost analysis and budgeting services.</p>
                    <a href="#cost-estimation" class="text-blue-500 hover:text-blue-600 flex items-center">
                        Learn More <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>

                <!-- Contract Administration Card -->
                <div class="bg-white rounded-xl shadow-lg p-6 transform hover:-translate-y-2 transition duration-300">
                    <div class="w-16 h-16 bg-blue-50 rounded-lg mb-6 flex items-center justify-center">
                        <i class="fas fa-file-contract text-3xl text-blue-500"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Contract Administration</h3>
                    <p class="text-gray-600 mb-4">Comprehensive contract management and compliance services.</p>
                    <a href="#contract-administration" class="text-blue-500 hover:text-blue-600 flex items-center">
                        Learn More <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>

                <!-- Sustainability Consulting Card -->
                <div class="bg-white rounded-xl shadow-lg p-6 transform hover:-translate-y-2 transition duration-300">
                    <div class="w-16 h-16 bg-blue-50 rounded-lg mb-6 flex items-center justify-center">
                        <i class="fas fa-leaf text-3xl text-blue-500"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Sustainability Consulting</h3>
                    <p class="text-gray-600 mb-4">Green building and sustainable development solutions.</p>
                    <a href="#sustainability-consulting" class="text-blue-500 hover:text-blue-600 flex items-center">
                        Learn More <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>

            <!-- Detailed Service Sections -->
            <div class="space-y-24">
                <!-- Project Management Section -->
                <div id="project-management" class="scroll-mt-24">
                    <div class="grid md:grid-cols-2 gap-12 items-center">
                        <div class="relative">
                            <img src="https://storage.googleapis.com/a1aa/image/6uX7DH_UdlYTo8lGIrgYHyS9ltoithyUY4ZwL3ayTQ4.jpg"
                                alt="Project management team discussing plans"
                                class="rounded-lg shadow-xl w-full h-[400px] object-cover transform hover:scale-105 transition duration-500" />
                            <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-blue-500 rounded-lg opacity-10 z-0"></div>
                        </div>
                        <div class="space-y-6">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-blue-50 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-tasks text-2xl text-blue-500"></i>
                                </div>
                                <h3 class="text-2xl font-bold">Project Management</h3>
                            </div>
                            <p class="text-gray-700 leading-relaxed">
                                Our project management services ensure your construction projects are completed on time,
                                within budget, and to the highest quality standards. We provide:
                            </p>
                            <ul class="space-y-3 text-gray-600">
                                <li class="flex items-center space-x-3">
                                    <i class="fas fa-check-circle text-blue-500"></i>
                                    <span>Comprehensive planning and coordination</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <i class="fas fa-check-circle text-blue-500"></i>
                                    <span>Resource and schedule management</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <i class="fas fa-check-circle text-blue-500"></i>
                                    <span>Risk assessment and mitigation</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <i class="fas fa-check-circle text-blue-500"></i>
                                    <span>Stakeholder communication</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Repeat similar structure for other services -->
                <!-- Design Consultation Section -->
                <div id="design-consultation" class="scroll-mt-24">
                    <div class="grid md:grid-cols-2 gap-12 items-center">
                        <div class="relative order-2 md:order-2">
                            <img src="https://storage.googleapis.com/a1aa/image/Mtzk_0i-wvNSq3E1X0vZsetVrXnh6q78IsdzDzYNlQQ.jpg"
                                alt="Design consultation with blueprints"
                                class="rounded-lg shadow-xl w-full h-[400px] object-cover transform hover:scale-105 transition duration-500" />
                            <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-blue-500 rounded-lg opacity-10 z-0"></div>
                        </div>
                        <div class="space-y-6 order-1 md:order-1">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-blue-50 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-drafting-compass text-2xl text-blue-500"></i>
                                </div>
                                <h3 class="text-2xl font-bold">Design Consultation</h3>
                            </div>
                            <p class="text-gray-700 leading-relaxed">
                                Our expert design consultation services help create functional and aesthetically pleasing spaces that meet your specific requirements.
                            </p>
                            <ul class="space-y-3 text-gray-600">
                                <li class="flex items-center space-x-3">
                                    <i class="fas fa-check-circle text-blue-500"></i>
                                    <span>3D visualization and modeling</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <i class="fas fa-check-circle text-blue-500"></i>
                                    <span>Material and finish selection</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <i class="fas fa-check-circle text-blue-500"></i>
                                    <span>Building code compliance</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <i class="fas fa-check-circle text-blue-500"></i>
                                    <span>Sustainable design solutions</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Construction Supervision Section -->
                <div id="construction-supervision" class="scroll-mt-24">
                    <div class="grid md:grid-cols-2 gap-12 items-center">
                        <div class="relative">
                            <img src="https://storage.googleapis.com/a1aa/image/gy0ekscxTGJT9LsrsvJLDnLz16xboHeTBQhkKdiu7pQ.jpg"
                                alt="Construction supervision in action"
                                class="rounded-lg shadow-xl w-full h-[400px] object-cover transform hover:scale-105 transition duration-500" />
                            <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-blue-500 rounded-lg opacity-10 z-0"></div>
                        </div>
                        <div class="space-y-6">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-blue-50 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-hard-hat text-2xl text-blue-500"></i>
                                </div>
                                <h3 class="text-2xl font-bold">Construction Supervision</h3>
                            </div>
                            <p class="text-gray-700 leading-relaxed">
                                Ensuring all construction activities meet the highest standards of quality and safety through rigorous oversight.
                            </p>
                            <ul class="space-y-3 text-gray-600">
                                <li class="flex items-center space-x-3">
                                    <i class="fas fa-check-circle text-blue-500"></i>
                                    <span>On-site progress monitoring</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <i class="fas fa-check-circle text-blue-500"></i>
                                    <span>Quality control inspections</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <i class="fas fa-check-circle text-blue-500"></i>
                                    <span>Safety protocol enforcement</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <i class="fas fa-check-circle text-blue-500"></i>
                                    <span>Contractor coordination</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Quality Assurance Section -->
                <div id="quality-assurance" class="scroll-mt-24">
                    <div class="grid md:grid-cols-2 gap-12 items-center">
                        <div class="relative order-2 md:order-2">
                            <img src="https://storage.googleapis.com/a1aa/image/5GeLStJhXeIzCZz6r3NfaKNUojKTk22cx0Wdxzxwg2Q.jpg"
                                alt="Quality assurance inspection"
                                class="rounded-lg shadow-xl w-full h-[400px] object-cover transform hover:scale-105 transition duration-500" />
                            <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-blue-500 rounded-lg opacity-10 z-0"></div>
                        </div>
                        <div class="space-y-6 order-1 md:order-1">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-blue-50 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-clipboard-check text-2xl text-blue-500"></i>
                                </div>
                                <h3 class="text-2xl font-bold">Quality Assurance</h3>
                            </div>
                            <p class="text-gray-700 leading-relaxed">
                                Implementing comprehensive quality control processes to ensure excellence in every aspect of construction.
                            </p>
                            <ul class="space-y-3 text-gray-600">
                                <li class="flex items-center space-x-3">
                                    <i class="fas fa-check-circle text-blue-500"></i>
                                    <span>Material testing and verification</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <i class="fas fa-check-circle text-blue-500"></i>
                                    <span>Workmanship inspection</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <i class="fas fa-check-circle text-blue-500"></i>
                                    <span>Documentation and reporting</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <i class="fas fa-check-circle text-blue-500"></i>
                                    <span>Compliance verification</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Cost Estimation Section -->
                <div id="cost-estimation" class="scroll-mt-24">
                    <div class="grid md:grid-cols-2 gap-12 items-center">
                        <div class="relative">
                            <img src="https://storage.googleapis.com/a1aa/image/vSRoNd1TNFNWlbmyBh-pzDdlaIMGpyBttqGyBIjTdAM.jpg"
                                alt="Cost estimation team analyzing project costs"
                                class="rounded-lg shadow-xl w-full h-[400px] object-cover transform hover:scale-105 transition duration-500" />
                            <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-blue-500 rounded-lg opacity-10 z-0"></div>
                        </div>
                        <div class="space-y-6">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-blue-50 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-calculator text-2xl text-blue-500"></i>
                                </div>
                                <h3 class="text-2xl font-bold">Cost Estimation</h3>
                            </div>
                            <p class="text-gray-700 leading-relaxed">
                                Providing accurate and detailed cost projections to help you plan and manage your construction budget effectively.
                            </p>
                            <ul class="space-y-3 text-gray-600">
                                <li class="flex items-center space-x-3">
                                    <i class="fas fa-check-circle text-blue-500"></i>
                                    <span>Detailed quantity takeoffs</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <i class="fas fa-check-circle text-blue-500"></i>
                                    <span>Material and labor cost analysis</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <i class="fas fa-check-circle text-blue-500"></i>
                                    <span>Value engineering options</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <i class="fas fa-check-circle text-blue-500"></i>
                                    <span>Budget optimization strategies</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Contract Administration Section -->
                <div id="contract-administration" class="scroll-mt-24">
                    <div class="grid md:grid-cols-2 gap-12 items-center">
                        <div class="relative order-2 md:order-2">
                            <img src="https://storage.googleapis.com/a1aa/image/eTg-aMXKwKecyXLE26BBZE26rYG4psckkPw44NGO9CY.jpg"
                                alt="Contract administration team reviewing documents"
                                class="rounded-lg shadow-xl w-full h-[400px] object-cover transform hover:scale-105 transition duration-500" />
                            <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-blue-500 rounded-lg opacity-10 z-0"></div>
                        </div>
                        <div class="space-y-6 order-1 md:order-1">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-blue-50 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-file-contract text-2xl text-blue-500"></i>
                                </div>
                                <h3 class="text-2xl font-bold">Contract Administration</h3>
                            </div>
                            <p class="text-gray-700 leading-relaxed">
                                Managing all aspects of construction contracts to ensure compliance and successful project delivery.
                            </p>
                            <ul class="space-y-3 text-gray-600">
                                <li class="flex items-center space-x-3">
                                    <i class="fas fa-check-circle text-blue-500"></i>
                                    <span>Contract document preparation</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <i class="fas fa-check-circle text-blue-500"></i>
                                    <span>Change order management</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <i class="fas fa-check-circle text-blue-500"></i>
                                    <span>Payment certification</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <i class="fas fa-check-circle text-blue-500"></i>
                                    <span>Dispute resolution</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Sustainability Consulting Section -->
                <div id="sustainability-consulting" class="scroll-mt-24">
                    <div class="grid md:grid-cols-2 gap-12 items-center">
                        <div class="relative">
                            <img src="https://storage.googleapis.com/a1aa/image/zrMvXUGQbzDMl4N_CXGDI3o8Rsq2VDkPq5yHp_Ls5zE.jpg"
                                alt="Sustainability consulting team discussing eco-friendly solutions"
                                class="rounded-lg shadow-xl w-full h-[400px] object-cover transform hover:scale-105 transition duration-500" />
                            <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-blue-500 rounded-lg opacity-10 z-0"></div>
                        </div>
                        <div class="space-y-6">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-blue-50 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-leaf text-2xl text-blue-500"></i>
                                </div>
                                <h3 class="text-2xl font-bold">Sustainability Consulting</h3>
                            </div>
                            <p class="text-gray-700 leading-relaxed">
                                Helping you create environmentally responsible buildings through sustainable design and construction practices.
                            </p>
                            <ul class="space-y-3 text-gray-600">
                                <li class="flex items-center space-x-3">
                                    <i class="fas fa-check-circle text-blue-500"></i>
                                    <span>Green building certification</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <i class="fas fa-check-circle text-blue-500"></i>
                                    <span>Energy efficiency analysis</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <i class="fas fa-check-circle text-blue-500"></i>
                                    <span>Sustainable material selection</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <i class="fas fa-check-circle text-blue-500"></i>
                                    <span>Environmental impact assessment</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <!-- <section class="py-12 fade-in">
        <div class="container mx-auto text-center px-4">
            <h2 class="text-3xl font-bold mb-6">
                Our Services
            </h2>
        </div>
    </section> -->
    <!-- Project Management Section -->
    <!-- <section class="py-12 bg-gray-100 fade-in">
        <div class="container mx-auto flex flex-wrap items-center px-4">
            <div class="w-full md:w-1/2 p-4">
                <img alt="Project management team discussing plans" class="w-full h-96 object-cover rounded-lg" height="600" src="https://storage.googleapis.com/a1aa/image/6uX7DH_UdlYTo8lGIrgYHyS9ltoithyUY4ZwL3ayTQ4.jpg" width="600" />
            </div>
            <div class="w-full md:w-1/2 p-4">
                <h3 class="text-2xl font-bold mb-4">
                    Project Management
                </h3>
                <p class="text-gray-700 text-justify">
                    Our project management services are designed to ensure that your construction projects are completed on time,
                    within budget, and to the highest quality standards. We provide comprehensive planning, coordination, and control
                    of a project from inception to completion. Our experienced project managers use the latest tools and techniques
                    to manage resources, schedules, and budgets effectively. We also ensure that all stakeholders are kept informed
                    and engaged throughout the project lifecycle, minimizing risks and maximizing success.
                </p>
            </div>
        </div>
    </section> -->
    <!-- Design Consultation Section -->
    <!-- <section class="py-12 fade-in">
        <div class="container mx-auto flex flex-wrap items-center px-4">
            <div class="w-full md:w-1/2 p-4 order-2 md:order-1">
                <h3 class="text-2xl font-bold mb-4">
                    Design Consultation
                </h3>
                <p class="text-gray-700 text-justify">
                    Our design consultation services help you create functional and aesthetically pleasing spaces that meet your
                    specific needs and preferences. We work closely with you to understand your vision and provide expert advice on
                    design concepts, materials, and finishes. Our team of skilled designers and architects use the latest design
                    software to create detailed plans and 3D models, allowing you to visualize the final result before construction begins.
                    We also ensure that all designs comply with relevant building codes and regulations, ensuring a smooth and
                    hassle-free construction process.
                </p>
            </div>
            <div class="w-full md:w-1/2 p-4 order-1 md:order-2">
                <img alt="Design consultation with blueprints and samples" class="w-full h-96 object-cover rounded-lg" height="600" src="https://storage.googleapis.com/a1aa/image/Mtzk_0i-wvNSq3E1X0vZsetVrXnh6q78IsdzDzYNlQQ.jpg" width="600" />
            </div>
        </div>
    </section> -->
    <!-- Construction Supervision Section -->
    <!-- <section class="py-12 bg-gray-100 fade-in">
        <div class="container mx-auto flex flex-wrap items-center px-4">
            <div class="w-full md:w-1/2 p-4">
                <img alt="Construction supervisor inspecting site" class="w-full h-96 object-cover rounded-lg" height="600" src="https://storage.googleapis.com/a1aa/image/gy0ekscxTGJT9LsrsvJLDnLz16xboHeTBQhkKdiu7pQ.jpg" width="600" />
            </div>
            <div class="w-full md:w-1/2 p-4">
                <h3 class="text-2xl font-bold mb-4">
                    Construction Supervision
                </h3>
                <p class="text-gray-700 text-justify">
                    Our construction supervision services ensure that all construction activities are carried out to the highest
                    standards of quality and safety. Our experienced supervisors are on-site to monitor progress, inspect workmanship,
                    and ensure compliance with project specifications and building codes. We also coordinate with contractors, suppliers,
                    and other stakeholders to resolve any issues that may arise during construction. Our goal is to ensure that your
                    project is completed on time, within budget, and to your complete satisfaction.
                </p>
            </div>
        </div>
    </section> -->
    <!-- Quality Assurance Section -->
    <!-- <section class="py-12 fade-in">
        <div class="container mx-auto flex flex-wrap items-center px-4">
            <div class="w-full md:w-1/2 p-4 order-2 md:order-1">
                <h3 class="text-2xl font-bold mb-4">
                    Quality Assurance
                </h3>
                <p class="text-gray-700 text-justify">
                    Our quality assurance services are designed to ensure the durability, safety, and performance of your construction
                    projects. We implement rigorous quality control processes at every stage of the project, from design and planning
                    to construction and final inspection. Our team of quality assurance experts conducts regular inspections and tests
                    to verify that all materials and workmanship meet the required standards. We also provide detailed reports and
                    documentation to ensure transparency and accountability. Our commitment to quality ensures that your project will
                    stand the test of time and deliver lasting value.
                </p>
            </div>
            <div class="w-full md:w-1/2 p-4 order-1 md:order-2">
                <img alt="Quality assurance team conducting inspection" class="w-full h-96 object-cover rounded-lg" height="600" src="https://storage.googleapis.com/a1aa/image/5GeLStJhXeIzCZz6r3NfaKNUojKTk22cx0Wdxzxwg2Q.jpg" width="600" />
            </div>
        </div>
    </section> -->
    <!-- Cost Estimation Section -->
    <!-- <section class="py-12 bg-gray-100 fade-in">
        <div class="container mx-auto flex flex-wrap items-center px-4">
            <div class="w-full md:w-1/2 p-4">
                <img alt="Cost estimation team analyzing project costs" class="w-full h-96 object-cover rounded-lg" height="600" src="https://storage.googleapis.com/a1aa/image/vSRoNd1TNFNWlbmyBh-pzDdlaIMGpyBttqGyBIjTdAM.jpg" width="600" />
            </div>
            <div class="w-full md:w-1/2 p-4">
                <h3 class="text-2xl font-bold mb-4">
                    Cost Estimation
                </h3>
                <p class="text-gray-700 text-justify">
                    Our cost estimation services provide accurate and detailed cost projections for your construction projects.
                    We analyze all aspects of the project, including materials, labor, equipment, and overhead costs, to provide a
                    comprehensive estimate. Our experienced estimators use the latest software and industry standards to ensure that
                    our estimates are reliable and competitive. We also provide value engineering services to identify cost-saving
                    opportunities without compromising quality or performance. Our goal is to help you make informed decisions and
                    manage your project budget effectively.
                </p>
            </div>
        </div>
    </section> -->
    <!-- Contract Administration Section -->
    <!-- <section class="py-12 fade-in">
        <div class="container mx-auto flex flex-wrap items-center px-4">
            <div class="w-full md:w-1/2 p-4 order-2 md:order-1">
                <h3 class="text-2xl font-bold mb-4">
                    Contract Administration
                </h3>
                <p class="text-gray-700 text-justify">
                    Our contract administration services ensure that all contractual obligations are met and that the project is
                    executed in accordance with the terms and conditions of the contract. We manage all aspects of the contract,
                    including documentation, communication, and compliance. Our experienced contract administrators work closely
                    with all parties to resolve any disputes or issues that may arise during the project. We also provide regular
                    progress reports and updates to keep you informed and ensure that the project stays on track. Our goal is to
                    ensure a smooth and successful project delivery.
                </p>
            </div>
            <div class="w-full md:w-1/2 p-4 order-1 md:order-2">
                <img alt="Contract administration team reviewing documents" class="w-full h-96 object-cover rounded-lg" height="600" src="https://storage.googleapis.com/a1aa/image/eTg-aMXKwKecyXLE26BBZE26rYG4psckkPw44NGO9CY.jpg" width="600" />
            </div>
        </div>
    </section> -->
    <!-- Sustainability Consulting Section -->
    <!-- <section class="py-12 bg-gray-100 fade-in">
        <div class="container mx-auto flex flex-wrap items-center px-4">
            <div class="w-full md:w-1/2 p-4">
                <img alt="Sustainability consulting team discussing eco-friendly solutions" class="w-full h-96 object-cover rounded-lg" height="800" src="https://storage.googleapis.com/a1aa/image/zrMvXUGQbzDMl4N_CXGDI3o8Rsq2VDkPq5yHp_Ls5zE.jpg" width="600" />
            </div>
            <div class="w-full md:w-1/2 p-4">
                <h3 class="text-2xl font-bold mb-4">
                    Sustainability Consulting
                </h3>
                <p class="text-gray-700 text-justify">
                    Our sustainability consulting services help you incorporate eco-friendly practices and materials into your
                    construction projects. We provide expert advice on sustainable design, energy efficiency, and environmental impact.
                    Our team of sustainability consultants works closely with you to develop strategies that reduce waste, conserve
                    resources, and minimize the environmental footprint of your project. We also assist with obtaining green building
                    certifications, such as LEED and BREEAM, to demonstrate your commitment to sustainability. Our goal is to help you
                    create buildings that are not only functional and beautiful but also environmentally responsible.
                </p>
            </div>
        </div>
    </section> -->
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
                            <span class="text-gray-400">+62 22-2335599</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-envelope text-blue-400"></i>
                            <a href="mailto:info@mandajaya.com" class="text-gray-400 hover:text-blue-400 transition duration-300">
                                info@mandajaya.com
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
                            class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-blue-400 transition duration-300">
                            <i class="fab fa-twitter"></i>
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
        document.getElementById('menu-toggle').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            if (mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.remove('hidden');
            } else {
                mobileMenu.classList.add('hidden');
            }
        });
    </script>
</body>

</html>