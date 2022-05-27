<?php

use App\Product;
use App\Category;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Mangue / Passion',
            'slug' => 'mangue-passion',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'price' => 6,
            'description' => 'Ut velit orci, bibendum sed feugiat ac, blandit et augue. Praesent tempor turpis sed posuere ultrices. Mauris non ex nibh. Cras sagittis ante ac tincidunt varius. Mauris iaculis, enim finibus tempor scelerisque, risus nisi laoreet leo, eu porta sem risus sit amet massa. Nam nec tellus quis sapien vestibulum vestibulum. Aliquam accumsan dignissim justo ut suscipit. Mauris semper pharetra leo et eleifend. Sed consectetur nunc a erat lacinia luctus. Duis a tortor erat.',
            'category_id' => Category::all()->random()->id
        ]);

        Product::create([
            'name' => 'Mangue / Citron',
            'slug' => 'mangue-citron',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'price' => 6,
            'description' => 'Ut velit orci, bibendum sed feugiat ac, blandit et augue. Praesent tempor turpis sed posuere ultrices. Mauris non ex nibh. Cras sagittis ante ac tincidunt varius. Mauris iaculis, enim finibus tempor scelerisque, risus nisi laoreet leo, eu porta sem risus sit amet massa. Nam nec tellus quis sapien vestibulum vestibulum. Aliquam accumsan dignissim justo ut suscipit. Mauris semper pharetra leo et eleifend. Sed consectetur nunc a erat lacinia luctus. Duis a tortor erat.',
            'category_id' => Category::all()->random()->id
        ]);

        Product::create([
            'name' => 'Mangue / Coco',
            'slug' => 'mangue-coco',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'price' => 6,
            'description' => 'Ut velit orci, bibendum sed feugiat ac, blandit et augue. Praesent tempor turpis sed posuere ultrices. Mauris non ex nibh. Cras sagittis ante ac tincidunt varius. Mauris iaculis, enim finibus tempor scelerisque, risus nisi laoreet leo, eu porta sem risus sit amet massa. Nam nec tellus quis sapien vestibulum vestibulum. Aliquam accumsan dignissim justo ut suscipit. Mauris semper pharetra leo et eleifend. Sed consectetur nunc a erat lacinia luctus. Duis a tortor erat.',
            'category_id' => Category::all()->random()->id
        ]);

        Product::create([
            'name' => 'Mangue / Cassis',
            'slug' => 'mangue-cassis',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'price' => 6,
            'description' => 'Ut velit orci, bibendum sed feugiat ac, blandit et augue. Praesent tempor turpis sed posuere ultrices. Mauris non ex nibh. Cras sagittis ante ac tincidunt varius. Mauris iaculis, enim finibus tempor scelerisque, risus nisi laoreet leo, eu porta sem risus sit amet massa. Nam nec tellus quis sapien vestibulum vestibulum. Aliquam accumsan dignissim justo ut suscipit. Mauris semper pharetra leo et eleifend. Sed consectetur nunc a erat lacinia luctus. Duis a tortor erat.',
            'category_id' => Category::all()->random()->id
        ]);

        Product::create([
            'name' => 'Mangue / Fraise',
            'slug' => 'mangue-fraise',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'price' => 6,
            'description' => 'Ut velit orci, bibendum sed feugiat ac, blandit et augue. Praesent tempor turpis sed posuere ultrices. Mauris non ex nibh. Cras sagittis ante ac tincidunt varius. Mauris iaculis, enim finibus tempor scelerisque, risus nisi laoreet leo, eu porta sem risus sit amet massa. Nam nec tellus quis sapien vestibulum vestibulum. Aliquam accumsan dignissim justo ut suscipit. Mauris semper pharetra leo et eleifend. Sed consectetur nunc a erat lacinia luctus. Duis a tortor erat.',
            'category_id' => Category::all()->random()->id
        ]);

        Product::create([
            'name' => 'Mangue / Framboise',
            'slug' => 'mangue-framboise',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'price' => 6,
            'description' => 'Ut velit orci, bibendum sed feugiat ac, blandit et augue. Praesent tempor turpis sed posuere ultrices. Mauris non ex nibh. Cras sagittis ante ac tincidunt varius. Mauris iaculis, enim finibus tempor scelerisque, risus nisi laoreet leo, eu porta sem risus sit amet massa. Nam nec tellus quis sapien vestibulum vestibulum. Aliquam accumsan dignissim justo ut suscipit. Mauris semper pharetra leo et eleifend. Sed consectetur nunc a erat lacinia luctus. Duis a tortor erat.',
            'category_id' => Category::all()->random()->id
        ]);

        Product::create([
            'name' => 'Mangue / Orange',
            'slug' => 'mangue-orange',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'price' => 6,
            'description' => 'Ut velit orci, bibendum sed feugiat ac, blandit et augue. Praesent tempor turpis sed posuere ultrices. Mauris non ex nibh. Cras sagittis ante ac tincidunt varius. Mauris iaculis, enim finibus tempor scelerisque, risus nisi laoreet leo, eu porta sem risus sit amet massa. Nam nec tellus quis sapien vestibulum vestibulum. Aliquam accumsan dignissim justo ut suscipit. Mauris semper pharetra leo et eleifend. Sed consectetur nunc a erat lacinia luctus. Duis a tortor erat.',
            'category_id' => Category::all()->random()->id
        ]);

        Product::create([
            'name' => 'Mangue / Kiwi',
            'slug' => 'mangue-kiwi',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'price' => 6,
            'description' => 'Ut velit orci, bibendum sed feugiat ac, blandit et augue. Praesent tempor turpis sed posuere ultrices. Mauris non ex nibh. Cras sagittis ante ac tincidunt varius. Mauris iaculis, enim finibus tempor scelerisque, risus nisi laoreet leo, eu porta sem risus sit amet massa. Nam nec tellus quis sapien vestibulum vestibulum. Aliquam accumsan dignissim justo ut suscipit. Mauris semper pharetra leo et eleifend. Sed consectetur nunc a erat lacinia luctus. Duis a tortor erat.',
            'category_id' => Category::all()->random()->id
        ]);
    }
}
