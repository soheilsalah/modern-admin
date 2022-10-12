@extends('admin.layouts.app',[
    'title' => 'Index',
    'active' => 'my-projects.form-builder.index',
    'breadcrumb' => [
        'title' => 'my-projects/form-builder/index',
        'map' => [],
    ]
])

@section('styles')
@endsection

@section('content')
<!-- Description -->
<section id="description" class="card">
    <div class="card-header">
        <h4 class="card-title">Index</h4>
    </div>
    <div class="card-content">
        <div class="card-body">
            <div class="card-text">
                <!-- Write something good -->
            </div>
        </div>
    </div>
</section>
<!--/ Description -->
@endsection

@section('scripts')
@endsection