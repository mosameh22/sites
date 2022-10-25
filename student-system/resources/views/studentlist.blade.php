<div class="card mb-3">
    <img src="https://o.rada.vn/data/image/2021/08/16/Giao-duc.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">list of students</h5>
      <p class="card-text">you can find here all informations for our students</p>
    </div>
  </div>
<table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">CNE</th>
        <th scope="col">First Name</th>
        <th scope="col">Second Name</th>
        <th scope="col">Age</th>
        <th scope="col">Speciality</th>
        <th scope="col">Operations</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)

      <tr>
        <td>{{$student->cne}}</td>
        <td>{{$student->firstName}} </td>
        <td>{{$student->secondName}}</td>
        <td>{{$student->age}}</td>
        <td>{{$student->speciality}}</td>
        <td>
            {{-- <a href="#" class="btn btn-sm btn-info">show</a> --}}
            <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-sm btn-warning">edit</a>
            {{-- <a href="{{ url('/destroy') }}" class="btn btn-sm btn-danger">delete</a> --}}

        </td>
      </tr>
      @endforeach

    </tbody>
  </table>
