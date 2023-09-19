<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Formulaire d'ajout de car</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="css/roboto-font.css">
    <link rel="stylesheet" type="text/css" href="fonts/line-awesome/css/line-awesome.min.css">
    <!-- Jquery -->
    <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="css/style3.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body class="form-v2">
    <div class="page-content">
        <div class="form-v2-content">
            <form class="form-detail" action="{{ route('traiterFormulaire')}}" method="post" >
                <h2>Ajouter un car</h2>
                @csrf
                <div class="form-row">
                    <select class="form-select" name="compagny_id" aria-label="Default select example">
                        @foreach($compagnies as $compagny)
                        <option value="{{ $compagny->id }}">{{ $compagny->name }}</option>
                        @endforeach
                    </select> 
                </div>
                <div class="form-row">
                    <input type="file" name="image" id="image" placeholder="Image" class="input-text" required />
                </div>

                <div class="form-row">
                    <input type="text" name="trajet" id="trajet" placeholder="Trajet" class="input-text" required />
                </div>
                <div class="form-row">
                    <input type="text" name="periode" id="periode" placeholder="Periode" class="input-text" required />
                </div>
                <div class="form-row">
                    <input type="number" name="place_dispo" id="place_dispo" placeholder="Place Disponiple" class="input-text" required />
                </div>
                <div class="form-row">
                    <input type="text" name="prix" id="prix" placeholder="Prix" required />
                </div><br>
                <div class="form-row">
                <select class="form-select" name="horaire_id" aria-label="Default select example">
                        @foreach($horaires as $horaire)
                        <option value="{{ $horaire->id }}" >{{ $horaire->heureDepart }}</option>
                        @endforeach
                    </select>

                </div>
                <div class="form-row-last">
                    <a href=""><button type="submit"  class="register">Ajouter</button></a>
                </div>
                <span>
                    @if(Session::has('status'))
                    {{Session::get ('status')}}
                    @endif
                    </span>
            </form>
        </div>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script>
        // just for the demos, avoids form submit
        jQuery.validator.setDefaults({
            debug: true,
            success: function(label) {
                label.attr('id', 'valid');
            },
        });
        $("#myform").validate({
            rules: {
                password: "required",
                confirm_password: {
                    equalTo: "#password"
                }
            },
            messages: {
                full_name: {
                    required: "Please provide an username"
                },
                your_email: {
                    required: "Please provide an email"
                },
                password: {
                    required: "Please provide a password"
                },
                confirm_password: {
                    required: "Please provide a password",
                    equalTo: "Wrong Password"
                }
            }
        });
    </script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>