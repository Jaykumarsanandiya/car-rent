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
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                           
                            <th>Status</th>
                        </tr>
                      </thead>
                     {{$counter=1}} 
                      <tbody>
                        {{-- {{dd($leads)}} --}}
                       @foreach ($contacts as $contact)
                       <tr>
                        <td>{{$counter++}}</td>
                        <td>{{$contact['name']}}</td>
                        <td>{{$contact['email']}}</td>
                        <td>{{$contact['message']}}</td>
                      
                     
                        <td>
                        
                          <a href="/dashboard/{{$contact['id']}}"><label class="badge badge-success">New Lead</label> </a>  
                    
                         
                        
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