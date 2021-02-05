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
 * App\Models\Inset
 *
 * @property string $id
 * @property string $name
 * @property string $description
 * @property int $amount
 * @property string $code
 * @property string $color
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Inset newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Inset newQuery()
 * @method static Builder|Inset onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Inset query()
 * @method static \Illuminate\Database\Eloquent\Builder|Inset whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Inset whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Inset whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Inset whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Inset whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Inset whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Inset whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Inset whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Inset whereUpdatedAt($value)
 * @method static Builder|Inset withTrashed()
 * @method static Builder|Inset withoutTrashed()
 * @mixin Eloquent
 */
class Inset extends Model
{
    use Uuids, SoftDeletes;
}
