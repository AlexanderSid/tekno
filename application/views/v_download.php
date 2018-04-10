
<?php
// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=tutorialweb-export.xls");
 
// Tambahkan table

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pengunjung";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM pengunjung";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Tahun</th><th>Asia</th><th>America</th><th>Europe</th><th>Rusia</th><th>Afrika</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["tahun"]."</td><td>".$row["asia"]." </td><td>".$row["america"]." </td><td>".$row["europe"]." </td><td>".$row["rusia"]." </td><td>".$row["africa"]." </td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
