@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <h3>Welcome {{ Auth::user()->name }}</h3>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-m-6 col-lg-3">
            <nav>
                <ul>
                    <li>
                        <a href="posts/add">Manage Posts</a>
                    </li>
                    <li>
                    <a href="/posts">The Posts</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
@endsection
