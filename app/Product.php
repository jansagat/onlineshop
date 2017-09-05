<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function add($request, $id = null)
    {
        self::updateOrCreate([
            'id' => $id,
        ], [
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'old_price' => $request->old_price,
            'currency' => $request->currency,
            'available' => $request->available,
            'original_url' => $request->original_url,
            'ali_id' => $request->ali_id,
        ]);
    }
}
