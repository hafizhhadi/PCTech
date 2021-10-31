@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Component') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('component:update', $component) }}">
                        @csrf
                        <div class="mb-3">
                          <label for="processor" class="form-label">Processor</label>
                          <input type="text" name="processor" class="form-control" id="processor" placeholder="{{ $component->processor }}">
                        </div>
                        <div class="mb-3">
                            <label for="motherboard" class="form-label">Motherboard</label>
                            <input type="text" name="motherboard" class="form-control" id="processor" placeholder="{{ $component->motherboard }}">
                        </div>
                        <div class="mb-3">
                            <label for="ram" class="form-label">Ram</label>
                            <input type="text" name="ram" class="form-control" id="ram" placeholder="{{ $component->ram }}">
                        </div>
                        <div class="mb-3">
                            <label for="casing" class="form-label">Casing</label>
                            <input type="text" name="casing" class="form-control" id="casing" placeholder="{{ $component->casing }}">
                        </div>
                        <div class="mb-3">
                            <label for="storage" class="form-label">Storage</label>
                            <input type="text" name="storage" class="form-control" id="storage" placeholder="{{ $component->storage }}">
                        </div>
                        <div class="mb-3">
                            <label for="powersupply" class="form-label">Power Supply</label>
                            <input type="text" name="powersupply" class="form-control" id="powersupply" placeholder="{{ $component->powersupply }}">
                        </div>
                        <button type="submit" class="btn btn-success">Submit</a>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection