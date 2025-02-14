<?php
// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "glass";

try {
    // Crear la conexión
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Verificar si se recibieron datos POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Preparar la consulta SQL
$sql = "INSERT INTO orders (first_name, last_name, car_make, car_model, car_year, email, phone, zip_code, message, created_at) 
VALUES (:first_name, :last_name, :car_make, :car_model, :car_year, :email, :phone, :zip_code, :message, NOW())";

$stmt = $conn->prepare($sql);

// Vincular parámetros
$stmt->bindParam(':first_name', $_POST['first_name']);
$stmt->bindParam(':last_name', $_POST['last_name']);
$stmt->bindParam(':car_make', $_POST['car_make']);
$stmt->bindParam(':car_model', $_POST['car_model']);
$stmt->bindParam(':car_year', $_POST['car_year']);
$stmt->bindParam(':email', $_POST['email']);
$stmt->bindParam(':phone', $_POST['phone']);
$stmt->bindParam(':zip_code', $_POST['zip_code']);
$stmt->bindParam(':message', $_POST['message']);
        
        $stmt->execute();
        
        // Si es una petición AJAX, terminar aquí
        if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && 
           strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            exit;
        }
    }

    session_start();
    if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
        header("Location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders - Pichon Auto Glass</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-black text-white">
    <?php include './nav.php'; ?>

    <div class="pt-20 px-4 max-w-7xl mx-auto">
        <h1 class="text-3xl font-bold mb-6 text-yellow-400">Orders List</h1>
        
        <div class="overflow-x-auto">
            <table class="w-full border-collapse table-auto">
                <thead>
                    <tr class="bg-gray-800">
                        <th class="border border-gray-600 px-4 py-2">Date</th>
                        <th class="border border-gray-600 px-4 py-2">Name</th>
                        <th class="border border-gray-600 px-4 py-2">Car Info</th>
                        <th class="border border-gray-600 px-4 py-2">Contact</th>
                        <th class="border border-gray-600 px-4 py-2">Zip Code</th>
                        <th class="border border-gray-600 px-4 py-2">Message</th>
                        <th class="border border-gray-600 px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Consulta para mostrar las órdenes
                    $stmt = $conn->query("SELECT * FROM orders ORDER BY created_at DESC");
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo "<tr class='hover:bg-gray-900'>";
                        echo "<td class='border border-gray-600 px-4 py-2'>" . date('Y-m-d H:i', strtotime($row['created_at'])) . "</td>";
                        echo "<td class='border border-gray-600 px-4 py-2'>" . htmlspecialchars($row['first_name']) . " " . htmlspecialchars($row['last_name']) . "</td>";
                        echo "<td class='border border-gray-600 px-4 py-2'>" . htmlspecialchars($row['car_year']) . " " . htmlspecialchars($row['car_make']) . " " . htmlspecialchars($row['car_model']) . "</td>";
                        echo "<td class='border border-gray-600 px-4 py-2'>Email: " . htmlspecialchars($row['email']) . "<br>Phone: " . htmlspecialchars($row['phone']) . "</td>";
                        echo "<td class='border border-gray-600 px-4 py-2'>" . htmlspecialchars($row['zip_code']) . "</td>";
                        echo "<td class='border border-gray-600 px-4 py-2'>" . htmlspecialchars($row['message']) . "</td>";
                        echo "<td class='border border-gray-600 px-4 py-2'>
        <div class='relative inline-block text-left'>
            <button onclick='toggleDropdown(this)' class='text-gray-300 hover:text-white'>
                <i class='fas fa-ellipsis-vertical'></i>
            </button>
            <div class='hidden absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-gray-700 ring-1 ring-black ring-opacity-5'>
                <div class='py-1'>
                    <a href='#' onclick='deleteOrder(" . $row['id'] . ")' class='block px-4 py-2 text-sm text-red-400 hover:bg-gray-600'>
                        <i class='fas fa-trash mr-2'></i>Delete
                    </a>
                </div>
            </div>
        </div>
    </td>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script>
function toggleDropdown(button) {
    // Close all other dropdowns
    document.querySelectorAll('.relative > div:not(.hidden)').forEach(dropdown => {
        if (dropdown !== button.nextElementSibling) {
            dropdown.classList.add('hidden');
        }
    });
    
    // Toggle current dropdown
    const dropdown = button.nextElementSibling;
    dropdown.classList.toggle('hidden');
}

function deleteOrder(orderId) {
    if(confirm('Are you sure you want to delete this order?')) {
        fetch('delete_order.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: `id=${orderId}`
        })
        .then(response => response.json())
        .then(data => {
            if(data.success) {
                location.reload();
            }
        });
    }
}

// Close dropdowns when clicking outside
document.addEventListener('click', function(event) {
    if (!event.target.closest('.relative')) {
        document.querySelectorAll('.relative > div:not(.hidden)').forEach(dropdown => {
            dropdown.classList.add('hidden');
        });
    }
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
</script>
</body>
</html>

<?php
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>