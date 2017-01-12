<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Veerapat In-ongkarn';
        $user->email = 'karjkeng@hotmail.com';
        $user->password = bcrypt('karjkeng');
        $user->save();
    }
}
