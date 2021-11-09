<?php
    if(isset($_POST['submit'])) {
        $vardas = trim($_POST['vardas']);
        $email = trim($_POST['email']);
        $message = trim($_POST['message']);

        if(!empty($vardas) && !empty($email) && !empty($message)) {
            if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $from = "$email";
                $to = "your@gmail.com";
                $subject = "New Message";
                $autorius = 'From: ' . $vardas . ', ' . $email;
                $zinute = htmlspecialchars($message);
                mail($to, $subject, $autorius, $zinute, $from);
                echo "<script>alert('Thank you. We received your message. We will contact you soon.');</script>";
            }
        
        }
       
    include('src/db.php');    

    }
    
?>
