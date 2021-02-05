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
 * App\Models\Cell
 *
 * @property string $id
 * @property int|null $number
 * @property string|null $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property string $farmer_id
 * @property-read Farmer $farmer
 * @method static \Illuminate\Database\Eloquent\Builder|Cell newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cell newQuery()
 * @method static Builder|Cell onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Cell query()
 * @method static \Illuminate\Database\Eloquent\Builder|Cell whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cell whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cell whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cell whereFarmerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cell whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cell whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cell whereUpdatedAt($value)
 * @method static Builder|Cell withTrashed()
 * @method static Builder|Cell withoutTrashed()
 * @mixin Eloquent
 */
class Cell extends Model
{
    use Uuids, SoftDeletes;

    // region Relationships
        // region BelongsTo

            // Belongs to
            public function farmer(){
                return $this->belongsTo(Farmer::class);
            }

        //endregion
    //endregion


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'number',
        'description'
    ];
}
