<table border="1">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>ROLLNO</td>
                    <td>NAME</td>
                    <td>ADDRESS</td>
                    <td>EMAILID</td>
                    <td>CONTACTNO</td>
                </tr>
            </thead>  
            <tbody>
                @foreach($studentsdetails as $student)
                <tr>
                    <td>{{$student->id}}</td>
                        <td>{{$student->rollno}}</td>
                        <td>{{$student->name}}</td>
                        <td>{{$student->address}}</td>
                        <td>{{$student->emailid}}</td>
                        <td>{{$student->contactno}}</td>
                        <td>
                            <a href="{{route('student.edit',$student->id)}}">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('student.destroy',$student->id)}}" method="post">
                                @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                            </form>
                        </td>
                </tr>
                @endforeach
            </tbody>
 </table>