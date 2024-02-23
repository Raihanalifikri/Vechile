@extends('admin.parent')
@section('content')
<div class="">
    <a href="{{ route('vehicle.create') }}" class="p-3 bg-success rounded">Create</a>
</div>

{{-- table User --}}
<div class="card p-4 mt-5">
    <h5 class="fw-bold">Users</h5>
    <table class="table">
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>Color</th>
                <th>wheel</th>
                <th>Machine</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vehicle as $v)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $v->name }}</td>
                <td>{{ $v->color }}</td>
                <td>{{ $v->wheel }}</td>
                <td>{{ $v->machine }}</td>
                <td>{{ $v->price }}</td>
                <td></td>
            </tr>
            @endforeach
           
        </tbody>
    </table>
</div>
@endsection