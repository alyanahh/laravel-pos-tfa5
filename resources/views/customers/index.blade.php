
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
                <th>Status</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer['id'] }}</td>
                    <td>{{ $customer['name'] }}</td>
                    <td>{{ $customer['email'] }}</td>
                    <td>{{ $customer['phone'] }}</td>
                    <td>{{ $customer['status'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <p>Total customers: {{ count($customers) }}</p>
@endsection
