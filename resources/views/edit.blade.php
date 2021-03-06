@extends("layout/app")

@section("content")

    <div class="container">
        <h1>Edit Todo</h1>
    </div>

<br>
    @foreach($errors->all() as $error)
        <i>{{$error}}</i>
        <br>
    @endforeach

    {!! Form::model($todo,["method"=>"PUT","action"=>["TodoController@update", $todo->id]]) !!}
    {{csrf_field()}}
    <div class="container" id="formgroup">
        {!! Form::label("name", "Name : ") !!}
        {!! Form::text("name", $todo->name) !!}
<br>
        {!! Form::label("end_date", "End Date : ") !!}
        {!! Form::date("end_date", $todo->end_date) !!}
<br>
        {!! Form::hidden("id", $todo->id) !!}
        {!! Form::submit("Update") !!}

    {!! Form::close() !!}
<br>
<br>
    {!! Form::open(["method"=>"DELETE", "action"=>["TodoController@destroy",$todo->id]]) !!}
        {!! Form::submit("Delete") !!}
    {!! Form::close() !!}
    </div>
@endsection
