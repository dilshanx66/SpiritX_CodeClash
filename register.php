<?php
$username=filter_input(INPUT_POST,'username');
$password=filter_input(INPUT_POST,'password');
if(!empty($username)){
if(!empty($password)){
    $host="localhost";
    $bdusername="root";
    $bdpassword= "rebeca";
    $dbname="spiritex";

    //create connection
    $conn=new mysqli($host,$bdusername,$bdpassword,$dbname);
    if(mysqli_connect_error()) {
        die('Connect Error('.mysqli_connect_errno().')'
        .mysqli_connect_error());

}
else{
    $sql="INSERT INTO users(usernanme,password)
    values('$username','$password') ";
    if($conn->query($sql)){
        echo "New record is inserted sucessfully";
}
else {
    echo "Erorr:".$sql."<br>".$conn->error;
}
$conn->close();
}
}
else{   
    echo"Password should not be empty";
    die();
}
}


else{

    echo"Username should not be empty";
    die();
}

?>
