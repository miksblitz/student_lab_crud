<?php include 'db_connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add Student</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2 class="mb-4">Add Student</h2>
<form action="" method="POST" class="card p-4 shadow">
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" name="name" class="form-control" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" name="email" class="form-control" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Course</label>
    <input type="text" name="course" class="form-control" required>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Add</button>
  <a href="select.php" class="btn btn-secondary">View Students</a>
</form>

<?php
if (isset($_POST['submit'])) {
    $name   = $_POST['name'];
    $email  = $_POST['email'];
    $course = $_POST['course'];

    $sql = "INSERT INTO students (name, email, course) VALUES ('$name','$email','$course')";
    if ($conn->query($sql)) {
        echo "<div class='alert alert-success mt-3'>Student added successfully!</div>";
    } else {
        echo "<div class='alert alert-danger mt-3'>Error: " . $conn->error . "</div>";
    }
}
?>
</body>
</html>
