<?php
namespace App\Http\ViewComposers;

use View;

use App\Models\Booking;
use App\Models\Order;
use App\Models\Location;
use App\Myconst;
use App\Models\Restaurant;
use App\Models\Dish;
use App\Models\Media;
use App\Models\StateLaunching;
use App\Models\StrategicPartnership;
use DB;

class ViewShareComposer
{

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose()
    {
        $vvv = "vkl";
        View::share(['vvv'=> $vvv]);
    }
}