<?php
include "../konek/konek.php";

$message = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(!isset($_POST["NamaTim"])){
        $message = "<div class='message warning'>Data tidak lengkap</div>";
    } else {
        $NamaTim = $conn->real_escape_string($_POST["NamaTim"]);
        $sql = "DELETE FROM db_teams WHERE NamaTim='$NamaTim'";

        if ($conn->query($sql) === TRUE) {
            $message = "<div class='message success'>Data tim berhasil dihapus!</div>";
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
    <title>Hapus Data</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
    <?php include "../include/sidebar.php"; ?>
    <h2>Hapus Data</h2>
    <?php echo $message; ?>
    <form method="POST">
        <label for="NamaTim">Nama Tim:</label>
        <input type="text" id="NamaTim" name="NamaTim" required><br><br>
        <input type="submit" value="Hapus">
    </form>
        </div>
    </div>
</body>
</html>