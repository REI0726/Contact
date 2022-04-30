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
  
  <form>
    
      <table>
          <tr>
            <th>名前</th>
            <th>年齢</th>
            <th>出身地</th>
            <th>ご意見</th>
          </tr>
          @foreach($items as $item)
          <tr>
@csrf
            <td>
              {{ $item['name'] }}
            </td>
            <td>
            {{ $item['age'] }}
            </td>
            <td>
              {{ $item['nationality'] }}
            </td>
            <td>
              {{ $item['content'] }}
            </td>
            <td>
              {{ $item['registered_at'] }}
            </td>
          </tr>
         
  @endforeach
</table>

</body>
</html>