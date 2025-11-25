<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ['name' => 'Mappa del Mondo Vintage', 'description' => 'Bellissima mappa del mondo stile vintage', 'price' => 29.99, 'stock' => 10, 'type' => 'geografica', 'image' => 'mappa-mondo-vintage.jpg'],
            ['name' => 'Mappa Metro Londra', 'description' => 'Replica della famosa mappa della metropolitana di Londra', 'price' => 19.99, 'stock' => 15, 'type' => 'metro', 'image' => 'metro-londra.jpg'],
            ['name' => 'Globo Terrestre Luminoso', 'description' => 'Globo con illuminazione LED', 'price' => 49.99, 'stock' => 5, 'type' => 'globo', 'image' => 'globo-luminoso.jpg'],
            ['name' => 'Mappa Europa Fisica', 'description' => 'Mappa geografica dell\'Europa con rilievi', 'price' => 24.99, 'stock' => 20, 'type' => 'geografica', 'image' => 'europa-fisica.jpg'],
            ['name' => 'Atlante Storico', 'description' => 'Atlante con mappe storiche dal 1800 al 1900', 'price' => 59.99, 'stock' => 8, 'type' => 'storica', 'image' => 'atlante-storico.jpg'],
            ['name' => 'Mappa Metro Tokyo', 'description' => 'Mappa colorata della metropolitana di Tokyo', 'price' => 22.99, 'stock' => 12, 'type' => 'metro', 'image' => 'metro-tokyo.jpg'],
            ['name' => 'Mappamondo da Tavolo', 'description' => 'Globo montato su base di legno, perfetto per scrivania', 'price' => 39.99, 'stock' => 7, 'type' => 'globo', 'image' => 'mappamondo-tavolo.jpg'],
            ['name' => 'Mappa Italia Dettagliata', 'description' => 'Mappa geografica dettagliata dell\'Italia', 'price' => 17.99, 'stock' => 25, 'type' => 'geografica', 'image' => 'italia-dettagliata.jpg'],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
