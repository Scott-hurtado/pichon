<nav class="fixed top-0 w-full bg-black border-b border-red-600 z-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-center h-16">
            <!-- Mobile Menu Button (Ahora a la izquierda) -->
            <button id="mobile-menu-button" class="lg:hidden text-white">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>

            <!-- Logo y navegación PC -->
            <div class="flex items-center flex-grow">
                <div class="flex">
                    <div class="w-6 h-6 bg-blue-500 rounded-full"></div>
                    <div class="w-6 h-6 bg-red-600 rounded-full -ml-2"></div>
                </div>
                <!-- Desktop Navigation (A la izquierda) -->
                <div class="hidden lg:flex space-x-8 ml-8">
                    <a href="./index.php" class="hover:text-yellow-400 transition-colors">Home</a>
                    <a href="./services.php" class="hover:text-yellow-400 transition-colors">Services</a>
                    <a href="./about_us.php" class="hover:text-yellow-400 transition-colors">About Us</a>
                    
                </div>
            </div>

            <!-- Botones siempre a la derecha -->
            <div class="hidden lg:flex space-x-4">
                <button class="bg-red-600 hover:bg-red-700 px-4 py-2 rounded transition-colors">
                    <i class="fas fa-mobile-alt mr-2"></i>
                    +1 602-465-0236
                </button>
                <button class="border-2 border-blue-500 hover:bg-blue-500 px-4 py-2 rounded transition-colors">
                    <a href="./contact.php">Contact Us</a> 
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Sidebar -->
    <div id="mobile-sidebar" class="fixed top-0 left-0 w-64 h-full bg-black transform -translate-x-full transition-transform duration-300 ease-in-out lg:hidden">
        <div class="p-6">
            <!-- Close Button -->
            <button id="close-sidebar" class="absolute top-4 right-4 text-white">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>

            <!-- Mobile Navigation Links -->
            <div class="flex flex-col space-y-4 mt-8">
                <a href="./index.php" class="text-white hover:text-yellow-400 transition-colors">Home</a>
                <a href="./services.php" class="text-white hover:text-yellow-400 transition-colors">Services</a>
                <a href="./about_us.php" class="text-white hover:text-yellow-400 transition-colors">About Us</a>
                <button class="bg-red-600 hover:bg-red-700 px-4 py-2 rounded transition-colors">
                    <i class="fas fa-mobile-alt mr-2"></i>
                    +1 602-465-0236
                </button>
                <button class="border-2 border-blue-500 hover:bg-blue-500 px-4 py-2 rounded transition-colors">
                    <a href="./contact.php">Contact Us</a> 
                </button>
            </div>
        </div>
    </div>
</nav>