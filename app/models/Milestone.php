<?php

class Milestone extends \Eloquent {
	public $primaryKey  = '_id';
	protected $fillable = array('goal_id','milestone_name', 'description', 'notes', 'order', 'is_complete');

	public function goal() {
		return $this->belongsTo('Goal');
	}

}