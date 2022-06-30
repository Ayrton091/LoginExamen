<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&family=Lobster&family=Nunito:wght@700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/estilosindex.css') }}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fontawesome-iconpicker/3.2.0/css/fontawesome-iconpicker.css



    " crossorigin="anonymous"></script>
    <title>Sign in</title>
</head>
<body>
    
    <div class="container">
        <div class="vectordesign">
            <h1>Background</h1>
            <h2>Vector Design <br> eps.10</h2>
        </div>
        
        <div class="datos">
            <div class="logouser">
                <img src="{{ asset('css/iconuser.png') }}" alt="mi foto">
            </div>
            <form method="post">
                @csrf
                <div class="emailin">
                    <input type="email" name="email" placeholder="Username">
                </div>
                <div class="passwordin">
                    <input type="password" name="password" placeholder="Password"> 
                </div>
                <div class="rememberme">Remember me<input type="checkbox"></div>
                <div class="button">
                    <button type="submit">Login</button>
                </div>
                
                
                
            </form>
        </div>
    </div>
</body>
</html>