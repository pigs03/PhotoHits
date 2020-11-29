@extends('layout')
<form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <input type="text" name="title" value="">
  <textarea name="content" id="content" cols="60" rows="10"></textarea>
  <input type="file" name="img" accept="image/*">
  <input type="submit" value="送信" class="btn">
</form>