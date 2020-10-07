<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'firstname' => Str::random(10),
            'lastname' => Str::random(10),
            'email' => 'admin@gmail.com',
            'admin' => '1',
            'password' => Hash::make('12345678'),
        ]);

        DB::table('users')->insert([
            'firstname' => Str::random(10),
            'lastname' => Str::random(10),
            'email' => 'user@gmail.com',
            'admin' => '0',
            'password' => Hash::make('12345678'),
        ]);


        DB::table('informations')->insert([
            'title' => 'This is a testing title ',
            'text' => 'Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        ]);
        DB::table('informations')->insert([
            'title' => 'This is a testing title ',
            'text' => 'Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        ]);
        DB::table('informations')->insert([
            'title' => 'This is a testing title ',
            'text' => 'Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        ]);
        DB::table('informations')->insert([
            'title' => 'This is a testing title ',
            'text' => 'Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        ]);
        DB::table('informations')->insert([
            'title' => 'This is a testing title ',
            'text' => 'Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        ]);
        DB::table('informations')->insert([
            'title' => 'This is a testing title ',
            'text' => 'Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        ]);
        DB::table('informations')->insert([
            'title' => 'This is a testing title ',
            'text' => 'Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        ]);
        DB::table('informations')->insert([
            'title' => 'This is a testing title ',
            'text' => 'Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        ]);
        DB::table('informations')->insert([
            'title' => 'This is a testing title ',
            'text' => 'Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        ]);
        DB::table('informations')->insert([
            'title' => 'This is a testing title ',
            'text' => 'Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        ]);
        DB::table('informations')->insert([
            'title' => 'This is a testing title ',
            'text' => 'Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        ]);
        DB::table('informations')->insert([
            'title' => 'This is a testing title ',
            'text' => 'Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        ]);
        DB::table('informations')->insert([
            'title' => 'This is a testing title ',
            'text' => 'Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        ]);


    }
}
