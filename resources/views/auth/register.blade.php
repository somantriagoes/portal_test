@extends("layouts.custom")

@section("title", "Register")

@section("content")
<div class="container mt-5">
    <div class="row">
      <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
        <div class="login-brand">
          <!-- <img src="{{ asset('assets/img/DKI_logo.png') }}" alt="logo" width="100" class="shadow-light rounded-circle"> -->
        </div>

        <div class="card card-primary">
          <div class="card-header"><h4>FORM REGISTRASI USER</h4></div>

          <div class="card-body">
            <form action="#" method="POST">
              @csrf
              <div class="row">
                <div class="form-group col">
                  <label for="name">Your Name</label>
                  <div>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                      @if ($errors->has('name'))
                          <span class="text-danger">{{ $errors->first('name') }}</span>
                      @endif
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="form-group col">
                  <label for="email">Email</label>
                  <div>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                      @if ($errors->has('email'))
                          <span class="text-danger">{{ $errors->first('email') }}</span>
                      @endif
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="form-group col">
                  <label for="password" class="d-block">Password</label>
                  <div>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                      @if ($errors->has('password'))
                          <span class="text-danger">{{ $errors->first('password') }}</span>
                      @endif
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="form-group col">
                  <label for="password_confirmation" class="d-block">Password Confirmation</label>
                  <div>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                  </div>
                </div>
              </div>

              <div class="form-group text-right">
                <button type="submit" class="btn btn-success btn-lg">
                  REGISTER
                </button>
                <a href="\" class="btn btn-primary btn-lg">
                    LOGIN
                  </a>
              </div>

            </form>
          </div>
        </div>
        <div class="simple-footer">
          Copyright &copy; Agus Somantri 2023
        </div>
      </div>
    </div>
  </div>
@endsection
