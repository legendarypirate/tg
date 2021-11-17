@extends('layouts.web')
@section('mainContent')
<div class="container" style="margin-top:40px;"> 
  <div class="row">
    <h1>Үйл явдлууд</h1>
    
  </div>
 
</div>

<section class="timeline">
  <div class="container">


    @foreach($event as $events)
    <div class="timeline-item">
      <div class="timeline-img"></div>

      <div class="timeline-content js--fadeInLeft">
        <img src="{{$events->image}}" style="width:550px;">
         
        <h2>{{$events->title}}</h2>
         <div class="date">{{$events->date}}</div>
        <p>{{$events->date}}</p>
        <a class="bnt-more" href="javascript:void(0)">More</a>
      </div>
    </div> 
    @endforeach
    
    
   
        
  </div>
</section>

@endsection