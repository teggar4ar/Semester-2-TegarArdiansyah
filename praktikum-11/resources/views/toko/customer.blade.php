@extends('template/admin/index')


@section('content')

<h1>Customers</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Customer</th>
                <th scope="col">Alamat</th>
                <th scope="col">NO HP</th>
            </tr>
        </thead>
        <tbody>

            @php $id = 1; @endphp
            @foreach ($customers as $customer)

            <tr>
                <td> {{ $id }} </td>
                <td> {{ $customer->name }} </td>
                <td> {{ $customer->address }} </td>
                <td> {{ $customer->no_hp }} </td>
            </tr>

            @php $id++  @endphp
            @endforeach

        </tbody>
    </table>

@endsection
