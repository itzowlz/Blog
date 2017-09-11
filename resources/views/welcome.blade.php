@extends('layout.main')

@section ('title', '| Homepage')


@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1 class="display-3">Welcome to Tips & Tricks</h1>
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra
                    attention to featured content or information.</p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger
                    container.</p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="#" role="button">Popular Posts</a>
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="post">
                <h3>Windows Reg</h3>
                <p>Hello World</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <div class="post">
                <h3>Windows Reg</h3>
                <p>Hello World</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <div class="post">
                <h3>Windows Reg</h3>
                <p>Hello World</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <div class="post">
                <h3>Windows Reg</h3>
                <p>Hello World</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <div class="post">
                <h3>Windows Reg</h3>
                <p>Hello World</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
        </div>
        <div class="col-md-3 col-md-offset-1">
            <h2>SideBar</h2>
        </div>
    </div>

@endsection