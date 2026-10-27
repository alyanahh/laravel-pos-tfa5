@extends('layouts.app')

@section('title', 'Customer Accounts | POS System')

@section('content')
    <h2>Customer Accounts</h2>

    <p>List of registered customers in the POS Management System.</p>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Customer Name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($customers as $customer)
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->full_name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->phone }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No customers found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <p>Total customers: {{ $customers->count() }}</p>
@endsection