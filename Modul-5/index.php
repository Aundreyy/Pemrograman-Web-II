<!DOCTYPE html>
<html lang="id">
<head>
    <title>Dashboard Perpustakaan</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f7f6; padding: 20px; text-align: center; }
        .container { max-width: 800px; margin: auto; padding: 40px 20px; animation: fadeIn 0.8s ease-in-out; }
        @keyframes fadeIn { 0% { opacity: 0; transform: translateY(-20px); } 100% { opacity: 1; transform: translateY(0); } }
        h1 { color: #333; margin-bottom: 40px; font-size: 32px; }
        .card-container { display: flex; justify-content: center; gap: 25px; flex-wrap: wrap; }
        .card { background-color: white; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); width: 220px; padding: 40px 20px; text-decoration: none; color: #333; transition: all 0.3s ease; display: flex; flex-direction: column; align-items: center; }
        .card:hover { transform: translateY(-10px); box-shadow: 0 8px 20px rgba(0,0,0,0.2); background-color: #007bff; color: white; }
        .icon { font-size: 60px; margin-bottom: 20px; }
        .card-title { font-size: 20px; font-weight: bold; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Sistem Manajemen Perpustakaan</h1>
        <div class="card-container">
            <a href="Member.php" class="card">
                <div class="icon">👥</div>
                <div class="card-title">Data Member</div>
            </a>
            <a href="Buku.php" class="card">
                <div class="icon">📚</div>
                <div class="card-title">Data Buku</div>
            </a>
            <a href="Peminjaman.php" class="card">
                <div class="icon">🔄</div>
                <div class="card-title">Data Peminjaman</div>
            </a>
        </div>
    </div>
</body>
</html>