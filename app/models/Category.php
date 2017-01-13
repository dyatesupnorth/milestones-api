<?php

class Category extends \Eloquent {
	public $primaryKey  = '_id';
	protected $fillable = array('user_id','category_name');


	// each blether BELONGS to many users
	// define our pivot table also
	public function user() {
		return $this->belongsTo('User');
	}
	public function goals()
	{
		return $this->hasMany('Goal');
	}




}