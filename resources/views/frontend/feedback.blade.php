@extends('layouts.frontend')
@section('title','Feedback')
@section('content')
<br>
<div class="container">
    <div class="col-md-6">
        <h3>Umpan Balik Kami</h3><br>
        <form class="" data-parsley-validate method="POST" action="{{route('submit.feedback')}}">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Nama*</label>
                @guest
                <input data-parsley-trigger="change" value="{{old('name')}}" required type="text" class="form-control"
                    id="exampleInputEmail1" name="name" aria-describedby="nameHelp" placeholder="Enter name">
                @else
                <input data-parsley-trigger="change" required type="text" class="form-control" id="exampleInputEmail1"
                    value="{{Auth::user()->name}}" name="name" aria-describedby="nameHelp" placeholder="Enter name">
                @endguest

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address*</label>
                @guest
                <input data-parsley-trigger="change" value="{{old('email')}}" required type="email" class="form-control"
                    id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                @else
                <input data-parsley-trigger="change" required type="email" class="form-control" id="exampleInputEmail1"
                    value="{{Auth::user()->email}}" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                @endguest

            </div>
            <div class="form-group">
                Message<small>(optional)</small> <textarea name="message" class="form-control"
                    id="exampleFormControlTextarea1" rows="3">{{old('message')}}</textarea>
                   
            </div>
            <div class="form-group">
                Beri Umpan Balik* <br>
                <input required type="radio" name="feedback" value="5"> Sangat Baik<br>
                <input required type="radio" name="feedback" value="4"> Baik<br>
                <input required type="radio" name="feedback" value="3"> Oke<br>
                <input required type="radio" name="feedback" value="2"> Buruk<br>
                <input required type="radio" name="feedback" value="1"> Sangat Buruk<br>
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </div>
</div>
<br>
@endsection