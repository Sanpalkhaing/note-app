@extends('layout.master')
@section('content')
<ul class="nav nav-underline">

    <li class="nav-item">

      <a class="nav-link" href="{{ route('note#index') }}">Read</a>
    </li>
</li>
<li class="nav-item">
  <a class="nav-link" href="{{ route('note#create') }}">Insert</a>
</li>

</li>
<li class="nav-item">
  <a class="nav-link" href="#">Update</a>
</li>

</li>
<li class="nav-item">
  <a class="nav-link" href="#">Delete</a>
</li>
