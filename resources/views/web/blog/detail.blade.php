@extends('layouts.web')
@section('mainContent')
<div class="container" style="margin-top:40px;"> 
  <div class="row">
        <div class="col-md-9">
           <img src="/{{$blog['image']}}" style="width:100%">
            <h2>{{$blog['title']}}</h2>
            <div> {!!$blog['desc']!!}
            </div>
        </div>
        <div class="col-md-3" ><div class="head" style="font-weight: 700;">Сүүлд нэмэгдсэн </div>
       
            <ol>
                <li>Гарчиг нэг</li>
                <li>Гарчиг нэг</li>
                <li>Гарчиг нэг</li>
            </ol>

            <div class="head" style="font-weight: 700;">Их уншсан </div>
       
            <ol>
                <li>Гарчиг нэг</li>
                <li>Гарчиг нэг</li>
                <li>Гарчиг нэг</li>
            </ol>


            <div class="head" style="font-weight: 700;">Цахим ном татах </div>
       
            <ol>
                <li>Гарчиг нэг</li>
                <li>Гарчиг нэг</li>
                <li>Гарчиг нэг</li>
            </ol>

            <div class="head" style="font-weight: 700;">Сүүлд нэмэгдсэн </div>
       
            <ol>
                <li>Гарчиг нэг</li>
                <li>Гарчиг нэг</li>
                <li>Гарчиг нэг</li>
            </ol>
        
        </div>
        
  </div>

</div>
@endsection