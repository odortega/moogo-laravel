@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col">
        <h1>New Reports</h1>
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
                <form action="/expense_reports" method="POST">
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Type a title">
                    </div>
                    <button class="btn btn-primary" type="button">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
