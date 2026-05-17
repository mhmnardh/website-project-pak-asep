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
          padding: 20px 40px;
          display: flex;
          justify-content: space-between;
          align-items: center;
          z-index: 1000;
          background: rgba(0, 0, 0, 0.75);
          backdrop-filter: blur(10px);
      }

      .logo {
          color: #fff;
          font-weight: 700;
          font-size: 1rem;
          letter-spacing: 1px;
          display: flex;
          align-items: center;
      }

      .logo img {
          width: 38px;
          height: 38px;
          margin-right: 10px;
      }

      .nav-links a {
          color: white;
          text-decoration: none;
          margin-left: 28px;
          font-weight: 600;
          font-size: 0.95rem;
          transition: color 0.25s ease, border-bottom 0.25s ease;
          border-bottom: 2px solid transparent;
          padding-bottom: 2px;
      }

      .nav-links a:hover {
          color: #ffcc00;
          border-bottom: 2px solid #ffcc00;
      }

      @media (max-width: 820px) {
          nav {
              flex-direction: column;
              gap: 12px;
              padding: 18px 20px;
          }

          .nav-links {
              display: flex;
              flex-wrap: wrap;
              justify-content: center;
              gap: 18px;
          }
      }
</style>

<nav>
    <div class="logo"><img src="img/smk.png" alt="SMKN 1 Garut Logo">SMKN 1 GARUT</div>
    <div class="nav-links">
        <a href="index.php">Home</a>
        <a href="teams.php">Tim</a>
        <a href="jadwal.php">Jadwal</a>
        <a href="tiket.php">Ticket</a>
        <a href="login.php">Login</a>
    </div>
</nav>

