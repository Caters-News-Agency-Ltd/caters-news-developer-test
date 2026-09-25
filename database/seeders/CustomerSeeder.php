<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers = [
            ['name' => 'Alice Johnson', 'email' => 'alice.johnson@example.com', 'description' => 'Loves food videos, especially street food and cooking tutorials.'],
            ['name' => 'Ben Carter', 'email' => 'ben.carter@example.com', 'description' => 'Big fan of wildlife videos, particularly big cats and marine life.'],
            ['name' => 'Chloe Davis', 'email' => 'chloe.davis@example.com', 'description' => 'Enjoys sports videos, especially football highlights and match analysis.'],
            ['name' => 'Daniel Evans', 'email' => 'daniel.evans@example.com', 'description' => 'Interested in travel videos showcasing hidden gems around the world.'],
            ['name' => 'Ella Fisher', 'email' => 'ella.fisher@example.com', 'description' => 'Prefers music videos and live concert recordings.'],
            ['name' => 'Finn Gallagher', 'email' => 'finn.gallagher@example.com', 'description' => 'Passionate about motorsport videos, especially Formula 1 races.'],
            ['name' => 'Grace Hall', 'email' => 'grace.hall@example.com', 'description' => 'Enjoys comedy sketch videos and stand-up specials.'],
            ['name' => 'Harry Irwin', 'email' => 'harry.irwin@example.com', 'description' => 'Fascinated by science and space videos, especially astronomy content.'],
            ['name' => 'Isla Jenkins', 'email' => 'isla.jenkins@example.com', 'description' => 'Likes fitness and workout videos, especially yoga and home training.'],
            ['name' => 'Jack Kelly', 'email' => 'jack.kelly@example.com', 'description' => 'Enjoys gaming videos, particularly walkthroughs and esports tournaments.'],
        ];

        foreach ($customers as $customer) {
            Customer::create($customer);
        }
    }
}
