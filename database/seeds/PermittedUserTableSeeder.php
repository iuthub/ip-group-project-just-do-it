<?php

use App\PermittedUser;
use Illuminate\Database\Seeder;

class PermittedUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $email = new PermittedUser([
            'email' => 't.kodirov2@student.inha.uz'
        ]);
        $email->save();
        $email = new PermittedUser([
            'email' => 'd.tursunov@student.inha.uz'
        ]);
        $email->save();
        $email = new PermittedUser([
            'email' => 'j.tursunov@student.inha.uz'
        ]);
        $email->save();
        $email = new PermittedUser([
            'email' => 's.zufarov@student.inha.uz'
        ]);
        $email->save();
        $email = new PermittedUser([
            'email' => 's.buriev@student.inha.uz'
        ]);
        $email->save();
        $email = new PermittedUser([
            'email' => 'u.ulugbekov@student.inha.uz'
        ]);
        $email->save();
    }
}
