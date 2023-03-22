<?php include('connection.php') ?>
<?php 
    $sql = "SELECT * FROM register WHERE sendmail = 0";
    $result = $conn->query($sql);
    $rows = mysqli_fetch_all($result);
    foreach($rows as $key => $value){
        $string = strtotime($value['6']);
        $new_time = $string + 5 * 60;
        $current_time = date('Y-m-d H:i:s');
        if($current_time <= $new_time){
            $id = $value['0'];
            $to_email = $value['3'];
            $subject = "Test email to send from XAMPP";
            $body = "Hi, This is test mail to check how to send mail from Localhost Using Gmail ";
            $headers = "From: sender email";            
            if (mail($to_email, $subject, $body, $headers))
            {
                echo "Email successfully sent to $to_email...";
                $update = "UPDATE register SET sendmail = 1 WHERE id = $id";
                if ($conn->query($update) === TRUE) {
                    echo "Record Updated successfully";
                    header("Location: index.php");
                }
                $conn->query($sql);
            }            
            else
            {
                echo "Email sending failed!";
            }
        }
    }
    $conn->close();
?>