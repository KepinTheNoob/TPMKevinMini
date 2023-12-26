<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Read Char</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </head>
  <body>
    <div style="margin-left: 50px">
      <x-navbar/>
      <div class="d-flex">
          @forelse($genshin as $genshins)
              <div class="card" style="width: 18rem; margin: 10px;">
                <img src="{{ $genshins->Image }}" alt="{{ $genshins->Image }}">
                  <h1>{{$genshins->Name}}</h1>
                  <h1>{{$genshins->Element}}</h1>
                  <h1>{{$genshins->Region}}</h1>
                  <div style="display: flex; justify-content:space-around; margin: 20px">
                    <a href="/edit-char/{{ $genshins->id }}"><button class="btn btn-primary">Edit</button></a>
                    <form action="/delete-char/{{ $genshins->id }}" method="POST">
                      @csrf
                      @method('delete')
                      <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                  </div>
              </div>
              <br><br>
          @empty
              <p>DATA IS EMPTY</p>
          @endforelse
      </div>
        <br><br>
      <div class="d-flex justify-content-center">
        {{ $genshin->links() }}
      </div>
    </div>
  </body>
</html>