@extends ('layouts.default')
@section ('main')
    <h1>Adding a new Patient</h1>
    <div class="row">
        <div class="col-sm-5">
            <form action="../patients" method="post">
                <div class="form-group">
                    <label>Name</label>
                    <input class="form-control" type="text" name="name">
                </div>
                <div class="form-group">
                    <label>Mobile Number</label>
                    <input class="form-control" type="text" name="mobile_no">
                </div>
                <div class="form-group">
                    <label>Email id</label>
                    <input class="form-control" type="text" name="email_id">
                </div>
                
                <div class="form-group">
                    <label>Department for Consultation</label>
                    <select class="form-control" name="doctor">
                        @foreach($doctors as $doctor)
                            <option value="{{$doctor->doc_id}}">{{$doctor->department}} - {{$doctor->name}}</option>
                        @endforeach
                    </select>
                </div>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
@stop