<?php include 'db_connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Update Student</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2 class="mb-4">Update Student</h2>
<?php
$id = $_GET['id'];
$sql = "SELECT * FROM students WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<form action="" method="POST" class="card p-4 shadow">
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" name="name" class="form-control" value="<?= $row['name'] ?>" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" name="email" class="form-control" value="<?= $row['email'] ?>" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Course</label>
    <input type="text" name="course" class="form-control" value="<?= $row['course'] ?>" required>
  </div>
  <button type="submit" name="update" class="btn btn-primary">Update</button>
  <a href="select.php" class="btn btn-secondary">Back</a>
</form>

<?php
if (isset($_POST['update'])) {
    $name   = $_POST['name'];
    $email  = $_POST['email'];
    $course = $_POST['course'];

    $sql = "UPDATE students SET name='$name', email='$email', course='$course' WHERE id=$id";
    if ($conn->query($sql)) {
        echo "<div class='alert alert-success mt-3'>Student updated successfully!</div>";
    } else {
        echo "<div class='alert alert-danger mt-3'>Error: " . $conn->error . "</div>";
    }
}
?>
</body>
</html>
