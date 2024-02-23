@extends('admin.parent')
@section('content')

<div class="card p-4">
    <label for="">Name</label>
    <input type="text" value="{{ $vehicle->name }}" class="from-control" disabled>
</div>

<div class="card p-4">
    <label for="">Name</label>
    <input type="text" value="{{ $vehicle->color }}" class="from-control" disabled>
</div>

<div class="card p-4">
    <label for="">Name</label>
    <input type="text" value="{{ $vehicle->wheel }}" class="from-control" disabled>
</div>

<div class="card p-4">
    <label for="">Name</label>
    <input type="text" value="{{ $vehicle->machine }}" class="from-control" disabled>
</div>
<div class="card p-4">
    <label for="">Name</label>
    <input type="text" value="{{ $vehicle->price }}" class="from-control" disabled>
</div>
@endsection