<?php

class Picture extends \Eloquent {
	protected $fillable = array(
			'product_id',
			'image'
		);

	protected $hidden = array(
			'created_at',
			'updated_at'
		);

	public funtion product()
	{
		return $this->belongsTo('Product');
	}
}