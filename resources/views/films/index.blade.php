<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Films</title>
    <style>
        /* Reset general */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', Arial, sans-serif;
            background: linear-gradient(135deg, #1a2a6c, #fdbb2d, #b21f1f);
            background-size: 400% 400%;
            animation: gradientBG 8s ease infinite;
            color: #fff;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 30px;
            background-color: rgba(0, 0, 0, 0.6);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.4);
        }

        header h1 {
            font-size: 2em;
            background: linear-gradient(90deg, #fdbb2d, #b21f1f);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        nav a {
            text-decoration: none;
            color: #fff;
            margin: 0 15px;
            font-size: 1.2em;
            transition: all 0.3s ease;
        }

        nav a:hover {
            color: #fdbb2d;
            transform: scale(1.1);
        }

        .container {
            margin-top: 30px;
            color: #fff;
            padding: 0 15px;
            flex: 1;
        }

        .title {
            font-size: 2.5em;
            margin-bottom: 30px;
            text-align: center;
            color: #fdbb2d;
        }

        .btn-add-film {
            display: inline-block;
            padding: 12px 25px;
            margin-bottom: 30px;
            background: linear-gradient(90deg, #ff758c, #fdbb2d);
            color: #fff;
            text-decoration: none;
            border-radius: 30px;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .btn-add-film:hover {
            transform: scale(1.1);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        .styled-table {
            width: 100%;
            border-collapse: collapse;
            background-color: rgba(0, 0, 0, 0.7);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.4);
            border-radius: 10px;
            overflow: hidden;
            margin-top: 20px;
        }

        .styled-table thead tr {
            background: linear-gradient(90deg, #1a2a6c, #b21f1f);
            color: #fff;
            text-align: left;
            font-size: 1.2em;
        }

        .styled-table th, .styled-table td {
            padding: 15px 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .styled-table tbody tr:nth-of-type(even) {
            background-color: rgba(255, 255, 255, 0.05);
        }

        .styled-table tbody tr:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .btn {
            padding: 8px 15px;
            border: none;
            border-radius: 20px;
            color: #fff;
            font-size: 0.9em;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-show {
            background-color: #6c63ff;
        }

        .btn-show:hover {
            background-color: #574bd7;
        }

        .btn-edit {
            background-color: #ff758c;
        }

        .btn-edit:hover {
            background-color: #ff4e50;
        }

        .btn-delete {
            background-color: #e63946;
        }

        .btn-delete:hover {
            background-color: #b42a35;
        }

        .alert {
            padding: 12px 20px;
            border-radius: 5px;
            background: #28a745;
            color: #fff;
            font-weight: bold;
            margin-bottom: 30px;
        }

        footer {
            text-align: center;
            padding: 15px;
            background-color: rgba(0, 0, 0, 0.6);
            font-size: 0.9em;
            color: #fdbb2d;
        }

        footer p {
            font-weight: 600;
        }

        footer a {
            color: #fdbb2d;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        /* Responsiveness */
        @media screen and (max-width: 768px) {
            header h1 {
                font-size: 1.5em;
            }

            nav a {
                font-size: 1em;
                margin: 0 10px;
            }

            .container {
                margin-top: 20px;
            }

            .title {
                font-size: 2em;
                margin-bottom: 20px;
            }

            .btn-add-film {
                padding: 8px 20px;
                font-size: 1em;
                margin-bottom: 20px;
            }

            .styled-table th, .styled-table td {
                font-size: 1em;
                padding: 10px;
            }

            .btn {
                font-size: 0.8em;
                padding: 6px 12px;
            }
        }

        @media screen and (max-width: 480px) {
            .title {
                font-size: 1.5em;
                margin-bottom: 20px;
            }

            .btn-add-film {
                padding: 6px 15px;
                font-size: 0.9em;
            }

            .styled-table th, .styled-table td {
                font-size: 0.9em;
                padding: 8px;
            }

            .btn {
                font-size: 0.8em;
                padding: 5px 10px;
            }
        }
    </style>
</head>
<body>
<header>
    <h1>Laravel CRUD</h1>
    <nav>
        <a href="/">Home</a>
        <a href="/films">Films</a>
        <a href="/animals">Animals</a>
    </nav>
</header>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="title">Films</h1>
            <a href="{{ route('films.create') }}" class="btn-add-film">Add Film</a>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <table class="styled-table">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Director</th>
                    <th>Year</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($films as $film)
                    <tr>
                        <td>{{ $film->title }}</td>
                        <td>{{ $film->director }}</td>
                        <td>{{ $film->year }}</td>
                        <td>
                            <form action="{{ route('films.destroy', $film->id) }}" method="POST">
                                <a class="btn btn-show" href="{{ route('films.show', $film->id) }}">Show</a>
                                <a class="btn btn-edit" href="{{ route('films.edit', $film->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-delete">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<footer>
    <p>&copy; 2024 Laravel CRUD. Designed with passion.</p>
</footer>
</body>
</html>
