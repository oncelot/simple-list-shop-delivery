<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tutta la Provincia di Trapani a domicilio</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>

    </head>
    <body>
        <div class="container">
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
<form action="inserisci-attivita" method="POST">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    @csrf
    <div class="row" style="margin:auto; text-align:center">
    <a href="/" class="btn btn-primary" value="Home" >Home</a>
   
    <div class="col-md-3"></div>
<div class="col-md-6 col-sm-12"style="margin:auto;text-align:left">
    <label>Nome</label>
<input type="text" placeholder="Nome" name="nome" class="form-control" style="margin-bottom:20px" >
<label>Telefono</label>
<input type="text" placeholder="Telefono" name="telefono" class="form-control" style="margin-bottom:20px" >
<label>Email</label>
<input type="email" placeholder="Email" name="email" class="form-control" style="margin-bottom:20px" >
<label>Sito web</label>
<input type="text" placeholder="Sito Web" name="sitoweb" class="form-control" style="margin-bottom:20px" >

<hr>
<label>Attività</label><br>
<span style="margin:5px;font-weight: bold; display: inline-block;" ><input type="checkbox" value="Farmacia" name="attivita[]"> Farmacia</span>
<span style="margin:5px;font-weight: bold; display: inline-block;"><input type="checkbox" value="Supermercato" name="attivita[]"> Supermercato</span>
<span style="margin:5px;font-weight: bold; display: inline-block;"> <input type="checkbox" value="Frutta e Verdura" name="attivita[]">Frutta e Verdura</span>
<span style="margin:5px;font-weight: bold; display: inline-block;"><input type="checkbox" value="Panificio" name="attivita[]">Panificio</span>
<span style="margin:5px;font-weight: bold; display: inline-block;"><input type="checkbox" value="Generi Alimentari" name="attivita[]">Generi Alimentari</span>
<span style="margin:5px;font-weight: bold; display: inline-block;"><input type="checkbox" value="Macellerie" name="attivita[]">Macellerie</span>
<span style="margin:5px;font-weight: bold; display: inline-block;"><input type="checkbox" value="Pizzerie" name="attivita[]">Pizzerie</span>
<span style="margin:5px;font-weight: bold; display: inline-block;"><input type="checkbox" value="Rosticcerie e Tavola Calda" name="attivita[]">Rosticcerie e Tavola Calda</span>
<span style="margin:5px;font-weight: bold; display: inline-block;"><input type="checkbox" value="Ristorante" name="attivita[]">Ristorante</span>
<span style="margin:5px;font-weight: bold; display: inline-block;"><input type="checkbox" value="Pasticceria" name="attivita[]">Pasticceria</span>
<span style="margin:5px;font-weight: bold; display: inline-block;"><input type="checkbox" value="Igene Persona / casa" name="attivita[]">Igene Persona / casa</span>
<span style="margin:5px;font-weight: bold; display: inline-block;"><input type="checkbox" value="Gas Bombola" name="attivita[]">Gas Bombola</span>
<span style="margin:5px;font-weight: bold; display: inline-block;"><input type="checkbox" value="Informatica" name="attivita[]">Informatica</span>
<span style="margin:5px;font-weight: bold; display: inline-block;"><input type="checkbox" value="Prodotti per Animali" name="attivita[]">Prodotti per Animali</span>


<hr>
<strong>Citta di consegna</strong><br>


    <span style="margin:5px;font-weight: bold; display: inline-block;" ><input type="checkbox" value="Alcamo" name="cittaAttvita[]"> Alcamo</span>
    <span style="margin:5px;font-weight: bold; display: inline-block;"><input type="checkbox" value="Buseto Palizzolo" name="cittaAttvita[]" > Buseto Palizzolo</span>
    <span style="margin:5px;font-weight: bold; display: inline-block;"> <input type="checkbox" value="Calatafimi Segesta"name="cittaAttvita[]" >Calatafimi Segesta</span>
    <span style="margin:5px;font-weight: bold; display: inline-block;"><input type="checkbox" value="Campobello di Mazara" name="cittaAttvita[]" >Campobello di Mazara</span>
    <span style="margin:5px;font-weight: bold; display: inline-block;"><input type="checkbox" value="Castellammare del Golfo" name="cittaAttvita[]" >Castellammare del Golfo</span>
    <span style="margin:5px;font-weight: bold; display: inline-block;"><input type="checkbox" value="Castelvetrano" name="cittaAttvita[]" >Castelvetrano</span>
    <span style="margin:5px;font-weight: bold; display: inline-block;"><input type="checkbox" value="Custonaci" name="cittaAttvita[]" >Custonaci</span>
    <span style="margin:5px;font-weight: bold; display: inline-block;"><input type="checkbox" value="Erice" name="cittaAttvita[]" >Erice</span>
    <span style="margin:5px;font-weight: bold; display: inline-block;"><input type="checkbox" value="Favignana" name="cittaAttvita[]" >Favignana</span>
    <span style="margin:5px;font-weight: bold; display: inline-block;"> <input type="checkbox" value="Gibellina" name="cittaAttvita[]" >Gibellina</span>
    <span style="margin:5px;font-weight: bold; display: inline-block;"><input type="checkbox" value="Marsala"name="cittaAttvita[]">Marsala</span>
    <span style="margin:5px;font-weight: bold; display: inline-block;"><input type="checkbox" value="Mazara del Vallo"name="cittaAttvita[]">Mazara del Vallo</span>
    <span style="margin:5px;font-weight: bold; display: inline-block;"> <input type="checkbox" value="Paceco"name="cittaAttvita[]">Paceco</span>
    <span style="margin:5px;font-weight: bold; display: inline-block;"> <input type="checkbox" value="Pantelleria"name="cittaAttvita[]">Pantelleria</span>
    <span style="margin:5px;font-weight: bold; display: inline-block;"><input type="checkbox" value="Partanna"name="cittaAttvita[]">Partanna</span>
    <span style="margin:5px;font-weight: bold; display: inline-block;"><input type="checkbox" value="Petrosino"name="cittaAttvita[]">Petrosino</span>
    <span style="margin:5px;font-weight: bold;display: inline-block;"> <input type="checkbox" value="Poggioreale"name="cittaAttvita[]">Poggioreale</span>
    <span style="margin:5px;font-weight: bold; display: inline-block;"> <input type="checkbox" value="Salaparuta"name="cittaAttvita[]">Salaparuta</span>
    <span style="margin:5px;font-weight: bold; display: inline-block;"> <input type="checkbox" value="Salemi" name="cittaAttvita[]">Salemi</span>
    <span style="margin:5px;font-weight: bold; display: inline-block;"> <input type="checkbox" value="San Vito Lo Capo"name="cittaAttvita[]">San Vito Lo Capo</span>
    <span style="margin:5px;font-weight: bold; display: inline-block;"> <input type="checkbox" value="Santa Ninfa"name="cittaAttvita[]">Santa Ninfa</span>
    <span style="margin:5px;font-weight: bold; display: inline-block;"> <input type="checkbox" value="Trapani"name="cittaAttvita[]">Trapani</span>
    <span style="margin:5px;font-weight: bold; display: inline-block;"><input type="checkbox" value="Valderice"name="cittaAttvita[]">Valderice</span>
    <span style="margin:5px;font-weight: bold; display: inline-block;"> <input type="checkbox" value="Vita"name="cittaAttvita[]">Vita</span>

<br>
<label>Note</label><br>
<textarea style="width:100%" name="note"></textarea>

<input type="submit" value="Registra Nuova Attività" class="btn btn-primary" style="margin-top:20px">
</div>
<div class="col-md-3"></div>

</div>
</form>
        </div>
	

    </body>
    </html>
