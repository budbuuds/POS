<?php
namespace App\Providers;
use App\solution;
use App\lensa_mccr;
use App\lensa_kmccr;
use App\lensa_mccrkaca;
use App\lensa_kmccrkaca;
use App\lensa_block;
use App\lensa_grey;
use App\lensa_flexi;
use App\lensa_leinz;
use App\idol_black;
use App\idol_brown;
use App\idol_grey;
use App\celebrity_black;
use App\celebrity_brown;
use App\celebrity_grey;
use App\User;
use App\frame;
use App\frameoriginal;
use Illuminate\Support\ServiceProvider;
class DynamicClassnameProvider extends ServiceProvider
{
    public function boot()
    {
        view()->composer('*',function($view)
        {
            $view->with('solution_array', solution::all());
            $view->with('lensa_mccr_array', lensa_mccr::all());
            $view->with('lensa_kmccr_array', lensa_kmccr::all());
            $view->with('lensa_mccrkaca_array', lensa_mccrkaca::all());
            $view->with('lensa_kmccrkaca_array', lensa_kmccrkaca::all());
            $view->with('lensa_block_array', lensa_block::all());
            $view->with('lensa_flexi_array', lensa_flexi::all());
            $view->with('lensa_grey_array', lensa_grey::all());
            $view->with('lensa_leinz_array', lensa_leinz::all());
            $view->with('idol_black_array', idol_black::all());
            $view->with('idol_brown_array', idol_brown::all());
            $view->with('idol_grey_array', idol_grey::all());
            $view->with('celebrity_black_array', celebrity_black::all());
            $view->with('celebrity_brown_array', celebrity_brown::all());
            $view->with('celebrity_grey_array', celebrity_grey::all());
            $view->with('User_array', User::all());
            $view->with('frame_array', frame::all());
            $view->with('frameoriginal_array', frameoriginal::all());
        });
    }
}
