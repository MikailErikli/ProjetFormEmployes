         @extends('layouts.master')
         @section('content')
            <div class="container" >
                <div class="blanc"></div>
                <h1>Liste de mes Employes</h1>

            </div>
             <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Civilité</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Mot de passe</th>
                    <th>Intérêt</th>
                    <th>Message</th>
                </tr>
                </thead>
                 @foreach($mesEmployes as $unEmp)
                     <tr>
                         <td>{{ $unEmp->civilite }}</td>
                         <td>{{ $unEmp->nom }}</td>
                         <td>{{ $unEmp->prenom }}</td>
                         <td>{{ $unEmp->pwd }}</td>
                         <td>{{ $unEmp->interet }}</td>
                         <td>{{ $unEmp->profil }}</td>
                         <td>{{ $unEmp->message }}</td>
                       <td style="text-align:center;">
                         <a href="{{url('/modifierEmploye')}}/{{ $unEmp->numEmp }}">
                             <span class="glyphicon glyphicon-pencil"
                                   data-toggle="tooltip" data-placement="top" titile="Modifier"></span></a></td>
                     </tr>
                 @endforeach
                     <BR> <BR>
             </table>
            </div>
            </div>
            @stop






                     </tr>





             </table>
