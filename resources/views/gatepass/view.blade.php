<x-layout>
    <x-header title="View all Request" path="Request" />

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('create-gatepass') }}" class="btn btn-sm btn-success">Add New Request</a>
            </div>
            <div class="card-body">
                <x-dashboard.table class="striped-table">
                    <x-slot name="heading">
                        <th>#</th>
                        <th>Tracking #</th>
                        <th>Full Name</th>
                        <th>Destination</th>
                        <th>Date</th>
                        <th>Action</th>
                    </x-slot>
                    <tr>
                        <td>1</td>
                        <td>12545</td>
                        <td>Sample Sample</td>
                        <td>Aven fashion</td>
                        <td>1/22/2022</td>
                        <td>
                            <x-dashboard.button class="btn-primary btn-sm">View</x-dashboard.button>
                        </td>
                    </tr>
                </x-dashboard.table>
                
            </div>
        </div>
    </div>
</x-layout>