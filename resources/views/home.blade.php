

@extends('frontend.templates.default')

@section('content')
<div class="row">
<h1>Buku yang sedang dipinjam</h1>

@foreach($books as $book)
<div class="card horizontal hoverable">
      <div class="card-image">
        <img src="{{$book->getCover()}}" height="200px" width="120px">
      </div>
      <div class="card-stacked">
        <div class="card-content">
        <h6><a href="{{route('book.show',$book->id)}}">{{Str::limit($book->title,15)}}</a></h6>
          <p>{{Str::limit($book->description,100)}}</p>
        </div>
      </div>
    </div>
@endforeach
</div>

@endsection
