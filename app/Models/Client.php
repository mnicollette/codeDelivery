<?php

namespace CodeDelivery\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Client extends Model implements Transformable
{
    use TransformableTrait;

    //
    protected $fillable =[
        'user_id',
        "address",
        'phone',
        'state',
        'city',
        'zipcode'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }

}
