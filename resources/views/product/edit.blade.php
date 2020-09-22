@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-12 py-4">
              <div class="card">
                <div class="card-header">Изменить товар {{$product['name']}}</div>
                <div class="card-body">
                  <form class="" action="{{route('product.update',$product['id'])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PATCH') }}
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" id="name" name="name" value="{{$product['name']}}" required>
                    </div>
                    <div class="form-group">
                      <label for="price">Price</label>
                      <input type="text" class="form-control" id="price" name="price" value="{{$product['price']}}" required>
                    </div>
                    <div class="form-group">
                      <h3>Категории</h3>
                      @foreach ($categories as $key => $value)
                        <span>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="{{$value['id']}}" id="attachedCategoriesCheck{{$value['id']}}" name="categories[]" {{( in_array($value['id'], $attached_categories) ? 'checked' : '')}}>
                            <label class="form-check-label" for="attachedCategoriesCheck{{$value['id']}}">
                              <a href="{{route('category.edit',$value['id'])}}">{{$value['name']}}</a>
                            </label>
                          </div>
                        </span>
                      @endforeach
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