import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-profile',
  templateUrl: './profile.component.html',
  styleUrls: ['./profile.component.css']
})
export class ProfileComponent implements OnInit {
  user:any;
  check:boolean=true;
  constructor() { 
    this.user={name:'NEETHU C JOSEPH',
  job:'Student',
    address:'Chennattu(H) , Vadaserikara p.o , pta', 
  
  phone:
  ['9000000670']};
  }
togglecheck(){
  this.check=!this.check;
}
  ngOnInit() {
  }

}


