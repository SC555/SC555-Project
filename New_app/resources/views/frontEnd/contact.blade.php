@extends('frontEnd.layouts.master')
@section('title','Contact')
@section('slider')
@endsection
@section('content')
    <div class="container">
    	<div class="contact">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="topics text-center"><strong>Contact Us </strong></h2>    			    				    			
				</div>			 		
			</div>    	
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
				            <div class="form-group col-md-6">
				                <input type="text" name="name" class="form-control" required="required" placeholder="Name">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				            </div>
				            <div class="form-group col-md-12">
				                <input type="text" name="subject" class="form-control" required="required" placeholder="Subject">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-success pull-right" value="Submit">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Contact Info</h2>
	    				<address>
	    					<p class="blocktext text-center">Emart Pvt.Ltd</p>
							<p class="blocktext text-center">No.102</p>
							<p class="blocktext text-center">Peradeniya</p>
							<p class="blocktext text-center">Mobile: +111011000</p>
							<p class="blocktext text-center">Email: info@emart.com</p>
	    				</address>
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    
       
    </div>

@endsection

