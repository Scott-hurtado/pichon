<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pichon Auto Glass</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Font Awesome para los iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        @keyframes scroll-left {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        @keyframes scroll-right {
            0% { transform: translateX(-50%); }
            100% { transform: translateX(0); }
        }
        .animate-scroll-left {
            animation: scroll-left 20s linear infinite;
        }
        .animate-scroll-right {
            animation: scroll-right 20s linear infinite;
        }

        .min-h-screen {
            min-height: 100vh;
        }

        

        .social-icon:hover {
            transition: color 0.3s;
        }

        input:focus, textarea:focus {
            outline: none;
            border-color: #3B82F6;
        }

        /* Sidebar transitions */
#mobile-sidebar {
    box-shadow: 2px 0 5px rgba(0, 0, 0, 0.3); /* Cambiado el shadow al lado derecho */
    z-index: 50;
}

.-translate-x-full {
    transform: translateX(-100%);
}

body.sidebar-open {
    overflow: hidden;
}
    </style>
</head>
<body class="min-h-screen bg-black text-white">
    <!-- Navigation -->
    <?php include './nav.php'; ?>

    <!-- Hero Section -->
    <div class="pt-20 pt-20 bg-black">
        <div class="max-w-7xl mx-auto px-4 py-16 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6 text-yellow-400">
                Expert Auto Glass Repair and Replacement Services
            </h1>
            <p class="max-w-3xl mx-auto mb-8 text-lg">
                Get professional auto glass repair and replacement services for your vehicle. 
                Our team of experts is dedicated to providing top-notch service and ensuring your safety on the road.
            </p>
            <div class="flex justify-center space-x-4">
                <button class="bg-red-600 hover:bg-red-700 px-8 py-3 rounded transition-colors">
                    <a href="./contact.php">Get a Quote</a>
                </button>
            </div>
        </div>
    </div>

    <!-- Image Carousel Section -->
    <div class="bg-[#1F2937] py-12">
        <div class="max-w-7xl mx-auto">
            <div id="carousel1" class="overflow-hidden whitespace-nowrap py-4"></div>
            <div id="carousel2" class="overflow-hidden whitespace-nowrap py-4"></div>
        </div>
    </div>

    <!-- Services Section -->
    <div class="bg-[#1F2937] pt-8 pb-16 relative overflow-hidden min-h-screen">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-yellow-400 mb-2">Quality Glass Products</h2>
                <p class="text-gray-300">We offer high-quality glass products for all makes and models.</p>
            </div>
        
            <div class="grid md:grid-cols-2 gap-12">
                <!-- Columna izquierda - Imagen -->
            <div class="w-full relative h-full">
                <div class="sticky top-0 h-full w-full">
                    <img src="./happy_11zon.jpeg" 
                    alt="Modern office space" 
                    class="w-full h-full object-cover rounded-lg shadow-xl">
                </div>
            </div>
            
            <!-- Columna derecha - Contenido -->
            <div class="space-y-12">
                <!-- Our Services -->
                <div class="relative pl-6 border-l-4 border-white">
                    <h3 class="text-2xl font-bold text-white mb-4">Our Services</h3>
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-400 mr-3"></i>
                            <span class="text-gray-300">Windshield Replacement</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-400 mr-3"></i>
                            <span class="text-gray-300">Side Window Replacement</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-400 mr-3"></i>
                            <span class="text-gray-300">Vent Glass Replacement</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-400 mr-3"></i>
                            <span class="text-gray-300">Quarter Glass Replacement</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-400 mr-3"></i>
                            <span class="text-gray-300">Backglass Replacement</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-400 mr-3"></i>
                            <span class="text-gray-300">ADAS Calibration</span>
                        </li>
                    </ul>
                </div>

                <!-- Special Offers -->
                <div class="relative pl-6 border-l-4 border-white">
                    <h3 class="text-2xl font-bold text-white mb-4">Special Offers</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <i class="fas fa-award text-yellow-400 mr-3 mt-1"></i>
                            <div>
                                <span class="text-gray-300 block">Lifetime Warranty</span>
                                <span class="text-gray-500 text-sm">On Chip Repairs</span>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-hand-holding-usd text-green-400 mr-3 mt-1"></i>
                            <div>
                                <span class="text-gray-300 block">$100-$150 Cash Back</span>
                                <span class="text-gray-500 text-sm">With Insurance Claims</span>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-tools text-blue-400 mr-3 mt-1"></i>
                            <div>
                                <span class="text-gray-300 block">Mobile/In-Shop Service</span>
                                <span class="text-gray-500 text-sm">Flexible Options</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Contact Form Section -->
    <div class="bg-[#1F2937] py-16">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-yellow-400">
                Get a Quote
            </h2>
            <form id="contactForm" action="./orders.php" method="POST" class="max-w-2xl mx-auto bg-black p-8 rounded-lg border-2 border-red-600">
    <div class="grid md:grid-cols-2 gap-6 mb-6">
        <div>
            <label class="block mb-2">First Name</label>
            <input type="text" name="first_name" class="w-full p-3 bg-gray-800 rounded border border-gray-700" placeholder="Your first name" required>
        </div>
        <div>
            <label class="block mb-2">Last Name</label>
            <input type="text" name="last_name" class="w-full p-3 bg-gray-800 rounded border border-gray-700" placeholder="Your last name" required>
        </div>
    </div>
    
    <!-- Campos del auto -->
    <div class="grid md:grid-cols-3 gap-6 mb-6">
        <div>
            <label class="block mb-2">Car Make</label>
            <input type="text" name="car_make" class="w-full p-3 bg-gray-800 rounded border border-gray-700" placeholder="e.g., Toyota" required>
        </div>
        <div>
            <label class="block mb-2">Car Model</label>
            <input type="text" name="car_model" class="w-full p-3 bg-gray-800 rounded border border-gray-700" placeholder="e.g., Camry" required>
        </div>
        <div>
            <label class="block mb-2">Car Year</label>
            <select name="car_year" class="w-full p-3 bg-gray-800 rounded border border-gray-700" required>
                <option value="">Select Year</option>
                <?php 
                $currentYear = date('Y');
                for($year = $currentYear; $year >= 1960; $year--) {
                    echo "<option value='$year'>$year</option>";
                }
                ?>
            </select>
        </div>
    </div>

    <div class="mb-6">
        <label class="block mb-2">Email</label>
        <input type="email" name="email" class="w-full p-3 bg-gray-800 rounded border border-gray-700" placeholder="Your email address" required>
    </div>
    <div class="mb-6">
        <label class="block mb-2">Phone</label>
        <input type="tel" name="phone" class="w-full p-3 bg-gray-800 rounded border border-gray-700" placeholder="Your phone number" required>
    </div>
    <div class="mb-6">
        <label class="block mb-2">Zip Code</label>
        <input type="text" name="zip_code" class="w-full p-3 bg-gray-800 rounded border border-gray-700" placeholder="Your zip code" pattern="[0-9]{5}" maxlength="5" required>
    </div>
    <div class="mb-6">
        <label class="block mb-2">Message</label>
        <textarea name="message" class="w-full p-3 bg-gray-800 rounded border border-gray-700 h-32" placeholder="Tell us about your auto glass needs" required></textarea>
    </div>
    <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white py-3 rounded transition-colors">
        Send Message
    </button>
</form>
        </div>
    </div>

   <!-- Contact Info Section -->
<div class="bg-[#1F2937] py-16">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid md:grid-cols-3 gap-8">
            <div class="text-center p-6 bg-black rounded-lg border-2 border-blue-600">
                <i class="fas fa-envelope text-4xl mb-4 text-white-500"></i>
                <h3 class="text-xl font-bold mb-2">Email</h3>
                <p class="text-blue-400">pichonautoglass1@gmail.com</p>
            </div>
            
            <div class="text-center p-6 bg-black rounded-lg border-2 border-blue-500">
                <i class="fas fa-phone text-4xl mb-4 text-white-600"></i>
                <h3 class="text-xl font-bold mb-2">Phone</h3>
                <p class="text-blue-400">+1-602-465-0236</p>
            </div>
            
            <div class="text-center p-6 bg-black rounded-lg border-2 border-blue-400">
                <i class="fas fa-map-marker-alt text-4xl mb-4 text-white-500"></i>
                <h3 class="text-xl font-bold mb-2">Location</h3>
                <p class="text-blue-400">2515 W Bethany Home Rd</p>
            </div>
        </div>
    </div>
</div>
    
    <!-- Footer -->
    <?php include './footer.php'; ?>

    <script>
        // Carousel Images Data
        const carouselImages = [
            { width: 400, height: 300, alt: "auto glass" },
            { width: 400, height: 300, alt: "Modern building exterior" },
            { width: 400, height: 300, alt: "Coffee brewing setup" },
            { width: 400, height: 300, alt: "Professional office" }
        ];

        function createCarouselItem(image) {
            return `
                <div class="inline-block w-64 h-48 flex-shrink-0 mx-2">
                    <img 
                        src="./carrusel-01_11zon.jpeg"
                        alt="${image.alt}"
                        class="w-full h-full object-cover rounded-lg"
                    />
                </div>

                <div class="inline-block w-64 h-48 flex-shrink-0 mx-2">
                    <img 
                        src="./carrusel-02_11zon.webp"
                        alt="${image.alt}"
                        class="w-full h-full object-cover rounded-lg"
                    />
                </div>

                <div class="inline-block w-64 h-48 flex-shrink-0 mx-2">
                    <img 
                        src="./carrusel-03_11zon.jpeg"
                        alt="${image.alt}"
                        class="w-full h-full object-cover rounded-lg"
                    />
                </div>
            `;
        }

        function initializeCarousel(containerId, images, direction) {
            const container = document.getElementById(containerId);
            const carouselContent = document.createElement('div');
            carouselContent.className = `inline-flex animate-scroll-${direction} gap-4`;
            
            // Double the images for infinite scroll effect
            const allImages = [...images, ...images];
            carouselContent.innerHTML = allImages.map(img => createCarouselItem(img)).join('');
            
            container.appendChild(carouselContent);
        }

        // Initialize carousels when the page loads
        document.addEventListener('DOMContentLoaded', () => {
            initializeCarousel('carousel1', carouselImages, 'left');
            initializeCarousel('carousel2', [...carouselImages].reverse(), 'right');

            
        });

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

    //Agradecimiento forms
    document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const formData = new FormData(this);

    fetch('./orders.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(() => {
        // Limpiar el formulario
        this.reset();
        
        // Crear y mostrar mensaje de agradecimiento
        const thankYouMessage = document.createElement('div');
        thankYouMessage.className = 'fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-black border-2 border-green-500 p-6 rounded-lg shadow-xl z-50 text-center';
        thankYouMessage.innerHTML = `
            <i class="fas fa-check-circle text-green-500 text-4xl mb-4"></i>
            <h3 class="text-xl font-bold text-white mb-2">Thank You!</h3>
            <p class="text-gray-300">We will contact you soon.</p>
        `;
        
        document.body.appendChild(thankYouMessage);

        // Remover el mensaje después de 3 segundos
        setTimeout(() => {
            thankYouMessage.remove();
        }, 3000);
    })
    .catch(error => {
        console.error('Error:', error);
    });
})
    </script>
</body>
</html>