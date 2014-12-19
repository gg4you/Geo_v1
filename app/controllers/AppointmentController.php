<?php

class AppointmentController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        }


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
            echo "In create";
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store() 
        {
            $doc_id = Input::get('doc_id');
            $patient_id = Input::get('patient_id');
            $amount = Input::get('amount');
            $response = Stripe_Charge::create(
                array(
                    "amount" => $amount,
                    "currency" => "usd",
                    "card" => Input::get('stripeToken'),
                    "description" => "Payment"
                )
            );
        
            if ($response->paid) {
                echo 'Paid';
            } else {
                echo  'Payment failed';
            }
            $status = $response->paid;
            $patient_email = Input::get('stripeEmail');
            $appointment = array(
                "doc_id" => $doc_id,
                "patient_email" => $patient_email,
                "status" => $status
            );
            Appointment::create($appointment);                
        }
        // Set your secret key: remember to change this to your live secret key in production
        // See your keys here https://dashboard.stripe.com/account
//            Stripe::setApiKey("sk_test_dHYI4SUEQ2PRZxIn6y6bPZ1p");
//
//            // Get the credit card details submitted by the form
//            $token = $_POST['stripeToken'];
//
//            // Create the charge on Stripe's servers - this will charge the user's card
//            try {
//                $charge = Stripe_Charge::create(array(
//                        "amount" => 2000, // amount in cents, again
//                        "currency" => "usd",
//                        "card" => $token,
//                        "description" => "payinguser@example.com")
//                        );
//            } catch (Stripe_CardError $e) {
//                echo 'Card declined';
//            // The card has been declined
//            }
//            print_r($charge);
//    }

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
	{	}


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
