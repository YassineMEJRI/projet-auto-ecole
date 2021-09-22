<html>
<head>
    <link rel="stylesheet" href="styles.css">
     <style>
         body {
             font-family: arial, sans-serif ;

         }
         .styled-table {
             border-collapse: collapse;
             margin: 25px 0;
             font-size: 0.9em;
             font-family: sans-serif;
             min-width: 400px;
             box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
         }
         table

     </style>


</head>
<body>
<span> Madame,Monsieur {{ $user->firstName }} {{$user->lastName}} </span> <br> <br> <br>
<p> Nous vous confirmons que nous avons recu votre paiement en ligne .Voici une copie détaillé de votre facture


<table  class="styled-table" >

    <tr>
        <th colspan="2">Facture</th>
    </tr>

    <tr>
        <td>Nombre d'heures de code </td>
        <td>{{ $heuresCode }}  heures </td>

    </tr>
    <tr>
        <td>Prix code:</td>
        <td>{{ $sommeCode }} TND</td>

    </tr>
    <tr>
        <td>Nombre d'heures de conduite :</td>
        <td>{{ $heuresConduite }} heures</td>

    </tr>
    <tr>
        <td>Prix de conduite:</td>
        <td>{{ $sommeConduite }} TND</td>

    </tr>
    <tr>
        <td colspan="2" class="active-row">somme totale :  {{ $somme }} TND</td>


    </tr>

</table>
</p>
<p>N'hésitez pas a nous contactez pour toute question.</p>
<p>Veuillez agréer , Madame , Monsieur, mes salutations distinguèes .</p>

<p>
    <span>Auto Ecole </span> <br>
    <span>laravelauto@gmail.com</span>
</p>


</body>
</html>
