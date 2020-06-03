<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    protected $table = 'rentals';

	protected $fillable = [
		'id_card', 'renter', 'address', 'phone', 'item_code', 'qty', 'price_total', 'periode', 'deadline', 'user_id', 'payment_id', 'created_at', 'update_at'
	];

	public function payment()
	{
		return $this->belongsTo(Payment::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function item()
	{
		return $this->belongsTo(Item::class);
	}
}
