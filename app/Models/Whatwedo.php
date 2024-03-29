<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Whatwedo extends Model
{
    use HasFactory;
    protected $fillable = ['description','sub_desc','activity_id'];

    public function wedo()
    {
        # code...
        return $this->belongsTo(Wedo::class, 'activity_id','id');
    }
}
