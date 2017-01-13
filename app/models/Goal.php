<?php

class Goal extends \Eloquent {
	public $primaryKey  = '_id';
	protected $fillable = array('category_id','goal_name','percentage', 'is_complete');


	// each blether BELONGS to many users
	// define our pivot table also
	public function category() {
		return $this->belongsTo('Category');
	}
	public function milestones()
	{
		return $this->hasMany('Milestone');
	}
}