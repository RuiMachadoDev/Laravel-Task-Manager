<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de Tarefas</title>
</head>
<body>
    <h1>Lista de Tarefas</h1>

    <form action="/tasks" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Nova tarefa" required>
        <button type="submit">Adicionar</button>
    </form>

    <ul>
        @foreach ($tasks as $task)
            <li>
                {{ $task->title }}
                <form action="/tasks/{{ $task->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
