<?php
include "../konek/konek.php";

$message = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(!isset($_POST["Waktu"]) || !isset($_POST["Tim1"]) || !isset($_POST["Tim2"]) || !isset($_POST["Kondisi"])){
        $message = "<div class='message warning'>Data tidak lengkap</div>";
    } else {
        $Waktu = $conn->real_escape_string($_POST["Waktu"]);
        $Tim1 = $conn->real_escape_string($_POST["Tim1"]);
        $Tim2 = $conn->real_escape_string($_POST["Tim2"]);
        $Kondisi = $conn->real_escape_string($_POST["Kondisi"]);
        $sql = "UPDATE db_jadwal SET Waktu='$Waktu', Tim1='$Tim1', Tim2='$Tim2', Kondisi='$Kondisi' WHERE Waktu='$Waktu'";

        if ($conn->query($sql) === TRUE) {
            $message = "<div class='message success'>Data jadwal berhasil diperbarui!</div>";
        } else {
            $message = "<div class='message error'>Error: " . $conn->error . "</div>";
        }
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Jadwal</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
    <?php include "../include/sidebar.php"; ?>
    <h2>Ubah Data Jadwal</h2>
    <?php echo $message; ?>
    <form method="POST">
        <label for="Waktu">Waktu:</label>
        <input type="datetime-local" id="Waktu" name="Waktu" required><br><br>
        <label for="Tim1">Tim 1:</label>
        <input type="text" id="Tim1" name="Tim1" required><br><br>
        <label for="Tim2">Tim 2:</label>
        <input type="text" id="Tim2" name="Tim2" required><br><br>
        <label for="Kondisi">Kondisi:</label>
        <select id="Kondisi" name="Kondisi" required>
            <option value="Live">Live</option>
            <option value="Segera">Segera</option>
        </select><br><br>
        <input type="submit" value="Ubah">
    </form>
        </div>
    </div>
</body>
</html>