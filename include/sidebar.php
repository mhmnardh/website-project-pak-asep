    <style>
        :root {
            font-family: Inter, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            color: #212529;
            background-color: #f4f6f9;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            background-color: #f4f6f9;
            color: #212529;
        }

        .container-fluid {
            width: 100%;
            padding: 0 1rem;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -1rem;
        }

        .col-md-3,
        .col-lg-2,
        .col-md-9,
        .col-lg-10 {
            padding: 0 1rem;
        }

        .col-md-3 {
            width: 25%;
        }

        .col-lg-2 {
            width: 16.6667%;
        }

        .col-md-9 {
            width: 75%;
        }

        .col-lg-10 {
            width: 83.3333%;
        }

        .px-0 {
            padding-left: 0;
            padding-right: 0;
        }

        .sidebar {
            min-height: 100vh;
            background-color: #212529;
            color: #fff;
            padding-top: 1rem;
        }

        .sidebar-brand {
            font-size: 1.25rem;
            font-weight: 700;
            text-align: center;
            padding: 1rem 0;
            margin-bottom: 1rem;
            border-bottom: 1px solid #495057;
            letter-spacing: 1px;
        }

        .nav {
            display: block;
            padding: 0;
            margin: 0;
        }

        .flex-column {
            display: flex;
            flex-direction: column;
        }

        .nav-link {
            color: #adb5bd;
            text-decoration: none;
            padding: 12px 20px;
            display: block;
            transition: all 0.3s ease;
            border-left: 4px solid transparent;
        }

        .nav-link:hover,
        .nav-link.active {
            color: #fff;
            background-color: #343a40;
            border-left-color: #0d6efd;
        }

        .text-danger {
            color: #dc3545;
        }

        .mt-5 {
            margin-top: 3rem;
        }
    </style>

            <div class="col-md-3 col-lg-2 px-0 sidebar">
                <div class="sidebar-brand">
                    <span class="icon">🎮</span>E-SPORT
                </div>
                <nav class="nav flex-column">
                    <a class="nav-link" href="index.php"><span class="icon">📊</span> Dashboard</a>
                    <a class="nav-link active" href="Tambah Tim.php"><span class="icon">👥</span> Tambah Tim</a>
                    <a class="nav-link active" href="Ubah Tim.php"><span class="icon">👥</span> Ubah Tim</a>
                    <a class="nav-link active" href="Hapus Tim.php"><span class="icon">👥</span> Hapus Tim</a>
                    <a class="nav-link active" href="Tambah Jadwal.php"><span class="icon">📅</span> Tambah Jadwal</a>
                    <a class="nav-link active" href="Ubah Jadwal.php"><span class="icon">📅</span> Ubah Jadwal</a>
                    <a class="nav-link active" href="Hapus Jadwal.php"><span class="icon">📅</span> Hapus Jadwal</a>
                    <a class="nav-link text-danger mt-5" href="login.php"><span class="icon">🔒</span> Logout</a>
                </nav>
            </div>
