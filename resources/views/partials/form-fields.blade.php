<label for="title">
    Title
    <br>
    <input type="text" name="title" value="{{ old('title', $post->title) }}">
    <br>
    @error('title')
    <small>{{ $message }}</small>
    @enderror
</label>
<label for="body">
        <br>
        Body
        <br>
        <textarea name="body" id="" cols="30" rows="10">{{ old('body', $post->body) }}</textarea>
        @error('body')
        <small>{{  $message }}</small>
        @enderror
        <br>
 </label>
