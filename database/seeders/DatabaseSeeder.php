<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Tag;
use App\Models\Kategori;
use App\Models\Status;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Tag::create([
            'name' => 'Programmer'
        ]);
        Tag::create([
            'name' => 'E-Commerce'
        ]);
        Tag::create([
            'name' => 'Trainer'
        ]);
        Tag::create([
            'name' => 'IT'
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'usertype' => 'admin',
            'tag_id' => '1',
            'password' => bcrypt('12345678')
        ]);
        User::create([
            'name' => 'Supervisor',
            'email' => 'spv@mail.com',
            'usertype' => 'supervisor',
            'tag_id' => '2',
            'password' => bcrypt('12345678')
        ]);
        User::create([
            'name' => 'Mukhamad Rafi Al Fauzan',
            'email' => 'rafi@mail.com',
            'usertype' => 'user',
            'tag_id' => '3',
            'password' => bcrypt('12345678')
        ]);
        User::create([
            'name' => 'Clarions Jonarence Awola',
            'email' => 'ilon@mail.com',
            'usertype' => 'user',
            'tag_id' => '4',
            'password' => bcrypt('12345678')
        ]);

        Kategori::create([
            'name' => 'PHIS'
        ]);
        Kategori::create([
            'name' => 'PRESTO'
        ]);
        Kategori::create([
            'name' => 'PPOS'
        ]);

        Status::create([
            'name' => 'Urgent'
        ]);
        Status::create([
            'name' => 'Open'
        ]);
        Status::create([
            'name' => 'Progress'
        ]);
        Status::create([
            'name' => 'Closed'
        ]);
    }
}
