<?php

namespace Database\Seeders;

use App\Models\Cursus;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CursusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cursuses')->truncate();

        $cursuses = collect([
            ['name' => 'Puppycursus'],
            ['name' => 'Jonge hondencursus'],
            ['name' => 'Basiscursu'],
            ['name' => 'Gehoorzame hond'],
        ]);

        $cursuses->each(function ($i) {
            $cursus = new Cursus;
            $cursus->name = $i['name'];
            $cursus->save();
        });
    }
}