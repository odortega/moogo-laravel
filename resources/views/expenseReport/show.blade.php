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
        <a href="/expense_reports/{{$report->id}}/confirmSendMail" class="btn btn-primary">Send Email</a>
    </div>
</div>

<div class="row">
    <div class="col">
        <h3>Details</h3>
        <table class="table">
            @foreach ($report->expenses as $expense)
                <tr>
                    <td>{{$expense->title}}</td>
                    <td>{{$expense->description}}</td>
                    <td>{{$expense->amount}}</td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
<div class="row">
    <div class="col"><a class="btn btn-primary" href="/expense_reports/{{$report->id}}/expenses/create">New Expense</a></div>
</div>

@endsection
