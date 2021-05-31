@extends("theme")


@section("content")
        
<body background="http://www.liveinmorestyle.com/images/services/styling.jpg" class="img-thumbnail"  style="height: 100%; background-position: center; background-repeat: no-repeat; background-size: cover;">
    <div class="container">
            <div class="row">
                <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">

                </div>
                <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <h2 style="color: white;">
                        Sign In
                    </h2>
                    <table class="table table-borderless">
                        <tr>
                            <td><input type="text" class="form-control" placeholder="Username"></td>
                        </tr>
                        <tr>

                            <td><input type="password" class="form-control" placeholder="Password"></td>
                        </tr>
                        <tr>
                           <td> <center><button class="btn btn-success">Login</button></center></td>
                        </tr>
                    </table>
                </div>
            </div>
    </div>
</body>
@endsection