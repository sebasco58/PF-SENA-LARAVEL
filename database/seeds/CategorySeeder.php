<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(
            [
                'nombre'=>'Riatas',
                'descripcion'=>'Las riatas'
            ],
        );

        Category::create(
            [
                'nombre'=>'Ganchos',
                'descripcion'=>'Los ganchos'
            ],
        );
    }
}
