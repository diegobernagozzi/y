<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
                // Genera un utente specifico
        User::updateOrCreate(
            ['email' => 'bernadiego01@gmail.com'], // Verifica se esiste già con questa email
            [
                'name' => 'Diego Bernagozzi',
                'user_name' => 'diego.bernagozzi',
                'profile_image' => 'https://picsum.photos/200/300',
                'background_image' => 'https://picsum.photos/200/300',
                'email' => 'diego@example.com',
                'description' => 'Porco dio',
                'password' => 'Db@2024!', // Password criptata
            ]
        );
        User::factory()->count(100)->create(); // Genera 50 utenti
    }
}
