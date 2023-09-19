<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page d'inscription</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <div class="container">
            <form method="POST" class="appointment-form" id="appointment-form" action="{{route('register')}}">
                <h2>Page d'inscription</h2>
                @csrf
                <div class="form-group-1">
                    <input type="text" name="nom" id="nom" placeholder="Nom" required />
                    <input type="text" name="prenom" id="prenom" placeholder="Prenom" required />
                    <input type="email" name="email" id="email" placeholder="Email" required />
                    <input type="number" name="phone_number" id="phone_number" placeholder="Phone number" required />
                    <input type="password" name="password" id="password" placeholder="Password" required />
                    
                </div>
                
                <div class="form-submit">
                    <input type="submit" name="submit" id="submit" class="submit" value="S'inscrire" />
                </div>
            </form>
            <span>
                    @if(Session::has('status'))
                    {{Session::get ('status')}}
                    @endif
            </span>

        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>