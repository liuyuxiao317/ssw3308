<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Successful</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h1>Registration Received</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['username'] ?? '');
        $email = htmlspecialchars($_POST['user_email'] ?? '');
        $event = htmlspecialchars($_POST['event_choice'] ?? '');

        if (empty($name) || empty($email) || empty($event)) {
            echo "<div class='alert alert-danger'>Error: Please fill in all fields.</div>";
        } else {
            echo "<div class='alert alert-success'>";
            echo "<p><strong>Name:</strong> " . $name . "</p>";
            echo "<p><strong>Email:</strong> " . $email . "</p>";
            echo "<p><strong>Event:</strong> " . $event . "</p>";
            echo "</div>";
        }
    } else {
        echo "<div class='alert alert-warning'>Please submit the form first.</div>";
    }
    ?>
    <a href="index.html" class="btn btn-primary mt-3">Back to Home</a>
</body>
</html>