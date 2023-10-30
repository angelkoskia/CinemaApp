@extends('backend.layouts.app')

@section('content')
    @include('backend.src.tickets.parts.create_new')
    @include('backend.src.tickets.parts.table',['tickets'=>$tickets])
    @include('backend.src.tickets.parts.table',['tickets'=>$disabledTickets])
@endsection
