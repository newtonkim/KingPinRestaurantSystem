<!DOCTYPE html>
<html lang="en">

  <head>
    <base href="/public">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>King Pin Restaurant</title>
<!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    </head>
    
    <body>
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/klassy-logo.png" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                           	
                        <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Chefs</a></li> 
                            <li class="submenu">
                                <a href="javascript:;">Features</a>
                                <ul>
                                    <li><a href="#">Features Page 1</a></li>
                                    <li><a href="#">Features Page 2</a></li>
                                    <li><a href="#">Features Page 3</a></li>
                                    <li><a href="#">Features Page 4</a></li>
                                </ul>
                            </li>
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li> 

                            <li class="scroll-to-section" style="background-color: grey">
                                
                                @auth
                                
                                <a href="{{url('/showcart', Auth::user()->id)}}">

                                    Cart{{$count}}

                                </a>
                                    @endauth

                                    @guest
                                        
                                    Cart[0]

                                    @endguest
                                </a>
                            </li> 
                            <li>
                                @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                    @auth
                                    <li> 
                                        <x-app-layout>
    
                                        </x-app-layout>
                                    </li>
                                    @else
                                       <li> <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>
                
                                        @if (Route::has('register'))
                                           <li> <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                           </li>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                            </li>
                        </ul>        
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div id="top">
        <table class="table table-borderless">
          <thead class="thead-light">
            <tr>
              <th scope="col">Food Name</th>
              <th scope="col">Price</th>
              <th scope="col">Quantity</th>
              <th scope="col">Action</th>
          </thead>
          <tbody>

            <form action="{{url('/confirmorder')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @foreach ($cartdatas as $cartdata)
              <tr>
                <td>
                  <input type="text" name="foodname[]" value="{{$cartdata->title}}" hidden="">
                  {{$cartdata->title}}
                </td>

                <td>
                  <input type="text" name="price[]" value="{{$cartdata->price}}" hidden="">
                  {{$cartdata->price}}
                </td>

                <td>
                  <input type="text" name="quantity[]" value="{{$cartdata->quantity}}" hidden="">
                  {{$cartdata->quantity}}
                </td>
                
              </tr>
            @endforeach

            @foreach ($datas as $data)
            <tr style="position: relative; top: -155px; right: -990px;">
              <td><a href="{{url('/deletecart', $data->id)}}" class="btn btn-danger">Delete</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>

    </div>

  <hr>
    <div align="center" style="padding: 10px;">
      <button class="btn btn-primary" type="button" id="order">Order Now</button>
    </div>

    <hr>
    <div id="appear" align="center" style="padding: 10px; display: none;">

        <div class="form-group" style="padding: 10px;">
            <label for="name" class="form-label">Name</label>
            <input class="form-control" type="text" name="name" placeholder="Name">
        </div>

        <div class="form-group" style="padding: 10px;">
            <label for="name">Phone Number</label>
            <input class="form-control" type="number" name="phone" placeholder="Phone Number">
        </distyle=>

        <div class="form-group"  <div style="padding: 10px;">
          <label for="name">Address</label>
          <input class="form-control" type="text" name="address" placeholder="Address">
        </div>
    
        <div class="form-group" style="padding: 10px;">
          <input class="btn btn-success" type="submit" value="Confirm Order">
        </div>
        <div>
          <button id="close" type="button" class="btn btn-danger">Cancel</button>
        </div>
      </div>  

    </form>
 


    <script type="text/javascript">

        $("#order").click(
            function()
            {
              $("#appear").show();
            }
        );  

        $("#close").click(
            function()
            {
              $("#appear").hide();
            }
        );  

    </script>

  
    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
  </body>
</html>
