<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home POS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            text-align: center;
        }
        header {
            background: #333;
            color: #fff;
            padding: 15px;
            text-align: center;
        }
        .container {
            margin: 20px auto;
            max-width: 800px;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .menu {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            margin-top: 20px;
        }
        .menu-item {
            background: #007bff;
            color: white;
            padding: 15px 30px;
            text-decoration: none;
            font-size: 18px;
            border-radius: 5px;
            transition: background 0.3s;
        }
        .menu-item:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <header>
        <h1>Home POS</h1>
    </header>
    <div class="container">
        <h2>Selamat Datang di Sistem Point of Sales</h2>
        <div class="menu">
            <a href="/POS/public/transaction" class="menu-item">Transaksi</a>
            <a href="/POS/public/category" class="menu-item">Produk</a>
            <a href="/POS/public/user/{id}/name/{name}" class="menu-item">Pengguna</a>
        </div>
        <h2>Daftar Produk</h2>
        <div class="menu">
            <a href="/POS/public/category/food-beverage" class="menu-item">Food & Beverage</a>
            <a href="/POS/public/category/beauty-health" class="menu-item">Beauty & Health</a>
            <a href="/POS/public/category/home-care" class="menu-item">Home Care</a>
            <a href="/POS/public/category/baby-kid" class="menu-item">Baby & Kid</a>
        </div>
    </div>
</body>
</html>
