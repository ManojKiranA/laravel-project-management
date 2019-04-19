<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [[
            'id'             => 1,
            'name'           => 'Admin',
            'email'          => 'admin@admin.com',
            'password'       => '$2y$10$6coO1ZTaN6NLtqZp71geVeTWoECx3dRBw0u39FLrIclgvcjbSi2b.',
            'remember_token' => null,
            'created_at'     => '2019-04-19 05:24:58',
            'updated_at'     => '2019-04-19 05:24:58',
            'deleted_at'     => null,
        ]];

        User::insert($users);
    }
}
