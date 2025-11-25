<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prodotti - Mondo in Mappe</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            color: #333;
        }
        
        header {
            background-color: #2c3e50;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        
        header h1 {
            margin-bottom: 10px;
        }
        
        .container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
        }
        
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }
        
        .product-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        
        .product-image {
            width: 100%;
            height: 200px;
            background-color: #ecf0f1;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #95a5a6;
            font-size: 14px;
        }
        
        .product-info {
            padding: 20px;
        }
        
        .product-name {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 8px;
        }
        
        .product-description {
            font-size: 14px;
            color: #7f8c8d;
            margin-bottom: 12px;
            line-height: 1.4;
        }
        
        .product-price {
            font-size: 20px;
            color: #27ae60;
            font-weight: bold;
            margin-bottom: 12px;
        }
        
        .product-categories {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-bottom: 15px;
        }
        
        .category-badge {
            background-color: #ecf0f1;
            color: #2c3e50;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 12px;
        }
        
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        
        .btn:hover {
            background-color: #2980b9;
        }
        
        .pagination {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 40px;
        }
        
        .pagination a, .pagination span {
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            text-decoration: none;
            color: #2c3e50;
        }
        
        .pagination a:hover {
            background-color: #ecf0f1;
        }
        
        .pagination .active {
            background-color: #3498db;
            color: white;
            border-color: #3498db;
        }
    </style>
</head>
<body>
    <header>
        <h1>🗺️ Mondo in Mappe</h1>
        <p>La tua collezione di mappe e globi geografici</p>
    </header>
    
    <div class="container">
        <h2>I Nostri Prodotti</h2>
        
        <div class="products-grid">
            @forelse($products as $product)
                <div class="product-card">
                    <div class="product-image">
                        @if($product->image)
                            <img src="{{ $product->image }}" alt="{{ $product->name }}">
                        @else
                            Immagine non disponibile
                        @endif
                    </div>
                    
                    <div class="product-info">
                        <div class="product-name">{{ $product->name }}</div>
                        <div class="product-description">
                            {{ Str::limit($product->description, 80) }}
                        </div>
                        
                        <div class="product-categories">
                            @foreach($product->categories as $category)
                                <span class="category-badge">{{ $category->name }}</span>
                            @endforeach
                        </div>
                        
                        <div class="product-price">€{{ number_format($product->price, 2) }}</div>
                        
                        <a href="{{ route('products.show', $product->id) }}" class="btn">Visualizza</a>
                    </div>
                </div>
            @empty
                <p>Nessun prodotto disponibile</p>
            @endforelse
        </div>
        
        <!-- Paginazione -->
        @if($products->hasPages())
            <div class="pagination">
                {{ $products->links() }}
            </div>
        @endif
    </div>
</body>
</html>