@@extends('layouts.app')
@section('content')
    <h1 style="text-align: center"> Hello {{ Auth::user()->name }}, Selamat datang di Dashboard Frontend</h1>
@endsection