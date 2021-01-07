<div class="card mb-3">
    <img src="https://cdn.pixabay.com/photo/2015/05/19/14/55/educational-773651_960_720.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">List Of Students</h5>
      <p>you can find all the list of students here</p>
    
<table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">CNE</th>
        <th scope="col">First name</th>
        <th scope="col">Last name</th>
        <th scope="col">age</th>
        <th scope="col">Speciality</th>
        <th scope="col">Operations</th>
      </tr>
    </thead>
    <tbody>
        @foreach($students as $student)
      <tr>
        <td>{{$student->cne}}</td>
        <td>{{$student->firstName}}</td>
        <td>{{$student->secondName}}</td>
        <td>{{$student->age}}</td>
        <td>{{$student->speciality}}</td>
        <td>
            {{-- <a href="" class="btn btn-sm btn-info">show</a> --}}
            <a href="{{url('/edit/'.$student->id)}}"  class="btn btn-sm btn-warning">edit</a>
        <a href="{{url('/delete/'.$student->id)}}"  class="btn btn-sm btn-danger">delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</div>