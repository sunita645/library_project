<!DOCTYPE html>
<html>
  <head> 
   @include('admin.css');

   <style type="text/css">

    .table_center{
        text-align: center;
        margin: auto;
        border: 1px solid yellowgreen;
        margin-top: 50px;
    }

    th{
        background-color: skyblue;
        padding: 10px;
        font-size: 20px;
        font-weight: bold;
        color: black;
    }
    .img_author{
      width:80px;
      border-radius: 30%;

    }



   </style>
  </head>
  <body>
   @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            

            <div>
                <table class="table_center">
                    <tr>
                        <th>Book Title</th>
                        <th>Author Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Author Image</th>
                        <th>Book Image</th>
                        
                    </tr>
                    
                    @foreach ($book as $book)
                    <tr>
                      <td>{{$book->title}}</td>
                      <td>{{$book->author_name}}</td>
                      <td>{{$book->price}}</td>
                      <td>{{$book->quantity}}</td>
                      <td>{{$book->description}}</td>
                      <td></td>

                      <td>
                        <img class="img_author" src="author/{{$book->author_img}}">
                      </td>



                      <td></td>
                  </tr>
                    @endforeach
                    

                    
                </table>
            </div>

          </div>
        </div>
      </div>

      @include('admin.footer')
  </body>
</html>