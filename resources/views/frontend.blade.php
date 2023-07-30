<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Right Shopping Pvt. Ltd.</title>
        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{url('/front/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{url('/front/css/bootstrap-theme.min.css')}}">
        <link rel="stylesheet" href="{{url('/front/css/fontAwesome.css')}}">
        <link rel="stylesheet" href="{{url('/front/css/hero-slider.css')}}">
        <link rel="stylesheet" href="{{url('/front/css/owl-carousel.css')}}">
        <link rel="stylesheet" href="{{url('/front/css/style.css')}}">

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
         
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

       <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <script src="{{url('/front/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
    </head>

<body>
 
    <div class="wrap">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <button id="primary-nav-button" type="button">Menu</button>
                        <a href="index.html"><div class="logo">
                            <img src="{{url('/front/img/RIGHT_SHOPPING.webp')}}" alt="Venue Logo">
                        </div></a>
                    </div>
                </div>
            </div>
        </header>
    </div>
      
    <section class="banner banner-secondary" id="top" style="background-image: url(front/img/ecommerce-products.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-caption">
                        <div class="line-dec"></div>
                        <h2>Add Product To The Cart</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main>
        <section class="popular-places" id="popular">
            <div class="container">
                <div class="row">
                    @foreach($data as $d)
                    <div class="col-md-6">
                        <div class="owl-carousel owl-theme">
                            <div class="item popular-item">
                                <strong>{{$d->pname}}</strong>   

                                <img style="width:100%;" src="{{url('/image')}}/{{$d->pimage}}" alt="">
                                <strong>{{$d->pprice}}</strong>
                                <form action="{{url('/subcart')}}" method="post">
                                    @csrf
                                    <p><input type="hidden" name="proname" value="{{$d->pname}}"/></p>
                                    <p><input type="hidden" name="proprice" value="{{$d->pprice}}"/></p>
                                    <p>Quantity</p>
                                    <p><input type="number" name="proqty" min="0"/></p>
                                    <input type="submit" value="Add to Cart"  class="w3-button w3-green">
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    </div> 
                </div> 
            </div>
                
             
              
        </section>
    </main>

    <div class="sub-footer">
        <p>Copyright © 2023 Right Shopping Pvt. Ltd.</p>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
    <script>window.jQuery || document.write('<script src="front/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="{{url('/front/js/vendor/bootstrap.min.js')}}"></script>
    
    <script src="{{url('/front/js/datepicker.js')}}"></script>
    <script src="{{url('/front/js/plugins.js')}}"></script>
    <script src="{{url('/front/js/main.js')}}"></script>
</body>
</html>