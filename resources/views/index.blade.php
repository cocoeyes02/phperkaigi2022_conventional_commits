<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Todoリスト</title>
</head>
<body>
<h1>Todoリスト</h1>
    <ul>
        @foreach ($todos as $todo)
            <li>{{ $todo->text }}</li>
        @endforeach
    </ul>

    <form method="post" action="{{ route('store') }}">
        @csrf
        <input type="text" name="text">
        <button>追加</button>
    </form>
</body>
</html>
