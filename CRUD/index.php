<?php
include "../konek/konek.php";

?>
<!DOCTYPE html>
<html lang="id"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tim - Panel Admin</title>
</head>
<body>
    
    <div class="container-fluid">
                <div class="row">
                    
                    <?php include "../include/sidebar.php"; ?>
                    <!-- Data Tim -->
            <div class="col-md-9 col-lg-10">
                <table border="1">
                    <tr>
                        <th>No</th>
                        <th>Nama Tim</th>
                        <th>Pemain 1</th>
                        <th>Pemain 2</th>
                        <th>Pemain 3</th>
                        <th>Pemain 4</th>
                    </tr>
                <?php
                $sql = "SELECT * FROM db_teams";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row["id"] . "</td>
                                <td>" . $row["NamaTim"] . "</td>
                                <td>" . $row["Player1"] . "</td>
                                <td>" . $row["Player2"] . "</td>
                                <td>" . $row["Player3"] . "</td>
                                <td>" . $row["Player4"] . "</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>Tidak ada data tim</td></tr>";
                }
                ?>
                </table>
            
            
            <!-- Data Jadwal -->
                <table border="1">
                    <tr>
                        <th>No</th>
                        <th>Waktu</th>
                        <th>Tim 1</th>
                        <th>Tim 2</th>
                        <th>Kondisi</th>
                    </tr>
                <?php
                $sql = "SELECT * FROM db_jadwal";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row["id"] . "</td>
                                <td>" . $row["Waktu"] . "</td>
                                <td>" . $row["Tim1"] . "</td>
                                <td>" . $row["Tim2"] . "</td>
                                <td>" . $row["Kondisi"] . "</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>Tidak ada data jadwal</td></tr>";
                }
                ?>
                </table>

        </div>
    </div>
</body>
</html> 