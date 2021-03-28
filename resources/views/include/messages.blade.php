@if(session()->get('success'))
  <div class="alert alert-success alert-dismissible fade show flash" role="alert">
    <button type="button" class="close close-button-message" aria-hidden="true" data-dismiss="alert">×</button>
    {{ session()->get('success') }}  
  </div>
@endif
@if(session()->get('danger'))
  <div class="alert alert-danger alert-dismissible fade show flash" role="alert">
    <button type="button" class="close close-button-message" aria-hidden="true" data-dismiss="alert">×</button>
    {{ session()->get('danger') }}  
  </div>
@endif