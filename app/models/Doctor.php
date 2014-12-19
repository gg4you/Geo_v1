<?php


class Doctor extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'doctor';
        protected $fillable = array('username', 'name', 'department', 'mobile_no',
                'appointment_duration', 'shift_start', 'shift_end', 'lunch_start', 'lunch_end');
        
        public static function find_by_id($doc_id) {
            return DB::table('doctor')
                    ->where('doc_id', $doc_id)
                    ->first();
        }
        
        public static function doc_shift_start($doc_id){
            return DB::table('doctor')
                    ->select('shift_start')
                    ->where('doc_id', $doc_id)
                    ->get();            
        }
        
        public static function doc_shift_end($doc_id){
            return DB::table('doctor')
                    ->select('shift_end')
                    ->where('doc_id', $doc_id)
                    ->get();                        
        }
        
        public static function doc_lunch_start($doc_id){
            return DB::table('doctor')
                    ->select('lunch_start')
                    ->where('doc_id', $doc_id)
                    ->get();                        
        }

        public static function doc_lunch_end($doc_id) {
            return DB::table('doctor')
                    ->select('lunch_end')
                    ->where('doc_id', $doc_id)
                    ->get();            
        }
        
        public static function find_department_list() {
            return DB::table('doctor')->distinct('department')->lists('department');
        }

}