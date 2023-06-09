<?php
    // Define the target host IP address or domain name
    $target_host = "www.example.com";

    // Execute the traceroute command
    $output = shell_exec("traceroute $target_host");

    // Define the file name and path
    $file_path = "traceroute_results.csv";

    // Open the CSV file in write mode
    $file = fopen($file_path, "w");

    // Write the output to the CSV file
    fwrite($file, $output);

    // Close the CSV file
    fclose($file);

    // Confirmation Message
    echo "Traceroute results have been saved to $file_path";
?>
