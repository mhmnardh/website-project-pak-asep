<?php
include 'include/header.php';
include 'konek/konek.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teams</title>
</head>
<style>
    
      * {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
      }

      html {
          scroll-snap-type: y mandatory;
          scroll-behavior: smooth;
      }

      body {
          background-color: var(--dark);
          color: white;
          font-family: 'Rajdhani', sans-serif;
          overflow-x: hidden;
      }
      
      section {
          height: 93vh;
          width: 100%;
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;
          scroll-snap-align: start;
          position: relative;
          padding: 0 10%;
          overflow: hidden;
      }

      
      #teams {
          background: #080808;
      }

      .grid-container {
          display: grid;
          grid-template-columns: repeat(3, 1fr);
          gap: 20px;
          width: 100%;
          max-width: 1000px;
      }

      .card {
          background: var(--glass);
          backdrop-filter: blur(10px);
          border: 1px solid var(--border);
          padding: 30px;
          text-align: center;
          border-radius: 15px;
          transition: 0.4s;
      }

      .card:hover {
          border-color: var(--gold);
          transform: translateY(-10px);
          box-shadow: 0 10px 30px var(--gold-glow);
      }

</style>
<body>
    
    <section id="teams">
        <h2 style="margin-bottom: 50px;">PRO TEAMS</h2>
        <div class="grid-container">
            <div class="card">    
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

            <!--
            </div>
            <div class="card">
                <h3>ONIC PH</h3>
                <p>Philippines</p>
            </div>
            <div class="card">
                <h3>EVOS GLORY</h3>
                <p>Indonesia</p>
            </div>
            <div class="card">
                <h3>TEAM FLASH</h3>
                <p>Singapore</p>
            </div>
            <div class="card">
                <h3>HOMEBOIS</h3>
                <p>Malaysia</p>
            </div>
            <div class="card">
                <h3>FIRE FLUX</h3>
                <p>Turkey</p>
            </div>
        </div>-->
    </section>

</body>
</html>

<?php
include 'include/footer.php';
?>