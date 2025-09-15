<?php
$uploadDir = 'image/';

// Check if the directory exists
if (!is_dir($uploadDir)) {
    // Create the directory with read, write, and execute permissions
    if (mkdir($uploadDir, 0755, true)) {
        echo "Directory created successfully.";
    } else {
        echo "Failed to create directory.";
    }
} else {
    echo "Directory already exists.";
}
?>
