@extends('administration.layouts.app')
@section('main-content')

    <div class="box-body">
        @if(!empty($invalidusers))
        <table class="table table-striped table-hover">
            <thead>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            </thead>
            <tbody>
            <?php $no=1; ?>

            @foreach($invalidusers as $user)
                <tr>
                    <th>{{$no++}}</th>
                    <th>{{$user->firstname}}</th>
                    <th>{{$user->lastname}}</th>
                    <th>{{$user->email}}</th>
                </tr>
            @endforeach

            </tbody>

        </table>
            @else
            <p>There are no any Invalid users</p>
            @endif


    </div>
@endsection
