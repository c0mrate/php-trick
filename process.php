<?php
$submittedValue = $_POST['contents'];

if ($submittedValue === 'login') {
    redirectUser();
} else {
    redirectToPreviousPage();
}

function redirectUser() {
    $destinationURL = 'identifying.php';
    echo '<script>window.location.href = "' . $destinationURL . '";</script>';
    exit;
}

function redirectToPreviousPage() {
    echo '<script>window.history.go(-1);</script>';
    exit;
}

?>
