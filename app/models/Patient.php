<?php

class Patient extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'patients';
        protected $fillable = array('name', 'mobile_no');
}