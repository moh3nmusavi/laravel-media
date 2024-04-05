<?php
namespace Moh3n\LaravelMedia\Services;

use \Illuminate\Http\UploadedFile ;
use Illuminate\Support\Facades\Storage;
use Moh3n\LaravelMedia\MediaTypeEnum;
use Moh3n\LaravelMedia\Models\Media;

class ImageService
{
    /**
     * upload images
     * @param UploadedFile $file
     * @param string $filename
     * @param string $dir
     * @return string
     */
    public function upload(UploadedFile $file , bool $isPrivate = false) :string
    {
        $filename = $file->getClientOriginalName();
        //upload file
        Storage::putFileAs($path = 'images' , $file , $filename . '-'.now());
        Media::query()->create([
            'user_id' => auth()->id(),
            'filename' => $filename,
            'path' => $path,
            'is_private' => $isPrivate,
            'files' => [],
            'type' => MediaTypeEnum::TYPE_IMAGE->value,
        ]);
        // Return filename
        return $filename ;
    }

}