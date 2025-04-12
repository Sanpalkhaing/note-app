@extends('layout.master')
@section('content')
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Login Page</h2>
                </div>
                <div class="card-body">
                    <form action="">
                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Password</label>
                            <input type="text" class="form-control">
                        </div>
                    <div class="text-center"><button type="button" class="btn btn-primary">Sign In</button>
                        <button type="button" class="btn btn-primary">Sign Up</button></div>




                    </form>
                </div>
            </div>
        </div>

                @foreach ($notelogins as $notelogin)
                    <tr>
                        <td>{{ $notelogin->email}}</td>
                        <td>{{ $notelogin->password }}</td>


                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="col-md-3"></div>
</div>
@endsection

        <div class="col-md-3"></div>
    </div>
@endsection
