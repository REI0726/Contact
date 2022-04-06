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
              <form action="{{ route('contact.submit', ['id' => $item->id]) }}" method="post">
              @csrf
                <td>
                  <input type="text" class="input-submit" value="{{ $item->content }}" name="content" />
                </td>
                </form>
                <td>
                <button class="button-submit">送信</button>
              </td>
          </tr>
          <tr>
              <form action="{{ route('contact.delete', ['id' => $item->id]) }}" method="post">
                @csrf
                <button class="button-delete">削除</button>
              </form>
          </tr>

          @endforeach
        </table>
</body>
</html>