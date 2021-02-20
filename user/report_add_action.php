<?php 
session_start();

include '../Auth/connection.php';

if (isset($_POST['btn_report'])) {
    $name = $_POST['fullname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $lost_on = $_POST['lost_on'];
    $lost_from = $_POST['lost_from'];
    $relation = $_POST['relation'];
    $description = $_POST['description'];

    $reporter = $_SESSION['id'];

    $query = "INSERT INTO reports SET name=?, age=?, gender=?, address=?, description=?, lost_at=?, lost_from=?, relation=?, reported_by=?, lost=1";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('sdsssssss', $name, $age, $gender, $address, $description, $lost_on, $lost_from, $relation, $reporter);
    $result = $stmt->execute();

    if ($result) {
        $stmt->close();
        
        $_SESSION['success_msg'] = 'Report has been submitted successfully.';
        header('Location: report.php');
        exit(0);
    } else {
        $_SESSIOL['error_msg'] = "Report could not be submitted.";
        header('location: report_add.php');
    }

}


 ?>