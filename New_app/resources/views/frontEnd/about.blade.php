@extends('frontEnd.layouts.master')
@section('title','About')
@section('slider')
@endsection
@section('content')
    <div class="container">
        <div class="about">
        <div class="row">
                     <div class="col-lg-12 text-center">
                        <div class="about-text">
                           <h5>We are developing best solutions </h5>
                           <h2>For Sri Lankan Agriculture Sector</h2>
                           <p><strong>One of the serious issues faced by the world is pandamics coming time to time, and covid-19 is one the most significant challenges that the world is facing in now a days.</strong></p>
                           <p> For Promoting Sri Lankan minor Crops and Products locally and internationally is expected through the site. Sri Lankan Sellers are recieved the best platform to sell their crops/products. International /Local Buyers are capable of buying the best quality products.</p>
                            
                        </div>
                     </div>
                  </div>
            
                  <div class="row">
                     <div class="col-lg-4">
                           <ul class="mem">
                               <h4><b>Our Team Members</b></h4>
                                <li><strong>D</strong>amith Hathurusinghe</li>
                                <li><strong>S</strong>hanika Jayawardene</li>
                                <li><strong>C</strong>harunika Dampalessa</li>
                                <li><strong>I</strong>resha Bandaranayake</li>
                            </ul>
                           
                         </div>
                   
                       <div class="col-lg-4">
                      </div>
                      
                     <div class="col-lg-4">
                         <div class="join-us">
                            <a class="btn btn-primary" class="button" href="{{url('/contact')}}">Contact</a>
                            <a class="btn btn-primary" class="button" href="{{url('/login_page')}}" style="padding-left:20px;padding-right:30px;" >Join</a>
                          </div>    
                        </div>
                     </div>
                  </div>
                </div>
          
     

@endsection

