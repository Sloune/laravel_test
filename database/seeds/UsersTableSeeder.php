<?php

use App\User;
use App\Category;
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
        factory(User::class, 2)->create()->each(function($u) {
            $u->categories()->save(factory(Category::class)->make());
        });
    }
}