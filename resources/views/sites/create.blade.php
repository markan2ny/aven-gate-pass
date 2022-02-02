<x-layout>
    <x-header title="" path="Sites" />
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="card mt-5">
                    <div class="card-header bg-primary">
                        <h4 class="text-white font-weight-light">Create Site</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('create-site') }}">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputPassword1">Site Name</label>
                                <input type="text" name="site_name" class="form-control" id="exampleInputPassword1" placeholder="Enter Site Name">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>