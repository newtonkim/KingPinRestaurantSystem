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
          <div class="py-5 my-5">
            <form action="{{url('/uploadchef')}}" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="form-group">
                  <label for="name">Name</label>
                  <input style="color:white;" type="text" class="form-control" name="name" placeholder="Insert name here" required>
                </div>

                <div class="form-group">
                  <label for="speciality">Speciality</label>
                  <input style="color:white; type="text" class="form-control" name="speciality" placeholder="Insert speciality here" required>
                </div>

                <div class="form-group">
                  <label for="image">Image</label>
                  <input type="file" class="form-control-file" name="image">
                </div>
                <button type="submit" class="btn btn-primary">Add Chef</button>
            </form>
          </div>
        </div>

        <table class="table">
          <thead class="thead-light">
            <tr>
              <th scope="col">Chef's Name</th>
              <th scope="col">Speciality</th>
              <th scope="col">Image</th>
              <th scope="col">Delete</th>
              <th scope="col">Update</th>
            </tr>
          </thead>
          <tbody>

            @foreach ($users as $user)
              <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->speciality}}</td>
                <td><img src="/chefimage/{{$user->image}}"></td>
                <td><a href="{{url('/deletechef', $user->id)}}"> <button class="btn btn-danger">Delete</button></a></td>
                <td><a href="{{url('/updatechef', $user->id)}}"><button class="btn btn-info">Update</button></a></td>

              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    @include("admin.adminscript")
  </body>
  </html>
</body>
</html>