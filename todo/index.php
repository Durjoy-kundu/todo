<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>To-Do List</title>
  <link rel="stylesheet" href="sample.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  
</head>

<body>
  <header>

  <label class="switch">
      <input type="checkbox" id="toggle-mode">
      <span class="slider round"></span>
    </label>
    <a href="logout.php" class="btn btn-warning" id="logout">Logout</a>
    
    <h1 class="heading">To-Do List</h1>
  
  </header>

  <div class="container1">
    <form id="task-form">
      <input type="text" id="task-input" placeholder="Enter a task">
      <button type="submit">Add</button>
    </form>
    <ul id="task-list"></ul>
  </div>

  <script src="script.js"></script>
</body>

</html>
