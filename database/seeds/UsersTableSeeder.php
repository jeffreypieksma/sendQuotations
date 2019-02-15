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
        User::create([
            'email' => 'admin@admin.com',
            'name' => 'Admin',
            'role' => 'admin',
            'password' => bcrypt('admin1234')
        ]);

        User::create([
            'email' => 'ruben@admin.com',
            'name' => 'Ruben',
            'role' => 'admin',
            'password' => bcrypt('admin1234')
        ]);

        User::create([
            'email' => 'jeffrey@user.com',
            'name' => 'User ',
            'role' => 'user',
            'password' => bcrypt('user1234')
        ]);
    }
}
