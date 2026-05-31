    <!DOCTYPE html>
    <html lang="en" class="scroll-smooth">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>VENZON | Global Real Estate Investment & Development</title>
        <!-- Tailwind CSS -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            gold: {
                                50: '#f7f8f1',
                                100: '#eef0df',
                                200: '#dde2bd',
                                300: '#c9d093',
                                400: '#a6b360',
                                500: '#869244',
                                600: '#636b2f',
                                700: '#545b28',
                                800: '#434820',
                                900: '#313517',
                            },
                            dark: '#0a0a0c',
                            charcoal: '#141419'
                        },
                        fontFamily: {
                            sans: ['Cabinet Grotesk', 'Inter', 'sans-serif'],
                            serif: ['Playfair Display', 'serif'],
                        }
                    }
                }
            }
        </script>
        <!-- Google Fonts & Icons -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
        <!-- FontAwesome for Premium Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <!-- AOS Library for gorgeous scroll animations -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
    </head>
    <body class="bg-dark text-gray-100 antialiased selection:bg-gold-600 selection:text-white">

        <audio id="ambientAudio" loop preload="auto">
            <source src="assets/images/sunborn.mp3" type="audio/wav">
            <source src="assets/images/sunborn.mp3" type="audio/mp3">
        </audio>

        <div id="loader" class="fixed inset-0 z-[100] bg-dark flex flex-col items-center justify-center p-6 loader-overlay">
            <video class="absolute inset-0 w-full h-full object-cover opacity-30" autoplay loop muted playsinline>
                <source src="assets/images/loadervideohere.mov" type="video/mp4">
            </video>
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(99,107,47,0.08)_0%,transparent_70%)] pointer-events-none"></div>
            
            <div class="text-center max-w-lg z-10 loader-content-delayed">
                <!-- <span class="text-gold-500 tracking-[0.4em] uppercase text-xs font-semibold mb-3 block">Welcome to Excellence</span> -->
                <h1 class="font-serif text-5xl md:text-7xl font-light text-white tracking-widest mb-6">

                <img src="assets/images/white-logo-maindatee.png">

                </h1>
                <div class="h-[1px] w-24 bg-gradient-to-r from-transparent via-gold-500 to-transparent mx-auto mb-8"></div>
                
                <p class="text-gray-400 text-sm md:text-base font-light mb-12 leading-relaxed tracking-wide">
                    Creative Generational Wealth Thru Real Estate
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <button onclick="startExperience(true)" class="px-8 py-4 bg-gold-500 hover:bg-gold-400 text-dark font-semibold tracking-wider text-xs uppercase rounded-none transition-all duration-300 w-full sm:w-auto shadow-lg shadow-gold-600/10 hover:shadow-gold-500/20 transform hover:-translate-y-0.5">
                        <i class="fa-solid fa-volume-high mr-2"></i> Enter
                    </button>
                    <!-- <button onclick="startExperience(false)" class="px-8 py-4 border border-white/20 hover:border-gold-500 text-white hover:text-gold-400 font-semibold tracking-wider text-xs uppercase rounded-none transition-all duration-300 w-full sm:w-auto hover:bg-white/5">
                        Enter Mutely
                    </button> -->
                </div>
            </div>
            
            <div class="absolute bottom-8 text-xs text-gray-500 tracking-wider loader-content-delayed">
                Loading Venzon Development & Investment...
            </div>
        </div>

        <!-- AUDIO CONTROLS (FAB at bottom right) -->
        <div id="audioStatusContainer" class="fixed bottom-6 right-6 z-50 hidden">
            <button onclick="toggleAudio()" class="w-12 h-12 rounded-full glass flex items-center justify-center text-white hover:text-gold-500 hover:scale-110 transition-all duration-300 shadow-xl border border-white/10" title="Toggle Soundscape">
                <i id="audioIcon" class="fa-solid fa-volume-xmark text-lg"></i>
            </button>
        </div>

        <!-- MAIN COORD NAVIGATION BAR -->
        <header class="fixed top-0 left-0 w-full z-40 transition-all duration-500" id="mainHeader">
            <div class="max-w-7xl mx-auto px-6 h-24 flex items-center justify-between">
                <!-- Brand Logo -->
                <a href="#" class="group flex items-center shrink-0" aria-label="Venzon Home">
                    <!-- <span class="font-serif text-3xl md:text-4xl font-light tracking-widest text-white group-hover:text-gold-400 transition-colors duration-300">VENZON</span>
                    <span class="text-[8px] uppercase tracking-[0.55em] text-gold-500 -mt-1 font-bold">Investments</span> -->
                    <img src="assets/images/white-logo-maindatee.png" alt="Venzon" class="block h-12 w-auto max-w-[160px] object-contain sm:h-14 sm:max-w-[190px] lg:h-16 lg:max-w-[220px]">
                </a>

                <!-- Desktop Menu Options -->
                <nav class="hidden lg:flex items-center space-x-10 text-xs font-semibold tracking-[0.2em] uppercase text-gray-300">
                    <a href="#about" class="hover:text-gold-400 transition-colors duration-300 py-2 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[1px] after:bg-gold-500 hover:after:w-full after:transition-all after:duration-300">About Us</a>
                    <a href="#projects" class="hover:text-gold-400 transition-colors duration-300 py-2 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[1px] after:bg-gold-500 hover:after:w-full after:transition-all after:duration-300">Projects</a>
                    <a href="#model" class="hover:text-gold-400 transition-colors duration-300 py-2 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[1px] after:bg-gold-500 hover:after:w-full after:transition-all after:duration-300 font-bold">Our Model</a>
                    <a href="#strategy" class="hover:text-gold-400 transition-colors duration-300 py-2 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[1px] after:bg-gold-500 hover:after:w-full after:transition-all after:duration-300">Our Strategy</a>
                    <a href="#mission" class="hover:text-gold-400 transition-colors duration-300 py-2 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[1px] after:bg-gold-500 hover:after:w-full after:transition-all after:duration-300">Mission</a>
                    <a href="#contact" class="px-5 py-2.5 border border-gold-500/30 text-gold-400 hover:bg-gold-500 hover:text-dark transition-all duration-300">Contact Us</a>
                </nav>

                <!-- Mobile Menu Toggle Button -->
                <button onclick="toggleMobileMenu()" class="lg:hidden text-white hover:text-gold-400 focus:outline-none z-50">
                    <span class="sr-only">Open Menu</span>
                    <div id="burgerIcon" class="w-6 h-5 flex flex-col justify-between transform transition-all duration-300">
                        <span class="w-full h-[2px] bg-white rounded-md transition-all duration-300 origin-left"></span>
                        <span class="w-full h-[2px] bg-white rounded-md transition-all duration-300"></span>
                        <span class="w-full h-[2px] bg-white rounded-md transition-all duration-300 origin-left"></span>
                    </div>
                </button>
            </div>
        </header>

        <!-- MOBILE NAVIGATION OVERLAY -->
        <div id="mobileMenu" class="fixed inset-0 bg-dark z-30 flex flex-col justify-center items-center opacity-0 pointer-events-none transition-all duration-500">
            <!-- Visual Accent Backdrop -->
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(99,107,47,0.06)_0%,transparent_60%)] pointer-events-none"></div>
            <nav class="flex flex-col space-y-8 text-center text-lg md:text-xl font-medium tracking-[0.25em] uppercase">
                <a onclick="toggleMobileMenu()" href="#about" class="text-white hover:text-gold-400 transition-all duration-300">About Us</a>
                <a onclick="toggleMobileMenu()" href="#projects" class="text-white hover:text-gold-400 transition-all duration-300">Our Projects</a>
                <a onclick="toggleMobileMenu()" href="#model" class="text-white hover:text-gold-400 transition-all duration-300">Our Model</a>
                <a onclick="toggleMobileMenu()" href="#strategy" class="text-white hover:text-gold-400 transition-all duration-300">Our Strategy</a>
                <a onclick="toggleMobileMenu()" href="#mission" class="text-white hover:text-gold-400 transition-all duration-300">Our Mission</a>
                <a onclick="toggleMobileMenu()" href="#contact" class="inline-block px-8 py-3 bg-gold-600 text-dark font-bold text-sm tracking-widest rounded-none transition-all duration-300 mt-4">Contact Us</a>
            </nav>
        </div>

        <!-- 1. CINEMATIC HERO SLIDER SECTION (Cityscape, Towers, Jet, Resorts) -->
        <section id="hero" class="relative w-full h-screen overflow-hidden flex items-center justify-center">
            
            <!-- Media Slides container -->
            <div class="absolute inset-0 w-full h-full">
                
                <!-- Slide 1: Modern Cityscape & Towers (Video) -->
                <div class="hero-slide absolute inset-0 w-full h-full opacity-100 transition-opacity duration-1000">
                    <div class="absolute inset-0 bg-black/60 z-10"></div>
                    <!-- Premium High Quality loop representation of modern towers and city flow -->
                    <video class="w-full h-full object-cover" autoplay loop muted playsinline onerror="this.style.display='none'; document.getElementById('slide1-img').style.display='block';">
                        <source src="assets/images/loadervideohere.mov" type="video/mp4">
                    </video>
                    <!-- <img id="slide1-img" src="https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?auto=format&fit=crop&q=80&w=1920" class="absolute inset-0 w-full h-full object-cover hidden" alt="Cityscape Tower Skyline"> -->
                </div>

                <!-- Slide 2: High Net Worth / Private Jet Atmosphere (Video) -->
                <!-- <div class="hero-slide absolute inset-0 w-full h-full opacity-0 transition-opacity duration-1000">
                    <div class="absolute inset-0 bg-black/65 z-10"></div>
                    <video class="w-full h-full object-cover" autoplay loop muted playsinline onerror="this.style.display='none'; document.getElementById('slide2-img').style.display='block';">
                        <source src="assets/images/loadervideohere.mov" type="video/mp4">
                    </video> -->
                    <!-- <img id="slide2-img" src="https://images.unsplash.com/photo-1540962351504-03099e0a754b?auto=format&fit=crop&q=80&w=1920" class="absolute inset-0 w-full h-full object-cover hidden" alt="Private Jet Executive Travel"> -->
                <!-- </div> -->

                <!-- Slide 3: Ultra Premium Ocean Resort (Image with Ken Burns) -->
                <!-- <div class="hero-slide absolute inset-0 w-full h-full opacity-0 transition-opacity duration-1000">
                    <div class="absolute inset-0 bg-black/60 z-10"></div>
                    <video class="w-full h-full object-cover" autoplay loop muted playsinline onerror="this.style.display='none'; document.getElementById('slide3-img').style.display='block';">
                        <source src="https://www.pexels.com/download/video/35672605/" type="video/mp4">
                    </video>
                    <div class="absolute inset-0 scale-105 animate-[pulse_8s_infinite] transition-transform duration-[8000ms]">
                        <img src="https://images.unsplash.com/photo-1540555700478-4be289fbecef?auto=format&fit=crop&q=80&w=1920" class="w-full h-full object-cover" alt="Luxury Ocean Resort Destination">
                    </div>
                </div> -->

                <!-- Slide 4: Desert Resort Oasis Atmosphere (Image) -->
                <!-- <div class="hero-slide absolute inset-0 w-full h-full opacity-0 transition-opacity duration-1000">
                    <div class="absolute inset-0 bg-black/65 z-10"></div>
                    <video class="w-full h-full object-cover" autoplay loop muted playsinline onerror="this.style.display='none'; document.getElementById('slide4-img').style.display='block';">
                        <source src="https://www.pexels.com/download/video/33133596/" type="video/mp4">
                    </video>
                    <div class="absolute inset-0">
                        <img src="https://images.unsplash.com/photo-1509316975850-ff9c5deb0cd9?auto=format&fit=crop&q=80&w=1920" class="w-full h-full object-cover" alt="Magnificent Desert Resort Asset">
                    </div>
                </div> -->
            </div>

            <!-- Foreground Dynamic Narrative text -->
            <div class="relative z-20 text-center px-4 max-w-5xl mx-auto flex flex-col items-center">
                
                <div class="mb-4 inline-flex items-center gap-2 px-3 py-1.5 border border-gold-500/20 bg-charcoal/40 backdrop-blur-md">
                    <span class="w-2 h-2 rounded-full bg-gold-500 animate-pulse"></span>
                    <span class="text-[10px] uppercase tracking-[0.3em] text-gold-400 font-bold">Generational Wealth Creators</span>
                </div>

                <!-- Monumental Premium Font Statement -->
                <h2 class="font-serif text-5xl md:text-7xl font-light text-white leading-tight tracking-tight mb-6">
                    Design Centric <span class="italic text-gold-400 block sm:inline">Sustainable</span> Development
                </h2>

                <p class="text-gray-300 text-base md:text-xl font-light max-w-2xl leading-relaxed tracking-wide mb-10 text-center">
                    Developing, and operating world-class housing, and premium luxury resorts across globe.
                </p>

                <!-- CTA Cluster -->
                <div class="flex flex-col sm:flex-row gap-4 w-full sm:w-auto">
                    <a href="#strategy" class="px-8 py-4 bg-gold-500 hover:bg-gold-400 text-dark font-bold text-xs uppercase tracking-[0.2em] rounded-none transition-all duration-300 transform hover:-translate-y-1 shadow-lg shadow-gold-600/10">
                        Our Investment Strategy
                    </a>
                    <a href="#model" class="px-8 py-4 border border-white/20 hover:border-gold-500 text-white hover:text-gold-400 font-bold text-xs uppercase tracking-[0.2em] rounded-none transition-all duration-300 bg-black/25 backdrop-blur-sm">
                        Our Investment Model
                    </a>
                </div>
            </div>

            <!-- Scroll Indicator and Slide Counter -->
            <div class="absolute bottom-10 left-6 right-6 z-20 flex justify-between items-center text-xs tracking-[0.3em] uppercase text-gray-400 font-medium">
                <div class="flex items-center space-x-2">
                    <span class="text-gold-400 font-bold" id="currentSlideLabel">01</span>
                    <span class="w-8 h-[1px] bg-white/20"></span>
                    <span>01</span>
                </div>
                
                <a href="#about" class="animate-bounce flex flex-col items-center text-gray-300 hover:text-gold-500 transition-colors duration-300">
                    <span class="text-[9px] mb-2 tracking-widest uppercase">Begin Tour</span>
                    <i class="fa-solid fa-chevron-down text-sm text-gold-500"></i>
                </a>

                <div class="hidden md:flex items-center gap-3">
                    <button onclick="prevSlide()" class="hover:text-gold-400"><i class="fa-solid fa-arrow-left"></i></button>
                    <button onclick="nextSlide()" class="hover:text-gold-400"><i class="fa-solid fa-arrow-right"></i></button>
                </div>
            </div>
        </section>

        <!-- 2. ABOUT US SECTION -->
        <section id="about" class="relative py-24 md:py-36 bg-dark overflow-hidden">
            <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-[radial-gradient(circle_at_top_right,rgba(99,107,47,0.04)_0%,transparent_70%)] pointer-events-none"></div>
            <div class="max-w-7xl mx-auto px-6">
                
                <!-- Dynamic Grid -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-20 items-center">
                    
                    <!-- Graphic Image Grid Box with Overlay -->
                    <div class="lg:col-span-5 relative" data-aos="fade-right">
                        <div class="absolute -top-6 -left-6 w-24 h-24 border-t-2 border-l-2 border-gold-500/20"></div>
                        <div class="absolute -bottom-6 -right-6 w-24 h-24 border-b-2 border-r-2 border-gold-500/20"></div>
                        
                        <div class="overflow-hidden relative group">
                            <div class="absolute inset-0 bg-gradient-to-t from-dark via-transparent to-transparent z-10 opacity-60"></div>
                            <img src="assets/images/aboutus.jpeg" alt="Executive Architecture Team" class="w-full h-[500px] object-cover zoom-bg">
                        </div>

                        <!-- Floater Statistic metrics -->
                        <!-- <div class="absolute bottom-8 left-8 glass p-6 z-20 max-w-xs" data-aos="fade-up" data-aos-delay="200">
                            <h4 class="font-serif text-3xl font-light text-white"><span class="text-gold-500">$2.4B+</span></h4>
                            <p class="text-[10px] uppercase tracking-wider text-gray-400 mt-1">Acquired & Managed Transaction Volume</p>
                        </div> -->
                    </div>

                    <!-- Text Presentation -->
                    <div class="lg:col-span-7 flex flex-col justify-center" data-aos="fade-left">
                        <span class="text-gold-500 uppercase tracking-[0.4em] text-xs font-bold mb-4 block">Creating Value</span>
                        <h2 class="font-serif text-4xl md:text-6xl font-light text-white leading-tight mb-8">
                            Thru Real Estate Developers
                        </h2>
                        <div class="w-20 h-[1px] bg-gold-500 mb-8"></div>
                        
                        <p class="text-gray-300 text-base md:text-lg font-light leading-relaxed mb-6">
                            VENZON is a california based premier private real estate investment and master development corporation. We acquire, entitle, construct, and operate iconic trophy assets that command exceptional yields and stand as emblems of design brilliance.
                        </p>
                        
                        <p class="text-gray-400 text-sm md:text-base font-light leading-relaxed mb-8">
                            <!-- Our pedigree is rooted in recognizing undervalued opportunities, transforming raw land into master-planned communities, creating bespoke resorts, and delivering superior risk-adjusted returns to our global investors. -->
                            Lead by a team of professionals with over 40 years of Experience in Real Estate / Hospitality Industry Worldwide.
                        </p>

                        <!-- Focus Columns -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-6 border-t border-white/10">
                            <div>
                                <h4 class="text-white font-semibold text-sm uppercase tracking-wider mb-2 flex items-center gap-2">
                                    <i class="fa-solid fa-hotel text-gold-500"></i> Bespoke Hospitality
                                </h4>
                                <p class="text-gray-400 text-xs font-light leading-relaxed">High-touch resorts strategically located near pristine oceans and majestic deserts.</p>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold text-sm uppercase tracking-wider mb-2 flex items-center gap-2">
                                    <i class="fa-solid fa-city text-gold-500"></i> Modern Communities
                                </h4>
                                <p class="text-gray-400 text-xs font-light leading-relaxed">Premium housing and state-of-the-art corporate buildings that drive progress.</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <!-- 3. OUR PROJECTS & INTERACTIVE GALLERY -->
        <section id="projects" class="py-24 md:py-36 bg-charcoal relative">
            <div class="max-w-7xl mx-auto px-6">
                
                <!-- Section Header -->
                <div class="flex flex-col lg:flex-row justify-between items-start lg:items-end mb-16" data-aos="fade-up">
                    <div>
                        <span class="text-gold-500 uppercase tracking-[0.4em] text-xs font-bold mb-4 block">02 // Exclusive Assets</span>
                        <h2 class="font-serif text-4xl md:text-6xl font-light text-white">Our Realized Legacy</h2>
                    </div>
                    <div class="mt-6 lg:mt-0">
                        <p class="text-gray-400 text-sm md:text-base font-light max-w-md leading-relaxed">
                            Explore our world-class asset classes designed for sustainable returns and flawless experiential living.
                        </p>
                    </div>
                </div>

                <!-- Dynamic Category Filter Tabs -->
                <div class="flex flex-wrap gap-3 mb-12 border-b border-white/10 pb-6" data-aos="fade-up">
                    <button onclick="filterGallery('all')" class="gallery-tab px-6 py-2.5 text-xs uppercase tracking-widest font-semibold text-dark bg-gold-500 hover:bg-gold-400 transition-all duration-300">
                        All Projects
                    </button>
                    <button onclick="filterGallery('housing')" class="gallery-tab px-6 py-2.5 text-xs uppercase tracking-widest font-semibold text-gray-400 hover:text-white border border-white/10 hover:border-white/30 transition-all duration-300">
                        Residential
                    </button>
                    <button onclick="filterGallery('hospitality')" class="gallery-tab px-6 py-2.5 text-xs uppercase tracking-widest font-semibold text-gray-400 hover:text-white border border-white/10 hover:border-white/30 transition-all duration-300">
                        Hospitality
                    </button>
                </div>

                <!-- PROJECTS GRID GALLERY -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="galleryContainer">
                    
                    <!-- Project 1 (Housing) -->
                    <div class="gallery-item housing group relative overflow-hidden bg-dark aspect-[4/5]" data-aos="fade-up">
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent z-10 transition-opacity duration-300"></div>
                        <img src="https://images.unsplash.com/photo-1613490493576-7fde63acd811?auto=format&fit=crop&q=80&w=800" class="absolute inset-0 w-full h-full object-cover zoom-bg" alt="Lumina Towers Residential">
                        <div class="absolute bottom-0 left-0 right-0 p-8 z-20">
                            <!-- <span class="text-gold-500 text-[10px] uppercase tracking-[0.3em] block mb-2">Residential Real Estate</span> -->
                            <h3 class="font-serif text-2xl font-light text-white mb-3">Apartments</h3>
                            <p class="text-gray-300 text-xs font-light leading-relaxed mb-4 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                Ultra-luxury residential community situated in the heart of urban elegance, complete with modern private helipads.
                            </p>
                            <span class="text-xs text-white underline tracking-widest uppercase cursor-pointer group-hover:text-gold-400 transition-colors duration-300">View Asset Specifications</span>
                        </div>
                    </div>

                    <!-- Project 2 (Hospitality) -->
                    <div class="gallery-item hospitality group relative overflow-hidden bg-dark aspect-[4/5]" data-aos="fade-up" data-aos-delay="100">
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent z-10 transition-opacity duration-300"></div>
                        <img src="https://images.unsplash.com/photo-1540555700478-4be289fbecef?auto=format&fit=crop&q=80&w=800" class="absolute inset-0 w-full h-full object-cover zoom-bg" alt="Oasis Sands Desert Resort">
                        <div class="absolute bottom-0 left-0 right-0 p-8 z-20">
                            <!-- <span class="text-gold-500 text-[10px] uppercase tracking-[0.3em] block mb-2">Bespoke Hospitality</span> -->
                            <h3 class="font-serif text-2xl font-light text-white mb-3">Town Homes</h3>
                            <p class="text-gray-300 text-xs font-light leading-relaxed mb-4 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                A stunning coastal wellness sanctuary and oceanfront haven boasting uninterrupted views of tropical horizons.
                            </p>
                            <span class="text-xs text-white underline tracking-widest uppercase cursor-pointer group-hover:text-gold-400 transition-colors duration-300">View Asset Specifications</span>
                        </div>
                    </div>

                    <!-- Project 3 (Commercial) -->
                    <div class="gallery-item commercial group relative overflow-hidden bg-dark aspect-[4/5]" data-aos="fade-up" data-aos-delay="200">
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent z-10 transition-opacity duration-300"></div>
                        <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=800" class="absolute inset-0 w-full h-full object-cover zoom-bg" alt="Venzon One Corporate Hub">
                        <div class="absolute bottom-0 left-0 right-0 p-8 z-20">
                            <!-- <span class="text-gold-500 text-[10px] uppercase tracking-[0.3em] block mb-2">Commercial Hub</span> -->
                            <h3 class="font-serif text-2xl font-light text-white mb-3">Hospitalty</h3>
                            <p class="text-gray-300 text-xs font-light leading-relaxed mb-4 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                Class-A high rise structures optimized for international institutions, incorporating cutting-edge sustainable certifications.
                            </p>
                            <span class="text-xs text-white underline tracking-widest uppercase cursor-pointer group-hover:text-gold-400 transition-colors duration-300">View Asset Specifications</span>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <!-- 4. Investment Strategy -->
        <section id="strategy" class="py-24 md:py-36 bg-dark relative overflow-hidden">
            <!-- Structural Abstract background lines -->
            <div class="absolute inset-0 opacity-5 pointer-events-none">
                <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <pattern id="grid-pattern" width="80" height="80" patternUnits="userSpaceOnUse">
                            <path d="M 80 0 L 0 0 0 80" fill="none" stroke="white" stroke-width="1"/>
                        </pattern>
                    </defs>
                    <rect width="100%" height="100%" fill="url(#grid-pattern)" />
                </svg>
            </div>

            <div class="max-w-7xl mx-auto px-6 relative z-10">
                
                <!-- Section Title -->
                <div class="text-center max-w-3xl mx-auto mb-20" data-aos="fade-up">
                    <span class="text-gold-500 uppercase tracking-[0.4em] text-xs font-bold mb-4 block">03 // The Blueprint</span>
                    <h2 class="font-serif text-4xl md:text-6xl font-light text-white leading-tight">Our Investment Strategy</h2>
                    <p class="text-gray-400 text-sm md:text-base font-light mt-6 leading-relaxed">
                        A rigorous five-stage approach designed to mitigate execution risk while unlocking unparalleled alpha for private family offices and institutions.
                    </p>
                </div>

                <div class="space-y-10">

                    <!-- DEVELOPMENT -->
                    <div class="grid grid-cols-1 lg:grid-cols-[minmax(0,1fr)_auto_minmax(0,1fr)_auto_minmax(0,1fr)_auto_minmax(0,1fr)] gap-6 items-stretch">

                        <div class="group bg-charcoal p-8 border border-white/5 hover:border-gold-500/40 transition-all duration-300" style="display: flex;flex-direction: column;justify-content: center;">
                            <h3 class="text-white text-lg font-semibold tracking-wider uppercase">
                                Development
                            </h3>
                            <p class="text-gray-400 text-xs mt-3">
                                Ground up construction multiplies equity at the entry of any Deal.
                            </p>
                        </div>

                        <div class="flex items-center justify-center text-gold-500 text-2xl">
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>

                        <div class="group bg-charcoal p-8 border border-white/5 hover:border-gold-500/40 transition-all duration-300">
                            <span class="font-serif text-5xl text-gold-500/30">01</span>
                            <h3 class="text-white text-lg font-semibold uppercase mt-4">
                                Acquisition
                            </h3>
                            <p class="text-gray-400 text-xs font-light leading-relaxed">
                                Underwriting undervalued urban locations and beachfront reserves through extensive mathematical models and hyper-local networks.
                            </p>
                            <div class="mt-8 pt-4 border-t border-white/5 text-[10px] text-gold-500 tracking-widest uppercase font-bold group-hover:translate-x-1 transition-transform duration-300">
                                6 Months <i class="fa-solid fa-arrow-right ml-1"></i>
                            </div>
                        </div>

                        <div class="flex items-center justify-center text-gold-500 text-2xl">
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>

                        <div class="group bg-charcoal p-8 border border-white/5 hover:border-gold-500/40 transition-all duration-300">
                            <span class="font-serif text-5xl text-gold-500/30">02</span>
                            <h3 class="text-white text-lg font-semibold uppercase mt-4">
                                Entitlements
                            </h3>
                            <p class="text-gray-400 text-xs font-light leading-relaxed">
                                Navigating complex municipal zoning, securing government permits, environmental clearances, and optimal master-plan designs.
                            </p>
                            <div class="mt-8 pt-4 border-t border-white/5 text-[10px] text-gold-500 tracking-widest uppercase font-bold group-hover:translate-x-1 transition-transform duration-300">
                                1 Year <i class="fa-solid fa-arrow-right ml-1"></i>
                            </div>
                        </div>

                        <div class="flex items-center justify-center text-gold-500 text-2xl">
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>

                        <div class="group bg-charcoal p-8 border border-white/5 hover:border-gold-500/40 transition-all duration-300">
                            <span class="font-serif text-5xl text-gold-500/30">03</span>
                            <h3 class="text-white text-lg font-semibold uppercase mt-4">
                                Construction
                            </h3>
                            <p class="text-gray-400 text-xs font-light leading-relaxed">
                                Partnering with Tier-1 general contractors to build luxury assets. Strict quality assurance, budget policing, and timely handover.
                            </p>
                            <div class="mt-8 pt-4 border-t border-white/5 text-[10px] text-gold-500 tracking-widest uppercase font-bold group-hover:translate-x-1 transition-transform duration-300">
                                1 Year 6 Months <i class="fa-solid fa-arrow-right ml-1"></i>
                            </div>
                        </div>

                    </div>

                    <!-- MANAGEMENT -->
                    <div class="grid grid-cols-1 lg:grid-cols-[minmax(0,1fr)_auto_minmax(0,1fr)] gap-6 items-stretch">

                        <div class="group bg-charcoal p-8 border border-white/5 hover:border-gold-500/40 transition-all duration-300" style="display: flex;flex-direction: column;justify-content: center;">
                            <h3 class="text-white text-lg font-semibold tracking-wider uppercase">
                                Management
                            </h3>
                            <p class="text-gray-400 text-xs mt-3">
                                In house property management driven by technology.
                            </p>
                        </div>

                        <div class="flex items-center justify-center text-gold-500 text-2xl">
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>

                        <div class="group bg-charcoal p-8 border border-white/5 hover:border-gold-500/40 transition-all duration-300">
                            <span class="font-serif text-5xl text-gold-500/30">04</span>
                            <h3 class="text-white text-lg font-semibold uppercase mt-4">
                                Lease & Hold
                            </h3>
                            <p class="text-gray-400 text-xs font-light leading-relaxed">
                                Stabilizing asset occupancy. Securing ultra-premium commercial operators and luxury tenants to ensure consistent cash flow.
                            </p>
                            <div class="mt-8 pt-4 border-t border-white/5 text-[10px] text-gold-500 tracking-widest uppercase font-bold group-hover:translate-x-1 transition-transform duration-300">
                                3 years <i class="fa-solid fa-arrow-right ml-1"></i>
                            </div>
                        </div>

                    </div>

                    <!-- SALES / EXIT -->
                    <div class="grid grid-cols-1 lg:grid-cols-[minmax(0,1fr)_auto_minmax(0,1fr)] gap-6 items-stretch">

                        <div class="group bg-charcoal p-8 border border-white/5 hover:border-gold-500/40 transition-all duration-300" style="display: flex;flex-direction: column;justify-content: center;">
                            <h3 class="text-white text-lg font-semibold tracking-wider uppercase">
                                Sales / Exit
                            </h3>
                            <p class="text-gray-400 text-xs mt-3">
                                Marketing & Sales to institutional Funds / Investment.
                            </p>
                        </div>

                        <div class="flex items-center justify-center text-gold-500 text-2xl">
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>

                        <div class="group bg-charcoal p-8 border border-white/5 hover:border-gold-500/40 transition-all duration-300">
                            <span class="font-serif text-5xl text-gold-500/30">05</span>
                            <h3 class="text-white text-lg font-semibold uppercase mt-4">
                                Bespoke Exit
                            </h3>
                            <p class="text-gray-400 text-xs font-light leading-relaxed">
                                Securing institutional recapitalization, secondary offerings, or direct luxury portfolio sales to yield exceptional multiples.
                            </p>
                            <div class="mt-8 pt-4 border-t border-white/5 text-[10px] text-gold-500 tracking-widest uppercase font-bold group-hover:translate-x-1 transition-transform duration-300">
                                6 Years <i class="fa-solid fa-arrow-right ml-1"></i>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section>

        <!-- 5. Investment Model -->
        <section id="model" class="py-24 md:py-36 bg-charcoal relative">
            <div class="max-w-7xl mx-auto px-6 relative z-10">
                
                <!-- Section Title -->
                <div class="text-center max-w-3xl mx-auto mb-20" data-aos="fade-up">
                    <span class="text-gold-500 uppercase tracking-[0.4em] text-xs font-bold mb-4 block">04 // The Blueprint</span>
                    <h2 class="font-serif text-4xl md:text-6xl font-light text-white leading-tight">Our Investment Model</h2>
                    <p class="text-gray-400 text-sm md:text-base font-light mt-6 leading-relaxed">
                        We use GP/UP Model where venzon acts as general partner & equity investors as limited partners. Property title is head in LP Name & Venzon signs a Development contract with LP.
                    </p>
                </div>

                <div class="space-y-10">

                    <!-- DEVELOPMENT -->
                    <div class="grid grid-cols-1 lg:grid-cols-[1.5fr_auto_1fr_auto_1fr] gap-6 items-stretch">

                        <div class="group bg-charcoal p-8 border border-white/5 hover:border-gold-500/40 transition-all duration-300" style="display: flex;flex-direction: column;justify-content: center;">
                            <h3 class="text-white text-lg font-semibold tracking-wider uppercase">
                                Equity
                            </h3>
                        </div>

                        <div class="flex items-center justify-center text-gold-500 text-2xl">
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>

                        <div class="group bg-charcoal p-8 border border-white/5 hover:border-gold-500/40 transition-all duration-300">
                            <span class="font-serif text-5xl text-gold-500/30">01</span>
                            <h3 class="text-white text-lg font-semibold uppercase mt-4">
                                Venzon 20%
                            </h3>
                            <p class="text-gray-400 text-xs font-light leading-relaxed">
                                We invest a min of 20% Equity in most projects thru Venzon Affiliation funds as limited partner.
                            </p>
                            <!-- <div class="mt-8 pt-4 border-t border-white/5 text-[10px] text-gold-500 tracking-widest uppercase font-bold group-hover:translate-x-1 transition-transform duration-300">
                                6 Months <i class="fa-solid fa-arrow-right ml-1"></i>
                            </div> -->
                        </div>

                        <div class="flex items-center justify-center text-gold-500 text-2xl">
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>

                        <div class="group bg-charcoal p-8 border border-white/5 hover:border-gold-500/40 transition-all duration-300">
                            <span class="font-serif text-5xl text-gold-500/30">02</span>
                            <h3 class="text-white text-lg font-semibold uppercase mt-4">
                                Private Investment 80%
                            </h3>
                            <p class="text-gray-400 text-xs font-light leading-relaxed">
                                Accredited Investors Being in 80% of Equity as limited partners.
                            </p>
                            <!-- <div class="mt-8 pt-4 border-t border-white/5 text-[10px] text-gold-500 tracking-widest uppercase font-bold group-hover:translate-x-1 transition-transform duration-300">
                                1 Year <i class="fa-solid fa-arrow-right ml-1"></i>
                            </div> -->
                        </div>

                    </div>

                    <!-- MANAGEMENT -->
                    <div class="grid grid-cols-1 lg:grid-cols-[minmax(0,1fr)_auto_minmax(0,1fr)] gap-6 items-stretch">

                        <div class="group bg-charcoal p-8 border border-white/5 hover:border-gold-500/40 transition-all duration-300" style="display: flex;flex-direction: column;justify-content: center;">
                            <h3 class="text-white text-lg font-semibold tracking-wider uppercase">
                                Institutional / Debt
                            </h3>
                        </div>

                        <div class="flex items-center justify-center text-gold-500 text-2xl">
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>

                        <div class="group bg-charcoal p-8 border border-white/5 hover:border-gold-500/40 transition-all duration-300">
                            <span class="font-serif text-5xl text-gold-500/30">03</span>
                            <h3 class="text-white text-lg font-semibold uppercase mt-4">
                                Bank Financing
                            </h3>
                            <p class="text-gray-400 text-xs font-light leading-relaxed">
                                Thru our relationships with financial institutions VENZON secures debt for construction/mortgage. Our LTV at stabilization is usually 50% or less.
                            </p>
                            <!-- <div class="mt-8 pt-4 border-t border-white/5 text-[10px] text-gold-500 tracking-widest uppercase font-bold group-hover:translate-x-1 transition-transform duration-300">
                                3 years <i class="fa-solid fa-arrow-right ml-1"></i>
                            </div> -->
                        </div>

                    </div>

                </div>

            </div>
        </section>

        <!-- 6. OUR MISSION: Generational Wealth & Higher Returns -->
        <section id="mission" class="relative py-24 md:py-36 bg-dark overflow-hidden text-center flex items-center justify-center">
            <!-- Parallax Background Image container -->
            <div class="absolute inset-0 z-0">
                <div class="absolute inset-0 bg-black/85 z-10"></div>
                <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&q=80&w=1920" class="w-full h-full object-cover opacity-60 pointer-events-none" alt="Global scale wealth creation">
            </div>

            <div class="relative z-20 max-w-4xl mx-auto px-6">
                <span class="text-gold-500 uppercase tracking-[0.4em] text-xs font-bold mb-6 block" data-aos="fade-up">05 // The Prime Directive</span>
                
                <h2 class="font-serif text-4xl md:text-7xl font-light text-white leading-tight mb-8" data-aos="fade-up" data-aos-delay="100">
                    Securing Sovereignty, Building <span class="italic text-gold-400 font-normal">Generational</span> Wealth
                </h2>
                
                <div class="w-24 h-[1px] bg-gold-500 mx-auto mb-10" data-aos="fade-up" data-aos-delay="200"></div>

                <p class="text-gray-300 text-base md:text-xl font-light leading-relaxed max-w-2xl mx-auto mb-12" data-aos="fade-up" data-aos-delay="300">
                    "Our mission is simple yet infinite: To engineer superior yield, high capital appreciation, and absolute wealth preservation, ensuring peace of mind across generations of investors."
                </p>

                <!-- Key metrics cluster -->
                <div class="grid grid-cols-2 md:grid-cols-3 gap-8 text-center pt-8 border-t border-white/10" data-aos="fade-up" data-aos-delay="400">
                    <div>
                        <span class="font-serif text-3xl md:text-4xl text-gold-400">22.4%</span>
                        <span class="text-[10px] uppercase tracking-wider text-gray-400 mt-2 block">Target IRR</span>
                    </div>
                    <div>
                        <span class="font-serif text-3xl md:text-4xl text-gold-400">3.5x</span>
                        <span class="text-[10px] uppercase tracking-wider text-gray-400 mt-2 block">Equity Multiple</span>
                    </div>
                    <div class="col-span-2 md:col-span-1">
                        <span class="font-serif text-3xl md:text-4xl text-gold-400">Zero</span>
                        <span class="text-[10px] uppercase tracking-wider text-gray-400 mt-2 block">Capital Loss Ever</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- 7. CONTACT US / SECURE INVESTOR PORTAL -->
        <section id="contact" class="py-24 md:py-36 bg-charcoal relative">
            <div class="max-w-7xl mx-auto px-6">
                
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
                    
                    <!-- Left Details & Social Coordinates -->
                    <div data-aos="fade-right">
                        <span class="text-gold-500 uppercase tracking-[0.4em] text-xs font-bold mb-4 block">06 // Secure Channels</span>
                        <h2 class="font-serif text-4xl md:text-6xl font-light text-white mb-6">Coordinate With Our Partners</h2>
                        <div class="w-20 h-[1px] bg-gold-500 mb-8"></div>
                        <p class="text-gray-400 text-sm md:text-base font-light leading-relaxed mb-10 max-w-lg">
                            Private equity offerings are extended exclusively to accredited family offices, sovereign entities, and institutional allocators. Let us initiate an exploratory briefing.
                        </p>

                        <!-- Contact Details list -->
                        <div class="space-y-6 text-sm mb-12">
                            <div class="flex items-center gap-4">
                                <span class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-gold-500 shrink-0">
                                    <i class="fa-solid fa-location-dot"></i>
                                </span>
                                <div>
                                    <h4 class="text-gray-400 text-xs uppercase tracking-widest font-semibold">Global Headquarters</h4>
                                    <p class="text-white font-medium">2377 Crenshaw Blvd Suite 260, Torrance, CA 90501</p>
                                </div>
                            </div>

                            <div class="flex items-center gap-4">
                                <span class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-gold-500 shrink-0">
                                    <i class="fa-solid fa-envelope"></i>
                                </span>
                                <div>
                                    <h4 class="text-gray-400 text-xs uppercase tracking-widest font-semibold">Private Relations Office</h4>
                                    <p class="text-white font-medium">info@venzongroup.com</p>
                                </div>
                            </div>

                            <div class="flex items-center gap-4">
                                <span class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-gold-500 shrink-0">
                                    <i class="fa-solid fa-phone"></i>
                                </span>
                                <div>
                                    <h4 class="text-gray-400 text-xs uppercase tracking-widest font-semibold">Secure Voice Access</h4>
                                    <p class="text-white font-medium">+1 (3106) 192-802</p>
                                </div>
                            </div>
                        </div>

                        <!-- Social coordinates -->
                        <div>
                            <h4 class="text-xs uppercase tracking-widest text-gold-500 font-bold mb-4">Institutional Presence</h4>
                            <div class="flex gap-4">
                                <a href="#" class="w-12 h-12 rounded-none border border-white/10 hover:border-gold-500 text-white hover:text-gold-500 flex items-center justify-center transition-all duration-300"><i class="fa-brands fa-linkedin-in text-lg"></i></a>
                                <a href="#" class="w-12 h-12 rounded-none border border-white/10 hover:border-gold-500 text-white hover:text-gold-500 flex items-center justify-center transition-all duration-300"><i class="fa-brands fa-facebook text-lg"></i></a>
                                <a href="#" class="w-12 h-12 rounded-none border border-white/10 hover:border-gold-500 text-white hover:text-gold-500 flex items-center justify-center transition-all duration-300"><i class="fa-brands fa-instagram text-lg"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Right secure contact form -->
                    <div class="glass p-10 relative overflow-hidden" data-aos="fade-left">
                        <h3 class="font-serif text-3xl font-light text-white mb-2">Request Briefing</h3>
                        <p class="text-gray-400 text-xs font-light mb-8">Access to our private placement memorandums requires accreditation verification.</p>
                        
                        <form id="contactForm" class="space-y-6">
                            <div>
                                <label class="block text-[10px] uppercase tracking-widest text-gold-400 font-bold mb-2">Full Legal Name</label>
                                <input type="text" name="full_name" required class="w-full bg-white/5 border border-white/10 focus:border-gold-500 p-4 text-white text-sm outline-none transition-colors duration-300 rounded-none">
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-[10px] uppercase tracking-widest text-gold-400 font-bold mb-2">Private Email</label>
                                    <input type="email" name="email" required class="w-full bg-white/5 border border-white/10 focus:border-gold-500 p-4 text-white text-sm outline-none transition-colors duration-300 rounded-none">
                                </div>
                                <div>
                                    <label class="block text-[10px] uppercase tracking-widest text-gold-400 font-bold mb-2">Corporate Entity</label>
                                    <input type="text" name="company" required class="w-full bg-white/5 border border-white/10 focus:border-gold-500 p-4 text-white text-sm outline-none transition-colors duration-300 rounded-none">
                                </div>
                            </div>
                            <div>
                                <label class="block text-[10px] uppercase tracking-widest text-gold-400 font-bold mb-2">Bespoke Area of Interest</label>
                                <select name="interest" required class="w-full bg-neutral-900 border border-white/10 focus:border-gold-500 p-4 text-gray-300 text-sm outline-none transition-colors duration-300 rounded-none">
                                    <option value="" selected disabled>Select investment class...</option>
                                    <option>Ultra Luxury Housing Communities</option>
                                    <option>Exclusive Hospitality & Beach Resorts</option>
                                    <option>Commercial Trophy Real Estate</option>
                                    <option>All Asset Master Pool Development</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-[10px] uppercase tracking-widest text-gold-400 font-bold mb-2">Inquiry Details</label>
                                <textarea name="message" rows="4" required class="w-full bg-white/5 border border-white/10 focus:border-gold-500 p-4 text-white text-sm outline-none transition-colors duration-300 rounded-none resize-none"></textarea>
                            </div>

                            <button id="contactSubmitButton" type="submit" class="w-full py-4 bg-gold-600 hover:bg-gold-400 disabled:opacity-60 disabled:cursor-not-allowed text-dark font-bold text-xs tracking-widest uppercase transition-all duration-300">
                                Submit Secure Briefing Request
                            </button>
                        </form>
                    </div>

                </div>

            </div>
        </section>

        <!-- FOOTER -->
        <footer class="bg-black py-16 border-t border-white/5">
            <div class="max-w-7xl mx-auto px-6">
                
                <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
                    
                    <div>
                        <img src="assets/images/white-logo-maindatee.png" alt="Venzon" class="block h-14 w-auto max-w-[180px] object-contain mb-4">
                        <p class="text-gray-400 text-xs font-light leading-relaxed max-w-xs">
                            Private global developer creating generational monuments and high yield assets for discerning family offices.
                        </p>
                    </div>

                    <div>
                        <h4 class="text-xs uppercase tracking-widest text-gold-500 font-bold mb-4">Investments</h4>
                        <ul class="space-y-2 text-xs text-gray-400">
                            <li><a href="#projects" class="hover:text-gold-500 transition-colors">Residential Assets</a></li>
                            <li><a href="#projects" class="hover:text-gold-500 transition-colors">Coastal Resorts</a></li>
                            <li><a href="#projects" class="hover:text-gold-500 transition-colors">Premium Commercial Office</a></li>
                            <li><a href="#model" class="hover:text-gold-500 transition-colors">Co-Investment Partnerships</a></li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="text-xs uppercase tracking-widest text-gold-500 font-bold mb-4">Navigations</h4>
                        <ul class="space-y-2 text-xs text-gray-400">
                            <li><a href="#about" class="hover:text-gold-500 transition-colors">Our Ethos</a></li>
                            <li><a href="#model" class="hover:text-gold-500 transition-colors">Our Protocol Blueprint</a></li>
                            <li><a href="#partners" class="hover:text-gold-500 transition-colors">Sovereign Alliances</a></li>
                            <li><a href="#mission" class="hover:text-gold-500 transition-colors">Wealth Mission Statement</a></li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="text-xs uppercase tracking-widest text-gold-500 font-bold mb-4">Regulatory Notice</h4>
                        <p class="text-gray-500 text-[10px] leading-relaxed">
                            The material herein does not constitute an offer to buy securities. Membership is limited strictly to qualified purchasing entities according to section 3(c)(7) of the Investment Company Act.
                        </p>
                    </div>

                </div>

                <!-- Bottom Sub-Footer -->
                <div class="pt-8 border-t border-white/5 flex flex-col sm:flex-row justify-between items-center gap-4 text-xs text-gray-500">
                    <p>&copy; 2026 VENZON Investments International. All physical structures and brands protected under regulatory code.</p>
                    <div class="flex gap-6">
                        <a href="#" class="hover:text-white transition-colors">Privacy Charter</a>
                        <a href="#" class="hover:text-white transition-colors">Terms of Alliance</a>
                        <a href="#" class="hover:text-white transition-colors">Investor Security Portal</a>
                    </div>
                </div>

            </div>
        </footer>

        <!-- AOS (Animate On Scroll) JS Library -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            // Init Scroll Animation library
            AOS.init({
                duration: 1000,
                once: true,
                easing: 'ease-out'
            });

            // Ambient Audio state management
            const ambientAudio = document.getElementById('ambientAudio');
            const audioStatusContainer = document.getElementById('audioStatusContainer');
            const audioIcon = document.getElementById('audioIcon');
            let audioPlaying = false;

            // Start Experience triggers upon loading screen entry
            function startExperience(wantsAudio) {
                // Dismiss Loading overlay smoothly
                const loader = document.getElementById('loader');
                loader.style.opacity = '0';
                loader.style.visibility = 'hidden';

                // Show audio control FAB
                audioStatusContainer.classList.remove('hidden');

                if (wantsAudio) {
                    // Play instrumental soundscape
                    ambientAudio.volume = 0.35; // set sophisticated ambient levels
                    ambientAudio.play().then(() => {
                        audioPlaying = true;
                        updateAudioIndicator();
                    }).catch(err => {
                        console.log("Audio play deferred due to browser click-event restrictions.");
                    });
                }
            }

            // Toggle Audio state manually
            function toggleAudio() {
                if (audioPlaying) {
                    ambientAudio.pause();
                    audioPlaying = false;
                } else {
                    ambientAudio.play();
                    audioPlaying = true;
                }
                updateAudioIndicator();
            }

            // Keep icons synchronized
            function updateAudioIndicator() {
                if (audioPlaying) {
                    audioIcon.className = "fa-solid fa-volume-high text-gold-500 animate-pulse";
                } else {
                    audioIcon.className = "fa-solid fa-volume-xmark";
                }
            }

            // Cinematic Hero Carousel Slider system
            let currentSlide = 0;
            const slides = document.querySelectorAll('.hero-slide');
            const totalSlides = slides.length;
            const slideCounter = document.getElementById('currentSlideLabel');
            let slideInterval = setInterval(nextSlide, 7000); // 7 seconds slide intervals

            function showSlide(index) {
                // Normalize index wraps
                if (index >= totalSlides) currentSlide = 0;
                else if (index < 0) currentSlide = totalSlides - 1;
                else currentSlide = index;

                // Update UI elements
                slides.forEach((slide, idx) => {
                    if (idx === currentSlide) {
                        slide.classList.remove('opacity-0');
                        slide.classList.add('opacity-100');
                    } else {
                        slide.classList.remove('opacity-100');
                        slide.classList.add('opacity-0');
                    }
                });

                // Format Counter e.g. '01'
                slideCounter.textContent = String(currentSlide + 1).padStart(2, '0');
            }

            function nextSlide() {
                showSlide(currentSlide + 1);
                resetSlideTimer();
            }

            function prevSlide() {
                showSlide(currentSlide - 1);
                resetSlideTimer();
            }

            function resetSlideTimer() {
                clearInterval(slideInterval);
                slideInterval = setInterval(nextSlide, 7000);
            }

            // Navigation visual changes when scrolling down
            const mainHeader = document.getElementById('mainHeader');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 80) {
                    mainHeader.classList.add('bg-dark/95', 'shadow-2xl', 'backdrop-blur-md', 'h-20');
                    mainHeader.classList.remove('h-24');
                } else {
                    mainHeader.classList.remove('bg-dark/95', 'shadow-2xl', 'backdrop-blur-md', 'h-20');
                    mainHeader.classList.add('h-24');
                }
            });

            // Mobile Responsive Navigation menu controller
            const mobileMenu = document.getElementById('mobileMenu');
            const burgerIcon = document.getElementById('burgerIcon');
            let mobileMenuOpen = false;

            function toggleMobileMenu() {
                mobileMenuOpen = !mobileMenuOpen;
                if (mobileMenuOpen) {
                    mobileMenu.classList.remove('opacity-0', 'pointer-events-none');
                    mobileMenu.classList.add('opacity-100');
                    // Animate hamburger to elegant 'X'
                    burgerIcon.children[0].style.transform = 'rotate(45deg) translate(2px, 2px)';
                    burgerIcon.children[1].style.opacity = '0';
                    burgerIcon.children[2].style.transform = 'rotate(-45deg) translate(2px, -2px)';
                } else {
                    mobileMenu.classList.add('opacity-0', 'pointer-events-none');
                    mobileMenu.classList.remove('opacity-100');
                    // Revert hamburger
                    burgerIcon.children[0].style.transform = 'none';
                    burgerIcon.children[1].style.opacity = '1';
                    burgerIcon.children[2].style.transform = 'none';
                }
            }

            // Gallery filter controller
            function filterGallery(category) {
                const items = document.querySelectorAll('.gallery-item');
                const tabs = document.querySelectorAll('.gallery-tab');

                // Set active states on tabs
                tabs.forEach(tab => {
                    const text = tab.innerText.toLowerCase();
                    const isAll = category === 'all' && text.includes('all');
                    const isMatch = text.includes(category);
                    
                    if (isAll || isMatch) {
                        tab.classList.add('bg-gold-500', 'text-dark');
                        tab.classList.remove('text-gray-400', 'border', 'border-white/10');
                    } else {
                        tab.classList.remove('bg-gold-500', 'text-dark');
                        tab.classList.add('text-gray-400', 'border', 'border-white/10');
                    }
                });

                // Smooth transition filters
                items.forEach(item => {
                    if (category === 'all' || item.classList.contains(category)) {
                        item.style.display = 'block';
                        setTimeout(() => {
                            item.style.opacity = '1';
                            item.style.transform = 'scale(1)';
                        }, 50);
                    } else {
                        item.style.opacity = '0';
                        item.style.transform = 'scale(0.95)';
                        setTimeout(() => {
                            item.style.display = 'none';
                        }, 400);
                    }
                });
            }

            // Contact Form processing controller
            const contactForm = document.getElementById('contactForm');
            const contactSubmitButton = document.getElementById('contactSubmitButton');

            async function handleFormSubmission(event) {
                event.preventDefault();

                if (!contactForm || !contactSubmitButton) {
                    return;
                }

                contactSubmitButton.disabled = true;
                contactSubmitButton.textContent = 'Sending...';

                try {
                    const response = await fetch('contact.php', {
                        method: 'POST',
                        body: new FormData(contactForm),
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    });

                    const result = await response.json().catch(() => ({
                        success: false,
                        message: 'Unexpected server response. Please try again.'
                    }));

                    if (!response.ok || !result.success) {
                        throw new Error(result.message || 'Your request could not be sent right now.');
                    }

                    await Swal.fire({
                        icon: 'success',
                        title: 'Briefing Sent',
                        text: result.message,
                        confirmButtonColor: '#869244',
                        background: '#eef0df',
                        color: '#0a0a0c'
                    });

                    contactForm.reset();
                } catch (error) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Submission Failed',
                        text: error.message || 'Something went wrong. Please try again.',
                        confirmButtonColor: '#869244',
                        background: '#eef0df',
                        color: '#0a0a0c'
                    });
                } finally {
                    contactSubmitButton.disabled = false;
                    contactSubmitButton.textContent = 'Submit Secure Briefing Request';
                }
            }

            if (contactForm) {
                contactForm.addEventListener('submit', handleFormSubmission);
            }
        </script>
    </body>
    </html>
