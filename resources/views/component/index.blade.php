@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Index Component') }}</div>

                <div class="card-body">
                  
                    <a href="{{ route('component:create') }}" type="button" class="btn btn-info">create</a>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">processor</th>
                            <th scope="col">motherboard</th>
                            <th scope="col">ram</th>
                            <th scope="col">casing</th>
                            <th scope="col">storage</th>
                            <th scope="col">powersupply</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($components as $key => $component )
                          <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $component->processor }}</td>
                            <td>{{ $component->motherboard }}</td>
                            <td>{{ $component->ram }}</td>
                            <td>{{ $component->casing }}</td>
                            <td>{{ $component->storage }}</td>
                            <td>{{ $component->powersupply }}</td>
                            <td><a href="{{ route('component:edit',$component) }}" type="button" class="btn btn-warning">Edit</a></td>
                            <td><a href="{{ route('component:delete',$component) }}" type="button" class="btn btn-danger">Delete</a></td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection