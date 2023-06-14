<?php

namespace Database\Seeders;

use App\Models\Project;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 5; $i++) {
            $newProject = new Project();
            $newProject->title = $faker->word();
            $newProject->post = $faker->paragraph();
            $newProject->author = $faker->name();
            $newProject->image = $faker->image(null, $width = 640, $height = 480, 'cats');
            $newProject->save();
        }
    }
}
