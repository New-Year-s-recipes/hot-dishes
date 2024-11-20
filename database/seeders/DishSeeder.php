<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dish;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dish::create([
            'name' => 'Жульен с курицей и грибами в тарталетках',
            'description' => 'Не просто жульен, а жульен  с курицей и грибами в тарталетках!',
            'time_image' => 'images/time.svg',
            'time' => '50 минут',
            'difficulty_image' => 'images/santa.svg',
            'difficulty' => 'Средняя',
            'image_path' => 'images/julien.jpeg',
        ]);
        Dish::create([
            'name' => 'Тарталетки на Новый год с тунцом',
            'description' => 'Они понравятся вам и горячими и холодными',
            'time_image' => 'images/time.svg',
            'time' => '30 минут',
            'difficulty_image' => 'images/santa.svg',
            'difficulty' => 'Средняя',
            'image_path' => 'images/tartlets.jpeg',
        ]);
        Dish::create([
            'name' => 'Семга в лодочке из пергамента с овощами',
            'description' => 'Это станет отличным украшением Новогоднего стола',
            'time_image' => 'images/time.svg',
            'time' => '45 минут',
            'difficulty_image' => 'images/santa.svg',
            'difficulty' => 'Средняя',
            'image_path' => 'images/steak.jpg',
        ]);
        Dish::create([
            'name' => 'Гужеры с сыром заварные',
            'description' => 'Гужеры - французские заварные сырные булочки',
            'time_image' => 'images/time.svg',
            'time' => '1 час',
            'difficulty_image' => 'images/santa.svg',
            'difficulty' => 'Высокая',
            'image_path' => 'images/hoosiers.jpg',
        ]);
        Dish::create([
            'name' => 'Пюре из картофеля с беконом и сыром',
            'description' => 'Сытный и вкусный гарнир и к празднику и на каждый день',
            'time_image' => 'images/time.svg',
            'time' => '1 час',
            'difficulty_image' => 'images/santa.svg',
            'difficulty' => 'Высокая',
            'image_path' => 'images/mash.jpeg',
        ]);
        Dish::create([
            'name' => 'Рис с овощами на гарнир',
            'description' => 'Эффектный и вкусный гарнир, достойный праздничного стола',
            'time_image' => 'images/time.svg',
            'time' => '30 минут',
            'difficulty_image' => 'images/santa.svg',
            'difficulty' => 'Средняя',
            'image_path' => 'images/rice.jpg',
        ]);
        Dish::create([
            'name' => '“Рататуй” в перце',
            'description' => 'Данный гарнир станет  настоящим праздничным, основным блюдом',
            'time_image' => 'images/time.svg',
            'time' => '45 минут',
            'difficulty_image' => 'images/santa.svg',
            'difficulty' => 'Средняя',
            'image_path' => 'images/ratatouille.jpg',
        ]);
        Dish::create([
            'name' => 'Гратен из тыквы с сыром',
            'description' => 'Легкий в приготовлении гарнир – то, что нужно в новогоднюю ночь',
            'time_image' => 'images/time.svg',
            'time' => '1 час',
            'difficulty_image' => 'images/santa.svg',
            'difficulty' => 'Высокая',
            'image_path' => 'images/gratin.jpg',
        ]);
    }
}