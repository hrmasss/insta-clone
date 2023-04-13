@extends('layouts.app')
@section('content')
    @foreach ($images->reverse() as $image)
        <x-post :url="asset('storage/uploads/images/' . $image->name)" :caption="$image->caption" />
    @endforeach
@endsection
