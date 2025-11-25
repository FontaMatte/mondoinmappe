<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name }} - Mondo in Mappe</title>
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
        
        .back-link {
            display: inline-block;
            margin-bottom: 20px;
            color: #3498db;
            text-decoration: none;
        }
        
        .back-link:hover {
            text-decoration: underline;
        }
        
        .product-detail {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        
        .product-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            padding: 40px;
        }
        
        .product-image-section {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .product-image {
            width: 100%;
            max-width: 400px;
            height: 400px;
            background-color: #ecf0f1;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #95a5a6;
        }
        
        .product-details-section h1 {
            font-size: 32px;
            margin-bottom: 15px;
        }
        
        .product-price {
            font-size: 28px;
            color: #27ae60;
            font-weight: bold;
            margin-bottom: 20px;
        }
        
        .product-type {
            display: inline-block;
            background-color: #ecf0f1;
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 14px;
            margin-bottom: 20px;
        }
        
        .product-description {
            font-size: 16px;
            line-height: 1.6;
            color: #555;
            margin-bottom: 25px;
        }
        
        .product-categories {
            margin-bottom: 25px;
        }
        
        .product-categories h3 {
            font-size: 14px;
            margin-bottom: 10px;
            color: #7f8c8d;
        }
        
        .category-badge {
            display: inline-block;
            background-color: #3498db;
            color: white;
            padding: 8px 15px;
            border-radius: 5px;
            font-size: 14px;
            margin-right: 10px;
            margin-bottom: 8px;
        }
        
        .product-stock {
            font-size: 16px;
            margin-bottom: 25px;
            padding: 15px;
            background-color: #ecf0f1;
            border-radius: 5px;
        }
        
        .stock-available {
            color: #27ae60;
            font-weight: bold;
        }
        
        .stock-unavailable {
            color: #e74c3c;
            font-weight: bold;
        }
        
        .btn {
            display: inline-block;
            padding: 12px 30px;
            background-color: #27ae60;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }
        
        .btn:hover {
            background-color: #229954;
        }
        
        .btn-disabled {
            background-color: #95a5a6;
            cursor: not-allowed;
        }
        
        @media (max-width: 768px) {
            .product-content {
                grid-template-columns: 1fr;
                gap: 20px;
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>🗺️ Mondo in Mappe</h1>
        <p>La tua collezione di mappe e globi geografici</p>
    </header>
    
    <div class="container">
        <a href="{{ route('products.index') }}" class="back-link">← Torna ai prodotti</a>
        
        <div class="product-detail">
            <div class="product-content">
                <div class="product-image-section">
                    <div class="product-image">
                        @if($product->image)
                            <img src="{{ $product->image }}" alt="{{ $product->name }}" style="max-width: 100%; max-height: 100%; object-fit: cover;">
                        @else
                            Immagine non disponibile
                        @endif
                    </div>
                </div>
                
                <div class="product-details-section">
                    <h1>{{ $product->name }}</h1>
                    
                    <div class="product-price">€{{ number_format($product->price, 2) }}</div>
                    
                    <span class="product-type">{{ ucfirst($product->type) }}</span>
                    
                    <p class="product-description">
                        {{ $product->description }}
                    </p>
                    
                    <div class="product-categories">
                        <h3>Categorie:</h3>
                        @foreach($product->categories as $category)
                            <span class="category-badge">{{ $category->name }}</span>
                        @endforeach
                    </div>
                    
                    <div class="product-stock">
                        <strong>Disponibilità:</strong>
                        @if($product->stock > 0)
                            <span class="stock-available">{{ $product->stock }} unità disponibili</span>
                        @else
                            <span class="stock-unavailable">Prodotto esaurito</span>
                        @endif
                    </div>
                    
                    @if($product->stock > 0)
                        <button class="btn">Aggiungi al Carrello</button>
                    @else
                        <button class="btn btn-disabled" disabled>Non disponibile</button>
                    @endif
                </div>
            </div>
        </div>
    </div>
</body>
</html>