<html>
<head>
  <!-- bagian title untuk website -->
  <title>Nurhaye Login</title>
</head>

<body>
  <!-- bagian title untuk website -->
  <?php
  if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] === "nurhaye" && $_POST['password'] === "1234") {
      echo "<h1>Selamat Datang, ". $_POST['username'] . "</h1>";
    } else {
      echo 'username dan password, silahkan <a href="index.php">ulangi</a>';
    }
  }
  ?>
</body>
</html>
