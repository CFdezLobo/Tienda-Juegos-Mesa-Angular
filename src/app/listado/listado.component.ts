import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { Juego } from '../models/juego';
import { ServicioJuegosService } from '../servicio-juegos.service';

@Component({
  selector: 'app-listado',
  templateUrl: './listado.component.html',
  styleUrls: ['./listado.component.css']
})
export class ListadoComponent {

  juegos:Juego[] = {} as Juego[];

  constructor(private servicioJuegos:ServicioJuegosService, private router:Router){

  }

  ngOnInit():void{
    this.servicioJuegos.obtenerJuegos().subscribe(res => this.juegos = res);
  }

  verDetalles(j:Juego):void{
    this.router.navigate(["detalles",j.id]);    
  }

}
