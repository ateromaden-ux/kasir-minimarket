<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk Toko Kelontong</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #f0f4f7, #e6ebf0);
            margin: 0;
            padding: 20px;
        }
        h2 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 20px;
            font-size: 28px;
        }
        table {
            width: 95%;
            margin: auto;
            border-collapse: collapse;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        th {
            background: #3498db;
            color: white;
            padding: 14px;
            text-transform: uppercase;
            font-size: 14px;
            letter-spacing: 1px;
        }
        td {
            padding: 14px;
            text-align: center;
            font-size: 14px;
            color: #333;
        }
        tr:nth-child(even) {
            background: #f9f9f9;
        }
        tr:hover {
            background-color: #ecf6fc;
            transition: 0.3s;
        }
        img {
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.2);
            transition: transform 0.3s;
        }
        img:hover {
            transform: scale(1.1);
        }
        .price {
            font-weight: bold;
            color: #27ae60;
        }
        .stock {
            font-weight: bold;
            color: #e67e22;
        }
    </style>
</head>
<body>
    <h2>📦 Daftar Produk Toko Kelontong</h2>
    <table>
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>SKU</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Foto Produk</th>
        </tr>
        @foreach ($produk as $index => $item)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $item['nama'] }}</td>
            <td>{{ $item['sku'] }}</td>
            <td class="price">Rp {{ number_format($item['harga'], 0, ',', '.') }}</td>
            <td class="stock">{{ $item['stok'] }}</td>
            <td><img src="{{ $item['foto'] }}" alt="{{ $item['nama'] }}" width="100"></td>
        </tr>
        @endforeach
    </table>
</body>
</html>
