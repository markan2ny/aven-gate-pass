<x-layout>
    <x-header title="View All Sites" path="Sites" />
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <table class="table striped-table" id="siteTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Sites</th>
                            <th>Created Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @php
                     $count = 1;   
                    @endphp
                    @forelse ($sites as $site)
                        <tr>
                            <td width="10%">{{ $count }}</td>
                            <td>
                                <a href="{{ route('profileSite', $site->id) }}">{{ strtoupper( $site->site_name) }}</a>
                            </td>
                            <td>{{ $site->created_at}}</td>
                            <td width="10%">
                                <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                            </td>
                        </tr>
                    @php
                        $count++;
                    @endphp
                    @empty
                        
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-layout>