import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import{ LinkComponent } from './link/link.component';
import { ProfileComponent} from './profile/profile.component';
import { ApplyComponent} from './apply/apply.component';

//import { link } from 'fs';
//import { AppComponent } from './app.component';

const routes: Routes = [{path:'home',component:LinkComponent},
{path:'login',component:ProfileComponent},
{path:'apply',component:ApplyComponent}];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
