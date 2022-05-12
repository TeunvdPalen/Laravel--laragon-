<?php

namespace Database\Seeders;

use App\Models\Activitie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activities')->truncate();

        $activities = collect([
            ['date' => '2022-05-22', 'title' => 'Les 4/11', 'description' => 'lesdag VVH'],
            ['date' => '2022-05-29', 'title' => 'Les 5/12', 'description' => 'lesdag VVH'],
            ['date' => '2022-06-02', 'title' => 'Les 4/11', 'description' => 'lesdag VVH'],
            ['date' => '2022-06-07', 'title' => 'Bestuur', 'description' => 'Vergadering bestuur'],
            ['date' => '2022-06-09', 'title' => 'Les 5/12', 'description' => 'lesdag VVH'],
        ]);

        $activities->each(function ($i) {
            $activity = new Activitie;
            $activity->date = $i['date'];
            $activity->title = $i['title'];
            $activity->description = $i['description'];
            $activity->save();
        });
    }
}