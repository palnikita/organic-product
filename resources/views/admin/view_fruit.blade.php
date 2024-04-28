<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>

</head>
<body>
@include('admin.nav')
   





<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container mt-5">
            <div class="uh">
                <h2 style="color: green">fruit List</h2>
                <table class="table">
                    <thead>
                        <tr>
                        <th>#</th>
                         
                        <th>Image</th>
                            <th>Fruit No.</th>
                           
                            <th>Name</th>
                            <th>Date</th>
                            <th>Quantity</th>
                            <th>Selling Price</th>
                            <th>Cost Price</th>
                            <th>Description</th>
                          <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($fruit as $fruit)
                        <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                                <img src="{{ asset($fruit->image)}}" alt="fruit Image" width="100">
                            </td>
                            <td>{{ $fruit->prono }}</td>
                            <td>{{ $fruit->name }}</td>
                            <td>{{ $fruit->date }}</td>
                            <td>{{ $fruit->quant }}</td>
                            <td>{{ $fruit->sprice }}</td>
                            <td>{{ $fruit->cprice }}</td>
                            <td>{{ $fruit->description }}</td>
                            <td style="display: flex;
    margin-top: 2rem;">     <form action="{{ route('fruit.destroy', $fruit->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this fruit?')">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-dark">
            <i class="fa-solid fa-trash-can text-white"></i>
        </button>
    </form>
    <button type="button" class="btn btn-success mx-2">
    <a href="{{ route('fruit.edit', ['id' => $fruit->id]) }}">
        <i class="fa-solid fa-pen-to-square text-light"></i>
    </a>
</button>


<td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@include('admin.footer')  
  </body>
</html>

