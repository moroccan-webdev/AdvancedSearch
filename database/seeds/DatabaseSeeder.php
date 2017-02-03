<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('tags')->insert([
            ['name' => 'php'],
            ['name' => 'laravel'],
            ['name' => 'codeigniter'],
            ['name' => 'c#'],
            ['name' => 'dotnet'],
            ['name' => 'js'],
            ['name' => 'angularjs'],
            ['name' => 'jee'],
            ['name' => 'malabata'],
            ['name' => 'Tangier']
        ]);

        DB::table('categories')->insert([
            ['name' => 'php'],
            ['name' => 'laravel'],
            ['name' => 'laravel'],
            ['name' => 'c#'],
            ['name' => 'php'],
            ['name' => 'js'],
            ['name' => 'angularjs'],
            ['name' => 'laravel'],
            ['name' => 'malabata'],
            ['name' => 'Tangier']
        ]);

        DB::table('pictures')->insert([
            ['name' => 'php','category_id' => 1],
            ['name' => 'laravel','category_id' => 2],
            ['name' => 'laravel','category_id' => 5],
            ['name' => 'php','category_id' => 5],
            ['name' => 'php','category_id' => 3],
            ['name' => 'js','category_id' => 6],
            ['name' => 'laravel','category_id' => 4],
            ['name' => 'php','category_id' => 2],
            ['name' => 'laravel','category_id' => 5],
            ['name' => 'laravel','category_id' => 3],
            ['name' => 'laravel','category_id' => 1],
            ['name' => 'laravel','category_id' => 6],
            ['name' => 'php','category_id' => 1],
            ['name' => 'php','category_id' => 2],
            ['name' => 'php','category_id' => 3],
            ['name' => 'php','category_id' => 4],
            ['name' => 'php','category_id' => 5],
            ['name' => 'php','category_id' => 6],
            ['name' => 'php','category_id' => 7]
        ]);

        DB::table('picture_tag')->insert([
            ['picture_id' => 5,'tag_id' => 2],
            ['picture_id' => 2,'tag_id' => 4],
            ['picture_id' => 2,'tag_id' => 5],
            ['picture_id' => 6,'tag_id' => 8],
            ['picture_id' => 1,'tag_id' => 3],
            ['picture_id' => 5,'tag_id' => 4],
            ['picture_id' => 1,'tag_id' => 1],
            ['picture_id' => 2,'tag_id' => 4]
        ]);
    }
}
