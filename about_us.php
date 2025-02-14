<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Pichon Auto Glass</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="min-h-screen bg-black text-white">
    <!-- Navigation -->
    <?php include './nav.php'; ?>

    <!-- About Us Hero Section -->
    <div class="pt-20 bg-black">
        <div class="max-w-7xl mx-auto px-4 py-16">
            <h1 class="text-4xl md:text-5xl font-bold mb-6 text-yellow-400 text-center">
                About Pichon Auto Glass
            </h1>
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="space-y-6">
                    <p class="text-lg text-gray-300">
                        Pichon Auto Glass is your trusted partner for all auto glass needs. We provide expert services with lifetime warranty and professional care.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-check-circle text-green-500"></i>
                            <span>Professional Certified Technicians</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-check-circle text-green-500"></i>
                            <span>Lifetime Warranty</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-check-circle text-green-500"></i>
                            <span>Mobile Service Available</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-check-circle text-green-500"></i>
                            <span>Insurance Claims Assistance</span>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <img src="./audi_11zon.jpeg" alt="Auto Glass Service" class="rounded-lg shadow-xl">
                    
                </div>
            </div>
        </div>
    </div>

    <!-- Why Choose Us Section -->
    <div class="bg-[#1F2937] py-16">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-yellow-400">
                Why Choose Pichon Auto Glass?
            </h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center p-6 bg-black rounded-lg border-2 border-blue-600">
                    <i class="fas fa-tools text-4xl mb-4 text-blue-500"></i>
                    <h3 class="text-xl font-bold mb-2">Expert Service</h3>
                    <p class="text-gray-400">Our certified technicians ensure quality repairs and replacements</p>
                </div>

                <div class="text-center p-6 bg-black rounded-lg border-2 border-blue-500">
                    <i class="fas fa-shield-alt text-4xl mb-4 text-blue-500"></i>
                    <h3 class="text-xl font-bold mb-2">Lifetime Warranty</h3>
                    <p class="text-gray-400">Peace of mind with our comprehensive warranty coverage</p>
                </div>

                <div class="text-center p-6 bg-black rounded-lg border-2 border-blue-400">
                    <i class="fas fa-truck text-4xl mb-4 text-blue-500"></i>
                    <h3 class="text-xl font-bold mb-2">Mobile Service</h3>
                    <p class="text-gray-400">Convenient auto glass service at your location</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action Section -->
    <div class="bg-black py-16">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6 text-yellow-400">Ready to Get Started?</h2>
            <p class="text-lg mb-8 text-gray-300">Contact us today for a free quote and experience our professional service</p>
            <button class="bg-red-600 hover:bg-red-700 px-8 py-3 rounded transition-colors">
                <a href="./contact.php">Get a Quote</a> 
            </button>
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