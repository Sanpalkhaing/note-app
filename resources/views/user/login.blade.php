@extends('layout.master')
@section('content')
<form method="POST" action="{{ route('login') }}">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Login Page</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Password</label>
                            <input type="text" name="password" class="form-control">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Sign In</button> <br>
                            <a href="{{ route('register_view') }}" class="text-center mt-3">Register</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
            </tbody>
        </table>
    </div>
    <div class="col-md-3"></div>
</div>
@endsection

