<?php

namespace App\Models;

use App\Http\Traits\Uuids;
use Eloquent;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Carbon;

/**
 * App\Models\Farmer
 *
 * @property string $id
 * @property string $name
 * @property string $street
 * @property string $house_number
 * @property string $place
 * @property string $zip_code
 * @property string $country
 * @property string $province
 * @property string $email
 * @property string|null $phone
 * @property string|null $fax
 * @property string $kvk
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property string|null $contact_user_id
 * @property-read Collection|Article[] $articles
 * @property-read int|null $articles_count
 * @property-read Collection|Cell[] $cells
 * @property-read int|null $cells_count
 * @property-read User|null $contactUser
 * @property-read Collection|PalletLabel[] $palletLabels
 * @property-read int|null $pallet_labels_count
 * @property-read Collection|User[] $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Farmer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Farmer newQuery()
 * @method static Builder|Farmer onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Farmer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Farmer whereContactUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Farmer whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Farmer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Farmer whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Farmer whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Farmer whereFax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Farmer whereHouseNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Farmer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Farmer whereKvk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Farmer whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Farmer wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Farmer wherePlace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Farmer whereProvince($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Farmer whereStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Farmer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Farmer whereZipCode($value)
 * @method static Builder|Farmer withTrashed()
 * @method static Builder|Farmer withoutTrashed()
 * @mixin Eloquent
 */
class Farmer extends Model
{
    use Uuids, SoftDeletes;

    // region Relationships
        // region HasMany

            // Farmer has many PalletLabel
            public function palletLabels()
            {
                return $this->hasMany(PalletLabel::class);
            }
            // Farmer has many Cell
            public function cells()
            {
                return $this->hasMany(Cell::class);
            }
        //endregion

        //region BelongsToMany
            // Farmer has many User
            public function users()
            {
                return $this->belongsToMany(User::class);
            }
            // Farmer has many Article
            public function articles()
            {
                return $this->belongsToMany(Article::class);
            }
        //endregion

        // region BelongsTo
            // Farmer belong to User
            public function contactUser()
            {
                return $this->belongsTo(User::class);
            }
        //endregion
    // endregion


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'contact_user_id'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'street',
        'house_number',
        'place',
        'zip_code',
        'country',
        'province',
        'email',
        'phone',
        'fax',
        'kvk'
    ];
}
