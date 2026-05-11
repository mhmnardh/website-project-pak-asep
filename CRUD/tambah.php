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
        $sql = "INSERT INTO db_teams (NamaTim, player1, player2, player3, player4) VALUES ('$NamaTim', '$Player1', '$Player2', '$Player3', '$Player4')";

        if ($conn->query($sql) === TRUE) {
            $message = "<div class='message success'>Data tim berhasil ditambahkan!</div>";
        } else {
            $message = "<div class='message error'>Error: " . $conn->error . "</div>";
        }
    }
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="id"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tim - Panel Admin</title>
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

        .main-content {
            padding: 2rem 0;
        }

        .d-flex {
            display: flex;
        }

        .justify-content-between {
            justify-content: space-between;
        }

        .align-items-center {
            align-items: center;
        }

        .mb-4 {
            margin-bottom: 1.5rem;
        }

        .h3 {
            font-size: 1.75rem;
            font-weight: 700;
        }

        .mb-0 {
            margin-bottom: 0;
        }

        .text-gray-800 {
            color: #343a40;
        }

        .card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.06);
            overflow: hidden;
        }

        .card-header {
            padding: 1rem 1.5rem;
            background: #0d6efd;
            color: #fff;
        }

        .card-body {
            padding: 1.5rem;
        }

        .m-0 {
            margin: 0;
        }

        .font-weight-bold {
            font-weight: 700;
        }

        .mb-3 {
            margin-bottom: 1rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.75rem;
            font-weight: 700;
            color: #212529;
        }

        .fw-bold {
            font-weight: 700;
        }

        .input-group {
            display: flex;
            width: 100%;
            border-radius: 12px;
            overflow: hidden;
            border: 1px solid #ced4da;
            background: #fff;
        }

        .input-group-text {
            display: flex;
            align-items: center;
            justify-content: center;
            min-width: 50px;
            padding: 0.85rem;
            background: #f1f3f5;
            color: #495057;
            border-right: 1px solid #ced4da;
        }

        .form-control {
            flex: 1;
            padding: 0.85rem 1rem;
            border: none;
            outline: none;
            font-size: 1rem;
        }

        .form-control:focus {
            outline: none;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            padding: 0.9rem 1.4rem;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            font-weight: 700;
            transition: transform 0.2s ease, background 0.2s ease;
            text-decoration: none;
        }

        .btn:hover {
            transform: translateY(-1px);
        }

        .btn-primary {
            background: #0d6efd;
            color: #fff;
        }

        .bg-primary {
            background-color: #0d6efd;
        }

        .text-white {
            color: #fff;
        }

        .p-4 {
            padding: 1.5rem;
        }

        .btn-light {
            background: #f8f9fa;
            color: #212529;
            border: 1px solid #ced4da;
        }

        .px-4 {
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }

        .ms-2 {
            margin-left: 0.5rem;
        }

        .py-3 {
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        .icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 1.4rem;
            font-size: 1rem;
        }

        .message {
            padding: 1rem 1.25rem;
            border-radius: 12px;
            margin-bottom: 1.5rem;
            border: 1px solid transparent;
        }

        .message.warning {
            background: #fff3cd;
            color: #856404;
            border-color: #ffeeba;
        }

        .message.success {
            background: #d1e7dd;
            color: #0f5132;
            border-color: #badbcc;
        }

        .message.error {
            background: #f8d7da;
            color: #842029;
            border-color: #f5c2c7;
        }

        .button-row {
            display: flex;
            flex-wrap: wrap;
            gap: 0.75rem;
        }

        @media (max-width: 900px) {
            .row {
                flex-direction: column;
            }

            .col-md-3,
            .col-md-9,
            .col-lg-2,
            .col-lg-10 {
                width: 100%;
            }

            .sidebar {
                min-height: auto;
            }
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 px-0 sidebar">
                <div class="sidebar-brand">
                    <span class="icon">🎮</span>E-SPORT
                </div>
                <nav class="nav flex-column">
                    <a class="nav-link" href="index.php"><span class="icon">📊</span> Dashboard</a>
                    <a class="nav-link active" href="Tambah.php"><span class="icon">👥</span> Data Tim</a>
                    <a class="nav-link" href="tiket.html"><span class="icon">🎟️</span> Tiket</a>
                    <a class="nav-link text-danger mt-5" href="login.php"><span class="icon">🔒</span> Logout</a>
                </nav>
            </div>

            <!-- Main Content -->
            <div class="col-md-9 col-lg-10 main-content">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="h3 mb-0 text-gray-800">Manajemen Data Tim</h2>
                </div>

                <!-- Notifikasi PHP -->
                <?php if(!empty($message)) echo $message; ?>

                <div class="card">
                    <div class="card-header bg-primary text-white py-3">
                        <h6 class="m-0 font-weight-bold"><span class="icon">➕</span>Tambah Tim Baru</h6>
                    </div>
                    <div class="card-body p-4">
                        <form action="tambah.php" method="post">
                            <div class="mb-3">
                                <label for="NamaTim" class="form-label fw-bold">Nama Tim</label>
                                <div class="input-group">
                                    <span class="input-group-text"><span class="icon">🛡️</span></span>
                                    <input type="text" class="form-control" id="NamaTim" name="NamaTim" placeholder="Masukkan nama tim..." required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="Player1" class="form-label fw-bold">Player 1</label>
                                <div class="input-group">
                                    <span class="input-group-text"><span class="icon">👤</span></span>
                                    <input type="text" class="form-control" id="Player1" name="Player1" placeholder="Nama player 1..." required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="Player2" class="form-label fw-bold">Player 2</label>
                                <div class="input-group">
                                    <span class="input-group-text"><span class="icon">👤</span></span>
                                    <input type="text" class="form-control" id="Player2" name="Player2" placeholder="Nama player 2..." required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="Player3" class="form-label fw-bold">Player 3</label>
                                <div class="input-group">
                                    <span class="input-group-text"><span class="icon">👤</span></span>
                                    <input type="text" class="form-control" id="Player3" name="Player3" placeholder="Nama player 3..." required>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="Player4" class="form-label fw-bold">Player 4</label>
                                <div class="input-group">
                                    <span class="input-group-text"><span class="icon">👤</span></span>
                                    <input type="text" class="form-control" id="Player4" name="Player4" placeholder="Nama player 4..." required>
                                </div>
                            </div>
                            <hr>
                            <div class="button-row">
                                <button type="submit" class="btn btn-primary px-4"><span class="icon">💾</span>Simpan</button>
                                <button type="reset" class="btn btn-light px-4 ms-2"><span class="icon">↻</span>Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html> 