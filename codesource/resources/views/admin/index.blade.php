@extends('layouts.app')

@section('content')

<div class="set">

    

    <h1> Messages </h1>
    <div class="table">
    <table id="stagiaire">
        <tr>
        <td>Name</td>
        <td>Email</td>
        <td>Date</td>
        <td>Status</td>
        <td>#</td>
        </tr>
        @foreach($users as $user)
        <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->created_at }}</td>
        <td>
            <?php
            if ($user->status == 0){
                echo('Internship Seeker');
            }elseif($user->status == 1){
                echo('Recuiter');
            }
            ?>
        </td>
        <td>
            <form action="{{ route('admin.destroy', $user->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button>Delete</button>
            </form>
        </td>
        </tr>
        @endforeach
    </table>
    </div>

</div>
@endsection