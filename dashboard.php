<?php
// dashboard.php
require_once "db_connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard - Saudi Sites</title>
  <link rel="stylesheet" href="style.css"> 
  <style>
    
    .dashboard-container {
      width: 80%;
      margin: 20px auto;
      background-color: #f8f8f8;
      padding: 20px;
    }
    .dashboard-container h1 {
      text-align: center;
      color: #333;
    }
    table {
      margin: 0 auto;
      width: 80%;
      border-collapse: collapse;
    }
    table thead {
      background-color: #007b5e;
      color: #fff;
    }
    table th, table td {
      border: 1px solid #ccc;
      text-align: center;
      padding: 10px;
    }
  </style>
</head>
<body>
  <div class="dashboard-container">
    <h1>Saudi Sites Dashboard</h1>
    <?php
      try {
          $stmt = $conn->prepare("SELECT * FROM sites");
          $stmt->execute();
          $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

          if($rows) {
              echo "<table>";
              echo "<thead><tr><th>ID</th><th>Name</th><th>Description</th></tr></thead>";
              echo "<tbody>";
              foreach($rows as $row) {
                  echo "<tr>";
                  echo "<td>" . $row['id'] . "</td>";
                  echo "<td>" . $row['name'] . "</td>";
                  echo "<td>" . $row['description'] . "</td>";
                  echo "</tr>";
              }
              echo "</tbody></table>";
          } else {
              echo "<p>No records found in the database.</p>";
          }
      } catch (PDOException $e) {
          echo "Error retrieving data: " . $e->getMessage();
      }
    ?>
    <br>
    <p style="text-align: center;">
      <a href="index.html" class="btn-link">Back to Home</a> 
      
      
      
    </p>
  </div>
</body>
</html>