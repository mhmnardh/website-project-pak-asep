<?php
include "../konek/konek.php";

$message = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(!isset($_POST["Waktu"])){
        $message = "<div class='message warning'>Data tidak lengkap</div>";
    } else {
        $Waktu = $conn->real_escape_string($_POST["Waktu"]);
        $sql = "DELETE FROM db_jadwal WHERE Waktu='$Waktu'";

        if ($conn->query($sql) === TRUE) {
            $message = "<div class='message success'>Data jadwal berhasil dihapus!</div>";
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
    <title>Hapus Data Jadwal</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
    <?php include "../include/sidebar.php"; ?>
    <h2>Hapus Data Jadwal</h2>
    <?php echo $message; ?>
    <form method="POST">
        <label for="Waktu">Waktu:</label>
        <input type="datetime-local" id="Waktu" name="Waktu" required><br><br>
        <input type="submit" value="Hapus">
    </form>
        </div>
    </div>
</body>
</html>