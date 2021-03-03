<h1>Update a file</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Img</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
    @foreach ($DB as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td><img height="50px" src="{{asset('storage/'.$item->src)}}" alt=""></td>
            <td>
                <a class="btn btn-info" href="/editImg/{{$item->id}}">Edit</a>
            </td>
            <td>
                <a class="btn btn-danger" href="/delete/{{$item->id}}">Delete</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>