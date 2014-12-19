@extends ('layouts.default')
@section ('main')
    <h1>All Patients</h1>
    <a href='patients/create'>Add a new patient <br></a>

    @if ($patients->count())
        <table border="1">
            <tr>
                <th>Name</th>
                <th>Mobile Number</th>
                <th>Appointment time</th>
                <th></th>
            </tr>
            @foreach ($patients as $patient)
            <tr>
                <td>{{$patient->name}}</td>
                <td>{{$patient->mobile_no}}</td>
                <td>delete</td>
            </tr>
            @endforeach
        </table>
        </table>

    @endif
@stop