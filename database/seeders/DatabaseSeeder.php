<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // users seed
        $userName = ['alex', 'maxim', 'vlad', 'irina'];
        $email = ['alex@mail.ru', 'maxim@mail.ru', 'vlad@mail.ru', 'irina@mail.ru'];
        $password = Hash::make('user');

        for ($i = 0; $i < count($userName); $i++) {
            User::create([
                'name' => $userName[$i],
                'email' => $email[$i],
                'password' => $password
            ]);
        }

        // categories seed
        $categoryName = ['Категория 1', 'Категория 2', 'Категория 3', 'Категория 4'];

        for ($i = 0; $i < count($categoryName); $i++) {
            Category::create([
                'name' => $categoryName[$i],
                'user_id' => 1
            ]);
        }

        // posts seed
        $postName = ['Пост 1', 'Пост 2', 'Пост 3', 'Пост 4'];
        $desc = ['Описание 1', 'Описание 2', 'Описание 3', 'Описание 4'];
        $img_url = './post-images/img1.jpg';
        $userId = [1, 2, 3, 4];
        $categoryId = [1, 2, 3, 4];

        for ($i = 0; $i < count($postName); $i++) {
            Post::create([
                'name' => $postName[$i],
                'desc' => $desc[$i],
                'img_url' => $img_url,
                'user_id' => $userId[$i], 
                'category_id' => $categoryId[$i]
            ]);
        }
    }
}
