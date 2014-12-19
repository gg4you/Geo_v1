@extends ('layouts.default')
@section ('main')
    <h1>Adding a new Doctor</h1>

    <form action="../doctors" method="post">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Department</td>
                <td><input type="text" name="department"></td>
            </tr>
            <tr>
                <td>Mobile Number</td>
                <td><input type="text" name="mobile_no"></td>
            </tr>
            <tr>
                <td>Appointment Duration(in minutes)</td>
                <td><input type="number" name="appointment_duration"></td>
            </tr>
            <tr>
                <td>Shift start time(hours)</td>
                <td><input type="time" name="shift_start"></td>
            </tr>
            <tr>
                <td>Shift end time (hours)</td>
                <td><input type="time" name="shift_end"></td>
            </tr>
            <tr>
                <td>Lunch start time(hours)</td>
                <td><input type="time" name="lunch_start"></td>
            </tr>
            <tr>
                <td>Lunch end time (hours)</td>
                <td><input type="time" name="lunch_end"></td>
            </tr>
        </table>
        <input type="submit" value="Submit">
    </form>
@stop