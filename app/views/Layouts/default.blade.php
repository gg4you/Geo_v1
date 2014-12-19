
<!doctype html>
<html>
    <head>
        <meta charset="utf-8" content="width=960px">
        {{HTML::style('css/bootstrap.css')}}
        <style> table form { margin-bottom: 0; }
            form ul { margin-left: 0; list-style: none; }
            .error { color: red; font-style: italic; }
            body { padding-top: 20px; }
        </style>
    </head>
    <body>
        <div class="container-fluid" style="float:top; margin-top: -20px">
            @if (Session::has('message'))
                <div class="flash alert">
                    <p>{{ Session::get('message') }}</p>
                </div>
            @endif

            <div class="row header" style="background-color:darkslateblue; height:60px; margin-top: 0px">
                <div class="col-sm-1 col-sm-offset-1" style="color: white">
                    <h2><a href="/" style="color:white">Appointments</a></h2>
                </div>
            </div>

            <br><br><br>

            <div class="row body">
                <div class="col-sm-10 col-sm-offset-1">
                    @yield('main')
                </div>
            </div>

            <br><br><br>
            
            <div class="row footer" style="background-color:gainsboro; height:600px">

            </div>
            
        </div>
    </body>
</html>