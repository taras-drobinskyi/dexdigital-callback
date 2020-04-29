<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'status'
    ];

    public function updateOrder(array $data, int $id)
    {
       $orderObj = Order::find($id);

       if ($orderObj) {
           $orderObj->fill($this->attributes);
           $orderObj->save();
       }

       return $orderObj;
    }

}
