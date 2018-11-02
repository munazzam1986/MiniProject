@extends('layouts.app')

@section('content')
    <h1>contact</h1>

    <form>
        <div class="form-group">
        <label form"email">Email Address</label>
        <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
        </div>

        <div class="form-group">
            <label form"body">Message</label>
            <textarea name="body" class="form-control" id=""body" rows="3"><</textarea>
        </div>
        <button type="submit" class="btn main-btn primary mb-2">Submit</button>
    </form>

@endsection