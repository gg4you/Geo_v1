@extends ('layouts.default')
@section ('main')
    <h1>All Doctors</h1>
    <a href='doctors/create'>Add a new doctor <br></a>

    @if ($doctors->count())
        <table class="table" border="1">
            <tr>
                <th>Name</th>
                <th>Department</th>
                <th>Charges</th>
                <th>Patient count</th>
                <th>Book Appointment</th>
                <th></th>
            </tr>
            @foreach ($doctors as $doctor)
            <tr>
                <td>{{$doctor->name}}</td>
                <td>{{$doctor->department}}</td>
                <td>$ {{$doctor->charges}}</td>
                <td><a href="doctors/{{$doctor->doc_id}}/edit">edit</a></td>
                <td>
                    <form action="../appointment" method="POST">
                        <input type="hidden" name="doc_id" value="{{$doctor->id}}">
                        <input type="hidden" name="patient_id" value="10">
                        <input type="hidden" name="amount" value="{{$doctor->charges * 100}}">
                        <script
                            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                            data-key="pk_test_sbVDbhvMJs14thVHrwlBPpcV"
                            data-amount="{{$doctor->charges*100}}"
                            data-name="Get Expert Opinion"
                            data-description="Appointment with {{$doctor->name}}"
                            data-image="/128x128.png">
                        </script>
                    </form>
                </td>
                <td>delete</td>
            </tr>
            @endforeach
        </table>
        </table>

    @endif
@stop