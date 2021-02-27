<h1>Upload your file</h1>

<form action="/uploadFile" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="src">
    <button class="btn btn-success" type="submit">Upload</button>
</form>