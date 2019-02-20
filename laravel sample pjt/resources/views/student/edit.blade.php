<form method="post" action="{{ route('student.update',$students->id)}}">
    @method('PATCH')
    @csrf
    <label>Rollno</label> 
    <input type="text" name="rollno" value={{ $students->rollno}}>
    <br>
     <label>Name</label> 
    <input type="text" name="name" value={{ $students->name}}>
    <br>
    <label>Address</label> 
    <input type="text" name="address" value={{ $students->address}}>
    <br>
     <label>Emailid</label> 
    <input type="text" name="emailid" value={{ $students->emailid}}>
    <br>
    <label>Contactno</label> 
    <input type="text" name="contactno" value={{ $students->contactno}}>
    <br>
    <button type="submit">Update</button>
    
</form>