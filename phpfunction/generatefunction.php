<?php

$conn  = mysqli_connect('localhost', 'root', '', 'lottoindia');
if(isset($_POST['submit_generated_num'])){


    $numbers = $_POST['numbers'];


    $insertmoto = "INSERT INTO generated_number(generated_num) VALUES ('$numbers') ";
    $result = $conn->query($insertmoto);
    // header("Location:../number_generator.php?success=inserted");

}


?>