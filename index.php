<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Personal Form</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="form-card">
                <h3 class="text-center mb-4">Personal Form</h3>
                <form action="profile.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text" name="fullname" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Age</label>
                        <input type="number" name="age" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Course</label>
                        <input type="text" name="course" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email Address</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Gender</label><br>
                        <input type="radio" name="gender" value="Male" required> Male
                        <input type="radio" name="gender" value="Female"> Female
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Hobbies</label><br>
                        <input type="checkbox" name="hobbies[]" value="Reading"> Reading
                        <input type="checkbox" name="hobbies[]" value="Gaming"> Gaming
                        <input type="checkbox" name="hobbies[]" value="Music"> Music
                        <input type="checkbox" name="hobbies[]" value="Sports"> Sports
                        <input type="checkbox" name="hobbies[]" value="Coding"> Coding
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Short Biography</label>
                        <textarea name="bio" class="form-control"></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Upload Image</label>
                        <input type="file" name="profile_image" class="form-control" required>
                    </div>
                    <button class="btn btn-primary w-100">Create Profile</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
