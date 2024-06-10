<?php
  include 'connect.php';
  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "INSERT INTO tbl_crud (name, email, mobile, password) values('$name','$email','$mobile','$password')";
    $result = mysqli_query($con, $sql);
    if ($result) {
      //echo "Data Inserted";
      header('location:display.php');
    } else {
      die(mysqli_error($con));
    }
  }
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PHP CRUD</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container my-5">
    <form method="post">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Name" autocomplete="off">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="Email" autocomplete="off">
      </div>
      <div class="mb-3">
        <label for="mobile" class="form-label">Mobile</label>
        <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile" autocomplete="off">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="text" class="form-control" id="password" name="password" placeholder="Password" autocomplete="off">
      </div>

      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
  </div>
</body>

</html>