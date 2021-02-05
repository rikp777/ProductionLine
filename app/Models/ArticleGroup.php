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
 * App\Models\ArticleGroup
 *
 * @property string $id
 * @property string $name
 * @property string $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleGroup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleGroup newQuery()
 * @method static Builder|ArticleGroup onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleGroup query()
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleGroup whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleGroup whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleGroup whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleGroup whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleGroup whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleGroup whereUpdatedAt($value)
 * @method static Builder|ArticleGroup withTrashed()
 * @method static Builder|ArticleGroup withoutTrashed()
 * @mixin Eloquent
 */
class ArticleGroup extends Model
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
