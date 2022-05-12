<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MembersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->truncate();

        $members = collect([
            ['name' => 'Adrienne', 'function' => 'Gedragstherpeut', 'image' => 'adrienne.png', 'phone' => '06-83594797'],
            ['name' => 'Andre', 'function' => 'Redactie', 'image' => 'andre.png', 'phone' => '06-83594797'],
            ['name' => 'Angelique', 'function' => 'Instructeur', 'image' => 'angelique.png', 'phone' => '04-95594109'],
            ['name' => 'Ans', 'function' => 'Instructeur', 'image' => 'ans.png', 'phone' => '06-53804522'],
            ['name' => 'Arjanne', 'function' => 'Instructeur', 'image' => 'Arjanne.png', 'phone' => '06-83594797'],
            ['name' => 'Audrey', 'function' => 'Instructeur', 'image' => 'audrey.png', 'phone' => '06-83594797'],
            ['name' => 'Bas', 'function' => 'Voorzitter', 'image' => 'bas.png', 'phone' => '06-83594797'],
            ['name' => 'Carolien', 'function' => 'Penningmeester', 'image' => 'carolien.png', 'phone' => '06-83594797'],
            ['name' => 'Edith', 'function' => 'Instructeur', 'image' => 'edith.png', 'phone' => '06-83594797'],
            ['name' => 'Evi', 'function' => 'Instructeur', 'image' => 'evi.png', 'phone' => '06-22688001'],
            ['name' => 'Gerben', 'function' => 'Instructeur', 'image' => 'gerben.png', 'phone' => '06-54686884'],
            ['name' => 'Harm', 'function' => 'Kantine', 'image' => 'harm.png', 'phone' => '06-53988676'],
        ]);

        $members->each(function ($i) {
            $member = new Member;
            $member->name = $i['name'];
            $member->function = $i['function'];
            $member->image = $i['image'];
            $member->phone = $i['phone'];
            $member->save();
        });
    }
}