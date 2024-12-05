<?php include 'db.php'; ?>
<?php
if (isset($_GET['ID'])) {
 $id = $_GET['ID'];
 $stmt = $conn->prepare("DELETE FROM items WHERE ID = ?");
 $stmt->execute([$ID]);
 header("Location: index.php");
}
?>