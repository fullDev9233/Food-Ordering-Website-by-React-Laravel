<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\FoodCategory
 *
 * @property int $id
 * @property string|null $name
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\FoodCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\FoodCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\FoodCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\FoodCategory whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class FoodCategory extends Model
{
    protected $fillable = ["name"];
}
