import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.css']
})
export class HeaderComponent implements OnInit {
  menuItems=[
 {linkId: 1,linkName:'Home'},
 {linkId: 2,linkName:'Gallery'},
 {linkId: 3,linkName:'Contact'},
 {linkId: 4,linkName:'Cart'}

 ];
  constructor() { }

  ngOnInit(): void {
  }

}
