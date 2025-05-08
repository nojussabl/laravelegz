<?php

namespace Database\Seeders;

use App\Models\Server;
use Illuminate\Database\Seeder;

class ServerSeeder extends Seeder
{
    public function run(): void
    {
        Server::create(['name' => 'Gaming Hub']);
        Server::create(['name' => 'Tech Talk']);
        Server::create(['name' => 'Music Lounge']);
        Server::create(['name' => 'Study Group']);
        Server::create(['name' => 'Movie Night']);
        Server::create(['name' => 'Art Corner']);
        Server::create(['name' => 'Sports Zone']);
    }
}
