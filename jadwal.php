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
</head>

<style>

    
      * {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
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
         .bg-text {
             position: absolute;
             font-size: 5rem;
             color: rgb(255, 255, 255);
             font-weight: bold;
             text-transform: uppercase;
             z-index: 1;
}

        #Jadwal {
          background: #050505;
      }

      .Jadwal-box {
          width: 100%;
          max-width: 800px;
          background: var(--glass);
          border-radius: 20px;
          padding: 40px;
      }

      .match {
          display: flex;
          justify-content: space-between;
          padding: 20px 0;
          border-bottom: 1px solid var(--border);
          align-items: center;
      }

      .match:last-child {
          border: none;
      }

      .time {
          color: var(--gold);
          font-weight: bold;
          font-size: 1.2rem;
      }
</style>

<body>
       <section id="Jadwal">
        <div class="bg-text" style="top: 10%;">TIMELINE</div>
        <h2 style="margin-bottom: 30px; z-index: 2;">JADWAL HARI INI</h2>
        <div class="Jadwal-box" style="z-index: 2;">
            <div class="match">
                <span class="time">14:00</span>
                <span>RRQ HOSHI vs EVOS GLORY</span>
                <span style="color: #00ff00;">LIVE</span>
            </div>
            <div class="match">
                <span class="time">17:30</span>
                <span>ONIC PH vs TEAM FLASH</span>
                <span style="opacity: 0.5;">UPCOMING</span>
            </div>
            <div class="match">
                <span class="time">20:00</span>
                <span>HOMEBOIS vs FIRE FLUX</span>
                <span style="opacity: 0.5;">UPCOMING</span>
            </div>
        </div>
    </section>

</body>
</html>

<?php
include 'include/footer.php';  
?>