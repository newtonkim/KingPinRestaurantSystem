<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>King Pin Restaurant</title>
</head>
<body>
  <x-app-layout>
    
  </x-app-layout>
  
  <!DOCTYPE html>
  <html lang="en">
    <base href="/public">

    @include('admin.admincss')

  </head>
  <body>
    <div class="container-scroller">

      @include("admin.navbar")

      <div class="container">
        <div row>
          <div class="py-5 my-5">
            <form action="{{url('/customerupdateorder', $orders->id)}}" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="form-group">
                  <label for="foodname"><strong>Name</strong></label>
                  <input type="text" class="form-control" name="name" value="{{$orders->name}}">
                </div>

                <div class="form-group">
                  <label for="foodname"><strong>Phone Number</strong></label>
                  <input type="text" class="form-control" name="phone" value="{{$orders->phone}}">
                </div>

                <div class="form-group">
                  <label for="foodname"><strong>Address</strong></label>
                  <input type="text" class="form-control" name="address" value="{{$orders->address}}">
                </div>

                <div class="form-group">
                  <label for="foodname"><strong>Food Name</strong></label>
                  <input type="text" class="form-control" name="foodname" value="{{$orders->foodname}}">
                </div>

                <div class="form-group">
                  <label for="speciality"><strong>Price</strong></label>
                  <input type="text" class="form-control" name="price" value="{{$orders->price}}">
                </div>

                <div class="form-group">
                  <label for="speciality"><strong>Quantity</strong></label>
                  <input type="text" class="form-control" name="quantity" value="{{$orders->quantity}}">
                </div>


                <button type="submit" class="btn btn-primary">Update Order</button>
            </form>
      </div>
    </div>
    @include("admin.adminscript")
  </body>
  </html>
</body>
</html>