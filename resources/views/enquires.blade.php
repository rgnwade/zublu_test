@extends('layouts.app')

@section('content')

<div class="container">

        <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Pictures</a></li>
        <li><a href="#">Summer 15</a></li>
        <li>Italy</li>
        </ul>

    <div class=row>
        <div class="package col-4">
            <div class="top-pack">
                <img class="img-pack" src="{{url('images/pict1.png')}}">
                <p>Dive resort - Bunaken </p>
             </div>
             <div class="content-pack">
                <h2 class="title-package">Two Fish</h2>
                <p>{{ $date }}</p>
                <p> {{$total_guest}} Guest</p>
            </div>
             <div class="price-pack">
                <p class="col-md-6">Chill Package</p>
                <p class="col-md-6">$200</p>
            </div>
            <div class="total-price">
                <b><p class="col-md-6">Total(USD)</p></b>
                <b><p class="col-md-6">$200</p></b>
            </div>
        </div>

        <div class="col-8 right-section">
                <div class="title-activities col-8">
                    <b><h1>What will you do?</h1></b>
                    <b><h2>2/2 Divers</h2></b>
                </div>
                
        <div class="col-12 list-package">
            <div class="col-4 package-1">
                <div class="conten-activities">
                        <b><h1>Chill</h1></b>
                        <b><h2>{{$diver}}</h2></b>
                        <h3>Include Equipment</h3>
                        <b><h2>$100/Guest</h2></b>
                        <h3>Include Transport</h3>

                        <div class="number">
                                        <span class="minus">-</span>
                                        <input type="text" value="1" min="0" max="10" name="divers" id="divers" >
                                        <span class="plus">+</span>
                                    </div>
                </div>
            </div>

             <div class="col-4 package-1">
                <div class="conten-activities">
                    <b><h1>Chill</h1></b>
                    <b><h2>2 Divers</h2></b>
                    <h3>Include Equipment</h3>
                    <b><h2>$100/Guest</h2></b>
                    <h3>Include Transport</h3>

                    <div class="number">
                                        <span class="minus">-</span>
                                        <input type="text" value="1" min="0" max="10" name="divers" id="divers" >
                                        <span class="plus">+</span>
                                    </div>
                </div>
            </div>
          
        </div>
        <button type="submit" class="btn btn-default">Continue</button>
    </div>
</div>
</div>

@endsection