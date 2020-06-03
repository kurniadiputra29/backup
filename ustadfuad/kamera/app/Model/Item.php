<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Item extends Model
{
	protected $table = 'items';
	
	protected $fillable = [
      'id','code','name','category_id','type','price','status','note','created_at', 'updated_at'
    ];
    public function category()
    {
    	return $this->belongsTo(Category::class);
    }

    public function rental()
    {
    	return $this->hasMany(Rental::class);
    }
}
