<?php
    // // URL to style a button
    echo "<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">";
    echo "<div class=\"container\">";
    if (isset($_POST['movie']) && isset($_POST['grade'])) {
        include 'functions.php';
        // Sanitizing of POST
        $sanitizedMovie = sanitize_html($_POST['movie']);
        $sanitizedGrade = sanitize_html($_POST['grade']);

        // Inserting data
        insert_data($sanitizedMovie, $sanitizedGrade);

        // Selecting and displaying data
        select_data();

        // Output a message
        echo "<hr>";
        echo "<p style='font-weight: bold; text-align: center;'>Thank you for your submission. Upon this message, you can see inserted records for today!</p>";
        
        // Close connection
        mysqli_close($connection);
    } else {
        echo "<p style='font-weight: bold; text-align: center;'>Please, fill out all the boxes and then return!</p>";
    }

    //Suggest a user to go back
    echo "<br /><button type=\"button\" class=\"btn btn-success\" style=\"margin-top: -16px; width: 100%;\"><a href=\"submit.php\" style=\"color: white; text-decoration: none;\">Go back and submit another movie</a></button>";
    echo "</div>";
?>