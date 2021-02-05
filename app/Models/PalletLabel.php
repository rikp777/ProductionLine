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
 * App\Models\PalletLabel
 *
 * @property string $id
 * @property int $general_id
 * @property int $pallet_label_farmer_id
 * @property string $crop_date
 * @property int $article_amount
 * @property string|null $note
 * @property string $made_by
 * @property int|null $cell_number
 * @property string|null $cell_description
 * @property int $harvest_cycle
 * @property int $harvest_cycle_day
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property string $cell_id
 * @property string $farmer_id
 * @property string $pallet_type_id
 * @property string $article_id
 * @property-read Article $article
 * @property-read Cell $cell
 * @property-read Farmer $farmer
 * @property-read PalletType $palletType
 * @method static \Illuminate\Database\Eloquent\Builder|PalletLabel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PalletLabel newQuery()
 * @method static Builder|PalletLabel onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|PalletLabel query()
 * @method static \Illuminate\Database\Eloquent\Builder|PalletLabel whereArticleAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PalletLabel whereArticleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PalletLabel whereCellDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PalletLabel whereCellId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PalletLabel whereCellNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PalletLabel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PalletLabel whereCropDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PalletLabel whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PalletLabel whereFarmerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PalletLabel whereGeneralId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PalletLabel whereHarvestCycle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PalletLabel whereHarvestCycleDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PalletLabel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PalletLabel whereMadeBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PalletLabel whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PalletLabel wherePalletLabelFarmerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PalletLabel wherePalletTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PalletLabel whereUpdatedAt($value)
 * @method static Builder|PalletLabel withTrashed()
 * @method static Builder|PalletLabel withoutTrashed()
 * @mixin Eloquent
 */
class PalletLabel extends Model
{
    use Uuids, SoftDeletes, hasFactory;


    // region Relationships
        // region BelongsTo
            // PalletLabel belongs to Farmer
            public function farmer()
            {
                return $this->belongsTo(Farmer::class);
            }
            // PalletLabel belongs one PalletType
            public function palletType()
            {
                return $this->belongsTo(PalletType::class);
            }
            // PalletLabel belongs one Article
            public function article()
            {
                return $this->belongsTo(Article::class);
            }
            // PalletLabel belongs one Cell
            public function cell()
            {
                return $this->belongsTo(cell::class);
                //TODO Palletlabel belongs to many cells because can be mixed that's because farmers are lazy and dont want to make a new palletlabel its something for discussion
            }
        // endregion
    // endregion


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'article_id',
        'cell_id',
        'user_id',
        'farmer_id',
        'cultivation_cycle_id',
        'pallet_type_id',
        'status_id',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'crop_date',
        'article_amount',
        'note',
        'pallet_label_farmer_id',
        'made_by',
        'cell_number',
        'cell_description',
        'harvest_cycle',
        'harvest_cycle_day'
    ];
}
