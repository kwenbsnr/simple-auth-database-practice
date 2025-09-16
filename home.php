<?php
session_start();
if (!isset($_SESSION["user_id"]) || $_SESSION["role"] !== "alumni") {
    header("Location: ../login/login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Alumni Home</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-50">
  <div class="p-6">
    <h1 class="text-3xl font-bold text-blue-700">Welcome, Alumni!</h1>
    <p class="mt-2">You are logged in as: <b><?php echo $_SESSION["email"]; ?></b></p>


    <div class="mt-6 bg-white shadow p-4 rounded-lg">
      <h2 class="text-xl font-semibold">Alumni Portal</h2>
      <ul class="list-disc ml-6 mt-2">
        <li>Update Employment Information</li>
        <li>View Announcements</li>
        <li>Network with Other Alumni</li>
      </ul>
    </div>

    <a href="../login/logout.php" class="mt-6 inline-block bg-red-600 text-white px-4 py-2 rounded">Logout</a>
  </div>
</body>
</html>
