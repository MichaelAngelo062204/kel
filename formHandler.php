<?php
 $name = $_POST['name'];
 $gender = $_POST['gender'];
 $date_of_birth = $_POST['date_of_birth'];
 $address = $_POST['address'];
 $phone_no = $_POST['phone_no'];
 $email_address = $_POST['email_address'];
 $position = $_POST['position'];
 $department = $_POST['department'];
 $date_hired = $_POST['date_hired'];
 $status = $_POST['status'];
 $highest_degree_obtained = $_POST['highest_degree_obtained'];
 $name_of_institution = $_POST['name_of_institution'];
 $graduation_year = $_POST['graduation_year'];
 

 $connection = mysqli_connect("localhost", "root", "", "logindb", 3307);
 if($connection->connect_error){
    die('Connection Failed :  '.$connection->connect_error);
 }else{
    $stmt = $connection->prepare("insert into form_tbl (name, gender, date_of_birth, address, phone_no, email_address, position, department, date_hired, status, highest_degree_obtained, name_of_institution, graduation_year) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssssssss", $name, $gender, $date_of_birth, $address, $phone_no, $email_address, $position, $department, $date_hired, $status, $highest_degree_obtained, $name_of_institution, $graduation_year);
    $stmt->execute();
    $stmt->close();
    $connection->close();
    echo"New employee created";
 }
?>