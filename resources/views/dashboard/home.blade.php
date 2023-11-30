@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
  <section class="section">
    <div class="section-header">
      <h1>Homepage</h1>
    </div>
    <div class="section-body">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h2>Hi, {{auth()->user()->name}}</h2></div>
                    <div class="card-body">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                {{ $message }}
                            </div>
                        @else
                            <div class="alert alert-success">
                                You are logged in!
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
@endsection

@section('sidebar')
  @parent
@endsection
