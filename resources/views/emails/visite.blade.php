<html>
<head>

</head>
<body>
<span> Madame,Monsieur {{ $user->firstName }} {{$user->lastName}} </span> <br> <br> <br>
<p>
    Nous voulons vous informer que les prochaines dates de viste des vehicule(s) suivante(s) se rapproches:
</p>
<table style="border: 1px black double">
    @foreach($vehicules as $vehicule)
        <tr>
            <td>{{ $vehicule->matricule }}</td>
            <td>{{ $vehicule->fabricant }}</td>
            <td>{{ $vehicule->visite }}</td>
        </tr>
    @endforeach
</table>


</body>
</html>
