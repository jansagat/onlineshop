<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    /**
     * Create or update category
     *
     * @param Http\Requests\PostRequest $request
     * @param int $id
     * @return void
     */
    public function add($request, $id = null)
    {
        if (auth()->check()) {
            self::updateOrCreate([
                'id' => $id
            ], [
                'title' => $request->title,
                'text' => $request->text,
                'user_id' => auth()->id(),
            ]);
        };
    }
}
