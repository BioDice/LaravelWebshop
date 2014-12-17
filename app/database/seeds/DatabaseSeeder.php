<?php



class DatabaseSeeder extends Seeder {

	public function run()
	{
		$this->call('MenuItemsTableSeeder');

		$this->command->info('menu_items table seeded!');
	}
}
