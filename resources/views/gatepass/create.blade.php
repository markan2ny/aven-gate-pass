<x-layout>

<x-header title="" path="Request" />

<div class="container-fluid">
    <div class="card">
        <div class="card-header bg-primary">
            <h2 class="text-white font-weight-light">FORM REQUEST: 0001</h2>
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('create-gatepass') }}">
                @csrf
    
                <div class="row">
                    <div class="col-lg-4 col-12">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Track Number <span class="text-danger">*</span></label>
                            <input type="text" name="track_no" class="form-control" id="exampleFormControlInput1" placeholder="Enter Tracking Number">
                        </div>
                    </div>
               
                    <div class="col-lg-4 col-12">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Type of Request <span class="text-danger">*</span></label>
                            <select class="form-control" name="type_of_request" id="exampleFormControlSelect1">
                                <option selected disabled>--Select--</option>
                                <option>For Deliver</option>
                                <option>For Barrow</option>
                                <option>For Repair</option>
                                <option>Others</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Date <span class="text-danger">*</span></label>
                            <input type="date" name="date" class="form-control" id="exampleFormControlInput1" value="{{ date('Y-m-d') }}">
                        </div>
                    </div>
                    <div class="col-lg-12 col-12">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Requestor <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder=" Enter Requestor Name">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Destination <span class="text-danger">*</span></label>
                            <select class="form-control" name="destination" id="exampleFormControlSelect1">
    
                                <option selected disabled>--Select--</option>
                                <option value="aven">Aven Fashion</option>
                                <option value="tela_main">Teladeoro</option>
                                <option value="jeonjin">Jeonjin</option>
                                <option value="sta_rosa">Sta Rosa</option>
                                <option value="sta_rosa">Peach Blossom</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Department <span class="text-danger">*</span></label>
                            <select class="form-control" name="department" id="exampleFormControlSelect1">
                                <option selected disabled>--Select--</option>
                                <option value="it">IT Department</option>
                                <option value="acctg">Accounting Department</option>
                                <option value="purchasing">Purchasing</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Receiver Name <span class="text-danger">*</span></label>
                            <input type="text" name="receiver" class="form-control" id="exampleFormControlInput1" placeholder="Enter Complete Name">
                        </div>
                    </div>
                <div class="col-lg-6">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Driver Name <span class="text-danger">*</span></label>
                            <select class="form-control" name="driver" id="exampleFormControlSelect1">
                                <option selected disabled>--Select--</option>
                                <option value="juan">Mr. Juan Dela Cruz</option>
                                <option value="migs">Mr. Migs Subiri</option>
                                <option value="rodrigo">Mr. Rodrigo Duterte</option>
                            </select>
                        </div>
                </div>
                <div class="col-lg-6">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Vehicle Plate Number <span class="text-danger">*</span></label>
                            <select class="form-control" name="vehicle" id="exampleFormControlSelect1">
                                <option selected disabled>--Select--</option>
                                <option name="123">AU12311</option>
                                <option name="123">SMP21212</option>
                                <option name="123">SAMPLE1212</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Purpose <span class="text-muted font-weight-light">( Optional )</span></label>
                            <textarea class="form-control" name="purpose" id="exampleFormControlTextarea1" rows="3" placeholder="Say something...."></textarea>
                        </div>
                    </div>
                    <button class="btn btn-primary">Submit</button>

                </div>
            </form>
        </div>
    </div>
</div>
</x-layout>
