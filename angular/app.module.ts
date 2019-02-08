import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { Head1Component } from './head1/head1.component';
import { HeadComponent } from './head/head.component';
import { HeaderComponent } from './header/header.component';
import { DateComponent } from './date/date.component';
import { AboutComponent } from './about/about.component';

@NgModule({
  declarations: [
    AppComponent,
    Head1Component,
    HeadComponent,
    HeaderComponent,
    DateComponent,
    AboutComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
