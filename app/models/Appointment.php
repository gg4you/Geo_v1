<?php

class Appointment extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'appointments';
        protected $fillable = array('patient_email', 'doc_id', 'status', 'token_no',
                'appointment_time');
        
        public static function find_last_slot($doc_id) {
            return DB::table('appointments')
                    ->select('appointment_time')
                    ->where('doc_id', $doc_id)
                    ->orderBy('appointment_time', 'desc')
                    ->first();
        }
}