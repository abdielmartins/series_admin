<!doctype html>
<html lang="en">
@extends('layout')

@section('header')
    Add Serie
@endsection

@section('content')
    <form method="post">
        <div class="form-group">
            <label for="nome">Name</label>
            <input type="text" class="form-control" name="nome" id="nome">

        </div>
        <button class="btn btn-dark">Add</button>
    </form>
@endsection
