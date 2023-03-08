import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
import { Juego } from './models/juego';
import { JuegoCarrito } from './models/juegoCarrito';
import { Pedido } from './models/pedido';

@Injectable({
  providedIn: 'root'
})
export class ServicioJuegosService {

  // Esta ruta es para trabajar en local
  ruta_server = "/server/";
  
  // Esta ruta es para el host
  //ruta_server = "/tienda_angular/server/";

  constructor(private http:HttpClient) { }

  obtenerJuegos():Observable<Juego[]>{
    return this.http.get<Juego[]>(this.ruta_server+"obtenerJuegos.php");
  }

  obtenerJuegoPorId(id:number):Observable<Juego>{
    return this.http.get<Juego>(this.ruta_server+"obtenerJuegoPorId.php?id="+id);
  }

  agregarAlCarrito(idJuego:number, cantidad:number):Observable<any>{
    return this.http.post<any>(this.ruta_server+"agregarProductoCarrito.php",
      {
        "id":idJuego,
        "cantidad": cantidad
      }
    );
  }

  obtenerJuegosCarrito():Observable<JuegoCarrito[]>{
    return this.http.get<JuegoCarrito[]>(this.ruta_server+"obtenerJuegosCarrito.php");
  }

  vaciarCarrito():Observable<string>{
    return this.http.delete<string>(this.ruta_server+"vaciarCarrito.php");
  }

  registrarPedido(p:Pedido):Observable<string>{
    return this.http.post<string>(this.ruta_server+"registrarPedido.php",p);
  }

}
