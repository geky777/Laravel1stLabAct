<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Webpage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        html, body {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
            font-family: Arial, sans-serif;
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

        .container {
            max-width: 600px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8); 
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
        }

        .head {
            text-align: center;
            margin-bottom: 20px;
        }

        .head h2 {
            font-size: 32px;
            color: #333333;
            margin: 0;
        }

        .head p {
            font-size: 18px;
            color: #555555;
            margin: 5px 0 0;
        }

        .section {
            margin-bottom: 20px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9); 
            border: 1px solid #dcdcdc;
            border-radius: 10px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            position: relative;
            transition: box-shadow 0.3s, transform 0.3s;
        }

        .section:hover {
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            transform: translateY(-5px);
        }

        .section h2 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #000000; 
        }

        .section p {
            font-size: 14px;
            color: #000000; 
        }

        .section .icon {
            position: absolute;
            right: 20px;
            top: 20px;
            font-size: 24px;
            color: #000000;
        }

        a {
            text-decoration: none; 
        }

        a:hover {
            text-decoration: none; 
        }

        .section a:hover {
            color: #000000; 
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

    </style>
</head>
<body>
    <div class="container">
        <h2 class="head">Introduction</h2>
        <p class="head"></p>
           <div class="section">
                <p>&emsp;&emsp;&emsp;Hello and Good Day! My name is Lord Zaro Fiber A. Quintanilla and This is my first time using the laravel web application framework. I wouldn't tell you any personal details or soemthing as to where I live because you can see it on my Cv page.
                    
                </p>
            </div>
            <div class="mt-4 text-center">
            <a href="http://127.0.0.1:8000" class="btn custom-btn">
                <i class="bi bi-house-door-fill"></i> Home
            </a>
        </div>
        </a>

    </div>
</body>
</html>
