import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FirstsService} from './firsts.service';
import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { ProfileComponent } from './profile/profile.component';
import { LinkComponent } from './link/link.component';
import { ApplyComponent } from './apply/apply.component';
import { FormsModule } from '@angular/forms';
import { HttpClientModule } from '@angular/common/http';

@NgModule({
  declarations: [
    AppComponent,
    ProfileComponent,
    LinkComponent,
    ApplyComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    FormsModule,
    HttpClientModule
  ],
  providers: [FirstsService],
  bootstrap: [AppComponent]
})
export class  AppModule { }
