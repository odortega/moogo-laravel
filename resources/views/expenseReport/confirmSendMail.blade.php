@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col">
        <h1>Send Report</h1>
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
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="/expense_reports/{{$report->id}}/sendMail" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Type a email address" value="{{ old('email') }}">
                    </div>
                    <button class="btn btn-primary" type="submit">Send Mail</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
