</head>
<body>
    <h1>Users:</h1>
    <ul>
    @foreach ($listUsers as $user)
        <li>{{$user->name}}</li>
    @endforeach
    </ul>
    <table>
        @if ($listUsers->count() > 0)
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($listUsers as $user)
                        <tr>
                            <td>
                                {{ $user->id }}
                            </td>
                            <td>{{ $user->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Produtos não encontrados! </p>
        @endif
</body>
</html>
