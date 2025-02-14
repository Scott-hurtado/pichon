<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Pichon Auto Glass</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="min-h-screen bg-black text-white">
    <!-- Navigation -->
    <?php include './nav.php'; ?>

    <!-- Contact Info Section -->
    <div class="bg-[#1F2937] py-16 mt-16">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center p-6 bg-black rounded-lg border-2 border-blue-600">
                    <i class="fas fa-envelope text-4xl mb-4 text-white"></i>
                    <h3 class="text-xl font-bold mb-2 text-white">Email</h3>
                    <p class="text-blue-400">pichonautoglass1@gmail.com</p>
                </div>

                <div class="text-center p-6 bg-black rounded-lg border-2 border-blue-500">
                    <i class="fas fa-phone text-4xl mb-4 text-white"></i>
                    <h3 class="text-xl font-bold mb-2 text-white">Phone</h3>
                    <p class="text-blue-400">+1-602-465-0236</p>
                </div>

                <div class="text-center p-6 bg-black rounded-lg border-2 border-blue-400">
                    <i class="fas fa-map-marker-alt text-4xl mb-4 text-white"></i>
                    <h3 class="text-xl font-bold mb-2 text-white">Location</h3>
                    <p class="text-blue-400">2515 W Bethany Home Rd</p>
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

    <!-- Footer -->
    <?php include './footer.php'; ?>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const formData = new FormData(this);

            fetch('./orders.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(() => {
                this.reset();

                const thankYouMessage = document.createElement('div');
                thankYouMessage.className = 'fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-black border-2 border-green-500 p-6 rounded-lg shadow-xl z-50 text-center';
                thankYouMessage.innerHTML = `
                    <i class="fas fa-check-circle text-green-500 text-4xl mb-4"></i>
                    <h3 class="text-xl font-bold text-white mb-2">Thank You!</h3>
                    <p class="text-gray-300">We will contact you soon.</p>
                `;

                document.body.appendChild(thankYouMessage);

                setTimeout(() => {
                    thankYouMessage.remove();
                }, 3000);
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    </script>

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