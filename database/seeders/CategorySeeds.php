<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = ['Интернет','Культура','Наука и Технологии',
            'Некрологи','Общество','Политика',
            'Приступность и право','Происшествия','Рейтинги',
            'Религия','Дни рождения','Спорт','Экономика'];

        for ($i=0; $i < count($array); $i++)
        {
            DB::table('categories')->insert([
                'title' => $array[$i]
            ]);
        }

    }


}
