<?php

namespace App\Models;

use CloudinaryLabs\CloudinaryLaravel\MediaAlly;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, MediaAlly;

    protected $fillable = [
        'name',
        'description',
        'price',
    ];

    public function getMediasAttribute()
    {
        return $this->fetchAllMedia()->map(function ($media) {
            return $media->getSecurePath();
        });
    }

    public function getMediaAttribute()
    {
        return $this->fetchFirstMedia();
    }

    public function getMediaUrlAttribute()
    {
        return $this->fetchFirstMedia()->getSecurePath();
    }

    public function getThumbNameAttribute()
    {
        return $this->fetchFirstMedia()->getFileName();
    }

    public function getPriceFormattedAttribute()
    {
        return number_format($this->price, 2, ',', '.');
    }
}
