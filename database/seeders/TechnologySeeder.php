<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = ['JS', 'Laravel', 'Html', 'CSS', 'VueJS', 'Sass'];

        Schema::disableForeignKeyConstraints();
        Technology::truncate();
        Schema::enableForeignKeyConstraints();
        foreach ($technologies as $technology) {
            $newTechnology = new Technology();
            $newTechnology->name = $technology;
            $newTechnology->slug = Str::slug($newTechnology->name);
            $newTechnology->save();
        }
    }
}
