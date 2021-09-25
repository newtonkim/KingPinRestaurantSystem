<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head> 
    @include('admin.admincss')
  </head>
  <body>
    <div class="container-scroller">

    @include("admin.navbar")

    <div class="container">
      <div row>
        <div class="py-2 my-5">
          <h1 class="align-text-center py-3">Customer Order</h1>
            <table class="table">
              <thead class="thead-light">
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Phone</th>
                  <th scope="col">Address</th>
                  <th scope="col">Food Name</th>
                  <th scope="col">Price</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">Total Price</th>
                  <th scope="col">Update</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
              <tbody>

                @foreach ($orders as $order )
                  <tr>
                    <td class="text-white">{{$order->name}}</td>
                    <td class="text-white">{{$order->phone}}</td>
                    <td class="text-white">{{$order->address}}</td>
                    <td class="text-white">{{$order->foodname}}</td>
                    <td class="text-white">Ugx {{$order->price}}</td>
                    <td class="text-white">{{$order->quantity}}</td>
                    <td class="text-success">Ugx {{$order->price * $order->quantity}}</td>
                    <td> <a href="{{URL('/updateorder', $order->id)}}"><button class="btn btn-primary">Update</button></a></td>
                    <td> <a href=""><button class="btn btn-danger">Delete</button></a></td>

                </tr> 
                @endforeach
              </tbody>
            </table>
        </div>
      </div>
    </div>

   @include("admin.adminscript")
   
  </body>
</html>