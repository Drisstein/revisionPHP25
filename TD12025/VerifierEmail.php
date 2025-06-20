<?PHP 
if (isset($_POST['email'] )) {
    $email = $_POST['email'];
    
    // Validate email format
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Valid email address: " . htmlspecialchars($email);
    } else {
        echo "Invalid email address.";
    }
} else {
    echo "No email address provided.";
}
?>

<form action="" method="post">
    <label for="email">Enter your email:</label>
    <input type="email" id="email" name="email" required>
    <input type="submit" value="Submit">
</form>