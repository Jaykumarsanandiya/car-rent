@include('header')



    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                
                <h4 class="modal-title" id="gridSystemModalLabel">Book Now</h4>
            </div>

            <div class="modal-body">
                <form action="/lead" method="POST" id="contact-form">
                    @csrf

                    <input type="text" class="form-control" name="fullName" placeholder="Enter full name" required>

                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="email" placeholder="Enter email address" required>
                        </div>

                        <div class="col-md-6">
                            <input type="number" class="form-control" name="phone" placeholder="Enter phone" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="carName" value="{{$car->company }}  {{$car->model }}" >
                        </div>
                        <div class="col-md-6">
                            <input type="text"   class="form-control" name="charge"  value="{{$car->charge }}" > 
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="section-btn btn btn-primary">Book Now</button>
                    </div>
                </form>
            </div>

            
        </div>
    </div>
    <!-- FOOTER -->
   @include('footer')
