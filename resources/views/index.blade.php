@extends('layouts.app')

@section('content')


<div class="jumbotron">
  <h1>Two Fish Resort</h1>
</div>

 <div class="search-bar">
     <div class="container">
            <form method="POST" action="{{ route('post-schedule') }}" class="form-container form-container--end">
            {{csrf_field()}}
                <div class="col-md-4 date-box">
                    <p> Dates: </p>
                    <input class="date input-box form-control" type="text" name="date">
                </div>
                <div class="col-md-4 date-box">
                    <div class="dropdown">
                            <input type="text" onclick="myFunction()" class="dropbtn select-guest" placeholder="Select Guest" id="guest" >
                                <div id="myDropdown" class="dropdown-content">
                                    <label>Divers</label>
                                <div class="number">
                                        <span class="minus">-</span>
                                        <input type="text" value="1" min="0" max="10" name="divers" id="divers" >
                                        <span class="plus">+</span>
                                    </div>
                                    <label>Non-Deiver</label>
                                    <div class="number">
                                        <span class="minus">-</span>
                                        <input type="text" value="1" min="0" max="10" name="non-divers" id="non-divers" >
                                        <span class="plus">+</span>
                                    </div>
                                    </div>
                        </div>
                    </div>
            <div class="col-md-4">
            <button type="submit" class="btn btn-default">Enquire</button>
            </div>
            </form>
 </div>

@endsection