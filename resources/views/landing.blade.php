<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ivan Martinez</title>
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
            height: 100vh;
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
            text-align: center;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        h2 {
            font-size: 2.5em;
            margin-bottom: 20px;
            animation: fadeIn 2s ease;
        }

        @keyframes fadeIn {
            0% { opacity: 0; transform: translateY(-20px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        /* Estilos para los botones */
        a button {
            background: linear-gradient(90deg, #ff758c, #fdbb2d);
            border: none;
            color: #fff;
            font-size: 1.2em;
            font-weight: bold;
            padding: 15px 40px;
            margin: 10px;
            border-radius: 30px;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            transition: all 0.4s ease;
        }

        a button:hover {
            transform: translateY(-5px) scale(1.1);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.5);
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

            .btn-add-animal {
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

            .btn-add-animal {
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
        <a href="films">Films</a>
        <a href="animals">Animals</a>
    </nav>
</header>

<div class="container">
    <h2>Tria una opció</h2>
    <a href="films"><button>Films</button></a>
    <a href="animals"><button>Animals</button></a>
</div>

<footer>
    <p>&copy; 2024 Laravel CRUD. Designed with passion.</p>
</footer>

</body>
</html>
