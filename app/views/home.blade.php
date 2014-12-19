@extends ('layouts.default')
@section ('main')

<div>
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1" style="padding: 0"><small>Book an appointment by:</small></div>
    </div>
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1" style="background-color: gainsboro; height: 100px">
            <table style="width: 100%; height: 100%">
                <tr><td>
                    <div>
                        <a href="patients/create" class="btn btn-primary col-md-2 col-md-offset-1">Add new patient</a>
                        <a href="doctors" class="btn btn-default col-md-2">Departments</a>
                        <a href="doctors" class="btn btn-default col-md-2">Doctors List</a>
                        <a href="doctors" class="btn btn-default col-md-2">Patient details</a>
                        <a href="doctors" class="btn btn-default col-md-2">Add a new doctor</a>
                    </div>
            </td></tr>
            </table>
        </div>
    </div>
</div>

@stop