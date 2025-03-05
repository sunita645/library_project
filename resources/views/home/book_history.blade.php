<!DOCTYPE html>
<html lang="en">

  <head>
 @include('home.css');
  </head>

<body>
@include('home.header');
<div>
    @foreach($data as $data)
    {{$data->book_id}}
    {{$data->book->title}}
    @endforeach

</div>
  @include('home.footer');

  

  </body>
</html>