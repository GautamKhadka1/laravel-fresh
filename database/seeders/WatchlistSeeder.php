<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WatchList;

class WatchlistSeeder extends Seeder
{
    public function run(): void
    {
        WatchList::factory()->count(1000)->create(); // adjust count as needed
    }
}
