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
        <form action="{{ route('contact.submit') }}" method="post" class="flex between mb-30">
          @csrf
  <table>
  
          <tr>
            <th>名前</th>
            <td>
              {{ $item['name'] }}
            </td>
          </tr>
          <tr>
            <th>年齢</th>
            <td>
            {{ $item['age'] }}
            </td>
          </tr>
          <tr>
            <th>出身国</th>
            <td>
              {{ $item['nationality'] }}
            </td>
          </tr>
          <tr>
            <th>作成日</th>
            <td>
              {{ $item['registered_at'] }}
            </td>
          </tr>
          <tr>
            <th>ご意見</th>
            <td>
              {{ $item['content'] }}
            </td>
          </tr>
      </table>
          <button type="submit" class="button-submit">送信</button>

          <a href="javascript:history.back('contact.index');">戻る</a>

        
      </div>
    </form>
    </div>
  </div>
</body>
</html>