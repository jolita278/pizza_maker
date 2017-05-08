<?php
/**
 * Created by PhpStorm.
 * User: Jolita_A
 * Date: 2017.05.08
 * Time: 14:24
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Ramsey\Uuid\Uuid;

class CoreModel extends Model
{
    use SoftDeletes;
    public $incrementing = false;
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model)
        {
            if (!isset($model->attributes['id'])) {
                $model->attributes['id'] = Uuid::uuid4();
            } else {
                $model->{$model->getKeyName()} = $model->attributes['id'];
            }
        });
    }
}
