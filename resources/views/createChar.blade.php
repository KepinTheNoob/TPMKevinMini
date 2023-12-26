<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </head>
  <body>
    <x-navbar/>
        <div class="w-80 d-flex justify-content-center">
            <form action="/create-char1" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                <label for="Character" class="form-label">Character name</label>
                <input type="text" class="form-control" id="Name" name="Name" aria-describedby="emailHelp" value="{{ old('Name') }}">
                @error('Name')
                  <p style="color: red;">The Name field is required.</p>
                @enderror
              </div>
                <div class="mb-3">
                <label for="Element" class="form-label">Element</label><br>
                    <input type="radio" id="Pyro" name="Element" value="Pyro">
                    <label for="Pyro">Pyro</label><br>
                    <input type="radio" id="Cryo" name="Element" value="Cryo">
                    <label for="Cryo">Cryo</label><br>
                    <input type="radio" id="Electro" name="Element" value="Electro">
                    <label for="Electro">Electro</label><br>
                    <input type="radio" id="Hydro" name="Element" value="Hydro">
                    <label for="Hydro">Hydro</label><br>
                    <input type="radio" id="Anemo" name="Element" value="Anemo">
                    <label for="Anemo">Anemo</label><br>
                    <input type="radio" id="Dendro" name="Element" value="Dendro">
                    <label for="Dendro">Dendro</label><br>
                    <input type="radio" id="Geo" name="Element" value="Geo">
                    <label for="Geo">Geo</label>
                    @error('Element')
                      <p style="color: red;">The Element field is required.</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="">Region</label><br>
                    <input type="radio" id="Mondstadt" name="Region" value="Mondstadt">
                    <label for="Mondstadt">Mondstadt</label><br>
                    <input type="radio" id="Liyue" name="Region" value="Liyue">
                    <label for="Liyue">Liyue</label><br>
                    <input type="radio" id="Inazuma" name="Region" value="Inazuma">
                    <label for="Inazuma">Inazuma</label><br>
                    <input type="radio" id="Sumeru" name="Region" value="Sumeru">
                    <label for="Sumeru">Sumeru</label><br>
                    <input type="radio" id="Fontaine" name="Region" value="Fontaine">
                    <label for="Fontaine">Fontaine</label><br>
                    <input type="radio" id="Natlan" name="Region" value="Natlan">
                    <label for="Natlan">Natlan</label><br>
                    <input type="radio" id="Snezhnaya" name="Region" value="Snezhnaya">
                    <label for="Snezhnaya">Snezhnaya</label>
                    @error('Region')
                      <p style="color: red;">The Region field is required.</p>
                    @enderror
                </div>
                <div class="mb-3">
                  <label for="Image" class="form-label">Character Image</label>
                  <input type="file" class="form-control" id="Image" aria-describedby="emailHelp" name="Image">
                  @error('Image')
                    <p style="color: red;">The Image field is required.</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <select class="form-select" aria-label="Default select example" name="CategoryId">
                    <option selected style="display: none;"></option>
                    @foreach ($categories as $c)
                        <option value="{{ $c->CategoryId }}">{{ $c->Name }}</option>
                    @endforeach
                </select>
                @error('CategoryId')
                    <p style="color: red;">The Category field is required.</p>
                @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
  </body>
</html>