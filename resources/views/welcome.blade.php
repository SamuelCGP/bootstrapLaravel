<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bootstrap no Laravel</title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <script src="{{ asset('js/jquery.js') }}"></script>
        <script src="{{ asset('js/bootstrap.js') }}"></script>
    </head>
    <body class="container" id="body">
        <div class="row">
            <h1 class="text-center">Utilizando Bootstrap</h1>
            <button class="btn btn-lg btn-success col mx-1" id="verde">Verde</button>
            <button class="btn btn-lg btn-danger col mx-1" id="vermelho">Vermelho</button>
        </div>
        
    </body>
    <script>
        $('#verde').click(function(){
            $('#body').removeClass('bg-danger');
            $('#body').addClass('bg-success');
            $('#verde').fadeOut("slow");
            $('#vermelho').fadeIn("fast");
        });
        $('#vermelho').click(function(){
            $('#body').removeClass('bg-success');
            $('#body').addClass('bg-danger');
            $('#vermelho').fadeOut("slow");
            $('#verde').fadeIn("fast");
        });
    </script>
</html>