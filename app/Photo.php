<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Photo extends Model
{
    protected $guarded = [];

    public function add($request, $id = null)
    {
        foreach($request->images as $image){

            $path = $this->saveImages($image);

            self::updateOrCreate([
                'id' => $id,
            ], [
                'title' => $request->title,
                'description' => $request->description,
                'orig' => $path,
                'small' => $path,
                'middle' => $path,
                'large' => $path,
            ]);
        }
    }

    public function saveImages($image)
    {
        return $path = $image->store('public/images');
    }

    public function updatePhotoData($request)
    {
        $this->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);
    }

    public function deletePhoto($photo)
    {
        $photos = [$photo->orig, $photo->small, $photo->middle, $photo->large];

        foreach ($photos as $item){
            if (!filter_var($item, FILTER_VALIDATE_URL)) { //if photo stored in local storage - delete
                Storage::delete($item);
            }
        }

        Photo::destroy($photo->id);
    }
}
