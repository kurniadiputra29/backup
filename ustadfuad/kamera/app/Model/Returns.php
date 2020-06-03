<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class returns extends Model
{	
	protected $table = 'returns';
	
	protected $fillable = [
      'id','rental_id', 'id_card', 'renter', 'item_code', 'status', 'note', 'created_at', 'updated_at'
    ];
    public function rental()
    {
    	return $this->belongsTo(Rental::class);
    }

}
