<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Management</title>
</head>
<body>
  @if (count($errors) > 0)
<ul>
  @foreach ($errors->all() as $error)
  <li>
    {{$error}}
  </li>
  @endforeach
</ul>
@endif
<form action="/management/add" method="post">
  <table>
    @csrf
    <tr>
      <th>contact_id:</th>
      <td><input type="number" name="contact_id"></td>
    </tr>
    <tr>
      <th>age:</th>
      <td><input type="number" name="age"></td>
    </tr>
    <tr>
      <th>nationality:</th>
      <td><input type="text" name="nationality"></td>
    </tr>
    <tr>
      <th>comment:</th>
      <td><input type="text" name="comment"></td>
    </tr>
  </table>
  <button>送信</button>
</form>
@endsection
</body>
</html>
