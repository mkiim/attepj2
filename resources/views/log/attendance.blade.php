<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <header class="header">
    <h1>Atte</h1>
    <p>ホーム</p>
    <p>日付一覧</p>
    <p>ログアウト</p>
  </header>
  <main class="main">
    <a href="" class="page_btn">＜</a>
    <?php
    print('Y-G-i');
    ?>
    <a href="" class="page_btn">＞</a>
    @section('content')
    <table>
      <tr>
        <th>名前</th>
        <th>勤務開始</th>
        <th>勤務終了</th>
        <th>休憩開始</th>
        <th>休憩終了</th>
      </tr>
      @foreach($items as $item)
      <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->start_time}}</td>
        <td>{{$item->end_time}}</td>
        <td>{{$item->start_time}}</td>
        <td>{{$item->end_time}}</td>
        @endforeach
    </table>
    @endsection
  </main>




  <footer class="footer">
    <small>Atte,inc.</small>
  </footer>
</body>

</html>