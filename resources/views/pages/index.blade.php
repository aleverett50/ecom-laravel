@extends('app')

@section('content')


    <div class="container-fluid pt-20">
        <div class="row">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">

         
                <div class="carousel-inner">


    
    <div class="item active">
    
<img alt="Banner" style="width:100%" src="/images/74.jpg">
	
	
    </div>
    


                </div>
		
<style>

.carousel-control { top: 40% }
.left.carousel-control, .right.carousel-control{ font-size:35px }   

@media ( max-width: 991px ) {

	.carousel-control { top: 40% }
	.left.carousel-control, .right.carousel-control{ font-size:20px } 


}

</style>

		<!--
		
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="fa fa-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="fa fa-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
		
		-->
		

            </div>
        </div>
    </div>

 
    
<style>

a .banner-block{ display:block }
a .banner-block:hover{ background:#BE5886 }
.move-up-on-pc{ transform: translate(0,-28px) }
@media ( max-width: 991px ) {

	.move-up-on-pc{ transform: translate(0,0px) }
	#gradient_holder p{ font-weight:normal }
	

}

</style>    


    <div class="container mb-30 mt-40 mt-20-mob">
    
    <p class="text-center mt-40">This is a (scaled down) demo e-commerce site built using the Laravel Framework.</p>
    
        <div class="row mb-0 mb-0-mob mt-30 mt-10-mob">
            <h2 class="top-go-to" style="font-weight: 600 !important;text-align: center;color:#707070 !important;text-transform: uppercase;">Latest Products</h2>
        </div>
    </div>
  
  


    <div class="container mb-30 pt-50 pb-0">

        <div class="row" style="grid-auto-flow: column;">

        @foreach($products as $product)
		
        	@include('includes.products')

        @endforeach

		
		    
        </div>

    </div>


@endsection