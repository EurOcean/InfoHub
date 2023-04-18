<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class initialUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Gonzalo Baia',
            'email' => 'gdomingues@me.com',
            'password' => bcrypt('123456789'),
        ]);

        User::create([
            'name' => 'Gonçalo Costa',
            'email' => 'goncalo.costa@aroska.pt',
            'password' => bcrypt('20dqcyt0i9vlv8jn'),
        ]);

        User::create([
            'name' => 'Sergio Bryton',
            'email' => 'sergio.bryton@eurocean.org',
            'password' => bcrypt('029xn4l8aylgw5rz'),
        ]);

        User::create([
            'name' => 'Doug Fils',
            'email' => 'drfils@gmail.com',
            'password' => bcrypt('pcv1c4t6oh'),
        ]);

        User::create([
            'name' => 'Pierluigi Buttigieg',
            'email' => 'pier.buttigieg@awi.de',
            'password' => bcrypt('jgvwbpkv1f'),
        ]);

        User::create([
            'name' => 'Arno Lambert',
            'email' => 'a.lambert@unesco.org',
            'password' => bcrypt('k413y5unhw'),
        ]);

        User::create([
            'name' => 'Lucy Scott',
            'email' => 'l.scott@unesco.org',
            'password' => bcrypt('uzydktc2cl'),
        ]);

        User::create([
            'name' => 'Sandra Sá',
            'email' => 'sandra.sa@eurocean.org',
            'password' => bcrypt('8f3i42lglg'),
        ]);

        User::create([
            'name' => 'Vasco Jesus',
            'email' => 'vasco.jesus@mindoverdata.eu',
            'password' => bcrypt('123456789'),
        ]);

        User::create([
            'name' => 'Jeff McKenna',
            'email' => 'jmckenna@gatewaygeomatics.com',
            'password' => bcrypt('KDdSNUMV5Xkzba22'),
        ]);
    }
}
