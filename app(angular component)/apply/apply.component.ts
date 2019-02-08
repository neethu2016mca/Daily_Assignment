import { Component, OnInit } from '@angular/core';
import { student} from '../student';
import { NgForm} from '@angular/forms';
import { FirstsService} from '../firsts.service';
@Component({
  selector: 'app-apply',
  templateUrl: './apply.component.html',
  styleUrls: ['./apply.component.css']
})
export class ApplyComponent implements OnInit {
student = new student();
isRegistered = false;
  constructor(private applyservice:FirstsService) { }

  ngOnInit() {
  }
apply(f:NgForm)
{
  this.applyservice.store(this.student).subscribe(data=>
  {
    this.isRegistered=true;
    console.log("Registered Successfully");
    f.reset();
  },
  (err)=>{this.isRegistered=false;
  });

}
}
