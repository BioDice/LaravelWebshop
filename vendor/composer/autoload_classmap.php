<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'AccountController' => $baseDir . '/app/controllers/AccountController.php',
    'App\\Models\\CartEntry' => $baseDir . '/app/models/CartEntry.php',
    'App\\Models\\Category' => $baseDir . '/app/models/Category.php',
    'App\\Models\\MenuItem' => $baseDir . '/app/models/MenuItem.php',
    'App\\Models\\Order' => $baseDir . '/app/models/Order.php',
    'App\\Models\\OrderProduct' => $baseDir . '/app/models/OrderProduct.php',
    'App\\Models\\Product' => $baseDir . '/app/models/Product.php',
    'App\\Models\\Role' => $baseDir . '/app/models/Role.php',
    'App\\Models\\User' => $baseDir . '/app/models/User.php',
    'BackendController' => $baseDir . '/app/controllers/Backend/BackendController.php',
    'CartController' => $baseDir . '/app/controllers/CartController.php',
    'CategoryController' => $baseDir . '/app/controllers/CategoryController.php',
    'CategoryRepo' => $baseDir . '/app/models/Repositories/CategoryRepo.php',
    'CategoryTableSeeder' => $baseDir . '/app/database/seeds/CategoryTableSeeder.php',
    'CheckoutController' => $baseDir . '/app/controllers/CheckoutController.php',
    'CreateCategoriesTable' => $baseDir . '/app/database/migrations/2014_12_17_213202_create_categories_table.php',
    'CreateMenuitemsTable' => $baseDir . '/app/database/migrations/2014_12_17_221028_create_menuitems_table.php',
    'CreateOrdersTable' => $baseDir . '/app/database/migrations/2014_12_17_213236_create_orders_table.php',
    'CreateOrdersproductsTable' => $baseDir . '/app/database/migrations/2014_12_17_213253_create_ordersproducts_table.php',
    'CreateProductTable' => $baseDir . '/app/database/migrations/2014_12_15_220103_create_product_table.php',
    'CreateRolesTable' => $baseDir . '/app/database/migrations/2014_12_27_151039_create_roles_table.php',
    'CreateUsersTable' => $baseDir . '/app/database/migrations/2014_12_17_213308_create_users_table.php',
    'Cribbb\\Composers\\BreadCrumbComposer' => $baseDir . '/app/Cribbb/Composers/BreadCrumbComposer.php',
    'Cribbb\\Composers\\CategoryMenuComposer' => $baseDir . '/app/Cribbb/Composers/CategoryMenuComposer.php',
    'Cribbb\\Composers\\ComposerServiceProvider' => $baseDir . '/app/Cribbb/Composers/CompServiceProvider.php',
    'Cribbb\\Composers\\MenuItemsComposer' => $baseDir . '/app/Cribbb/Composers/MenuItemsComposer.php',
    'Cribbb\\Composers\\MiniCartComposer' => $baseDir . '/app/Cribbb/Composers/MinCartComposer.php',
    'DatabaseSeeder' => $baseDir . '/app/database/seeds/DatabaseSeeder.php',
    'FrontendController' => $baseDir . '/app/controllers/FrontendController.php',
    'HomeController' => $baseDir . '/app/controllers/HomeController.php',
    'IlluminateQueueClosure' => $vendorDir . '/laravel/framework/src/Illuminate/Queue/IlluminateQueueClosure.php',
    'MenuItemsTableSeeder' => $baseDir . '/app/database/seeds/MenuItemsTableSeeder.php',
    'ProductController' => $baseDir . '/app/controllers/ProductController.php',
    'ProductTableSeeder' => $baseDir . '/app/database/seeds/ProductTableSeeder.php',
    'RoleTableSeeder' => $baseDir . '/app/database/seeds/RoleTableSeeder.php',
    'SessionHandlerInterface' => $vendorDir . '/symfony/http-foundation/Symfony/Component/HttpFoundation/Resources/stubs/SessionHandlerInterface.php',
    'TestCase' => $baseDir . '/app/tests/TestCase.php',
    'UserTableSeeder' => $baseDir . '/app/database/seeds/UserTableSeeder.php',
    'Whoops\\Module' => $vendorDir . '/filp/whoops/src/deprecated/Zend/Module.php',
    'Whoops\\Provider\\Zend\\ExceptionStrategy' => $vendorDir . '/filp/whoops/src/deprecated/Zend/ExceptionStrategy.php',
    'Whoops\\Provider\\Zend\\RouteNotFoundStrategy' => $vendorDir . '/filp/whoops/src/deprecated/Zend/RouteNotFoundStrategy.php',
);
