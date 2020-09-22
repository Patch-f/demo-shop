@extends('layouts.app')

@section('content')
  <section>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12 py-4">
          <div class="card">
            <div class="card-header">Создать категорию</div>
            <div class="card-body">
              <form class="" action="{{route('category.store')}}" method="post">
                @csrf
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" required>
                </div>
                @if ($errors->any())
                  <div class="form-group">
                    <div class="alert alert-danger" role="alert">
                      <ul>
                        @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                    </div>
                  </div>
                @endif
                <input class="btn btn-primary" type="submit" value="{{__('Send')}}">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection