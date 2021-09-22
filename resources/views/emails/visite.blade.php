<html>
<head>

</head>
<body style=" font-family: Times New Roman, Times, serif; color: #0D0D0D ; justify-content: center ; font-size: medium">
 Madame,Monsieur <span style=";text-transform: uppercase">{{ $user->firstName }} {{$user->lastName}} </span> <br> <br>
<p>
    Nous voulons vous informer que les prochaines dates de viste des vehicule(s) suivante(s) se rapproches:
</p>
<table  style=" border: 1px black solid ;width : 100%; background-color: grey " >
    <tr>
        <td style="text-transform: uppercase ; font-weight: bold ; text-align: center">
            la matricule
        </td>

        <td style="text-transform: uppercase ; font-weight: bold ; text-align: center">
            le fabricant
        </td>
        <td style="text-transform: uppercase ; font-weight: bold ; text-align: center">
            la date visite
        </td>
    </tr>
    @foreach($vehicules as $vehicule)
        <tr>
            <td >{{ $vehicule->matricule }}</td>
            <td>{{ $vehicule->fabricant }}</td>
            <td>{{ $vehicule->visite }}</td>
        </tr>
    @endforeach
</table>


</body>
</html>
