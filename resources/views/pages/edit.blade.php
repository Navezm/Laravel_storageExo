<h1>Update an img</h1>
<img height="150px" src="{{asset('storage/'.$show->src)}}" alt="">
<form action="/uploadFile/{{$show->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="src">
    <button class="btn btn-success" type="submit">Upload</button>
</form>