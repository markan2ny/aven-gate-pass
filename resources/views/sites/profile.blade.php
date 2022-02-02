<x-layout>

    <x-header title="" path="Profile" />

   <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="card mt-5">
                    <div class="card-header bg-primary">
                        <h2>{{ $information->site_name }}</h2>
                    </div>
                    <div class="card-body">
                       <table class="table striped-table">
                           <thead>
                               <tr>
                                   <th>#</th>
                                   <th>Name</th>
                                   <th>Username</th>
                                   <th>Role</th>
                                   <th>Created Date</th>
                               </tr>
                           </thead>
                           <tbody>
                               @php
                                   $count = 1;
                               @endphp
                               @forelse ($information->getUsers as $user)
                                   <tr>
                                       <td>{{ $count }}</td>
                                       <td>{{ $user->name }}</td>
                                       <td>{{ $user->username }}</td>
                                       <td><span class="badge badge-success p-2 font-weight-normal">{{ strtoupper( $user->role_name ) }}</span></td>
                                       <td>{{ $user->created_at }}</td>
                                   </tr>
                                @php
                                    $count++;
                                @endphp
                                @empty
                                    <tr>
                                        <td colspan="5"><h1 class="text-center text-muted font-weight-light">NO DATA</h1></td>
                                    </tr>
                                @endforelse
                           </tbody>
                       </table>
                    </div>
                </div>
            </div>
        </div>
   </div>




</x-layout>