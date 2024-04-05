<?php
namespace Moh3n\LaravelMedia\Facades;
use Illuminate\Http\UploadedFile;
use \Illuminate\Support\Facades\Facade ;

class ImageServiceFacade extends Facade
{
    /**
     * @method static upload(UploadedFile $file , bool $isPrivate = false)
     */
    protected static function getFacadeAccessor()
    {
        return 'image-service';
    }
}