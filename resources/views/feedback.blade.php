@extends("theme")


@section("content")
        
<body background="http://www.liveinmorestyle.com/images/services/styling.jpg" class="img-thumbnail"  style="height: 100%; background-position: center; background-repeat: no-repeat; background-size: cover;">
    
    <div class="container">
            <div class="row">
                <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">

                </div>
                <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <h1 style="color: white;"><center>Feedback Form</center>
                        
<table class="table">
    <input type="text" class="form-control" placeholder="Enter your Name"><br>
    <input type="email" class="form-control" placeholder="Email"><br>
    <textarea type="text" class="form-control" placeholder="Address"rows="4" cols="50"></textarea><br>
    <input type="text" class="form-control" placeholder="Contact No"><br>
    <input type="text" class="form-control" placeholder="Feedback">
    <br>
    <button class="btn btn-success">Submit</button>
</table>
                    </h1>
                    
                </div>
            </div>
    </div>
</body>    

@endsection