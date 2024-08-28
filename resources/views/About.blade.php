<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Media and Gaming Profiles</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
            width: 100%;
            height: 100%;
        }

        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8); /* Slightly transparent white */
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        .section-title {
            margin-top: 30px;
            font-size: 20px;
            color: #555;
            text-align: center;
            border-bottom: 2px solid #ddd;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .list-group-item {
            display: flex;
            align-items: center;
            padding: 15px;
            font-size: 18px;
            transition: background-color 0.3s;
        }

        .list-group-item:hover {
            background-color: #e9ecef;
        }

        .list-group-item i {
            font-size: 24px;
            margin-right: 15px;
            color: #495057;
            transition: color 0.3s;
        }

        .list-group-item a {
            text-decoration: none;
            color: #495057;
            font-weight: 500;
        }

        .list-group-item a:hover {
            color: #007bff;
        }

        .list-group-item i.bi-spotify {
            color: #1DB954; 
        }

        .list-group-item i.bi-instagram {
            color: #C13584; 
        }

        .list-group-item i.bi-facebook {
            color: #1877F2; 
        }

        .list-group-item i.bi-steam {
            color: #00adee; 
        }

        .list-group-item i.bi-controller {
            color: #ff4655; 
        }

        .list-group-item i.bi-currency-dollar {
            color: #28a745; 
        }

        .custom-btn {
            background-color: #28a745; 
            color: white; 
            padding: 12px 24px;
            font-size: 18px; 
            border-radius: 50px; 
            border: 2px solid #28a745; 
            text-transform: uppercase; 
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); 
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4">Welcome to my Profiles!</h2>
        
        <div class="section-title">Social Media Platforms</div>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="https://open.spotify.com/user/22vj4vorgtpxlst33hhcbcxoa" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-spotify"></i> Spotify
                </a>
            </li>
            <li class="list-group-item">
                <a href="https://www.instagram.com/lzfaq.7.11/" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-instagram"></i> Instagram
                </a>
            </li>
            <li class="list-group-item">
                <a href="https://www.facebook.com/zaro.quintanilla" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-facebook"></i> Facebook
                </a>
            </li>
        </ul>

        <div class="section-title">Gaming Platforms</div>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="https://store.steampowered.com" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-steam"></i> Steam Account : Gekyume
                </a>
            </li>
            <li class="list-group-item">
                <a href="https://playvalorant.com" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-controller"></i> Riot Account: plant#71717
                </a>
            </li>
        </ul>

        <div class="section-title">Donate Me!</div>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="https://store.steampowered.com" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-currency-dollar"></i> Support Me
                </a>
            </li>
        </ul>

        <div class="mt-4 text-center">
            <a href="http://127.0.0.1:8000" class="btn custom-btn">
                <i class="bi bi-house-door-fill"></i> Home
            </a>
        </div>
    </div>
</body>
</html>
