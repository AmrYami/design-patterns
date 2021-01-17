<?php

namespace App\Observers;

use App\Car;

class CarObserver
{

    public function creating(Car $car){
        $car->number = 1000;
//        $car->save()
    }
    /**
     * Handle the car "created" event.
     *
     * @param  \App\Car  $car
     * @return void
     */
    public function created(Car $car)
    {
        //
    }

    /**
     * Handle the car "updated" event.
     *
     * @param  \App\Car  $car
     * @return void
     */
    public function updated(Car $car)
    {
        //
    }

    /**
     * Handle the car "deleted" event.
     *
     * @param  \App\Car  $car
     * @return void
     */
    public function deleted(Car $car)
    {
        //
    }

    /**
     * Handle the car "restored" event.
     *
     * @param  \App\Car  $car
     * @return void
     */
    public function restored(Car $car)
    {
        //
    }

    /**
     * Handle the car "force deleted" event.
     *
     * @param  \App\Car  $car
     * @return void
     */
    public function forceDeleted(Car $car)
    {
        //
    }
}
