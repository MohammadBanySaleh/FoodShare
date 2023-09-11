<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <!-- resources/views/pdf.blade.php -->
  <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container">
                    
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="padding: 20px">NAME</th>
                                    <th style="padding: 20px">description</th>
                                    <th style="padding: 20px">price</th>
                                    <th style="padding: 20px">quantity</th>
                                    {{-- <th style="padding: 20px">image</th> --}}
                                    <!-- Add more columns if needed -->
                                </tr>
                            </thead>
                            <tbody>
                                 
                            <?php
                                // $user_id = auth()->user()->id;
                                // $test = UserDonation::where('user_id', $user_id)->get();
                                ?>
                                @foreach ($donation as $item)
                                    <tr>
                                        <td>{{ $item->donation->name }}</td>
                                        <td>{{ $item->donation->description }}</td>
                                        <td>{{ $item->donation->price }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        {{-- <td>{{ $donation->donation->image }}</td> --}}
                                        <!-- Add more columns if needed -->
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>