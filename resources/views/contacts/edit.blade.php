@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between mb-2">
        <h3>Contacts</h3>
        <a href="{{route('contacts.index')}}"><button class="btn btn-primary"> Go Back</button></a>
    </div>
    <form action="{{route('contacts.update',$contact)}}" method="post">
        @csrf
        @method("PUT")
        <div class="mb-1">
            <label for="firstname" class="form-label">FirstName</label>
            <input type="text" class="form-control @error('firstname') border-danger @enderror" name="firstname" value="{{$contact->firstname ?? old('firstname')}}" placeholder="Enter firstname">
            @error('firstname') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-1">
            <label for="lastname" class="form-label">LastName</label>
            <input type="text" class="form-control @error('lastname') border-danger @enderror" name="lastname" value="{{$contact->lastname ?? old('lastname')}}" placeholder="Enter lastname">
            @error('lastname') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-1">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control @error('phone') border-danger @enderror" name="phone" value="{{$contact->phone ?? old('phone')}}" placeholder="Enter phone number">
            @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-1">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection
