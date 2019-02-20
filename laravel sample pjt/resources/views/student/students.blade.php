<form method="post" action="{{route('student.store')}}">
    @csrf
    <label>Rollno</label> 
    <input type="text" name="rollno"/>
    <br>
     <label>Name</label> 
    <input type="text" name="name"/>
    <br>
    <label>Address</label> 
    <input type="text" name="address"/>
    <br>
    <label>Emailid</label> 
    <input type="text" name="emailid"/>
    <br>
    <label>Contactno</label> 
    <input type="text" name="contactno"/>
    <br>
    <button type="submit">Add</button>
    
</form>

