<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi POS</title>
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
            max-width: 600px;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        .total {
            font-size: 20px;
            font-weight: bold;
            margin-top: 10px;
        }
        .btn {
            display: inline-block;
            background: #007bff;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            font-size: 18px;
            border-radius: 5px;
            transition: background 0.3s;
            margin-top: 15px;
        }
        .btn:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <header>
        <h1>Transaksi POS</h1>
    </header>
    <div class="container">
        <h2>Daftar Produk</h2>
        <table>
            <thead>
                <tr>
                    <th>Produk</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Produk A</td>
                    <td>Rp 50.000</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>Produk B</td>
                    <td>Rp 30.000</td>
                    <td>1</td>
                </tr>
            </tbody>
        </table>
        <p class="total">Total: Rp 130.000</p>
        <a href="#" class="btn">Bayar Sekarang</a>
    </div>
</body>
</html>
