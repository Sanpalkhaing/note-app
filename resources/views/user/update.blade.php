@extends('layout.master')
@section('content')
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Update Note</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('note#update', $note->id) }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="">Title</label>
                            <input type="text" name="title" class="form-control" value="{{ $note->title }}">
                        </div>
                        <div class="mb-3">
                            <label for="">Description</label>
                            <input type="text" name="description" class="form-control" value="{{ $note->description }}">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Update</button> <br>
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

