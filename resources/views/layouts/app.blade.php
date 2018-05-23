<!DOCTYPE html>
<head>
        <meta charset="utf-8">
        <title>TaskList</title>
</head>

<body>
    {!! link_to_route('tasks.index', 'TaskList') !!}
    
    @yield('content')
</body>