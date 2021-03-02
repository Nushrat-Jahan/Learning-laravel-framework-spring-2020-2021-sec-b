<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    const CREATED_AT = 'date_sold';
    const UPDATED_AT = 'date_sold';

    protected $table = 'social_media_channel';
    protected $primaryKey = 'storeId';

    public $timestamps = true;

}
