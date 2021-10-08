<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebhookResponse extends Model
{
    use HasFactory;

    protected $fillable = [
        'data',
        'topic'
    ];

    public function setDataAttribute($value){
        $this->attributes['data'] = json_encode($value);
    }

    
    
}
