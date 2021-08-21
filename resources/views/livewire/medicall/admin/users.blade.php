<div>
   <div class="card">
       <div class="card-header">
       <h3 class="card-title">Utilisateurs</h3>
       </div>
       <table class="table table-responsive">
           <thead>
               <tr>
               <th>#</th>
               <th class="text-nowrap">Prénom</th>
               <th class="text-nowrap">Nom</th>
               <th class="text-nowrap">Email</th>
               <th class="text-nowrap">Role</th>
               </tr>
           </thead>
           <tbody>
               @foreach ($users as $key => $user)
                    <tr>
                        <th>{{ $key+1 }}</th>
                        <td>{{ $user->prenom }}</td>
                        <td>{{ $user->nom }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                    </tr>
               @endforeach
           </tbody>
       </table>
   </div>
</div>
