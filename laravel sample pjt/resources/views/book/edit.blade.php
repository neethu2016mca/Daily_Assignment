<form method="post" action="{{ route('book.update',$books->id)}}">
    @method('PATCH')
    @csrf
    <label>Title</label> 
    <input type="text" name="title" value={{ $books->title}}>
    <br>
     <label> Body</label> 
    <input type="text" name="body" value={{ $books->body}}>
    <br>
    <button type="submit">Update</button>
    
</form>
