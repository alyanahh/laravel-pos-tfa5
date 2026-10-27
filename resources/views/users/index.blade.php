@extends('layouts.app')

@section('title', 'User Accounts | POS System')

@section('content')
    <h2>User Accounts</h2>

    <p>List of system users.</p>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Username</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->full_name }}</td>
                    <td>{{ $user->username }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">No users found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <p>Total users: {{ $users->count() }}</p>
@endsection