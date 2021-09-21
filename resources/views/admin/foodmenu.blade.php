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
    @include('admin.admincss')
  </head>
  <body>
    <div class="container-scroller">

      @include("admin.navbar")

      <div class="container">
        <div row>
          <div class="py-4 my-5">
            <form action="{{url('/uploadfood')}}" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control" name="title" placeholder="Insert title here" required>
                </div>

                <div class="form-group">
                  <label for="description">Description</label>
                  <input type="text" class="form-control" name="description" placeholder="Insert description here" required>
                </div>

                <div class="form-group">
                  <label for="title">Price</label>
                  <input type="number" class="form-control" name="price" placeholder="Ugx 1000" required>
                </div>

                <div class="form-group">
                  <label for="image">Image</label>
                  <input type="file" class="form-control-file" name="image">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
          <hr style="border: 10px; border-top: 1px solid rgb(255, 255, 255);">
          <div>
            <table class="table">
              <thead class="thead-light">
                <tr>
                  <th scope="col">Food Name</th>
                  <th scope="col">Description</th>
                  <th scope="col">Price</th>
                  <th scope="col">Image</th>
                  <th scope="col">Delete</th>
                  <th scope="col">Update</th>
                </tr>
              </thead>
              <tbody>

                @foreach ($users as $user)
                  <tr>
                    <td>{{$user->title}}</td>
                    <td>{{$user->description}}</td>
                    <td>{{$user->price}}</td>
                    <td><img src="/foodimage/{{$user->image}}"></td>
                    <td><a href="{{url('/deletemenu', $user->id)}}"> <button class="btn btn-danger">Delete</button></a></td>
                    <td><a href="{{url('/updatemenu', $user->id)}}"><button class="btn btn-info">Update</button></a></td>

                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    @include("admin.adminscript")
  </body>
  </html>
</body>
</html>