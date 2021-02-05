<?php

namespace App\Models;

use App\Http\Traits\Uuids;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

/**
 * App\Models\Article
 *
 * @property string $id
 * @property string $excel_code
 * @property string $inset_gram
 * @property int $inset_limit
 * @property int $pallet_limit
 * @property string $origin
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property string $pallet_type_id
 * @property string $cask_id
 * @property string $inset_id
 * @property string $article_group_id
 * @property string $sort_type_id
 * @property-read ArticleGroup $articleGroup
 * @property-read Cask $cask
 * @property-read Collection|Farmer[] $farmers
 * @property-read int|null $farmers_count
 * @property-read Inset $inset
 * @property-read PalletType $palletType
 * @property-read SortType $sortType
 * @method static \Illuminate\Database\Eloquent\Builder|Article newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Article newQuery()
 * @method static \Illuminate\Database\Query\Builder|Article onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Article query()
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereArticleGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereCaskId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereExcelCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereInsetGram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereInsetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereInsetLimit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereOrigin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article wherePalletLimit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article wherePalletTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereSortTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Article withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Article withoutTrashed()
 * @mixin \Eloquent
 */
class Article extends Model
{
    use Uuids, SoftDeletes;


    // Functions
    public function fullName(): string
    {
//        foreach ($this as $value){
        if($this->sortType->name === 'none'){
            if (isset($this->inset->color)){
                return
                    $this->articleGroup->name . ' ' .
                    $this->inset_limit . 'x' .
                    $this->inset_gram . ' ' .
                    $this->inset->color . ' (' .
                    $this->excel_code . ')';
            } else {
                return
                    $this->articleGroup->name . ' ' .
                    $this->inset_limit . 'x' .
                    $this->inset_gram . ' ' .
                    ' (' .
                    $this->excel_code . ')';
            }
        } elseif($this->sortType->name === 'Kist') {
            return
                $this->articleGroup->name . ' ' .  $this->sortType->name . ' (' . $this->excel_code . ')';
        } else {
            if (isset($this->inset->color)){
                return
                    $this->articleGroup->name . ' ' .
                    $this->sortType->name . ' ' .
                    $this->inset_limit . 'x' .
                    $this->inset_gram . ' ' .
                    $this->inset->color . ' (' .
                    $this->excel_code . ')';
            } else {
                return
                    $this->articleGroup->name . ' ' .
                    $this->sortType->name . ' ' .
                    $this->inset_limit . 'x' .
                    $this->inset_gram . ' ' .
                    ' (' .
                    $this->excel_code . ')';
            }
//            }
        }
    }

    // region Relationship
        // region BelongsToMany

            // Article belongs to many Farmers
            public function farmers()
            {
                return $this->BelongsToMany(Farmer::class);
            }
        // endregion

        // region BelongsTo

            // Article belongs to PalletType
            public function palletType()
            {
                return $this->belongsTo(PalletType::class);
            }
            // Article belongs to Cask
            public function cask()
            {
                return $this->belongsTo(Cask::class);
            }
            // Article belongs to Inset
            public function inset()
            {
                return $this->belongsTo(Inset::class);
            }
            // Article belongs to ArticleGroup
            public function articleGroup()
            {
                return $this->belongsTo(ArticleGroup::class);
            }
            // Article belongs to SortType
            public function sortType()
            {
                return $this->belongsTo(SortType::class);
            }
        // endregion
    // endregion

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'excel_code',
        'inset_gram',
        'inset_limit',
        'pallet_limit',
        'origin',
        'pallet_type_id',
        'cask_id',
        'inset_id',
        'status_id',
        'article_group_id',
        'sort_type_id',
    ];
}
