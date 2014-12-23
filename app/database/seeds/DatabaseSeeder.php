<?php



class DatabaseSeeder extends Seeder {

	public function run()
	{
		$this->call('MenuItemsTableSeeder');
		$this->command->info('menu_items table seeded!');

		$this->call('CategoryTableSeeder');
		$this->command->info('category table seeded!');

		$this->call('ProductTableSeeder');
		$this->command->info('product table seeded!');
	}
}
