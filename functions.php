<?php
    session_start();
    // Create connection
    $connection = mysqli_connect('localhost', 'phpuser', 'phpuser', 'project_database');
    
    // Increment session
    function increment_session_count() {
        $_SESSION['count'] = $_SESSION['count'] + 1;
    }

    // Sanitize html input
    function sanitize_html($dirty_string) {
        return htmlentities($dirty_string);
    }

    // Insert data into the table
    function insert_data($recommendedMovie, $recommendedGrade) {
        // Declare session
        if(!(isset($_SESSION['count']))) {
            $_SESSION['count'] = 1;
        } else {
            increment_session_count();
        }

        // Check connection
        if (!$GLOBALS['connection']) {
            die("Connection failed: " . mysqli_connect_error());
        }

        //Insert a new record
        $sql = "INSERT INTO MOVIEGRADE (movieName, movieGrade)
        VALUES ('" . $recommendedMovie . "', '" . $recommendedGrade . "')";

        // Check if the operation was succesfully completed
        if ($GLOBALS['connection']->query($sql) === TRUE) {
            echo "<script>alert('New record created successfully!')</script>";
        } else {
           echo '<script>alert("Error, record is not created!")';
        }
    }

    // Select some data from the table
    function select_data() {
        // Display records
        $selectSQL = "SELECT * FROM MOVIEGRADE WHERE MovieID > 4;";
        $resultOfSelection = mysqli_query($GLOBALS['connection'], $selectSQL);

        // Output data of selection
        echo "<table class=\"table table-bordered\"><tr><th>MovideID</th><th>MovieName</th><th>MovieGrade</th><th>DateTime</th></tr>";
        while($row = mysqli_fetch_assoc($resultOfSelection)) {
            echo "<tr><td>" . $row["MovieID"]. "</td><td>" . $row["movieName"]. "</td><td>" . $row["movieGrade"]. "</td><td>" . $row["dateTime"] . "</td></tr>";
        }
        echo "</table>";
    }
?>