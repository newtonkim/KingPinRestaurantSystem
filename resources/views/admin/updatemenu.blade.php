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
            <form action="{{url('/update', $users->id)}}" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control" name="title" value="{{$users->title}}">
                </div>

                <div class="form-group">
                  <label for="description">Description</label>
                  <input type="text" class="form-control" name="description" value="{{$users->description}}">
                </div>

                <div class="form-group">
                  <label for="title">Price</label>
                  <input type="number" class="form-control" name="price" value="{{$users->price}}">
                </div>

                <div class="form-group">
                  <label for="image">Old Image</label>
                 <img height="150px" width="150px" src="/foodimage/{{$users->image}}">
                </div>
                
                <div class="form-group">
                  <label for="image">New Image</label>
                  <input type="file" class="form-control-file" name="image" required>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
      </div>
    </div>
    @include("admin.adminscript")
  </body>
  </html>
</body>
</html>