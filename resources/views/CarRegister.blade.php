@include('adminHeader')
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">

            <div class="container">
    
                @if (session()->has('status'))
                {{-- {{dd(session()->get('status'))}} --}}
                    <div class="alert alert-success " role="alert">
                        {{ session()->get('status') }}
                        
                    </div>
                @endif
            
            </div>

          <div class="row">
			<h1 class="card-title ml10">Enter A New Car </h1>
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form class="forms-sample" action="/dashboard-add-car" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputName1">Car Model</label>
                      <input type="text" class="form-control" id="exampleInputName1" name="model" >
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName1">Car Company</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="company" >
                      </div>

 
                      <div class="form-group">
                        <label for="exampleSelectGender">Car Transmission</label>
                          <select class="form-control" id="exampleSelectGender" name="transmission">
                            <option value="Manual" >Manual</option>
                            <option value="Auto">Auto</option>
                          </select>
                        </div>


                    <div class="form-group">
                        <label for="exampleSelectGender">Fuel Type</label>
                          <select class="form-control" id="exampleSelectGender" name="fuel">
                            <option value="Petrol" >Petrol</option>
                            <option value="Diesel">Diesel</option>
                          </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName1">Car Seating</label>
                            <input type="number" class="form-control" id="exampleInputName1" name="seating" placeholder="Name">
                          </div>
                    
                    
                  
                    <div class="form-group">
                      <label>Image </label>
                      <input type="file" class="form-control" name="image_url" id="exampleInputName" aria-describedby="emailHelp" placeholder="">
 
                    </div>

                    <div class="form-group">
                      <label for="exampleInputCity1">Dealer Location</label>
                      <input type="text" class="form-control" id="exampleInputCity1"  name="dealer_location" placeholder="Location">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName1">Car Charge for 1 day</label>
                        <input type="number" class="form-control" id="exampleInputName1" name="charge" placeholder="Name">
                      </div>
                
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
            
		 </div>
        
		</div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="https://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
@include('adminFooter')