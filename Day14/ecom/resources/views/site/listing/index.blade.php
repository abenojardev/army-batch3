@extends('site.layout')
@section('content')
    <main>
        <div class="page_header element_to_stick">
            <div class="container">
                <div class="row"> 
                    <div class="col-xl-8 col-lg-7 col-md-7"></div>
                    <div class="col-xl-4 col-lg-5 col-md-5">
                        <div class="search_bar_list">
                            <input type="text" class="form-control" placeholder="Search again...">
                            <input type="submit" value="Search">
                        </div>
                    </div>
                </div> 	       
            </div>
        </div>
        
        <div class="container margin_30_40">			
            <div class="row"> 
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
                            <div class="strip">
                                <figure> 
                                    <img src="{{ URL::asset('theme/img/lazy-placeholder.png') }}" data-src="{{ URL::asset('theme/img/location_1.jpg') }}" class="img-fluid lazy" alt="">
                                    <a href="detail-restaurant.html" class="strip_info">
                                        <small>Pizza</small>
                                        <div class="item_title">
                                            <h3>Da Alfredo</h3>
                                            <small>27 Old Gloucester St</small>
                                        </div>
                                    </a>
                                </figure>
                                <ul>
                                    <li><span>P 242.42</span></li>
                                    <li>
                                        <a href="#" class="score"> 
                                            <strong>
                                                Add to Cart
                                            </strong>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>  
                    </div> 
                </div> 
            </div>		
        </div> 
    </main>
@endsection