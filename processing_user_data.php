<?php
$submittedValue = $_POST['contents'];

if ($submittedValue === 'root') {
    redirectUser();
} else {
    redirectToPreviousPage();
}

function redirectUser() {
    $destinationURL = 'https://example.com';
    echo '<script>window.location.href = "' . $destinationURL . '";</script>';
    exit;
}

function redirectToPreviousPage() {
    echo '<script>window.history.go(-2);</script>';
    exit;
}

?>
