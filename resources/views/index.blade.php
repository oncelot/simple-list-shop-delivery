<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:title" content="Tutta la Provincia di Trapani a domicilio">
		<meta property="og:url" content="http://nonsolotrapanidomicilio.it">
		<meta property="og:type" content="website">
		<meta property="og:image" content="http://nonsolotrapanidomicilio.it/image_social.jpg">
        <meta property="og:description" content="Alcamo	 a	 domicilio   Buseto Palizzolo	 a	 domicilio        Calatafimi Segesta	 a	 domicilio        Campobello di Mazara	 a	 domicilio        Castellammare del Golfo	 a	 domicilio        Castelvetrano	 a	 domicilio        Custonaci	 a	 domicilio        Erice	 a	 domicilio        Favignana	 a	 domicilio        Gibellina	 a	 domicilio        Marsala	 a	 domicilio        Mazara del Vallo	 a	 domicilio        Paceco	 a	 domicilio        Pantelleria	 a	 domicilio        Partanna	 a	 domicilio        Petrosino	 a	 domicilio        Poggioreale	 a	 domicilio        Salaparuta	 a	 domicilio        Salemi	 a	 domicilio        San Vito Lo Capo	 a	 domicilio        Santa Ninfa	 a	 domicilio        Trapani	 a	 domicilio        Valderice	 a	 domicilio        Vita	 a	 domicilio   ">
        
        <title>Tutta la Provincia di Trapani a domicilio</title>
        <meta name=”description” content="Alcamo	 a	 domicilio
        Buseto Palizzolo	 a	 domicilio
        Calatafimi Segesta	 a	 domicilio
        Campobello di Mazara	 a	 domicilio
        Castellammare del Golfo	 a	 domicilio
        Castelvetrano	 a	 domicilio
        Custonaci	 a	 domicilio
        Erice	 a	 domicilio
        Favignana	 a	 domicilio
        Gibellina	 a	 domicilio
        Marsala	 a	 domicilio
        Mazara del Vallo	 a	 domicilio
        Paceco	 a	 domicilio
        Pantelleria	 a	 domicilio
        Partanna	 a	 domicilio
        Petrosino	 a	 domicilio
        Poggioreale	 a	 domicilio
        Salaparuta	 a	 domicilio
        Salemi	 a	 domicilio
        San Vito Lo Capo	 a	 domicilio
        Santa Ninfa	 a	 domicilio
        Trapani	 a	 domicilio
        Valderice	 a	 domicilio
        Vita	 a	 domicilio">

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
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<style>
.customcard{background:#f1f3f7;border: solid #bec8d4;  margin:10px;}




</style>
    </head>
    <body>
        <div class="container" id="app">

        <div class="row" style="text-align:center">
            <a type="button" class="btn btn-primary"  href="nuova-attivita">+ Aggiungi Attività</a>
        <h4 style="border: 1px solid;">NONSOLOTRAPANIDOMICILIO.IT</h4>
        <h2><img src="image.jpg" width="50px">Trapani e Dintorni a Domicilio</h2>

            <input type="text" class="form-control" placeholder="Cerca" v-model="cerca">

            <div class="col-md-12 col-sm-12" style="text-align:center; padding-top:10px" >
                <h4>Attività</h4>
                <input type="button" value="Tutti" v-on:click="tipo  = 'all'" class="btn btn-secondary" style="margin:1px;"  v-bind:class="{ active: tipo ==='all'}" >
                <input type="button" value="Farmacia" v-on:click="tipo  = 'Farmacia'"  style="margin:1px;" class="btn btn-secondary" v-bind:class="{ active: tipo ==='Farmacia'}">
                <input type="button" value="supermercato" v-on:click="tipo  = 'Supermercato'"  style="margin:1px;"  class="btn btn-secondary" v-bind:class="{ active: tipo ==='Supermercato'}">
                <input type="button" value="Frutta e Verdura" v-on:click="tipo  = 'Frutta e Verdura'"  style="margin:1px;"  class="btn btn-secondary" v-bind:class="{ active: tipo ==='Frutta e Verdura'}">
                <input type="button" value="Panificio" v-on:click="tipo  = 'Panificio'"   style="margin:1px;" class="btn btn-secondary" v-bind:class="{ active: tipo ==='Panificio'}">
                <input type="button" value="Generi Alimentari" v-on:click="tipo  = 'Generi Alimentari'"  style="margin:1px;"  class="btn btn-secondary" v-bind:class="{ active: tipo ==='Generi Alimentari'}">
                <input type="button" value="Macellerie" v-on:click="tipo  = 'Macellerie'" style="margin:1px;"   class="btn btn-secondary" v-bind:class="{ active: tipo ==='Macellerie'}">
                <input type="button" value="Pizzerie" v-on:click="tipo  = 'Pizzerie'"  style="margin:1px;"  class="btn btn-secondary" v-bind:class="{ active: tipo ==='Pizzerie'}">
                <input type="button" value="Rosticcerie e Tavola Calda" v-on:click="tipo  = 'Rosticcerie e Tavola Calda'"  style="margin:1px;"  class="btn btn-secondary" v-bind:class="{ active: tipo ==='Rosticcerie e Tavola Calda'}">
                <input type="button" value="Ristorante" v-on:click="tipo  = 'Ristorante'"  style="margin:1px;"  class="btn btn-secondary" v-bind:class="{ active: tipo ==='Ristorante'}">
                <input type="button" value="Pasticceria" v-on:click="tipo  = 'Pasticceria'"  style="margin:1px;"  class="btn btn-secondary" v-bind:class="{ active: tipo ==='Pasticceria'}">
                <input type="button" value="Igene Persona / casa" v-on:click="tipo  = 'Igene Persona / casa'"  style="margin:1px;"  class="btn btn-secondary" v-bind:class="{ active: tipo ==='Igene Persona / casa'}">
                <input type="button" value="Gas Bombola" v-on:click="tipo  = 'Gas Bombola'"  style="margin:1px;"  class="btn btn-secondary" v-bind:class="{ active: tipo ==='Gas Bombola'}">
                <input type="button" value="Informatica" v-on:click="tipo  = 'Informatica'" style="margin:1px;"   class="btn btn-secondary" v-bind:class="{ active: tipo ==='Informatica'}">
                <input type="button" value="Prodotti per Animali" v-on:click="tipo  = 'Prodotti per Animali'"  style="margin:1px;"   class="btn btn-secondary" v-bind:class="{ active: tipo ==='Prodotti per Animali'}">
            </div>
            <div class="col-md-3" ></div>
            <div style="padding-top:10px ; margin:auto;" class="col-md-6 col-sm-12">
                <h4>Città</h4>
                <select class="form-control" v-model= "citta">
                    <option value="all">Tutti</option>
                    <option value="Alcamo">Alcamo</option>
                    <option value="Buseto Palizzolo">Buseto Palizzolo</option>
                    <option value="Calatafimi Segesta">Calatafimi Segesta</option>
                    <option value="Campobello di Mazara">Campobello di Mazara</option>
                    <option value="Castellammare del Golfo">Castellammare del Golfo</option>
                    <option value="Castelvetrano">Castelvetrano</option>
                    <option value="Custonaci">Custonaci</option>
                    <option value="Erice">Erice</option>
                    <option value="Favignana">Favignana</option>
                    <option value="Gibellina">Gibellina</option>
                    <option value="Marsala">Marsala</option>
                    <option value="Mazara del Vallo">Mazara del Vallo</option>
                    <option value="Paceco">Paceco</option>
                    <option value="Pantelleria">Pantelleria</option>
                    <option value="Partanna">Partanna</option>
                    <option value="Petrosino">Petrosino</option>
                    <option value="Poggioreale">Poggioreale</option>
                    <option value="Salaparuta">Salaparuta</option>
                    <option value="Salemi">Salemi</option>
                    <option value="San Vito Lo Capo">San Vito Lo Capo</option>
                    <option value="Santa Ninfa">Santa Ninfa</option>
                    <option value="Trapani">Trapani</option>
                    <option value="Valderice">Valderice</option>
                    <option value="Vita">Vita</option>
                </select>

            </div>
            <div class="col-md-3" ></div>
        </div>
        <hr>
        <div class="row" style="text-align:center">
        <h4>Risultato Ricerca</h4>
		 <div v-if="nessuno" >
		 <div style="margin-bottom:10px">
		 <strong style="color:red; ">Non è stata trovata nessuna attività </strong>
		 </div>
		 <a href="/nuova-attivita" class="bnt btn-primary" style="padding:10px"><i class="fa fa-plus"></i> Aggiungi una nuova attività</a></div>
        
            <div class="accordion" id="accordionExample">

                <div v-for="(attivita , index) in filteredList">

    <!-- <div class="card customcard " v-show=" (citta === attivita.citta && tipo === '@{{attivita.attivita}}' )  ||  (citta === 'all' && tipo == 'all') ||  (citta === 'all' && tipo == '@{{attivita.attivita}}') ||  (citta === '@{{attivita.citta}}' && tipo == 'all')"   style="background:#f1f3f7; border: solid #bec8d4; margin:10px;"> -->
    <div class="card customcard "   style="background:#f1f3f7; border: solid #bec8d4; margin:10px;">
        <div class="card-header" id="headingOne" class="btn-secondary">
          <h2 class="mb-0" style="margin:0px;">
          <button class="btn btn-link" type="button" data-toggle="collapse" :data-target="'#collapse'+ index" aria-expanded="true" aria-controls="collapseOne">
                @{{attivita.nome}}
            </button>
          </h2>
        </div>

        <div :id="'collapse'+ index" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample" >
          <div class="card-body">
              <hr>
              Paese di consegna:@{{attivita.citta}}<br>
              Tipo Attivita:@{{attivita.attivita}}<br>
          Tel:<a href="tel:@{{attivita.telefono}}" >@{{attivita.telefono}}</a><br>
          Email:<a href="mailto:@{{attivita.email}}">@{{attivita.email}}</a><br>
          SitoWeb:<a href="@{{attivita.sitoweb}}">@{{attivita.sitoweb}}</a><br>
          Note:@{{attivita.note}}<br>
          </div>
        </div>
      </div>
</div>
              </div>
<hr>
              <div class="col-md-12" style="text-align:center; margin-top:50px;">
                Developed with <i class="fa fa-heart"></i> <a href="https://www.linkedin.com/in/fausto-ferla-6b092864/" target="_blank">Fausto Ferla</a>
				<br><a href="mailto:ferlafausto@gmail.com">Contatti</a>
            </div>
        </div>


        </div>
    </body>
    <script src="/custom.js"></script>



</html>
