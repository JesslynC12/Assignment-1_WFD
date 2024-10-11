<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Organizer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OrganizerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Organizer::create([
            'name' => 'Southern Sydney University',
            'description' => fake()->text(20),
            'facebook_link' => 'https://facebook.com/',
            'x_link' => 'https://x.com/dummy',
            'website_link' => 'https://dummy.com'
        ]);

        Organizer::create([
            'name' => 'MSW Global',
            'description' => fake()->text(20),
            'facebook_link' => 'https://facebook.com/',
            'x_link' => 'https://x.com/dummy',
            'website_link' => 'https://dummy.com'
        ]);

        Organizer::create([
            'name' => 'Debindo',
            'name' => 'MSW Global',
            'description' => fake()->text(20),
            'facebook_link' => 'https://facebook.com/',
            'x_link' => 'https://x.com/dummy',
            'website_link' => 'https://dummy.com'
        ]);

        Organizer::create([
            'name' => 'HWG',
            'name' => 'MSW Global',
            'description' => fake()->text(20),
            'facebook_link' => 'https://facebook.com/',
            'x_link' => 'https://x.com/dummy',
            'website_link' => 'https://dummy.com'
        ]);

        Organizer::create([
            'name' => 'OBKG',
            'name' => 'MSW Global',
            'description' => fake()->text(20),
            'facebook_link' => 'https://facebook.com/',
            'x_link' => 'https://x.com/dummy',
            'website_link' => 'https://dummy.com'
        ]);

        Organizer::create([
            'name' => 'PT OSI',
            'name' => 'MSW Global',
            'description' => fake()->text(20),
            'facebook_link' => 'https://facebook.com/',
            'x_link' => 'https://x.com/dummy',
            'website_link' => 'https://dummy.com'
        ]);


        // Organizer::create(['description' => fake()->text(20), 'active' => 1]);
        // Organizer::create(['facebook_link' => 'https://facebook.com/', 'active' => 1]);
        // Organizer::create(['x_link' => 'https://x.com/dummy', 'active' => 1]);
        // Organizer::create(['website_link' => 'https://dummy.com', 'active' => 1]);


//     $name = ['Southern Sydney University', 'MSW Global', 'Debindo','HWG','OBKG', 'PT OSI'];

//         for ($i = 1; $i <= 5; $i++) {
//             DB::table('organizers')->insert([
//                 ['name organizers' => 'Southern Sydney University'],
//                 ['name organizers' => 'MSW Global'],
//                 ['name organizers' => 'Debindo'],
//                 ['name organizers' => 'HWG'],
//                 ['name organizers' => 'OBKG'],
//                 ['name organizers' => 'PT OSI'],

//                 'description' => fake()->text(20),
//                 'facebook_link' => 'https://facebook.com/',
//                 'x_link' => 'https://x.com/dummy',
//                 'website_link' => 'https://dummy.com',
//                 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
//                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
//             ]);
//     }
}
    }