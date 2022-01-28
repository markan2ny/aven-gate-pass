<x-layout>

<x-header title="Create new Request" path="Request" />

    <x-dashboard.card>
        <form method="post" action="">
            @csrf

            <div class="row">
            <div class="col-lg-8">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Full Name</label>
                    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder=" Enter Full Name">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Track Number</label>
                    <input type="text" name="track_no" class="form-control" id="exampleFormControlInput1" placeholder="Enter Tracking Number">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Destination</label>
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
            <div class="col-6">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Date </label>
                    <input type="date" class="form-control" id="exampleFormControlInput1">
                </div>
            </div>
           <div class="col-lg-6">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Driver</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option selected disabled>--Select--</option>
                        <option>Mr. Juan Dela Cruz</option>
                        <option>Mr. Migs Subiri</option>
                        <option>Mr. Rodrigo Duterte</option>
                    </select>
                </div>
           </div>
           <div class="col-lg-6">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Type of Request</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option selected disabled>--Select--</option>
                        <option>DR</option>
                        <option>Gate Pass</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Item</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option selected disabled>--Select--</option>
                        <option>Printer</option>
                        <option>Aircon</option>
                        <option>Computer</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="form-group">
                    <label>Quantity</label>
                    <input type="text" class="form-control" placeholder="Enter Quantity">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Purpose</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Say something...."></textarea>
                </div>
            </div>

            <div class="form-group">
                <x-dashboard.button class="btn-primary">{{__('Submit')}}</x-dashboard.button>
            </div>
            </div>
        </form>

    </x-dashboard.card>
</x-layout>
