<?php

$servername = "localhost";
$db_username = "root";
$db_password = "";
$dbname = "msanzeschool";

$conn = new mysqli($servername, $db_username, $db_password, $dbname);

if (isset($_POST['signup'])) {
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $password = md5($_POST["password"]);
    
    if ($fullname != "" && $email != "" && $password != "") {
        $sql = "INSERT INTO users (username, email, password) VALUES ('$fullname', '$email', '$password')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "Success";
        }
    }
    
}

if (isset($_POST['login'])) {
    $email = $_POST["email"];
    $password = md5($_POST["password"]);

    if ($email != "" && $password != "") {
        $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = mysqli_query($conn, $sql);        
        if ($result->num_rows > 0) {
            echo "login";
        }
    }
}



if (isset($_POST['saveMarks'])) {
    $id_no = $_POST['id_no'];
    $management = $_POST['management'];
    $accounting = $_POST['accounting'];
    $cpp = $_POST['cpp'];
    $geography = $_POST['geography'];
    $economics = $_POST['economics'];

 
    $sql_check = "SELECT * FROM marks WHERE id_no='$id_no'";
    $result = $conn->query($sql_check);

    if ($result->num_rows > 0) {
        
        $sql_insert = "INSERT INTO internal_exam (id_no, management, accounting, cpp, geography, economics) VALUES ('$id_no', '$management', '$accounting', '$cpp', '$geography', '$economics')";

    if ($conn->query($sql_insert) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql_insert . "<br>" . $conn->error;
    }
    } else {
        echo "Id Number is exist"; 
       
    }
}

if(isset($_POST['saveExit'])) {
    $id_no = $_POST['id_no'];
    $political_science = $_POST['Political'];
    $general_knowledge = $_POST['accounting'];
    $oral = $_POST['oral'];
    $check_query = "SELECT * FROM external_exam WHERE id_no = '$id_no'";
    $result = $conn->query($check_query);
    if ($result->num_rows > 0) {
        echo "ID already exists. Please choose a different ID.";
    } else {
        $insert_query = "INSERT INTO external_exam (id_no, political_science, general_knowledge, oral) 
                         VALUES ('$id_no', '$political_science', '$general_knowledge', '$oral')";

        if ($conn->query($insert_query) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $insert_query . "<br>" . $conn->error;
        }
    }

    $conn->close();
}



?>




