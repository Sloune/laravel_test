@extends('layouts.default')

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                @foreach($categories as $category)
                        <div class="info-box">
                            <div class="card-title"><h3>{{ $category->title }}</h3></div>
                            <div class="card-title">
                                <h4>
                                    <pre>{{ $category->list }}</pre>
                                </h4>
                            </div>
                            <div class="card-text">
                                Created At: {{ $category->created_at->diffForHumans() }}
                            </div>
                        </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection