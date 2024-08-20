<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert all the categories 

        // `name`, `description`, `img_url`, `status`, `created_at`, `updated_at`

        $categories = [
            'SPC',
            'Laminate',
            'WPC',
            'Carpet tiles',
            'Epoxy flooring',
            'Stamped concrete',
            'Accessories',
            'Wall cornice'
        ];

        foreach ($categories as $key => $value) {
            # code...
            Category::create([
                "name" => $value,
                "description" => "Its all about" . $value
            ]);
        }
    }
}
