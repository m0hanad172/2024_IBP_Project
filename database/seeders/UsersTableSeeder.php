<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password=Hash::make('12345');
        $UserRecords = [
            [   'id'=>1,
                'first_name'=>'Mohanad ',
                'last_name'=>'Al-Hajj',
                'username'=>'m0hanad172',
                'password'=>$password,
                'birth_date'=>'2003-02-17',
                'permission'=>true,
                'image'=>'https://avatars.githubusercontent.com/u/149299583?v=4'
            ],
            [   'id'=>2,
                'first_name'=>'dr.kursat',
                'last_name'=>'karaoglan',
                'username'=>'kursat72',
                'password'=>$password,
                'birth_date'=>'1990-05-15',
                'permission'=>true,
                'image'=>'https://unis.karabuk.edu.tr/app_files/2024/03/Kisi_Logo_552_10ffa330.jpg'
            ],
            [   'id'=>3,
                'first_name'=>'selman',
                'last_name'=>'yilmaz',
                'username'=>'Selman172',
                'password'=>$password,
                'birth_date'=>'2005-01-25',
                'permission'=>false,
                'image'=>'https://www.pngall.com/wp-content/uploads/5/Profile-Male-PNG.png'
            ],
            [   'id'=>4,
                'first_name'=>'Melek',
                'last_name'=>'Ahmed',
                'username'=>'Melek172',
                'password'=>$password,
                'birth_date'=>'2009-06-24',
                'permission'=>false,
                'image'=>'https://www.pngmart.com/files/23/Female-PNG-Isolated-HD.png'
            ],
        ];
        User::insert($UserRecords);
    }
}
