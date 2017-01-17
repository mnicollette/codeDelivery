<?php

namespace CodeDelivery\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Deliveryman extends Model implements Transformable
{
    use TransformableTrait;

    //
    protected $fillable =[
        'deliveryman_id',
        "name",
        'email'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){
        return $this->hasOne(User::class,'deliveryman_id','id');
    }

}
