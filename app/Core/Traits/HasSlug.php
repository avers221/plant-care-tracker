<?php

namespace App\Core\Traits;

use Illuminate\Support\Str;

trait HasSlug
{
    protected static function bootHasSlug()
    {
        static::creating(function ($model) {
            if (empty($model->slug)) {
                $model->slug = $model->generateUniqueSlug($model->name);
            }
        });

        static::updating(function ($model) {
            if (
                empty($model->slug) &&
                $model->isDirty('name')
            ) {
                $model->slug = $model->generateUniqueSlug($model->name);
            }
        });
    }

    public function generateUniqueSlug(string $name): string
    {
        $slug = Str::slug($name);
        $originalSlug = $slug;
        $count = 1;

        while (
        static::where('slug', $slug)
            ->where('id', '!=', $this->id)
            ->exists()
        ) {
            $slug = "{$originalSlug}-{$count}";
            $count++;
        }

        return $slug;
    }
}
