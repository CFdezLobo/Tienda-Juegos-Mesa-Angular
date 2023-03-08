import { Component } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';
import { Juego } from '../models/juego';
import { ServicioJuegosService } from '../servicio-juegos.service';

@Component({
  selector: 'app-juego-detalles',
  templateUrl: './juego-detalles.component.html',
  styleUrls: ['./juego-detalles.component.css']
})
export class JuegoDetallesComponent {

   id_juego:number = -1;
   juego:Juego = {} as Juego;
   mensaje:String = "";
   cantidad:number = 1;
   numeroImagen = 1;
 
   constructor(private servicioJuegos:ServicioJuegosService, private activatedRoute:ActivatedRoute, private router:Router){ }
 
   ngOnInit():void{
     this.id_juego = Number(this.activatedRoute.snapshot.paramMap.get("id"));
     this.mensaje = "mostrar detalles del registro de id: " + this.id_juego;
     this.servicioJuegos.obtenerJuegoPorId(this.id_juego).subscribe(res => this.juego = res);
   }
 
   agregar_producto_al_carrito():void{

    alert("cantidad es:" + this.cantidad);
 
     // Llamar a una operacion del servicio de angular para indicar al server que id de producto va al carrito
 
     this.servicioJuegos.agregarAlCarrito(this.id_juego, this.cantidad).subscribe(res => (res=="ok")
     ?alert("producto agregado al carrito"):alert("no se pudo agregar el producto al carrito"));

     this.router.navigate(["listado"]);  
 
   }

   changeImage(element:any) {
    this.numeroImagen = element;
  }
 
}
