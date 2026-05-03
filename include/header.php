<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<style>
    
      * {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
      }

      nav {
          position: fixed;
          top: 0;
          width: 100%;
          padding: 25px 50px;
          display: flex;
          justify-content: space-between;
          align-items: center;
          z-index: 1000;
          background: linear-gradient(to bottom, rgba(0, 0, 0, 0.8), transparent);
      }

      .logo img {
          width: 40px;
          height: 40px;
          vertical-align: middle;
          margin-right: 10px;
      }
      .nav-links a {
          color: white;
          text-decoration: none;
          margin-left: 30px;
          font-weight: bold;
          font-size: 14px;
          transition: 0.3s;
          border-bottom: 2px solid transparent;
      }

      .nav-links a:hover {
          color: var(--gold);
          border-bottom: 2px solid var(--gold);
      }
</style>
    
    <nav>
        <div class="logo"><img src="img/smk.png" alt="M7 Logo">SMKN 1 GARUT</div>
        <div class="nav-links">
            <a href="index.php">Home</a>
            <a href="teams.php">Tim</a>
            <a href="jadwal.php">Jadwal</a>
            <a href="tiket.php">Ticket </a>
            <a href="login.php">Login</a>
        </div>
    </nav>
</body>
</html>

