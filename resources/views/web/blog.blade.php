@extends('layouts.web')
@section('mainContent')
<div class="container" style="margin-top:40px;"> 
  <div class="row">
    <h1>Блог</h1>
  </div>
 
</div>

<div class="container-lg" style="margin-top:40px;">
    
  <div class="row">
      <div class="col-12">
          <h3 class="mb-3">Blog </h3>
      </div>
    @foreach($blog as $blogs)
    <div class="col-lg-3 col-sm-12">
      <div class="card blogs" style="width: 18rem;border:none;">
          <img src="{{$blogs->image}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{$blogs->title}}</h5>
            <p class="card-text">{!!$blogs->desc!!}</p>
            <a href="#" class="btn btn-primary">Унших</a>
          </div>
        </div>
    </div>

  @endforeach

   
  </div>
</div>

@endsection