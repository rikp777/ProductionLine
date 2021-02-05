<?php

namespace App\Models;

use App\Http\Traits\Uuids;
use Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Carbon;

/**
 * App\Models\PalletType
 *
 * @property string $id
 * @property string $name
 * @property string $description
 * @property string $weight
 * @property string $price
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|PalletType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PalletType newQuery()
 * @method static Builder|PalletType onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|PalletType query()
 * @method static \Illuminate\Database\Eloquent\Builder|PalletType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PalletType whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PalletType whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PalletType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PalletType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PalletType wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PalletType whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PalletType whereWeight($value)
 * @method static Builder|PalletType withTrashed()
 * @method static Builder|PalletType withoutTrashed()
 * @mixin Eloquent
 */
class PalletType extends Model
{
    use Uuids, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'weight',
        'price'
    ];
}
