<?php
session_start();

// Si ya está logueado, redirigir a orders.php
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header("Location: orders.php");
    exit;
}

// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "glass";

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $username = $_POST['username'];
        $password = $_POST['password'];

        $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['logged_in'] = true;
            $_SESSION['username'] = $username;
            header("Location: orders.php");
            exit;
        } else {
            $error = 'Incorrect username or password';
        }
    } catch(PDOException $e) {
        $error = "Error: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Pichon Auto Glass</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-black text-white">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-gray-800 p-8 rounded-lg shadow-lg w-96">
            <h1 class="text-2xl font-bold mb-6 text-yellow-400 text-center">Login</h1>
            
            <?php if($error): ?>
                <div class="bg-red-500 text-white p-3 rounded mb-4">
                    <?php echo $error; ?>
                </div>
            <?php endif; ?>

            <form method="POST" action="">
                <div class="mb-4">
                    <label class="block text-gray-300 mb-2" for="username">
                        Username
                    </label>
                    <input class="w-full px-3 py-2 bg-gray-700 rounded text-white" 
                           type="text" 
                           name="username" 
                           id="username" 
                           required>
                </div>

                <div class="mb-6">
                    <label class="block text-gray-300 mb-2" for="password">
                        Password
                    </label>
                    <input class="w-full px-3 py-2 bg-gray-700 rounded text-white" 
                           type="password" 
                           name="password" 
                           id="password" 
                           required>
                </div>

                <button type="submit" 
                        class="w-full bg-yellow-400 text-black py-2 px-4 rounded hover:bg-yellow-500 transition duration-200">
                    Login
                </button>
            </form>
        </div>
    </div>
</body>
</html>