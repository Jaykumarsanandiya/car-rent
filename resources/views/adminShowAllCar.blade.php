@include('adminHeader')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Data table</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        @if (session()->has('status'))
                        {{-- {{dd(session()->get('status'))}} --}}
                            <div class="alert alert-success " role="alert">
                                {{ session()->get('status') }}
                                
                            </div>
                        @endif
                        
                        <tr>
                            <th>#</th>
                            <th>Model</th>
                            <th>Company</th>
                            <th>Dealer Location</th>
                            <th>Fuel</th>
                            <th>Seating</th>
                            <th>Transmission</th>
                            <th>Charge</th>
                            <th>Image URL</th>
                           
                            <th>Action</th>
                        </tr>
                      </thead>
                     {{$counter=1}} 
                      <tbody>
                        {{-- {{dd($leads)}} --}}
                       @foreach ($cars as $car)
                       <tr>
                        <td>{{$counter++}}</td>
                        <td>{{$car['model']}}</td>
                        <td>{{$car['company']}}</td>
                        <td>{{$car['dealer_location']}}</td>
                        <td>{{$car['fuel']}}</td>
                        <td>{{$car['seating']}}</td>
                        <td>{{$car['transmission']}}</td>
                        <td>{{$car['charge']}}</td>
                        <td>{{$car['image_url']}}</td>

                      
                     
                        <td>
                        
                          <a href="/dashboard-delete-car/{{$car['id']}}"><label class="badge badge-danger">Delete</label> </a>  
                    
                        </td>
                        
                    </tr>
                       @endforeach 
                
                       
                      </tbody>
                    </table>
                  </div>
				</div>
              </div>
            </div>
          </div>
        
		</div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
      

 @include('adminFooter')