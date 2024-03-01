<form action="{{ route('form') }}" method="post" enctype="multipart/form-data">
    @csrf
    <p>Tên file:</p>
    <input type="file" name="image">
    @if(isset($error))
        <p>{{$error}}</p>
    @endif
    @if(isset($array['fileName']))
    <p> tên file {{ $array['fileName'] }}</p>
        <p> tên loại file {{ $array['fileExtension'] }}</p>
    @endif
    <button type="submit">Upload file</button>
</form>
