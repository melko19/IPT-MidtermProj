<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'lname'=>'Cruel',
                'fname'=>'Melchizedek',
                'address'=>'Pinayagan Sur, Tubigon, Bohol',
                'phone'=>'09382221037',
                'email'=>'melko@gmail.com',
                'password'=>bcrypt('password123')
            ],
            [
                'lname'=>'Polinar',
                'fname'=>'Andy Jee',
                'address'=>'Banlasan, Tubigon, Bohol',
                'phone'=>'09090909090',
                'email'=>'dedex@gmail.com',
                'password'=>bcrypt('password456')
            ],
            [
                'lname'=>'Nunez',
                'fname'=>'John Ed Paul',
                'address'=>'Pinayagan Sur, Tubigon, Bohol',
                'phone'=>'09332321123',
                'email'=>'borton@gmail.com',
                'password'=>bcrypt('password789')
            ],
        ];

        foreach($data as $usr){
            \App\User::create($usr);
        }
    }
}
