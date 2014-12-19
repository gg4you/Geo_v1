@extends ('layouts.user')
@section ('main')
    <h1>Create a new registration</h1>

    <p>Please enter patient details <br></p>
    <form action="../registrations" method="post">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Mobile Number</td>
                <td><input type="text" name="mobile_no"></td>
            </tr>
            <tr>
                <td>Select a department</td>
                <td>
                    <select name="department">
                        @foreach ($departments as $department)
                            <option value="{{$department}}">{{$department}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
        </table>
        <input type="submit" value="Submit">
    </form>

@stop