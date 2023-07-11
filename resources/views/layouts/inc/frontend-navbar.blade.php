<div class="global-navbar">
    <div class="container">
        <div class="row">
<!--            
            <div class="col-md-8" >
                <h5>Advertise Here</h5>
            </div> -->
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-green">
  <div class="container">
   
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li> -->

        @php 
          $categories = App\Models\category::where('');
        @endphp
        @foreach($categories as $cateitem)

        <li class="nav-item">
          <a class="nav-link" href="{{$cateitem->slug}}">{{$cateitem->name}}</a>
        </li>

        @endforeach

        
      </ul>
      
    </div>
  </div>
</nav>
</div>


