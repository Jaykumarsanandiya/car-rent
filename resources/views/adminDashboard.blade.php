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
                            <th>Lead #</th>
                            <th>Full-Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Car Name</th>
                            <th>Charge</th>
                            <th>Inquiry Time</th>
                       
                            <th>Status</th>
                        </tr>
                      </thead>
                     {{$counter=1}} 
                      <tbody>
                        {{-- {{dd($leads)}} --}}
                       @foreach ($leads as $lead)
                       <tr>
                        <td>{{$counter++}}</td>
                        <td>{{$lead['fullName']}}</td>
                        <td>{{$lead['email']}}</td>
                        <td>{{$lead['phone']}}</td>
                        <td>{{$lead['carName']}}</td>
                        <td>{{$lead['charge']}}</td>
                        <td>{{$lead['created_at']}}</td>
                     
                        <td>
                          @if($lead['status'] == 0)
                          <a href="/dashboard/{{$lead['id']}}"><label class="badge badge-success">New Lead</label> </a>  
                          @else
                          <a href="/dashboard/{{$lead['id']}}"><label class="badge badge-danger">Seen Lead</label>  </a> 
                          @endif
                       
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