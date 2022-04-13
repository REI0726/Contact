<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Management</title>
</head>
<body>
  <table>
  <tr>
    <th>管理画面</th>
  </tr>
  @foreach ($items as $item)
  <tr>
    <td>
      {{$item->getTitle()}}
    </td>
  </tr>
  @endforeach
</table>
@endsection
</body>
</html>