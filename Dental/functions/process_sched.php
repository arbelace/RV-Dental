<?php
    include('../config/dbcon.php');

    $sched = $con->prepare("INSERT INTO tbl_appointments (patient_name, patient_email, patient_phone, patient_address, appointment_date, service) VALUES (?, ?, ?, ?, ?, ?)");
    $sched->bind_param("ssssss", $patient_name, $patient_email, $patient_phone, $patient_address, $appointment_date, $service);
    
    $patient_name = mysqli_real_escape_string($con, $_POST['patient_name']);
    $patient_email = mysqli_real_escape_string($con, $_POST['patient_email']);
    $patient_phone = mysqli_real_escape_string($con, $_POST['patient_phone']);
    $patient_address = mysqli_real_escape_string($con, $_POST['patient_address']);
    $appointment_date = mysqli_real_escape_string($con, $_POST['appointment_date']);
    $service = implode(", ", $_POST['service']);
    
    $check_query = "SELECT * FROM tbl_appointments WHERE patient_email = '$patient_email' LIMIT 1";
    $result = $con->query($check_query);
    
    if ($result->num_rows > 0) {
        echo json_encode(array("success" => false, "message" => "You already have a scheduled appointment."));
    } else {
        if ($sched->execute() === TRUE) {
            echo json_encode(array("success" => true, "message" => "Appointment scheduled successfully!"));
        } else {
            echo json_encode(array("success" => false, "message" => "Error scheduling appointment: " . $con->error));
        }
    }
    $sched->close();
    $con->close();
?>
