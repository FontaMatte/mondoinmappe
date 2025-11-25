<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Category::create([
            'name' => 'Mappe Geografiche',
            'description' => 'Mappe del mondo e continenti',
            'slug' => 'mappe-geografiche',
        ]);

        Category::create([
            'name' => 'Mappe Metro',
            'description' => 'Mappe delle metropolitane mondiali',
            'slug' => 'mappe-metro',
        ]);

        Category::create([
            'name' => 'Globi e Planisferi',
            'description' => 'Globi terrestri e rappresentazioni sferiche',
            'slug' => 'globi-planisferi',
        ]);

        Category::create([
            'name' => 'Mappe Storiche',
            'description' => 'Mappe antiche e storiche',
            'slug' => 'mappe-storiche',
        ]);

        Category::create([
            'name' => 'Atlanti',
            'description' => 'Collezioni di mappe rilegati',
            'slug' => 'atlanti',
        ]);
    }
}
