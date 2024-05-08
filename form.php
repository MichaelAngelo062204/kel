<?php
require_once('list.php');
$query = "SELECT * FROM form_tbl";
$result = mysqli_query($connection,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=>, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="form.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Registration Form</title>
</head>
<body>
<div>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                <img src="maloi.jpg" alt="circle">
                </span>

                <div class="text logo-text">
                    <span class="name">Admin</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="form.php">
                            <i class='bx bx-news icon' ></i>
                            <span class="text nav-text">Onboard Form</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="logout.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>
<script src="admin.js"></script>
</div>

<section class="home">
    <div class="container">
        <header>Form</header>
        <form action="formHandler.php" method="POST">

        <div class="details personal">
            <span class="title">Personal Information</span>

            <div class="fields">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="your name" required>
                </div>

                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select id="gender" name="gender" required>
                    <option value="Choose">Choose....</option>    
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="date of birth">Date of birth</label>
                    <input type="date"class="form-control" id="date of birth" name="date_of_birth" placeholder="Enter your birth date" required> 
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Enter your address" required> 
                </div>

                <div class="form-group">
                    <label for="phone no">Phone no</label>
                    <input type="number" class="form-control" id="phone no" name="phone_no" placeholder="Enter phone no." required> 
                </div>

                <div class="form-group">
                    <label for="email address">Email address</label>
                    <input type="email" class="form-control" id="email address" name="email_address" placeholder="Enter your email" required> 
                </div>
            </div>
        </div>

        <div class="details personal">
            <span class="title">Employment Details</span>

            <div class="fields">
                <div class="form-group">
                    <label for="position">Position</label>
                    <select id="position" name="position" required>
                    <option value="Choose">Choose....</option>     
                    <option value="Doctor">Doctor</option>    
                    <option value="Nurse">Nurse</option>
                    <option value="Surgeon">Surgeon</option>
                    <option value="Medical Technologist">Medical Technologist</option>
                    <option value="Radiologic Technologist">Radiologic Technologist</option>    
                    <option value="Pharmacist">Pharmacist</option>
                    <option value="Physical Therapist">Physical Therapist</option>
                    <option value="Occupational Therapist">Occupational Therapist</option>
                    <option value="Hospital Administrator">Hospital Administrator</option>
                    <option value="Medical Social Worker">Medical Social Worker</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="deparment">Deparment</label>
                    <select id="deparment" name="department" required>
                    <option value="Choose">Choose....</option> 
                    <option value="Internal Medicine">Internal Medicine</option>    
                    <option value="Surgery">Surgery</option>
                    <option value="Pediatrics">Pediatrics</option>
                    <option value="Obstetrics and Gynecology">Obstetrics and Gynecology</option>
                    <option value="Radiology">Radiology</option>
                    <option value="Emergency Medicine">Emergency Medicine</option>
                    <option value="Anesthesiology">Anesthesiology</option>
                    <option value="Pathology">Pathology</option>
                    <option value="Neurology">Neurology</option>
                    <option value="Cardiology">Cardiology</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <select id="status" name="status" required>
                    <option value="Choose">Choose....</option>    
                    <option value="Regular">Regular</option>
                    <option value="Part time">Part time</option>
                    <option value="Full time">Full time</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="date hired">Date Hired</label>
                    <input type="date" class="form-control" id="date hired" name="date_hired" placeholder="Enter your birth hired" required> 
                </div>
            </div>
        </div>

        <div class="details personal">
            <span class="title">Education</span>

            <div class="fields">
                <div class="form-group">
                    <label for="highest Degree Obtained">Highest Degree Obtained</label>
                    <input type="text" class="form-control" id="highest Degree Obtained" name="highest_degree_obtained" placeholder="Enter your Highest Degree" required> 
                </div>

                <div class="form-group">
                    <label for="name of Institution">Name of Institution</label>
                    <input type="text" class="form-control" id="name of Institution" name="name_of_institution" placeholder="Enter your name of institution" required> 
                </div>

                <div class="form-group"> 
                    <label for="graduation Year">Graduation Year</label>
                    <input type="number" class="form-control" id="graduation Year" name="graduation_year" placeholder="Enter your graduation Year" required> 
                </div>
            </div>
        </div>

        <input type="submit" value="Submit">
        <div class="buttons">
        <button class="showBtn">
        <span class="BtnText">New Onboard List</span>
        </button>
        </div>

        <div class="onboard-container">
          <div class="col">
            <div class="card mt-5">
              <div class="card-header">
                <h2 class="display-6" align="center">New Hired Onboard</h2>
              </div>
              <div class="table-container">
              <table align="center">
    <tr bgcolor="royalblue">
        <th>Employee ID</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Date of birth</th>
        <th>Address</th>
        <th>Phone no</th>
        <th>Email address</th>
        <th>Position</th>
        <th>Department</th>
        <th>Date hired</th>
        <th>Status</th>
        <th>Highest degree</th>
        <th>Name of Institution</th>
        <th>Graduation year</th>
        <th>Action</th>
    </tr>
    <?php
    while($row = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
        <td><?php echo $row['Employee_ID']; ?></td>
        <td><?php echo $row['Name']; ?></td>
        <td><?php echo $row['Gender']; ?></td>
        <td><?php echo $row['Date_of_birth']; ?></td>
        <td><?php echo $row['Address']; ?></td>
        <td><?php echo $row['Phone_no']; ?></td>
        <td><?php echo $row['Email_address']; ?></td>
        <td><?php echo $row['Position']; ?></td>
        <td><?php echo $row['Department']; ?></td>
        <td><?php echo $row['Date_hired']; ?></td>
        <td><?php echo $row['Status']; ?></td>
        <td><?php echo $row['Highest_degree_obtained']; ?></td>
        <td><?php echo $row['Name_of_institution']; ?></td>
        <td><?php echo $row['Graduation_year']; ?></td>
        <td>
        <button onclick="viewFunction(<?php echo $row['Employee_ID']; ?>)">View</button>
            <button onclick="updateFunction(<?php echo $row['id']; ?>)">Update</button>
            <button onclick="deleteFunction(<?php echo $row['id']; ?>)">Delete</button>
        </td>
    </tr>
    <?php
    }
    ?>
</table>
 
                </div>
            </div>
        </div>
      </div>
    </div>    
    <!-- Modal for view, update, delete -->
<div id="myModal" class="modal" style="display: none;">
    <div class="modal-content" style="margin: 15% auto; width: 50%;">
        <span class="close" onclick="closeModal()">×</span>
        <div id="modalContent"></div>
    </div>
</div>

<script>
// Function to handle view action
function viewFunction(id) {
    var xhttp = new XMLHttpRequest(); // Create a new XMLHttpRequest object
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) { // When the request is complete and successful
            document.getElementById("modalContent").innerHTML = this.responseText; // Update modal content with response
            document.getElementById("myModal").style.display = "block"; // Display the modal
        }
    };
    xhttp.open("GET", "view.php?id=" + id, true); // Prepare the request to view.php with the employee ID
    xhttp.send(); // Send the request
}



function updateFunction(id) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("modalContent").innerHTML = this.responseText;
            document.getElementById("myModal").style.display = "block"; 
        }
    };
    xhttp.open("GET", "update.php?id=" + id, true);
    xhttp.send();
}

function deleteFunction(id) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            window.location.href = "index.php"; // Redirect to the index page after deletion
        }
    };
    xhttp.open("GET", "delete.php?id=" + id, true);
    xhttp.send();
}

function closeModal() {
    document.getElementById("myModal").style.display = "none"; 
}
</script>

    </form>

    <script src="form.js"></script>
</body>
</html>