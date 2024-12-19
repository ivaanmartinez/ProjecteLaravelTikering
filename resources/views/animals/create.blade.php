<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Animal</title>
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
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.6);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.4);
        }

        header h1 {
            font-size: 1.8em;
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

        footer {
            text-align: center;
            padding: 10px;
            background-color: rgba(0, 0, 0, 0.6);
            font-size: 0.9em;
            color: #fdbb2d;
        }

        .container {
            margin: 50px auto;
            padding: 20px;
            background: rgba(0, 0, 0, 0.6);
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
            width: 80%;
            max-width: 600px;
        }

        h1 {
            text-align: center;
            font-size: 2em;
            margin-bottom: 20px;
            background: linear-gradient(90deg, #fdbb2d, #b21f1f);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-size: 1.1em;
            margin-bottom: 5px;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            font-size: 1em;
            color: #333;
        }

        .btn-primary {
            background: linear-gradient(90deg, #ff758c, #fdbb2d);
            color: #fff;
            font-size: 1.2em;
            padding: 10px 20px;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            transition: all 0.4s ease;
            display: block;
            margin: 0 auto;
        }

        .btn-primary:hover {
            transform: translateY(-5px) scale(1.1);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.5);
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
        <div class="col-md-8 offset-md-2">
            <h1>Add Animal</h1>
            <form action="{{ route('animals.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="especie">Especie</label>
                    <input type="text" name="especie" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="pais">Pais</label>
                    <input type="text" name="pais" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="poblacio">Poblacio</label>
                    <input type="number" name="poblacio" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="amenaca">Amenaca</label>
                    <input type="text" name="amenaca" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="estat">Estat</label>
                    <input type="text" name="estat" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">Add Animal</button>
            </form>
        </div>
    </div>
</div>

<footer>
    <p>&copy; 2024 Laravel CRUD. Designed with passion.</p>
</footer>
</body>
</html>
