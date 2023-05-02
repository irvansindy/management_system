<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Assets extends Model
{
    use HasFactory, softDeletes, HasUuids;

    protected $table = 'assets';

    protected $fillable = [
        'id',
        'assetNumber',
        'assetName',
        'assetSlug',
        'assetDescription',
        'assetCategoryId',
        'assetSubCategoryId',
        'assetLocationId',
        'assetDate',
        'assetUserId',
        'assetStatus',
        'assetImageUrl',
    ];
}
