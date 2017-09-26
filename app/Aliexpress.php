<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aliexpress extends Model
{
    protected $guarded = [];

    protected $table = 'keywords';

    public function addKeywords($request, $id = null)
    {
        self::updateOrCreate([
            'id' => $id,
        ], [
            'keyword' => $request->keyword,
        ]);
    }

    public function getAliApiProducts($key)
    {
        $obj = new AliExpressApi();

        $obj->setFields('productUrl,imageUrl,localPrice,productId');

        $obj->setAppKey(73815);

        $result = $obj->getListPromotionProduct($key);

        return $result;
    }
}
