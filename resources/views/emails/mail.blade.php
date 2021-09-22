<html>
<head>
    <link rel="stylesheet" href="styles.css">



</head>
<body style=" font-family: Times New Roman, Times, serif; color: #0D0D0D ; justify-content: center ; font-size: medium">
Cher client, <strong style=";text-transform: uppercase"> {{ $user->firstName }} {{$user->lastName}} </strong> <br> <br>
<p > Nous vous confirmons que nous avons recu votre paiement en ligne .Voici une copie détaillé de votre facture


<table  style=" border: 1px black solid ;width : 100%; text-transform: uppercase ;" >

    <tr>
        <th style="border: 1px solid black ;background-color: #1b6d85" colspan="2"><span>Facture</span></th>
    </tr>

    <tr style="background-color:#ffffff ;font-weight: bold ">
        <td style="border: 1px solid black ;color: #1b6d85 ">Nombre d'heures de code </td>
        <td style="border: 1px solid black ;color: #1b6d85">{{ $heuresCode }}  heures </td>

    </tr>
    <tr style="background-color:#ffffff ; font-weight: bold ">
        <td style="border: 1px solid black ;color: #3cb371">Prix code:</td>
        <td style="border: 1px solid black;color: #3cb371">{{ $sommeCode }} TND</td>

    </tr>
    <tr style="background-color: #ffffff">
        <td style="border: 1px solid black ; color: #1b6d85 ; font-weight: bold ">Nombre d'heures de conduite :</td>
        <td style="border: 1px solid black ; color: #1b6d85 ;font-weight: bold ">{{ $heuresConduite }} heures</td>

    </tr>
    <tr style="background-color:#ffffff ; font-weight: bold ">
        <td style="border: 1px solid black ;color: #3cb371">Prix de conduite:</td>
        <td style="border: 1px solid black ;color: #3cb371">{{ $sommeConduite }} TND</td>

    </tr>
    <tr style="background-color:mediumseagreen ; font-weight: bold ">
      <td colspan="2" style=" border: 1px solid black ;text-align: center; text-transform: uppercase;">somme totale :  {{ $somme }} TND</td>

    </tr>

</table>
</p>
<p style="text-indent: 20px ; font-weight: bold ;">N'hésitez pas a nous contactez pour toute question.</p>

<br><br><br>
<p>
    <span style="text-transform: uppercase">Auto Ecole </span> <br>
    <span>laravelauto@gmail.com</span>
</p>


</body>
</html>
