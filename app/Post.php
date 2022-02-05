<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    protected $fillable = [
    'title',
    'body',
    ];
    
    public function getPaginateByLimit(int $limit_count = 2)
    {
        // updated_atで降順にして、limitで件数制限をかける
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
}


