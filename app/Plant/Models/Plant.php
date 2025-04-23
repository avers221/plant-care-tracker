<?php

namespace App\Plant\Models;

use App\Image\Enums\ImageTypeEnum;
use App\Image\Models\Image;
use App\PlantsRequirements\Models\CareRequirement;
use App\User\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Plant extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'type_id', 'name', 'planted_at', 'description'];
    protected $keyType = 'string';
    public $incrementing = false;

    protected static function boot ()
    {
        parent::boot();
        static::creating(function ($model) {
            if ($model->getKey() === null) {
                $model->setAttribute($model->getKeyName(), Str::uuid()->toString());
            }
        });
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function images(): \Illuminate\Database\Eloquent\Relations\MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function coverImage(): \Illuminate\Database\Eloquent\Relations\MorphOne
    {
        return $this->morphOne(Image::class, 'imageable')->where('type', ImageTypeEnum::COVER->value);
    }

    public function galleryImages(): \Illuminate\Database\Eloquent\Relations\MorphMany
    {
        return $this->morphMany(Image::class, 'imageable')->where('type', ImageTypeEnum::GALLERY->value);
    }

    public function type(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(PlantType::class, 'type_id');
    }

    public function requiements(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(CareRequirement::class, 'plant_id');
    }
}
