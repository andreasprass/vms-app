<?php

namespace Database\Seeders;

use App\Models\GuestVisit;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GuestVisitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        GuestVisit::factory(5)->create();
    }
}
