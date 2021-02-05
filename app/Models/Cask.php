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
 * App\Models\Cask
 *
 * @property string $id
 * @property string $code
 * @property string $name
 * @property string $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Cask newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cask newQuery()
 * @method static Builder|Cask onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Cask query()
 * @method static \Illuminate\Database\Eloquent\Builder|Cask whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cask whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cask whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cask whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cask whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cask whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cask whereUpdatedAt($value)
 * @method static Builder|Cask withTrashed()
 * @method static Builder|Cask withoutTrashed()
 * @mixin Eloquent
 */
class Cask extends Model
{
    use Uuids, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code',
        'name',
        'description'
    ];
}
