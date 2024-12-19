<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film Details</title>
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
            padding: 20px 40px;
            background-color: rgba(0, 0, 0, 0.7);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.4);
        }

        header h1 {
            font-size: 2em;
            background: linear-gradient(90deg, #fdbb2d, #b21f1f);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            letter-spacing: 2px;
        }

        nav a {
            text-decoration: none;
            color: #fff;
            margin: 0 20px;
            font-size: 1.2em;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        nav a:hover {
            color: #fdbb2d;
            transform: scale(1.1);
        }

        .container {
            margin-top: 50px;
            color: #fff;
            text-align: center;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .title {
            font-size: 2.8em;
            margin-bottom: 30px;
            color: #fdbb2d;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.4);
            font-weight: 700;
        }

        .card {
            background: rgba(0, 0, 0, 0.75);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.5);
            width: 80%;
            max-width: 600px;
            margin: 0 auto;
        }

        .card-header h2 {
            font-size: 2.5em;
            margin-bottom: 20px;
            background: linear-gradient(90deg, #fdbb2d, #b21f1f);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .card-body p {
            font-size: 1.2em;
            line-height: 1.8;
            margin-bottom: 20px;
            font-weight: 500;
        }

        .btn {
            background: linear-gradient(90deg, #ff758c, #fdbb2d);
            border: none;
            color: #fff;
            font-size: 1.2em;
            font-weight: bold;
            padding: 12px 30px;
            border-radius: 50px;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            transition: all 0.4s ease;
            text-transform: uppercase;
        }

        .btn:hover {
            transform: translateY(-5px) scale(1.1);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.5);
        }

        footer {
            text-align: center;
            padding: 15px;
            background-color: rgba(0, 0, 0, 0.7);
            font-size: 1em;
            color: #fdbb2d;
            margin-top: 50px;
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
            <h1 class="title">Film Details</h1>
            <div class="card">
                <div class="card-header">
                    <h2>{{ $film->title }}</h2>
                </div>
                <div class="card-body">
                    <p><strong>Director:</strong> {{ $film->director }}</p>
                    <p><strong>Year:</strong> {{ $film->year }}</p>
                    <a href="{{ route('films.index') }}" class="btn">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
    <p>&copy; 2024 Laravel CRUD. Designed with passion. <a href="#">Learn more</a></p>
</footer>
</body>
</html>
