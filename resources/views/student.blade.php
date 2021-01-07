<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <title>Student Management system</title>
  </head>
  <style>
      @import url('https://fonts.googleapis.com/css?family=Dancing+Script&display=swap');
.header {
    border-bottom: 2px solid #00c9b7;
    margin-top: 20px !important;
    margin-bottom: 20px !important;
    font-family: 'Dancing Script', cursive;
    font-size: 20px !important;
}
.header-container {
    margin-right: 0px !important;
    margin-left: 0px !important;
}
.header-container > h2 {

}
.bg-light {

    background: #00c9b7 !important;
    -webkit-box-shadow: 5px 9px 43px 1px rgba(0,0,0,0.18); 
	box-shadow: 5px 9px 43px 1px rgba(0,0,0,0.18);
    position: sticky;
    top: 0px;
    z-index: 10;
}
.bg-light > a {
    color: #fff !important;
}
.navbar-nav > a {
    color: #fff !important;
}
.navbar-nav > a:hover {
    text-decoration: underline;
}
img {
    height: 400px;
    vertical-align: middle;
    border-style: none;
}
body {
    background : #eee ;
}
.card {
    border : none !important;
    border-bottom: 3px solid #00c9b7 !important;
}
input[type=text] {

    background : #eee ;
    border: none !important;
    box-shadow: 0px 1px 1px #ddd !important;
    autocomplete: off;
}
input[type=text]:focus{
    background : #eee ;
    border: none !important;
    box-shadow: 0px 4px 5px #ccc !important;
}
.thead-light {

}
.table .thead-light th {
    color : #fff !important;
    background: #00c9b7 !important;
    border: none !important;
}
footer {
    height: 10px;
    width: 100%;
    margin-top: 60px;
    background:#00c9b7 ;
}
    </style>
  <body>
    @include('navbr')
    <div class="row header-container justify-content-center">
        <div class="header">
            <h1>Student Management System<h1>
        </div>
    </div>

    @if($layout == 'index')
    <div class="container-fluid">
        <div class="row">
            <section class="col" >
                @include('studentlist')
                
            </section>
            <section class="col"></section>
         </div>
    </div>
    @elseif($layout == 'create')
    <div class="container-fluid">
        <div class="row">
            <section class="col">
                @include('studentlist')
            </section>
            <section class="col">
                <div class=" mb-3 card">
                    <img src="https://marketplace.canva.com/MAB7yqsko0c/1/screen_2x/canva-smart-little-schoolgirl--MAB7yqsko0c.jpg" class="card-img-top" alt="...">             
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                 
            <form action="{{ url('/store')}}" method="POST" class="my-4">
                @csrf
                <h1>Create</h1>
                    <div class="form-group">
                      <label>CNE</label>
                      <input name="cne" type="text" class="form-control" placeholder="Enter your CNE">
                    </div>
                    <div class="form-group">
                        <label>Firstname</label>
                        <input name="firstName" type="text" class="form-control" placeholder="Enter your First Name">
                      </div>
                      <div class="form-group">
                        <label>Last Namr</label>
                        <input name="secondName" type="text" class="form-control" placeholder="Enter your Last Name">
                      </div>
                      <div class="form-group">
                        <label>Age</label>
                        <input name="age" type="text" class="form-control" placeholder="Enter your age">
                      </div>
                      <div class="form-group">
                        <label>Speciality</label>
                        <input name="speciality" type="text" class="form-control" placeholder="Enter your Speciality">
                      </div>
                      <input type="submit" class="btn btn-info" value="Save">
                      <input type="reset" class="btn btn-warning" value="Reset">
                  </form>
                </div>
            </div>
            </section>
         </div>
    </div>

    @elseif($layout == 'show')
    <div class="container-fluid">
        <div class="row">
            <section class="col">
                @include('studentlist')
            </section>
            <section class="col"></section>
         </div>
    </div>

    @elseif($layout == 'edit')
    <div class="container-fluid">
        <div class="row">
            <section class="col">
                @include('studentlist')
            </section>
            <section class="col-md-5">
                <div class="card mb-3">
                    <img src="https://marketplace.canva.com/MAB7yqsko0c/1/screen_2x/canva-smart-little-schoolgirl--MAB7yqsko0c.jpg" class="card-img-top" alt="...">   
                    <div class="card-body">
                      <h5 class="card-title">Update Information of Student</h5>
                <form action="{{ url('/update/'.$student->id)}}" method="POST" class="my-4">
                    @csrf
                    <h1 class="">Edit</h1>
                        <div class="form-group">
                          <label>CNE</label>
                        <input value="{{$student->cne}}" name="cne" type="text" class="form-control" placeholder="Enter your CNE">
                        </div>
                        <div class="form-group">
                            <label>Firstname</label>
                            <input value="{{$student->firstName}}" name="firstName" type="text" class="form-control" placeholder="Enter your First Name">
                          </div>
                          <div class="form-group">
                            <label>Last Name</label>
                            <input value="{{$student->secondName}}" name="secondName" type="text" class="form-control" placeholder="Enter your Last Name">
                          </div>
                          <div class="form-group">
                            <label>Age</label>
                            <input value="{{$student->age}}" name="age" type="text" class="form-control" placeholder="Enter your age">
                          </div>
                          <div class="form-group">
                            <label>Speciality</label>
                            <input value="{{$student->speciality}}" name="speciality" type="text" class="form-control" placeholder="Enter your Speciality">
                          </div>
                          <input type="submit" class="btn btn-info" value="Save">
                          <input type="reset" class="btn btn-warning" value="Reset">
                      </form>
                    </div>
                </div>
            </section>
         </div>
    </div>
    @endif
    <footer></footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>