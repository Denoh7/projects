<?php
session_start();
include('include/config.php');
include('include/checklogin.php');
check_login();

if(isset($_POST['submit'])) {
    $specialization = mysqli_real_escape_string($con, $_POST['Doctorspecialization']);
    $doctorid = mysqli_real_escape_string($con, $_POST['doctor']);
    $userid = $_SESSION['id'];
    $appdate = mysqli_real_escape_string($con, $_POST['appdate']);
    $time = mysqli_real_escape_string($con, $_POST['apptime']);
    $userstatus = 1;
    $docstatus = 1;

    $query = mysqli_query($con, "INSERT INTO appointment (doctorSpecialization, doctorId, userId, appointmentDate, appointmentTime, userStatus, doctorStatus) VALUES ('$specialization', '$doctorid', '$userid', '$appdate', '$time', '$userstatus', '$docstatus')");

    if($query) {
        echo "<script>alert('Your appointment has been successfully booked');</script>";
    } else {
        echo "<script>alert('Failed to book appointment. Please try again.');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Book Appointment</title>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <script src="vendor/jquery/jquery.min.js"></script>
    <script>
        function getDoctor(val) {
            $.ajax({
                type: "POST",
                url: "get_doctor.php",
                data: { specilizationid: val },
                success: function(data) {
                    $("#doctor").html(data);
                }
            });
        }
    </script>
</head>
<body>
    <div class="container">
        <h2>Book Appointment</h2>
        <form method="post">
            <div class="form-group">
                <label>Doctor Specialization</label>
                <select name="Doctorspecialization" class="form-control" onChange="getDoctor(this.value);" required>
                    <option value="">Select Specialization</option>
                    <?php $ret=mysqli_query($con,"SELECT * FROM doctorspecilization");
                    while($row=mysqli_fetch_array($ret)) { ?>
                        <option value="<?php echo htmlentities($row['specilization']); ?>">
                            <?php echo htmlentities($row['specilization']); ?>
                        </option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label>Doctor</label>
                <select name="doctor" class="form-control" id="doctor" required>
                    <option value="">Select Doctor</option>
                </select>
            </div>

            <div class="form-group">
                <label>Appointment Date</label>
                <input type="date" class="form-control" name="appdate" required>
            </div>

            <div class="form-group">
                <label>Appointment Time</label>
                <input type="time" class="form-control" name="apptime" required>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
