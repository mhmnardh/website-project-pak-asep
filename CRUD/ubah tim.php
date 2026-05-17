<?php
include "../konek/konek.php";

$message = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(!isset($_POST["NamaTim"]) || !isset($_POST["Player1"]) || !isset($_POST["Player2"]) || !isset($_POST["Player3"]) || !isset($_POST["Player4"])){
        $message = "<div class='message warning'>Data tidak lengkap</div>";
    } else {
        $NamaTim = $conn->real_escape_string($_POST["NamaTim"]);
        $Player1 = $conn->real_escape_string($_POST["Player1"]);
        $Player2 = $conn->real_escape_string($_POST["Player2"]);
        $Player3 = $conn->real_escape_string($_POST["Player3"]);
        $Player4 = $conn->real_escape_string($_POST["Player4"]);
        $sql = "UPDATE db_teams SET player1='$Player1', player2='$Player2', player3='$Player3', player4='$Player4' WHERE NamaTim='$NamaTim'";

        if ($conn->query($sql) === TRUE) {
            $message = "<div class='message success'>Data tim berhasil diperbarui!</div>";
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
    <title>Ubah Data</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
    <?php include "../include/sidebar.php"; ?>
    <h2>Ubah Data</h2>
    <?php echo $message; ?>
    <form method="POST">
        <label for="NamaTim">Nama Tim:</label>
        <input type="text" id="NamaTim" name="NamaTim" required><br><br>
        <label for="Player1">Player 1:</label>
        <input type="text" id="Player1" name="Player1" required><br><br>
        <label for="Player2">Player 2:</label>
        <input type="text" id="Player2" name="Player2" required><br><br>
        <label for="Player3">Player 3:</label>
        <input type="text" id="Player3" name="Player3" required><br><br>
        <label for="Player4">Player 4:</label>
        <input type="text" id="Player4" name="Player4" required><br><br>
        <input type="submit" value="Ubah">
    </form>
        </div>
    </div>
</body>
</html>