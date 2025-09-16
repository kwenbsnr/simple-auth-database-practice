<?php
session_start();
if (!isset($_SESSION["user_id"]) || $_SESSION["role"] !== "admin") {
    header("Location: ../login/login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
  <div class="p-6">
    <h1 class="text-3xl font-bold text-green-700">Admin Dashboard</h1>
    <p class="mt-2">You are logged in as: <b><?php echo $_SESSION["email"]; ?></b></p>

    <div class="grid grid-cols-2 gap-6 mt-6">
      <div class="bg-white p-6 rounded shadow">
        <h2 class="text-xl font-semibold">Manage Alumni</h2>
        <p class="text-gray-600">View and update alumni records.</p>
      </div>
      <div class="bg-white p-6 rounded shadow">
        <h2 class="text-xl font-semibold">Reports</h2>
        <p class="text-gray-600">Generate employment statistics.</p>
      </div>
    </div>

    <a href="../login/logout.php" class="mt-6 inline-block bg-red-600 text-white px-4 py-2 rounded">Logout</a>
  </div>
</body>
</html>
