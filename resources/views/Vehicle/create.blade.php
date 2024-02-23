@extends('admin.parent')
@section('content')
<div class="card p-4">
    <h1>Create Vehicle</h1>

    <form action="{{ route('vehicle.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="form-floating mb-3">
              <label for="floating-input">Nama</label>
            <input type="" class="form-control" id="floatingInput" placeholder="Name Vehicle" name="name">
        </div>

        <div class="form-floating mb-3">
              <label for="floating-input">Color</label>
            <input type="" class="form-control" id="floatingInput" placeholder="Color" name="color">
        </div>

        <div class="form-floating mb-3">
              <label for="floating-input">Ban</label>
            <input type="" class="form-control" id="floatingInput" placeholder="Wheel" name="wheel">
        </div>

        <div class="form-floating mb-3">
              <label for="floating-input">Mesin</label>
            <input type="" class="form-control" id="floatingInput" placeholder="Mesin" name="machine">
        </div>

        <div class="form-floating mb-3">
              <label for="floating-input">Harga</label>
            <input type="" class="form-control" id="floatingInput" placeholder="Harga" name="price">
        </div>

        <button type="submit" class="btn btn-primary">Craete</button>
    </form>
</div>
@endsection