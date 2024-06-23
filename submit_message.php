<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Save the message to a file
    $file = 'messages.txt';
    $current = file_get_contents($file);
    $current .= "Name: $name\nEmail: $email\nMessage: $message\n\n";
    file_put_contents($file, $current);
    
    // Redirect back to the main page with a success message
    header("Location: index.html?status=success");
    exit();
} else {
    // Redirect back if accessed directly
    header("Location: index.html");
    exit();
}
?>
