import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-studentlist',
  templateUrl: './studentlist.component.html',
  styleUrls: ['./studentlist.component.css']
})
export class StudentlistComponent implements OnInit {
  public StudentDetails:any=[{rollno:"1",name:"Neethu",batch:"S6",department:"MCA"},
                             {rollno:"2",name:"Reeja",batch:"S5",department:"BTECH"},
                             {rollno:"3",name:"Ansu",batch:"S4",department:"BCA"}];
  selstudent:any;
 addStudent(data:any) 
  {
 this.selstudent=data;
 
  }
  constructor() { }

  ngOnInit() {
  }

}
