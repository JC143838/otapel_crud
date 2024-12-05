<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="wth=device-wth, initial-scale=1.0">
 <title>Easy CRUD</title>
 <link rel="stylesheet" href="style.css">
</head>
<body>
 <h1>Items</h1>
 <a href="create.php">Add New Item</a>
 <table border="1">
 <tr>
 <th></th>
 <th>Name</th>
 <th>Description</th>
 <th>Actions</th>
 </tr>
 <?php
 $stmt = $conn->query("SELECT * FROM items");
 while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
 echo "<tr>
 <td>{$row['ID']}</td>
 <td>{$row['name']}</td>
 <td>{$row['description']}</td>
 <td>
 <a href='update.php?={$row['ID']}'>Edit</a>
 <a href='delete.php?={$row['ID']}'>Delete</a>
 </td>
 </tr>";
 }
 ?>
 </table>
</body>
</html>