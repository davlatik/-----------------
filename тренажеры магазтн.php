<?php
$products = [
    [
        'name' => 'Беговая дорожка ProForm Performance 600',
        'category' => 'Кардиотренажеры',
        'price' => 45990,
        'brand' => 'ProForm',
        'imageUrl' => 'img/treadmill-proform-600.jpg',
        'stock' => true,
        'offer' => 'Рассрочка 0%'
    ],
    [
        'name' => 'Эллиптический тренажер DFC ES-1002',
        'category' => 'Кардиотренажеры',
        'price' => 28990,
        'brand' => 'DFC',
        'imageUrl' => 'img/elliptical-dfc-1002.jpg',
        'stock' => true,
        'offer' => 'Скидка 15%'
    ],
    [
        'name' => 'Велотренажер Oxygen Peak U',
        'category' => 'Кардиотренажеры',
        'price' => 32990,
        'brand' => 'Oxygen',
        'imageUrl' => 'img/bike-oxygen-peak.jpg',
        'stock' => false,
        'offer' => ''
    ],
    [
        'name' => 'Силовая станция Body-Solid G6B',
        'category' => 'Силовые тренажеры',
        'price' => 125990,
        'brand' => 'Body-Solid',
        'imageUrl' => 'img/gym-body-solid-g6b.jpg',
        'stock' => true,
        'offer' => 'Бесплатная доставка'
    ],
    [
        'name' => 'Скамья для жима Atemi AB-630',
        'category' => 'Силовые тренажеры',
        'price' => 15990,
        'brand' => 'Atemi',
        'imageUrl' => 'img/bench-atemi-ab630.jpg',
        'stock' => true,
        'offer' => ''
    ],
    [
        'name' => 'Гантельный набор 20 кг Kettler',
        'category' => 'Силовые тренажеры',
        'price' => 8990,
        'brand' => 'Kettler',
        'imageUrl' => 'img/dumbbells-kettler-20kg.jpg',
        'stock' => true,
        'offer' => 'Хит продаж'
    ],
    [
        'name' => 'Йога-мат Premium 6мм',
        'category' => 'Фитнес аксессуары',
        'price' => 2490,
        'brand' => 'Reebok',
        'imageUrl' => 'img/yogamat-reebok-premium.jpg',
        'stock' => true,
        'offer' => '2+1 в подарок'
    ],
    [
        'name' => 'Фитнес-резинки 5 шт. набор',
        'category' => 'Фитнес аксессуары',
        'price' => 1290,
        'brand' => 'Torres',
        'imageUrl' => 'img/resistance-bands-torres.jpg',
        'stock' => true,
        'offer' => ''
    ],
    [
        'name' => 'Массажный ролл Trigger Point',
        'category' => 'Фитнес аксессуары',
        'price' => 4590,
        'brand' => 'Trigger Point',
        'imageUrl' => 'img/foam-roller-trigger.jpg',
        'stock' => false,
        'offer' => 'Скоро в наличии'
    ],
    [
        'name' => 'Электронные весы Tanita BC-601',
        'category' => 'Фитнес аксессуары',
        'price' => 6990,
        'brand' => 'Tanita',
        'imageUrl' => 'img/scales-tanita-bc601.jpg',
        'stock' => true,
        'offer' => 'Подарок - мерная лента'
    ]
];

$categories = array_unique(array_column($products, 'category'));

$selectedCategory = $_GET['category'] ?? '';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Категории товаров</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px 0;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        a {
            color: #0066cc;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .product-table {
            width: 95%;
            margin-top: 30px;
        }
        .back-link {
            margin-bottom: 20px;
        }
        .product-image {
            max-width: 80px;
            max-height: 80px;
            border: 1px solid #ddd;
            border-radius: 4px;
            object-fit: cover;
        }
        .product-name {
            font-weight: bold;
            max-width: 250px;
        }
    </style>
</head>
<body>
    <h1>Категории товаров</h1>
    
    <?php if (empty($selectedCategory)): ?>
        <table>
            <thead>
                <tr>
                    <th>№</th>
                    <th>Название категории</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categories as $index => $category): ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td>
                        <a href="?category=<?= urlencode($category) ?>">
                            <?= htmlspecialchars($category) ?>
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    
    <?php else: ?>
        <div class="back-link">
            <a href="?">← Назад к категориям</a>
        </div>
        
        <h2>Товары в категории: "<?= htmlspecialchars($selectedCategory) ?>"</h2>
        
        <?php
        $filteredProducts = array_filter($products, function($product) use ($selectedCategory) {
            return $product['category'] === $selectedCategory;
        });
        ?>
        
        <?php if (empty($filteredProducts)): ?>
            <p>В этой категории пока нет товаров</p>
        <?php else: ?>
            <table class="product-table">
                <thead>
                    <tr>
                        <th>Изображение</th>
                        <th>Наименование</th>
                        <th>Бренд</th>
                        <th>Цена</th>
                        <th>Наличие</th>
                        <th>Акция</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($filteredProducts as $product): ?>
                    <tr>
                        <td>
                            <?php if (!empty($product['imageUrl'])): ?>
                                <img src="<?= htmlspecialchars($product['imageUrl']) ?>" 
                                     alt="<?= htmlspecialchars($product['name']) ?>" 
                                     class="product-image"
                                     onerror="this.style.display='none'">
                            <?php else: ?>
                                <span style="color: #999;">Нет фото</span>
                            <?php endif; ?>
                        </td>
                        <td class="product-name"><?= htmlspecialchars($product['name']) ?></td>
                        <td><?= htmlspecialchars($product['brand']) ?></td>
                        <td><?= number_format($product['price'], 0, '', ' ') ?> руб.</td>
                        <td><?= $product['stock'] ? '✓ В наличии' : '✗ Нет в наличии' ?></td>
                        <td>
                            <?php if (!empty($product['offer'])): ?>
                                <span style="color: #e74c3c; font-weight: bold;">
                                    <?= htmlspecialchars($product['offer']) ?>
                                </span>
                            <?php else: ?>
                                <span style="color: #999;">-</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    
    <?php endif; ?>
</body>
</html>