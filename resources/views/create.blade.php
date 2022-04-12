<!DOCTYPE html>
<html lang="en">
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
      <div class="contact">
        <form action="{{route('contact.thanks')}}" method="post" class="flex between mb-30">
          @csrf
  <table>
    @foreach($items as $item)
          <tr>
            <th>名前</th>
            <td>
              {{ $item->name }}
            </td>
          </tr>
          <tr>
            <th>年齢</th>
            <td>
              {{ $item->age }}
            </td>
          </tr>
          <tr>
            <th>出身国</th>
            <td>
              {{ $item->nationality }}
            </td>
          </tr>
          <tr>
            <th>作成日</th>
            <td>
              {{ $item->created_at }}
            </td>
          </tr>
          <tr>
            <th>ご意見</th>
            <td>
              {{ $item->content }}
            </td>
          </tr>
      @endforeach
          <button class="button-submit">送信</button>
          <tr>
              <form action="{{ route('contact.delete', ['id' => $item->id]) }}" method="post">
                @csrf
                <button class="button-delete">削除</button>
              </form>
          </tr>

        </table>
      </div>
    </form>
    </div>
  </div>
</body>
</html>