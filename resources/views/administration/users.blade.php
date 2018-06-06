@extends('administration.layouts.app')
@section('main-content')
            <div class="box-body">
                <table class="table table-striped table-hover">
                    <thead>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    </thead>
                    <tbody>
                    <?php $no=1; ?>
                    @foreach($users as $user)
                        <tr>
                            <th>{{$no++}}</th>
                            <th>{{$user->firstname}}</th>
                            <th>{{$user->lastname}}</th>
                            <th>{{$user->email}}</th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
@endsection
