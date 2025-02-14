<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Pichon Auto Glass</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="min-h-screen bg-black text-white">
    <!-- Navigation -->
    <?php include './nav.php'; ?>

    <!-- Hero Section -->
    <div class="pt-20 bg-black">
        <div class="max-w-7xl mx-auto px-4 py-16 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6 text-yellow-400">
                Our Auto Glass Services
            </h1>
            <p class="max-w-3xl mx-auto mb-8 text-lg text-gray-300">
                Professional auto glass services with lifetime warranty. We specialize in repair, replacement, and ADAS calibration for all vehicle makes and models.
            </p>
        </div>
    </div>

    <!-- Main Services Section -->
    <div class="bg-[#1F2937] py-16">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Windshield Replacement -->
                <div class="bg-black p-6 rounded-lg border-2 border-blue-600 hover:border-blue-400 transition-colors">
                    <div class="text-center mb-4">
                        <i class="fas fa-car-crash text-4xl text-blue-500"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-center">Windshield Replacement</h3>
                </div>

                <!-- Side Window Replacement -->
                <div class="bg-black p-6 rounded-lg border-2 border-blue-600 hover:border-blue-400 transition-colors">
                    <div class="text-center mb-4">
                        <i class="fas fa-car-side text-4xl text-blue-500"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-center">Side Window Replacement</h3>
                </div>

                <!-- ADAS Calibration -->
                <div class="bg-black p-6 rounded-lg border-2 border-blue-600 hover:border-blue-400 transition-colors">
                    <div class="text-center mb-4">
                        <i class="fas fa-camera text-4xl text-blue-500"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-center">ADAS Calibration</h3>
                </div>

                <!-- Back Glass Replacement -->
                <div class="bg-black p-6 rounded-lg border-2 border-blue-600 hover:border-blue-400 transition-colors">
                    <div class="text-center mb-4">
                        <i class="fas fa-car text-4xl text-blue-500"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-center">Back Glass Replacement</h3>
                </div>

                <!-- Quarter Glass Replacement -->
                <div class="bg-black p-6 rounded-lg border-2 border-blue-600 hover:border-blue-400 transition-colors">
                    <div class="text-center mb-4">
                        <i class="fas fa-car text-4xl text-blue-500 transform -scale-x-100"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-center">Quarter Glass Replacement</h3>
                </div>

                <!-- Vent Glass Replacement -->
                <div class="bg-black p-6 rounded-lg border-2 border-blue-600 hover:border-blue-400 transition-colors">
                    <div class="text-center mb-4">
                        <i class="fas fa-wind text-4xl text-blue-500"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-center">Vent Glass Replacement</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Why Choose Us Section -->
    <div class="bg-black py-16">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-yellow-400">
                Why Choose Pichon Auto Glass?
            </h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center">
                    <i class="fas fa-shield-alt text-4xl text-blue-500 mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Lifetime Warranty</h3>
                    <p class="text-gray-400">All our work comes with a lifetime warranty against defects and leaks.</p>
                </div>
                <div class="text-center">
                    <i class="fas fa-tools text-4xl text-blue-500 mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Expert Technicians</h3>
                    <p class="text-gray-400">Our certified technicians have years of experience in auto glass services.</p>
                </div>
                <div class="text-center">
                    <i class="fas fa-truck text-4xl text-blue-500 mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Mobile Service</h3>
                    <p class="text-gray-400">We come to your location for convenient service at no extra cost.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action Section -->
    <div class="bg-[#1F2937] py-16">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6 text-yellow-400">Ready to Get Started?</h2>
            <p class="text-lg mb-8 text-gray-300">Contact us today for a free quote and experience our professional service</p>
            <div class="flex justify-center space-x-4">
                <button class="bg-red-600 hover:bg-red-700 px-8 py-3 rounded transition-colors">
                    <a href="./contact.php">Get a Quote</a>
                </button>
                <button class="border-2 border-blue-500 hover:bg-blue-500 px-8 py-3 rounded transition-colors">
                    <a href="./contact.php">Contact Us</a> 
                </button>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include './footer.php'; ?>

    <script> 
        // Sidebar functionality
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const closeSidebarButton = document.getElementById('close-sidebar');
        const mobileSidebar = document.getElementById('mobile-sidebar');
        const overlay = document.createElement('div');
        
        // Configure overlay
        overlay.className = 'fixed inset-0 bg-black bg-opacity-50 z-40 hidden';
        document.body.appendChild(overlay);

        // Open sidebar
        mobileMenuButton.addEventListener('click', function() {
            mobileSidebar.classList.remove('-translate-x-full'); // Cambiado para deslizar desde la izquierda
            overlay.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        });

        // Close sidebar
        function closeSidebar() {
            mobileSidebar.classList.add('-translate-x-full'); // Cambiado para deslizar hacia la izquierda
            overlay.classList.add('hidden');
            document.body.style.overflow = '';
        }

        closeSidebarButton.addEventListener('click', closeSidebar);
        overlay.addEventListener('click', closeSidebar);
    });
    </script>
</body>
</html>