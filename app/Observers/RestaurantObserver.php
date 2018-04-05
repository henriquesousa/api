<?php

namespace App\Observers;

use App\Restaurant;

class RestaurantObserver
{
    use UploadObserverTrait;

    protected $field = 'photos';
    protected $path = 'restaurants/';

    /**
     * Metodos executando antes dos dados serem persistidos
     * @param Restaurant $model
     */

    public function creating(Restaurant $model)
    {
        $this->sendFile($model);
    }

    public function deleting(Restaurant $model)
    {
        $this->removeFile($model);
    }

    public function updating(Restaurant $model)
    {
        $this->updateFile($model);
    }

}