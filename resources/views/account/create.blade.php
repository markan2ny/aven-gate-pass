<x-layout>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 offset-lg-2 col-12">
            <div class="card mt-5">
                <div class="card-header bg-primary">
                    <h3 class="text-white font-weight-light">Create an Account</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('createAccount') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Site to be Assign<span class="text-danger">*</span></label>
                                    <select class="form-control" name="site_id" id="exampleFormControlSelect1" value="{{ old('site_id') }}">
                                        <option selected disabled>--Select--</option>
                                        @foreach ($sites as $site)
                                            <option value="{{ $site->id }}">{{ $site->site_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('site_id')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="role">Role to be Assign<span class="text-danger">*</span></label>
                                    <select class="form-control" name="role_name" id="role" value={{ old('role_name') }}>
                                        <option selected disabled>--Select--</option>
                                        <option value="Custodian">Custodian</option>
                                        <option value="Approver">Approver</option>
                                        <option value="Guard">Guard</option>
                                        
                                    </select>
                                    @error('role_name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <label for="name">Full Name <span class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter Fullname" value="{{ old('name') }}">
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <label for="username">Username <span class="text-danger">*</span></label>
                                    <input type="text" name="username" class="form-control" id="username" placeholder="Enter Username" value="{{ old('username') }}">
                                    @error('username')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <label for="password">Password <span class="text-danger">*</span></label>
                                    <input type="Password" name="password" class="form-control" id="password" placeholder="Enter Password">
                                    @error('password')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <label for="password">Confirm Password <span class="text-danger">*</span></label>
                                    <input type="Password" name="password_confirmation" class="form-control" id="password" placeholder="Confirm Password">
                                    @error('password_confirmation')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</x-layout>