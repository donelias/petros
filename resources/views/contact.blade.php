@extends('layouts.store.template')

@section('content')
<hr>
      <div id="contact" class="spacer">
        <!--Contact Starts-->
        <div class="container contactform center">
        <h2 class="text-center  wowload fadeInUp">Reservation</h2>
          <div class="row wowload fadeInLeftBig">      
              <div class="col-sm-6 col-sm-offset-3 col-xs-12">      
                <input type="text" placeholder="Name">
                <input type="text" placeholder="Company">
                <textarea rows="5" placeholder="Message"></textarea>
                <button class="btn btn-primary"><i class="fa fa-paper-plane"></i> Send</button>
              </div>
          </div>



        </div>

      </div>
      <div id="map"></div>
        <!--Contact Ends-->

@stop



