<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run() {
		// \App\Models\User::factory(10)->create();

		// Создаём пользователей
		$this->call([
			UserSeeder::class
		]);


        // Создаём группы-команды
		$this->call([
			TeamSeeder::class
		]);
	}
}
