<?php

namespace Database\Seeders;

use App\Models\Message;
use App\Models\User;
use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $users = User::all();

        for ($i = 0; $i < 3; $i++) {
            $sender = $users->random();
            $receiver = $users->random(); 
            while ($sender->id === $receiver->id) {
                $receiver = $users->random();
            }

            Message::create([
                'sender_id' => $sender->id,
                'receiver_id' => $receiver->id,
                'message' => $faker->paragraph,
            ]);
        }
    }
}
