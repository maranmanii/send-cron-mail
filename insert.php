<?php include('connection.php') ?>
<?php 
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $time = date('Y-m-d H:i:s');
    $country = json_encode($_POST['country']);

    $sql = "INSERT INTO register (first_name, last_name, email, phone, country,created_time,sendmail)
    VALUES ('$first_name','$last_name','$email','$phone','$country','$time',0)";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
   
?>