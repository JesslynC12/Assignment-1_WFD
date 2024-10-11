<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Event;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

     //Carbon untuk library tanggal
    public function run(): void
    {

        Event::create([
            'title' => 'Indonesia Innovation Challenge 2024 Powered by Launch Pad',
            'venue' => 'Jatim Expo',
            'date' => '2024-10-23',
            'start_time' => '09:00:00',
            'description' => fake()->text(20),
            'booking_url' => 'https://www.indonesiaexpo.com/booking',
            'tags' => 'Surabaya Science & Tech Events , Innovation Challenge',
            'organizer_id' => rand(1,6),
            'event_category_id' => rand(1,6),
            'active' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
            
            
    
            Event::create([
                'title' => 'Kids Education Expo 2024',
                'venue' => 'The Westin',
                'date' => '2024-10-21',
                'start_time' => '09:00:00',
                'description' => fake()->text(20),
                'booking_url' => 'https://www.kidsedu.com/booking',
                'tags' => 'Kids , Education',
                'organizer_id' => rand(1,6),
                'event_category_id' => rand(1,6),
                'active' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);        
            
        // Event::create(['title' => 'Kids Education Expo 2024', 'active' => 1]);
        // Event::create(['title' => 'Surabaya Great Expo 2024', 'active' => 1]);
        // Event::create(['title' => 'SMEX (Surabaya Music,Multimedia, and Lighting Expo 2024)', 'active' => 1]);
        // Event::create(['title' => 'Japan Edu Expo 2024', 'active' => 1]);
        // Event::create(['title' => 'Surabaya Hospital Expo 2024', 'active' => 1]);

        // Event::create(['venue' => 'Jatim Expo', 'active' => 1]);
        // Event::create(['venue' => 'The Westin', 'active' => 1]);
        // Event::create(['venue' => 'Grand City Surabaya', 'active' => 1]);
        // Event::create(['venue' => 'Grand City Surabaya', 'active' => 1]);
        // Event::create(['venue' => 'Hotel Said', 'active' => 1]);
        // Event::create(['venue' => 'Grand City Surabaya', 'active' => 1]);

        // Event::create(['date' => '2024-10-23', 'active' => 1]);
        // Event::create(['date' => '2024-10-21', 'active' => 1]);
        // Event::create(['date' => '2024-10-16', 'active' => 1]);
        // Event::create(['date' => '2024-09-29', 'active' => 1]);
        // Event::create(['date' => '2024-09-22', 'active' => 1]);
        // Event::create(['date' => '2024-10-11', 'active' => 1]);

        // Event::create(['start_time' => '09:00:00', 'active' => 1]);
        // Event::create(['start_time' => '09:00:00', 'active' => 1]);
        // Event::create(['start_time' => '08:00:00', 'active' => 1]);
        // Event::create(['start_time' => '08:00:00', 'active' => 1]);
        // Event::create(['start_time' => '08:00:00', 'active' => 1]);
        // Event::create(['start_time' => '08:00:00', 'active' => 1]);
        
        // Event::create(['description' => fake()->text(20), 'active' => 1]);

        // Event::create(['booking_url' => 'https://www.indonesiaexpo.com/booking', 'active' => 1]);
        // Event::create(['booking_url' => 'https://www.kidsedu.com/booking', 'active' => 1]);
        // Event::create(['booking_url' => 'https://surabayagreatexpo.com/booking', 'active' => 1]);
        // Event::create(['booking_url' => 'https://www.smex.com/booking', 'active' => 1]);
        // Event::create(['booking_url' => 'https://www.japanedu.com/bboking', 'active' => 1]);
        // Event::create(['booking_url' => 'https://www.hospitalexpo.com/booking', 'active' => 1]);

        // Event::create(['tags' => 'Surabaya Science & Tech Events , Innovation Challenge', 'active' => 1]);
        // Event::create(['tags' => 'Kids , Education', 'active' => 1]);
        // Event::create(['tags' => 'Investasi , Trading , Bisnis', 'active' => 1]);
        // Event::create(['tags' => 'Music , Multimedia , Lighting', 'active' => 1]);
        // Event::create(['tags' => 'Universitas , Education', 'active' => 1]);
        // Event::create(['tags' => 'Health , Medical', 'active' => 1]);

        // Event::create(['organizer_id' => rand(1,6), 'active' => 1]);
        // Event::create(['event_category_id' => rand(1,6), 'active' => 1]);




        // $judul = ['Indonesia Innovation Challenge 2024 Powered by Launch Pad', 'Kids Education Expo 2024', 'Surabaya Great Expo 2024', 'SMEX (Surabaya Music,Multimedia, and Lighting Expo 2024)', 'Japan Edu Expo 2024', 'Surabaya Hospital Expo 2024'];
        // $location = ['Jatim Expo', 'The Westin', 'Grand City Surabaya','Grand City Surabaya', 'Hotel Said','Grand City Surabaya'];
        // $tanggal = ['2024-10-23', '2024-10-21', '2024-10-16','2024-09-29', '2024-09-22','2024-10-11'];
        // $time = ['09:00:00', '09:00:00','08:00:00','08:00:00','08:00:00','08:00:00'];
        // $booking_url = ['https://www.indonesiaexpo.com/booking','https://www.kidsedu.com/booking','https://surabayagreatexpo.com/booking','https://www.smex.com/booking','https://www.japanedu.com/bboking','https://www.hospitalexpo.com/booking'];
        // $tag = ['Surabaya Science & Tech Events , Innovation Challenge' , 'Kids , Education' , 'Investasi , Trading , Bisnis' , 'Music , Multimedia , Lighting' , 'Universitas , Education ', 'Health , Medical'];
        // $organizer_id = [1 , 2 , 3 , 4 , 5 , 6];
        // $event_category_id = [1 , 2 , 3 , 4 , 5 , 6]; 

        // for ($i=0; $i<5; $i++){
        //     DB::table('events')->insert([
        //         'title' => $judul[$i],
        //         'venue' => $location[$i],
        //         'date' => $tanggal[$i],
        //         'start_time' => $time[$i],
        //         'description' => fake()->text(20),
        //         'booking_url' => $booking_url[$i],
        //         'tags' => $tag[$i],
        //         'organizer_id' => $organizer_id[$i],
        //         'event_category_id' => $event_category_id[$i],
        //         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
         //   ]);
    }
    
}
