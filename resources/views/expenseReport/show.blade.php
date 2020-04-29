@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col">
        <h1>Report: {{$report->title}}</h1>
    </div>
</div>

<div class="row">
    <div class="col">
        <a href="/expense_reports" class="btn btn-secondary">Back</a>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="row">
            <div class="col">
                <form action="/expense_reports/{{$report->id}}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Type a title">
                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
