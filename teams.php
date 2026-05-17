<?php
include 'konek/konek.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/teams.css">
    <title>Teams</title>
</head>
<body>
    <?php include 'include/header.php'; ?>
    <section id="teams">
        <h2 style="margin-bottom: 50px;">PRO TEAMS</h2>
        <div class="grid-container">
            <?php
            $sql = "SELECT id, NamaTim, Player1, Player2, Player3, Player4 FROM db_teams";
            // Execute the SQL query
            $result = $conn->query($sql);
            // $row = $result->fetch_assoc();

            //AMBIL DATA BANYAK
            // Process the result set
            if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<div class=\"card\">
                    <h3>" . $row["NamaTim"] . "</h3>
                    <p>" . $row["Player1"] . "</p>
                    <p>" . $row["Player2"] . "</p>
                    <p>" . $row["Player3"] . "</p>
                    <p>" . $row["Player4"] . "</p>
                </div>";
            }
            } else {
                echo "0 results";
            }
            ?>
        </div>
    </section>

    <?php include 'include/footer.php'; ?>
</body>
</html>
