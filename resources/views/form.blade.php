
<html>

@isset($toplam) {{$toplam}} @endisset
<form action="{{url('/form')}}" method="post">
    {{csrf_field()}}
    <input type="text" name="say1">
    <input type="text" name="say2">
    <button type="submit">Gönder!</button>
</form>

</html>