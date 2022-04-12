<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>contact</title>
  <link rel="stylesheet" href="{{asset('/assets/css/reset.css')}}" />
  <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}" />
</head>

<body>
  <div class="container">
    <div class="card">
      <p class="title mb-15">お問い合わせ</p>
      @if (count($errors) > 0)
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
      </ul>
      @endif
      <div class="contact">
        <form action="{{route('contact.create')}}" method="post" class="flex between mb-30">
          @csrf
          <table>
      <tr>
        <th>名前</th>
        <td>
          <input type="text" style="width: 200px; height: 20px;"name="name">
        </td>
      </tr>
      <tr>
        <th>年齢</th>
        <td>
          <input type="text"style="width: 200px; height: 20px;" name="age">
        </td>
      </tr>
      <tr>
        <th>出身地</th>
        <td>
          <input type="text" style="width: 200px; height: 20px;"name="nationality">
        </td>
      </tr>
      <tr>
        <th>ご意見</th>
        <td>
          <input type="text" style="width: 300px; height: 60px;" class="input-add" name="content" />
        </td>
      </tr>
      <tr>
        <th>登録日</th>
        <td>
          <input type="text" name="registered_at">
        </td>
      </tr>
    </table>
      <input class="button-create" type="submit" value="確認画面へ" />
    </form>
    </div>
  </div>
  </div>
</body>

</html>