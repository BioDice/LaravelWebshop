<?php namespace Cribbb\Composers;

use App\Models\CartEntry;

class MiniCartComposer {

    public function compose($view)
    {
        $cartEntries = \Session::get('productsInCart');
        $count = 0;
        if ($cartEntries != null)
        {
            foreach ($cartEntries as $cartEntry)
            {
                $count += $cartEntry->GetAmount();
            }
        }

        $totalPrice = 0;
        if ($cartEntries != null) {
            foreach ($cartEntries as $cartEntry) {
                $totalPrice += $cartEntry->GetTotalPrice();
            }
        }

        $view->with(['cartCount' => $count, 'products' => $cartEntries, 'totalPrice' => $totalPrice]);
    }
}