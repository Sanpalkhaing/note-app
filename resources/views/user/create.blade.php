@extends('layout.master')
@section('content')
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Create Note</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('note#store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="">Title</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="">Description</label>
                            <input type="text" name="description" class="form-control" required>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Create</button> <br>
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
