<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
	protected $table = 'payments';

	protected $fillable = [
		'name', 'created_at', 'update_at'
	];

	public function rental()
	{
		return $this->hasMany(Rental::class);
	}
}
