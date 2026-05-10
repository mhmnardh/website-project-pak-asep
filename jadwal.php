<?php
include 'include/header.php';
include 'konek/konek.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal</title>
    <link rel="stylesheet" href="css/jadwal.css">
</head>

<body>
       <section id="Jadwal">
        <div class="bg-text" style="top: 10%;">TIMELINE</div>
        <h2 style="margin-bottom: 30px; z-index: 2;">JADWAL HARI INI</h2>
        <div class="Jadwal-box" style="z-index: 2;">
            <?php
            $sql = "SELECT id, Waktu, Tim1, Tim2, Kondisi FROM db_jadwal";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
    
            while($row = $result->fetch_assoc()) {
                echo "
                <div class=\"match\">
                    <div class=\"time\">" . $row["Waktu"] . "</div>
                    <div class=\"team\">" . $row["Tim1"] . "</div>
                    <h3>vs</h3>
                    <div class=\"team\">" . $row["Tim2"] . "</div>
                    <div class=\"status\">" . $row["Kondisi"] . "</div>
                </div>";
            }
            } else {
            echo "0 results";
            }        
            ?>
        </div>
    </section>

</body>
</html>

<?php
include 'include/footer.php';  
?>