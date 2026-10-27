
@extends('layouts.app')

@section('title', 'User Accounts | POS System')

@section('content')
    <h2>User Accounts</h2>

    <p>List of system users and their assigned roles.</p>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Role</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user['id'] }}</td>
                    <td>{{ $user['name'] }}</td>
                    <td>{{ $user['username'] }}</td>
                    <td>{{ $user['email'] }}</td>
                    <td>{{ $user['role'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <p>Total users: {{ count($users) }}</p>
@endsection
