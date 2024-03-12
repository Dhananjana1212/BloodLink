<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the 'user-role' field is set
    if (isset($_POST['user-role'])) {
        $selectedOption = $_POST['user-role'];
        switch ($selectedOption) {
            case 'donor':
                // Redirect to Blood Donor page
                header("Location: /bloodlink/blooddonors");
                exit();
                break;
            case 'bank':
                // Redirect to respective pages based on other options
                // Add cases for other options here if needed
                header("Location: /bloodlink/bloodbank/login.php"); // Example URL, change as needed
                exit();
                break;
            case 'admin':
                header("Location: /bloodlink/organizer"); // Example URL, change as needed
                exit();
                break;
            case 'org':
                header("Location: /bloodlink/organizer"); // Example URL, change as needed
                exit();
                break;
            case 'tester':
                header("Location: /bloodlink/sampletester/display.php"); // Example URL, change as needed
                exit();
                break;
            case 'inventory':
                header("Location: /bloodlink/inventory/display.php"); // Example URL, change as needed
                exit();
                break;
            default:
                // Handle other cases or fallback to a default page
                // For example, redirect to a generic page or show an error message
                header("Location: /defaultpage");
                exit();
                break;
        }
    } else {
        // Handle case where 'user-role' field is not set
        // For example, redirect to an error page or show an error message
        header("Location: /errorpage");
        exit();
    }
} else {
    // Handle case where the form was not submitted via POST method
    // For example, redirect to a different page or show an error message
    header("Location: /differentpage");
    exit();
}
?>
