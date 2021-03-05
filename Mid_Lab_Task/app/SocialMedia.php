<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    const CREATED_AT = "sold_date";
    const UPDATED_AT = "last_updated";

    protected $table = 'social_media_channel';
    public $timestamps = true;
    protected $primaryKey = 'productId';
}
