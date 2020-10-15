@extends('benefis.layout')
{{--//Directory.file--}}

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>" Azr Program "</h2>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="pull-right">
        <a class="btn btn-success" href="{{ route('benefis.create') }}"> Start </a>
    </div>

{{--    {!! $products->links() !!}--}}

@endsection
