<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $user = new User;
        $user->name = "Administrador prismaweb";
        $user->email = "soporte@prismaweb.net";
        $user->password = bcrypt('33S0p0rt3PW522**');
        $user->rol_id = 1;
        $user->estado_id = 1;
        $user->finca_id = 1;
        $user->documento = "9006427021";
        $user->save();

        /*
        $user = new User;
        $user->name = "Miguel Rios";
        $user->email = "miguelrios1@hotmail.com";
        $user->password = bcrypt('soporte2019');
        $user->rol_id = 1;
        $user->estado_id = 1;
        $user->finca_id = 1;
        $user->documento = "11111111";
        $user->save();
        */
    }

}
