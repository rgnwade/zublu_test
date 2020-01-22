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
                <p>29 Oct 2020</p>
                <p> 5 Guest</p>
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

                <div class="guest-form">
                <form method="POST"  class="form-container form-container--end">
            {{csrf_field()}}
                    <div class="form-input">
                        <label>First Name</label>
                        <input type="text" id="first_name" name="first_name">
                    </div>
                    <div class="form-input">
                        <label>First Name</label>
                        <input type="text" id="first_name" name="first_name">
                    </div>
                    <div class="form-input">
                        <label>First Name</label>
                        <input type="text" id="first_name" name="first_name">
                    </div>
                    <div class="form-input">
                        <label>First Name</label>
                        <input type="text" id="first_name" name="first_name">
                    </div>
                    <div class="form-input">
                        <label>First Name</label>
                        <input type="text" id="first_name" name="first_name">
                    </div>
                    <div class="form-input">
                        <label>First Name</label>
                        <input type="textarea" id="first_name" name="first_name">
                    </div>

                </form>

                </div>
                
     
        <button type="submit" class="btn btn-default">Continue</button>
    </div>
</div>
</div>

@endsection