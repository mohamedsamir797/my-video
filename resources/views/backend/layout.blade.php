
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
   <script src="https://kit.fontawesome.com/863ef1d5b9.js" crossorigin="anonymous"></script>
  </head>
  <body>
         <div class="container-fluid " style="font-family: 'Quicksand', sans-serif;">
           <div class="row">
               <div class="col col-2 bg-dark text-white" style="height:2100px;">
               <h1>Control Room</h1>
               <a href="/admin" class="btn btn-outline-danger btn-block py-3"><i class="fas fa-columns"></i> Dashboard</a>
               <hr>
                @yield('side')
                <a href="{{ route('users.index')}}" class="btn btn-outline-primary btn-block py-3">User</a>
                <a href="{{ route('categories.index')}}" class="btn btn-outline-warning btn-block py-3">categories</a>
                <a href="{{ route('skills.index')}}" class="btn btn-outline-success btn-block py-3">Skills</a>
                <a href="{{ route('tags.index')}}" class="btn btn-outline-info btn-block py-3">Tags</a>
                <a href="{{ route('pages.index')}}" class="btn btn-outline-secondary btn-block py-3">Pages</a>
                <a href="{{ route('videos.index')}}" class="btn btn-outline-primary btn-block py-3">videos</a>
                <a href="{{ route('messeges.index')}}" class="btn btn-outline-warning btn-block py-3">messeges</a>


               </div>

                  <div class="col col-10">
                    <h4>@yield('title')</h4>
                      <div style="height:700px;">
                       <div class="row bg-dark text-white" style="padding:20px;">
                         <div class="col col-9">
                           <h1>@yield('title')</h1>
                           <p>here you can add / edit / delete </p>
                         </div>
                         <div class="col col-3">
                           @yield('button')
                         </div>
                       </div>

                    <div class="row">
                           @yield('content')
                    </div>



                      </div>
                  </div>


                </div>
         </div>


         <footer class="bg-secondary text-center" style="font-size:30px;">
             All righte reversed &copy; mohamed samir | 2020
         </footer>
  </body>
</html>
