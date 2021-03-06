@extends("layout/app")

@section("content")

    <div class="container">
        <h1>Create new Todo</h1>
    </div>

    @foreach($errors->all() as $error)
        <i>{{$error}}</i>
        <br>
    @endforeach


    {!! Form::open(['method'=>"POST", "action"=>"TodoController@store", "files"=>true]) !!}
        <div class="container" id="formgroup">
        {!! Form::label('name', 'Name :') !!}
        {!! Form::text('name') !!}
<br>
        {!! Form::label('end_date', "End Date :") !!}
        {!! Form::date('end_date') !!}
<br>
        {!! Form::submit('Create') !!}
        </div>
    {!! Form::close() !!}




@endsection
