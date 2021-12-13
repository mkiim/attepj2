<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<body>
  <header class="header">
    <h1>Atte</h1>
    <nav class="nav">
    <a href="">ホーム</a>
    <a href="">日付一覧</a>
    <a href="">ログアウト</a>
    </nav>
  </header>
  <main class="main">
    @section('content')
    <form action="/work/find" method="post">
      <h1>{{$name}}さんお疲れ様です！</h1>
        <button class="start">勤務開始</button>
        <button class="stop">勤務終了</button>
        <button class="break_start">休憩開始</button>
        <button class="break_stop">休憩終了</button>
    </form>
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