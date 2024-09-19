<?php
if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    if ($username == "" && $email == "" && $phone == "" && $address == "") {
        echo " <div style=color:whitesmoke;>Please fill in all forms</div> ";
    } else {
        $sql = "SELECT * FROM contact WHERE(username='$username' AND email='$email' AND phone='$phone' AND h_address='$address')";

        $query = mysqli_query($conn, $sql);

        $rows = mysqli_num_rows($query);

        if ($rows == 1) {
            echo "Phone number already exists ";
        } else {
            $sql = "INSERT INTO contact (username, email, phone, h_address) VALUES ('$username', '$email', '$phone', '$address')";
            
            $query=mysqli_query($conn, $sql);

            if($query){
                echo "<div style=color:whitesmoke;>Hi ".$username." message sent</div>";
            }
            else{
                echo  "<div style=color:whitesmoke;>Sorry ".$username." try again</div>";
            }
        }
    }
}
