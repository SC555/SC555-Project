import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { HeaderComponent } from './components/layout/header/header.component';
import { FooterComponent } from './components/layout/footer/footer.component';
import { LoginComponent } from './components/pages/login/login.component';
import { HomeComponent } from './components/pages/home/home.component';
import { RegisterComponent } from './components/pages/register/register.component';
import { MycartComponent } from './components/pages/mycart/mycart.component';
import { ShopComponent } from './components/pages/shop/shop.component';
import { ContactComponent } from './components/pages/contact/contact.component';

const routes: Routes = [
 { path: 'login', component: LoginComponent },

{ path: 'home', component: HomeComponent},

{ path: 'register', component : RegisterComponent},

{ path: 'mycart', component : MycartComponent},

{ path: 'shop', component : ShopComponent},
{ path: 'contact', component : ContactComponent}


];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
