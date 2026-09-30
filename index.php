<?php
$products = [
    [
        "nama" => "Monitor 24 Inch",
        "kategori" => "MONITOR",
        "harga" => 1800000,
        "stok" => 4,
        "gambar" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQMrUD8Zi2uPcKnDEWi86n7ic_opIIrcVohK6YzPncSAW9UUm5uxFpfFEY&s=10"
    ],
    [
        "nama" => "Laptop Productivity",
        "kategori" => "LAPTOP",
        "harga" => 8500000,
        "stok" => 3,
        "gambar" => "https://brightstarcomp.com/cdn/shop/files/BSWEB1_85806aad-91f0-4f3d-a274-5def336b5831.jpg?v=1785915776"
    ],
    [
        "nama" => "Keyboard Mekanikal",
        "kategori" => "KEYBOARD",
        "harga" => 750000,
        "stok" => 10,
        "gambar" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUJXfPxmPrm2fysA3xyzSawCMuiG6Pg6-tPIjojkFfpw&s=10"
    ],
    [
        "nama" => "Mouse Wireless",
        "kategori" => "MOUSE",
        "harga" => 250000,
        "stok" => 0, // Stok habis
        "gambar" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGQvBR1453Hur2D0kP9qTRBnl9EPlO7kf9G7azXFXGD_QEqx4HQjQb9bI&s=10"
    ],
    [
        "nama" => "Headset Gaming",
        "kategori" => "HEADSET",
        "harga" => 1200000,
        "stok" => 6,
        "gambar" => "https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//105/MTA-19773753/nemesis_nyk_x-800_nemesis_rgb_headphone_bluetooth_gaming_headset_wireless_x800_full03_t3imby8s.jpg"
    ],
    [
        "nama" => "Webcam HD 1080p",
        "kategori" => "WEBCAM",
        "harga" => 450000,
        "stok" => 2,
        "gambar" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRE_TE43EzNB6LzF8KdSXQNW_YFQvBUq4D1KqUEdqzS6g&s"
    ]
];

$total_produk = count($products);

function formatRupiah($angka) {
    return "Rp" . number_format($angka, 0, ',', '.');
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cia Store - Katalog Produk</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Arial, sans-serif;
        }

        body {
            background-color: #f5f6f8;
            color: #333;
            line-height: 1.6;
        }

        header {
            background-color: #ffffff;
            border-bottom: 1px solid #e5e7eb;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .navbar {
            max-width: 1100px;
            margin: 0 auto;
            padding: 16px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 20px;
            font-weight: bold;
            color: #111;
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        .nav-links a {
            text-decoration: none;
            color: #666;
            font-size: 14px;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 30px 20px;
        }

        .hero {
            background-color: #1e1e24;
            color: #ffffff;
            padding: 50px 40px;
            border-radius: 16px;
            margin-bottom: 40px;
        }

        .hero span {
            text-transform: uppercase;
            font-size: 12px;
            letter-spacing: 1.5px;
            color: #aaa;
        }

        .hero h1 {
            font-size: 38px;
            margin: 10px 0;
        }

        .hero p {
            color: #ccc;
            margin-bottom: 25px;
            font-size: 15px;
        }

        .btn-hero {
            display: inline-block;
            background-color: #ffffff;
            color: #111;
            padding: 10px 22px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            font-size: 14px;
        }

        .catalog-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin-bottom: 25px;
        }

        .catalog-header span {
            font-size: 12px;
            color: #777;
            letter-spacing: 1px;
            font-weight: bold;
        }

        .catalog-header h2 {
            font-size: 24px;
            color: #111;
        }

        .total-badge {
            background-color: #e9ecef;
            padding: 6px 14px;
            border-radius: 6px;
            font-size: 14px;
            font-weight: bold;
            color: #444;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .product-card {
            background-color: #ffffff;
            border-radius: 16px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.04);
            display: flex;
            flex-direction: column;
            border: 1px solid #eef0f2;
            overflow: hidden;
        }

        .product-card:hover {
            transform: translateY(-3px);
            transition: transform 0.4s ease-in-out;
        }

        .product-img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .category-title {
            font-size: 13px;
            color: #888;
            font-weight: 600;
            margin-bottom: 4px;
        }

        .category-title span.discount-text {
            color: #f90000;
            font-weight: bold;
        }

        .product-title {
            font-size: 20px;
            font-weight: bold;
            color: #111;
            margin-bottom: 12px;
        }

        .original-price {
            text-decoration: line-through;
            color: #ff2121;
            font-size: 13px;
        }

        .final-price {
            font-size: 22px;
            font-weight: bold;
            color: #111;
            margin-bottom: 20px;
        }

        .card-footer {
            margin-top: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .stock-text {
            font-size: 14px;
            color: #444;
            font-weight: 500;
        }

        .status-badge {
            font-size: 12px;
            font-weight: bold;
            padding: 4px 12px;
            border-radius: 20px;
        }

        .status-available {
            background-color: #d1e7dd;
            color: #0f5132;
        }

        .status-out {
            background-color: #f8d7da;
            color: #842029;
        }

        
        .btn-buy {
            width: 100%;
            padding: 12px;
            background-color: #18191c;
            color: #ffffff;
            border: none;
            border-radius: 8px;
            font-weight: bold;
            font-size: 14px;
            cursor: pointer;
        }

        .btn-buy:hover {
            transform: translateY(-3px);
            transition: transform 0.4s ease-in-out;
            background-color: #646464;
        }

        .btn-buy:disabled {
            background-color: #d1d5db;
            color: #888888;
            cursor: not-allowed;
        }

        footer {
            background-color: #ffffff;
            border-top: 1px solid #e5e7eb;
            text-align: center;
            padding: 20px;
            margin-top: 60px;
            color: #777;
            font-size: 14px;
        }

        @media (max-width: 900px) {
            .product-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 600px) {
            .product-grid {
                grid-template-columns: 1fr;
            }
            .hero {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>

    <header>
        <div class="navbar">
            <div class="logo">CIA STORE</div>
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#products">Products</a></li>
                <li><a href="#">About</a></li>
            </ul>
        </div>
    </header>

    <div class="container">
        <div class="hero">
            <span>CIA STORE</span>
            <h1>Simple Tech Store.</h1>
            <p>Tempat berbagai jenis perangkat kebutuhanmu.</p>
            <a href="#products" class="btn-hero">Lihat Produk</a>
        </div>

        <div class="catalog-header" id="products">
            <div>
                <span>OUR PRODUCTS</span>
                <h2>Katalog Produk</h2>
            </div>
            <div class="total-badge">Total Produk: <?= $total_produk; ?></div>
        </div>

        <div class="product-grid">
            <?php foreach ($products as $item): ?>
                <?php 
                    $dapat_diskon = $item['harga'] >= 1000000;
                    if ($dapat_diskon) {
                        $persen_diskon = 10;
                        $harga_setelah_diskon = $item['harga'] - ($item['harga'] * ($persen_diskon / 100));
                    } else {
                        $harga_setelah_diskon = $item['harga'];
                    }
                ?>

                <div class="product-card">
                    <img src="<?= $item['gambar']; ?>" alt="<?= $item['nama']; ?>" class="product-img">

                    <div class="category-title">
                        <?= $item['kategori']; ?>
                        <?php if ($dapat_diskon): ?>
                            <span class="discount-text">DISKON 10%</span>
                        <?php endif; ?>
                    </div>

                    <h3 class="product-title"><?= $item['nama']; ?></h3>

                    <div>
                        <?php if ($dapat_diskon): ?>
                            <div class="original-price"><?= formatRupiah($item['harga']); ?></div>
                        <?php endif; ?>
                        <div class="final-price"><?= formatRupiah($harga_setelah_diskon); ?></div>
                    </div>

                    <div class="card-footer">
                        <div class="stock-text">Stok: <?= $item['stok']; ?></div>
                        <?php if ($item['stok'] > 0): ?>
                            <span class="status-badge status-available">Tersedia</span>
                        <?php else: ?>
                            <span class="status-badge status-out">Stok Habis</span>
                        <?php endif; ?>
                    </div>

                    <?php if ($item['stok'] > 0): ?>
                        <button class="btn-buy">Beli Sekarang</button>
                    <?php else: ?>
                        <button class="btn-buy" disabled>Stok Habis</button>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <footer>
        <p>&copy; <?= date("Y"); ?> Cia Store. All rights reserved.</p>
    </footer>

</body>
</html>