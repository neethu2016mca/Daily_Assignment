<table border="1">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>TITLE</td>
                    <td>BODY</td>
        
                </tr>
            </thead>  
            <tbody>
                @foreach($booksdetails as $book)
                <tr>
                    <td>{{$book->id}}</td>
                        <td>{{$book->title}}</td>
                        <td>{{$book->body}}</td>
                        <td>
                            <a href="{{route('book.edit',$book->id)}}">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('book.destroy',$book->id)}}" method="post">
                                @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                            </form>
                        </td>
                </tr>
                @endforeach
            </tbody>
 </table>
