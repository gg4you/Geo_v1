<?php

class PatientController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
            $patients = Patient::all();
            return View::make('patients.index', compact('patients'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
            $departments = Doctor::find_department_list();
            $doctors = DB::table('doctor')
                    ->select('doc_id','name', 'department')
                    ->orderBy('department', 'desc')
                    ->get();
           return View::make('patients.create', compact('doctors'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
            $input = Input::only('name', 'mobile_no', 'email_id');
            $patient = Patient::create($input);
            echo($patient->id);
            echo '<br><br>';
            var_dump($patient);
////            if (!Mail::send('emails.welcome', compact('input'), function($message) use($input){
////                $message->to($input["email_id"], $input["name"])->subject('Welcome mail');
////            })) {
////                echo("Error in sending email");
////                return;
////            }
//            $doc_id = Input::get('doctor');
//            $doctor = Doctor::find_by_id($doc_id);
//            AppointmentController::create($doctor, $patient);
//
            //return Redirect::route('patients.index');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($patient_id)
	{
            $patient = Doctor::find_by_id($doc_id);
            echo "<br><br>";
            print_r ($doctor);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
