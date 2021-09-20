<html>
<head>
   <meta charset="" >
</head>
<body>
<span> Madame,Monsieur {{ $user->firstName }} {{$user->lastName}} </span> <br> <br> <br>
<p> Nous vous confirmons que nous avons recu votre paiement en ligne .Voici une copie détaillé de votre facture

Récapitulatif de commande :
  Nombre d'heures de code (7dt/hr):
{{ $heuresCode }} heures
Prix code: {{ $sommeCode }} TND
  Nombre d'heures de conduite (20dt/hr):
{{ $heuresConduite }} heures
 Prix conduite: {{ $sommeConduite }} TND
  Total:
 {{ $somme }} TND
</p>
<p>N'hésitez pas a nous contactez pour toute question.</p>
<p>Veuillez agréer , Madame , Monsieur, mes salutations distinguèes .</p>

<p>
    <span>Auto Ecole </span> <br>
    <span>laravelauto@gmail.com</span>
</p>


</body>
</html>
