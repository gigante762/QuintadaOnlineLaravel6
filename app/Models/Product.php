<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title','price','description','code',
    ];

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function search($filter= null)
    {
        if($filter)
        {
            $results = $this
            ->where('title', 'LIKE', "%{$filter}%")
            ->orWhere('description', 'LIKE', "%{$filter}%")
            ->paginate();

            $results->filter = $filter;

            return $results;
        }

        return $this->paginate();

    }

}
