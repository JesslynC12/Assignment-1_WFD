<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder{  //seeder= unutuk mengisi database table dengan dummy data  //pake fake

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(['name' => 'Expo', 'active' => 1]);
        Category::create(['name' => 'Concert', 'active' => 1]);
        Category::create(['name' => 'Conference', 'active' => 1]);
    }

}

