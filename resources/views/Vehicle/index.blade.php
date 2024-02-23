@extends('admin.parent')
@section('content')
<div class="">
    <a href="{{ route('vehicle.create') }}" class="p-3 bg-success rounded">Create</a>
</div>

{{-- table User --}}
<div class="card p-4 mt-5">
    <h5 class="fw-bold">Users</h5>
    <table class="table">
        <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Gender</th>
            <th>action</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
</div>
@endsection