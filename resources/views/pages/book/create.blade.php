@extends('layouts.app')

@section('title', 'Add Books')

@section('content')
<form action="{{ route('book.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
      <label class="form-label">Book Title</label>
      <input type="text" class="form-control @error('title')
      is-invalid
      @enderror"
        name="title">
      @error('title')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>

    <div class="form-group">
      <label class="form-label">Author</label>
        <input type="text" class="form-control @error('author')
        is-invalid
        @enderror"
          name="author">
        @error('author')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="form-group">
        <label class="form-label">Publisher</label>
        <input type="text" class="form-control @error('publisher')
        is-invalid
        @enderror"
          name="publisher">
        @error('publisher')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="form-group">
        <label class="form-label">Year</label>
        <input type="text" class="form-control @error('year')
        is-invalid
        @enderror"
          name="year">
        @error('year')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="form-group">
        <label class="form-label">Cover</label>
        <input  type="file" class="form-control @error('cover')
        is-invalid
        @enderror"
          name="cover">
        @error('cover')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="form-group">
        <label class="form-label">Description</label>
        <textarea class="form-control @error('description')
        is-invalid
        @enderror" name="description"></textarea>
        @error('description')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="form-group">
        <label class="form-label">Category</label>
        <select class="form-control selectpicker @error('category')
        is-invalid
        @enderror" name="category">
          <option selected disabled>Pick a category</option>
          <option value="Action">Action</option>
          <option value="Romance">Romance</option>
          <option value="Horror">Horror</option>
          <option value="Comedy">Comedy</option>
          <option value="Fantasy">Fantasy</option>
          <option value="Mystery">Mystery</option>
          <option value="Novel">Novel</option>
          <option value="Thriller">Thriller</option>
          <option value="Fiction">Fiction</option>
          <option value="Nonfiction">Nonfiction</option>
          <option value="Others">Others</option>
        </select>
      </div>

    <button type="submit" class="btn btn-primary">Add Book</button>

</form>
@endsection
