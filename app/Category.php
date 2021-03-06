<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    /**
     * Create or update category
     *
     * @param CategoryRequest $request
     * @param int $id
     * @return void
     */
    public function add($request, $id = null)
    {
        self::updateOrCreate([
            'id' => $id
        ], [
            'title' => $request->title,
            'content' => $request->content,
        ]);
    }
}
