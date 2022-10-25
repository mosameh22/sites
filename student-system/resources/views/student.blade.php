<!doctype html>
<html lang="en">
  <head>
    <title>Student Management System</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    @include('navbar');
@if($layout == 'index')

<div class="container-fluid">
    <div class="row">
<section class="col">
    @include("studentlist");
</section>
<section class="col">

</section>
</div>
</div>
@elseif ($layout == 'create')
<div class="container-fluid">
    <div class="row">
<section class="col">
    @include("studentlist");
</section>
<section class="col md-5">
    <h2>create informations</h2>
    <div class="card mb-3">
        <img src="https://www.hp.com/us-en/shop/app/assets/images/uploads/prod/how-to-pick-computers-for-classrooms-hero1559012942226.jpg" class="card-img-top" alt="...">
        <div class="card-body">
        </div>
      </div>

    <form method="post" action="{{url('/store')}}">
        @csrf
        <div class="form-group">
          <label> CNE</label>
          <input  name="cne" type="text" class="form-control" id="cne" placeholder="Enter your cne">
        </div>
        <div class="form-group">
            <label>  First Name</label>
            <input  name="firstName" type="text" class="form-control" id="firstName" placeholder="Enter firstName">
          </div>
          <div class="form-group">
            <label>  Second Name</label>
            <input  name="secondName" type="text" class="form-control" id="secondName" placeholder="Enter firstName">
          </div>
          <div class="form-group">
            <label> Age </label>
            <input  name="age" type="number " class="form-control" id="age" placeholder="Enter age">
          </div>
          <div class="form-group">
            <label>  Specilaity</label>
            <input  name="speciality" type="text" class="form-control" id="speciality" placeholder="Enter speciality">
          </div>
          <input type="submit" class="btn btn-info" value="save">
          <input type="submit" class="btn btn-warning" value="reset">

      </form>
</section>
</div>
</div>
    @elseif ($layout == 'show')
    <div class="container-fluid">
        <div class="row">
    <section class="col">
        @include("studentlist");
    </section>
    <section class="col">
    </section>
    </div>
    </div>
        @elseif($layout == 'edit')
        <div class="container-fluid">
            <div class="row">
        <section class="col">
            @include("studentlist");
        </section>
        <section class="col">
            <div class="card mb-3">
                <img src="https://content.gallup.com/origin/gallupinc/GallupSpaces/Production/Cms/POLL/eyjujb_t_ey_5oi2dccyea.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Edit informations of students</h5>

                </div>
              </div>

            <form  action ="{{ url('/update/'. $student->id) }}" method="post">
                @csrf
                <div class="form-group">
                  <label> CNE</label>
                  <input  name="cne"  value="{{$student->cne}}" type="text" class="form-control" id="cne" placeholder="Enter your cne">
                </div>
                <div class="form-group">
                    <label>  First Name</label>
                    <input  name="firstName" value="{{$student->firstName}}" type="text" class="form-control" id="firstName" placeholder="Enter firstName">
                  </div>
                  <div class="form-group">
                    <label>  Second Name</label>
                    <input  name="secondName" value="{{$student->secondName}}" type="text" class="form-control" id="secondName" placeholder="Enter firstName">
                  </div>
                  <div class="form-group">
                    <label> Age </label>
                    <input  name="age" type="number"  value="{{$student->age}}" class="form-control" id="age" placeholder="Enter age">
                  </div>
                  <div class="form-group">
                    <label>  Specilaity</label>
                    <input  name="speciality"  value="{{$student->speciality}}" type="text" class="form-control" id="speciality" placeholder="Enter speciality">
                  </div>
                  <input type="submit" class="btn btn-info" value="update">
                  <input type="submit" class="btn btn-warning" value="reset">

              </form>
        </section>
        </div>
        </div>
@endif




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
