<?php



session_start();

include 'conn.php';


if(isset($_POST['name'])){
    $user_id =rand(0,100000);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $duplicate = false;

    $check_duplicate = mysqli_query($conn,"Select email from user_info");

    while($row = mysqli_fetch_assoc($check_duplicate)){
        if($row['email'] == $email){
            $duplicate = true;
        }
    }

    if($duplicate == false){
		$query="INSERT INTO `user_info`(`user_id`, `name`, `email`, `pass`) VALUES ($user_id,'$name','$email','$password')";
    	$query =  mysqli_query($conn, $query);
    	$_SESSION['user_id'] = $user_id;
        header("Location: ../index.php");
	}else{
        echo "Email Already Exists";
    }
    


}elseif(isset($_POST['email'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user_id = mysqli_query($conn, "Select user_id from user_info where email='$email'");
    if(mysqli_num_rows($user_id)>0){
        $user_id = mysqli_query($conn, "Select user_id from user_info where email='$email' and pass='$password'");
        if(mysqli_num_rows($user_id)>0){
            $user_id = mysqli_fetch_assoc($user_id);
            $_SESSION['user_id'] = $user_id['user_id'] ;
            header("Location: ../chat.php");
        }else{
            echo "Password Incorrect";
        }
    }else{
        echo "Account doesn't exist";
    }


}


?>