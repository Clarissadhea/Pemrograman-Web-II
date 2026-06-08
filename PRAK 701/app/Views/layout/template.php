<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pustaka Buku Coquette</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;1,600&family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #fffafb; 
            background-image: linear-gradient(#fcdce0 1px, transparent 1px), linear-gradient(90deg, #fcdce0 1px, transparent 1px);
            background-size: 25px 25px;
            font-family: 'Poppins', sans-serif;
            color: #5a0a18;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        h1, h2, h3 {
            font-family: 'Playfair Display', serif;
            color: #9c1c30;
            text-align: center;
            margin-bottom: 10px;
        }

        .container {
            width: 90%;
            max-width: 800px;
            margin: 40px auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(156, 28, 48, 0.1);
            border: 2px solid #f2bac5;
        }

        .btn {
            background-color: #f78da7;
            color: white;
            padding: 10px 25px;
            border: none;
            border-radius: 50px;
            font-weight: 500;
            font-family: 'Poppins', sans-serif;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            transition: 0.3s;
            box-shadow: 0 4px 10px rgba(247, 141, 167, 0.4);
        }

        .btn:hover { background-color: #e06c88; transform: translateY(-2px); }
        .btn-danger { background-color: #d9534f; box-shadow: 0 4px 10px rgba(217, 83, 79, 0.4); }
        .btn-danger:hover { background-color: #c9302c; }
        .btn-secondary { background-color: #f2bac5; color: #5a0a18; }
        
        input {
            width: 100%;
            padding: 12px;
            margin: 8px 0 20px;
            border: 2px solid #fcdce0;
            border-radius: 10px;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            background-color: #fffafb;
        }
        
        input:focus { outline: none; border-color: #f78da7; background-color: #fff; }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            border: 2px solid #f2bac5;
        }
        th, td { padding: 15px; text-align: left; border-bottom: 1px solid #fcdce0; }
        th { background-color: #9c1c30; color: white; font-family: 'Playfair Display', serif; font-size: 1.1em;}
        tr:last-child td { border-bottom: none; }

        .alert {
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            text-align: center;
            font-weight: 500;
        }
        .alert-success { background-color: #d4edda; color: #155724; border: 2px solid #c3e6cb; }
        .alert-error { background-color: #f8d7da; color: #721c24; border: 2px solid #f5c6cb; }

        .nav {
            width: 100%;
            background-color: #f78da7;
            padding: 15px 0;
            text-align: center;
            border-bottom: 4px solid #e06c88;
        }
        .nav a { color: white; text-decoration: none; margin: 0 15px; font-weight: 500; font-size: 1.1em;}
    </style>
</head>
<body>
    <?= $this->renderSection('content') ?>
</body>
</html>