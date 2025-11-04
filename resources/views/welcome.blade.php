@extends('users.layout')

@section('content')
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <h1 class="text-4xl font-bold mb-4">Welcome to the User Management System</h1>
        <p class="text-lg mb-8">Manage your users efficiently and effectively.</p>
        <a href="{{ route('users.index') }}" class="px-6 py-3 bg-blue-600 text-black rounded hover:bg-blue-700 transition">View Users</a>
    </body>
@endsection
