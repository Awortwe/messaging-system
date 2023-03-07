@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Inbox') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  <form action="" method="POST">
                    <div class="mb-3">
                        <label for="to">To</label>
                        <select name="to" id="to" class="form-control">
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }} {{ $user->email }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="subject">Subject</label>
                        <input type="text" name="subject" id="subject" class="form-control" placeholder="Enter subject">
                    </div>
                    <div class="mb-3">
                        <label for="body">Body</label>
                        <textarea name="body" id="body" placeholder="Enter body" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
