import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { JuegoCarrito } from '../models/juegoCarrito';
import { ServicioJuegosService } from '../servicio-juegos.service';

@Component({
  selector: 'app-carrito',
  templateUrl: './carrito.component.html',
  styleUrls: ['./carrito.component.css']
})
export class CarritoComponent {
  juegosCarrito:JuegoCarrito[] = {} as JuegoCarrito[];

  constructor(private servicioJuegos:ServicioJuegosService, private router:Router){}

  ngOnInit():void{
    this.listarJuegosCarrito();
  }

  listarJuegosCarrito():void{
    this.servicioJuegos.obtenerJuegosCarrito().subscribe(res => this.juegosCarrito = res);
  }

  vaciarCarrito():void{
    this.servicioJuegos.vaciarCarrito().subscribe(res => (res=="ok")?this.juegosCarrito=[]:alert("no pude vaciar el carrito") );
    
  }

  realizarPedido():void{
    if(this.listarJuegosCarrito.length === undefined || this.juegosCarrito.length == 0){
      alert("Agrega por lo menos un producto al carrito");
      return;
    }
    this.router.navigate(["pedido"]);
  }

}
