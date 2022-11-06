<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();

        Category::create([
            'name' => 'Cây ăn quả',
            'description' => 'Cây ăn quả',
            'image_url' => 'public/images/aELS5HdFvfQ8E97RGna9QR7f8C5kJhEG3L2RxBqk.jpg',
            'status' => 'published',
        ]);

        Category::create([
            'name' => 'Cây lấy gỗ',
            'description' => 'Cây lấy gỗ',
            'image_url' => 'public/images/aELS5HdFvfQ8E97RGna9QR7f8C5kJhEG3L2RxBqk.jpg',
            'status' => 'published',
        ]);

        Category::create([
            'name' => 'Cây trồng đường phố',
            'description' => 'Cây trồng đường phố',
            'image_url' => 'public/images/aELS5HdFvfQ8E97RGna9QR7f8C5kJhEG3L2RxBqk.jpg',
            'status' => 'published',
        ]);

        Category::create([
            'name' => 'Cây dược liệu',
            'description' => 'Cây dược liệu',
            'image_url' => 'public/images/aELS5HdFvfQ8E97RGna9QR7f8C5kJhEG3L2RxBqk.jpg',
            'status' => 'published',
        ]);

        Category::create([
            'name' => 'Cây cảnh',
            'description' => 'Cây cảnh',
            'image_url' => 'public/images/aELS5HdFvfQ8E97RGna9QR7f8C5kJhEG3L2RxBqk.jpg',
            'status' => 'published',
        ]);

        Category::create([
            'name' => 'Giống cây choai',
            'description' => 'Giống cây choai',
            'image_url' => 'public/images/aELS5HdFvfQ8E97RGna9QR7f8C5kJhEG3L2RxBqk.jpg',
            'status' => 'published',
        ]);
    }
}
