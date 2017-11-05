<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App;
class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
          App::bind('App\Repositories\UserRepositoryInterface','App\Repositories\UserRepository');
          App::bind('App\Repositories\AnimalRepositoryInterface','App\Repositories\AnimalRepository');
          App::bind('App\Repositories\DonationTypeRepositoryInterface','App\Repositories\DonationTypeRepository');
          App::bind('App\Repositories\NewsAniRepositoryInterface','App\Repositories\NewsAniRepository');
          App::bind('App\Repositories\DonationRepositoryInterface','App\Repositories\DonationRepository');
          App::bind('App\Repositories\ProductRepositoryInterface','App\Repositories\ProductRepository');
          App::bind('App\Repositories\CategoryRepositoryInterface','App\Repositories\CategoryRepository');
          App::bind('App\Repositories\TransferMoneyRepositoryInterface','App\Repositories\TransferMoneyRepository');
          App::bind('App\Repositories\ShippingRepositoryInterface','App\Repositories\ShippingRepository');
          App::bind('App\Repositories\ReserveProductRepositoryInterface','App\Repositories\ReserveProductRepository');
          App::bind('App\Repositories\Product_reserveRepositoryInterface','App\Repositories\Product_reserveRepository');
          App::bind('App\Repositories\Ordering_productRepositoryInterface','App\Repositories\Ordering_productRepository');
          App::bind('App\Repositories\OrderingRepositoryInterface','App\Repositories\OrderingRepository');
          App::bind('App\Repositories\UserUpdateSlipRepositoryInterface','App\Repositories\UserUpdateSlipRepository');
    }
}
