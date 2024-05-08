<?php
include("list.php");

if(isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM form_tbl WHERE id = '$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        echo "<h2>Personal Information</h2>";
        echo "<p><strong>Name:</strong> " . $row["name"] . "</p>";
        echo "<p><strong>Gender:</strong> " . $row["gender"] . "</p>";
        echo "<p><strong>Date of Birth:</strong> " . $row["date_of_birth"] . "</p>";
        echo "<p><strong>Address:</strong> " . $row["address"] . "</p>";
        echo "<p><strong>Phone Number:</strong> " . $row["phone_no"] . "</p>";
        echo "<p><strong>Email Address:</strong> " . $row["email_address"] . "</p>";
        echo "<h2>Employment Details</h2>";
        echo "<p><strong>Position:</strong> " . $row["position"] . "</p>";
        echo "<p><strong>Department:</strong> " . $row["department"] . "</p>";
        echo "<p><strong>Status:</strong> " . $row["status"] . "</p>";
        echo "<p><strong>Date Hired:</strong> " . $row["date_hired"] . "</p>";
        echo "<h2>Education</h2>";
        echo "<p><strong>Highest Degree Obtained:</strong> " . $row["highest_degree_obtained"] . "</p>";
        echo "<p><strong>Name of Institution:</strong> " . $row["name_of_institution"] . "</p>";
        echo "<p><strong>Graduation Year:</strong> " . $row["graduation_year"] . "</p>";
    } else {
        echo "Personal information not found.";
    }
} else {
    echo "Invalid request.";
}
?>
