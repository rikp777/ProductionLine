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
 * App\Models\SortType
 *
 * @property string $id
 * @property string $name
 * @property string $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|SortType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SortType newQuery()
 * @method static Builder|SortType onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|SortType query()
 * @method static \Illuminate\Database\Eloquent\Builder|SortType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SortType whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SortType whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SortType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SortType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SortType whereUpdatedAt($value)
 * @method static Builder|SortType withTrashed()
 * @method static Builder|SortType withoutTrashed()
 * @mixin Eloquent
 */
class SortType extends Model
{

    use Uuids, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description'
    ];
}
