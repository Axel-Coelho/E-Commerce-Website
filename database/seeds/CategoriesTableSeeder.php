<?php

use App\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Category::insert([
            [
                'name' => 'Le Rolltop',
                'slug' => 'rolltop',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Le Casual',
                'slug' => 'casual',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Le Huron',
                'slug' => 'huron',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Le Tote Bag',
                'slug' => 'totebag',
                'created_at' => $now,
                'updated_at' => $now
            ],
        ]);
    }
}
