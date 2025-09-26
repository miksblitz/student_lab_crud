<?php include 'db_connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Records</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2 class="mb-4">Student Records</h2>
<a href="insert.php" class="btn btn-success mb-3">Add Student</a>

<table class="table table-bordered table-striped">
  <thead class="table-dark">
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Course</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
<?php
$sql = "SELECT * FROM students";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "
        <tr>
          <td>{$row['id']}</td>
          <td>{$row['name']}</td>
          <td>{$row['email']}</td>
          <td>{$row['course']}</td>
          <td>
            <a href='update.php?id={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>
            <a href='delete.php?id={$row['id']}' class='btn btn-danger btn-sm' onclick='return confirm(\"Delete this record?\");'>Delete</a>
          </td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='5' class='text-center'>No records found</td></tr>";
}
?>
  </tbody>
</table>
</body>
</html>
