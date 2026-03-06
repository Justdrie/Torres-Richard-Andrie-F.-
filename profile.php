<?php

$fullname = $_POST['fullname'];
$age = $_POST['age'];
$course = $_POST['course'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$bio = $_POST['bio'];

$hobbies = "";
if(isset($_POST['hobbies'])){
    $hobbies = implode(", ", $_POST['hobbies']);
}

$image_name = $_FILES['profile_image']['name'];
$image_tmp = $_FILES['profile_image']['tmp_name'];

$upload_folder = "uploads/";

move_uploaded_file($image_tmp, $upload_folder . $image_name);

?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<title>User Profile</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="stylepfp.css">

</head>

<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
        <div class="profile-card">
            <img src="uploads/<?php echo $image_name; ?>" class="profile-img">

            <h3><?php echo $fullname; ?></h3>

            <hr>

            <p><b>Age:</b> <?php echo $age; ?></p>
            <p><b>Course:</b> <?php echo $course; ?></p>
            <p><b>Email:</b> <?php echo $email; ?></p>
            <p><b>Gender:</b> <?php echo $gender; ?></p>
            <p><b>Hobbies:</b> <?php echo $hobbies; ?></p>

            <p><b>Biography:</b><br>
            <?php echo $bio; ?>
            </p>

            <a href="index.php" class="btn btn-secondary mt-3">Create Another Profile</a>
        </div>
        </div>
    </div>
</div>

</body>
</html>
