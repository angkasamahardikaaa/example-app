<?php

namespace Database\Seeders;

use App\Models\Costumer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CostumerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Costumer::create([
            'name'=> 'Amin',
            'phone'=> '081918191',
            'email'=> 'amin@gmail.com',
            'gender'=> 'Male',
        ]);
    }
}
