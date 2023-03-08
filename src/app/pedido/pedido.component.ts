import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { Pedido } from '../models/pedido';
import { ServicioJuegosService } from '../servicio-juegos.service';

@Component({
  selector: 'app-pedido',
  templateUrl: './pedido.component.html',
  styleUrls: ['./pedido.component.css']
})
export class PedidoComponent {

  pedido:Pedido = {} as Pedido;

  nombreOk = true;
  emailOk = true;
  dniOk = true;
  nTarjetaOk = true;
  direccionOk = true;
  provinciaOk = true;
  cpOk = true;

  constructor(private servicioJuegos:ServicioJuegosService, private router:Router){}

  finalizarPedido():void{
    alert("pedido.nombre: " + this.pedido.nombre);
    if(this.validarForm()){
      // alert("Antes de mandar al server, aquí hay que validar");
      this.servicioJuegos.registrarPedido(this.pedido).subscribe(res => (res=="ok")?this.pedidoOk():alert("No se pudo registrar tu pedido"));
    }
  }

  pedidoOk(){
    alert("Pedido realizado correctamente, puede seguir comprando");
    this.router.navigate(["listado"]);
  }

  validarForm(){
    // Nombre Completo
    if(this.pedido.nombre === undefined){
      alert("Debes rellenar el campo de Nombre");
      this.nombreOk = false;
      return false;
    }
    if( /^([A-Za-zÑñÁáÉéÍíÓóÚú]+['\-]{0,1}[A-Za-zÑñÁáÉéÍíÓóÚú]+)(\s+([A-Za-zÑñÁáÉéÍíÓóÚú]+['\-]{0,1}[A-Za-zÑñÁáÉéÍíÓóÚú]+))*$/i.test(this.pedido.nombre) ){
      this.nombreOk = true;
    }else{
      alert("nombre debe contener de 3 a 30 caracteres, solo letras y espacios")
      this.nombreOk = false;
      return false;
    }
    // Email
    if(this.pedido.email === undefined){
      alert("Debes rellenar el campo de Email");
      this.emailOk = false;
      return false;
    }
    if( /^([a-z0-9_.-]+)@([a-z0-9_.-]+)\.([a-z.]{2,6})$/i.test(this.pedido.email)){
      this.emailOk = true;
    }else{
      alert("Debe introducir un email")
      this.emailOk = false;
      return false;
    }
    // Dni
    if(this.pedido.dni === undefined){
      alert("Debes rellenar el campo de Dni");
      this.dniOk = false;
      return false;
    }
    if( /^[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKE]$/i.test(this.pedido.dni) || /^[XYZ][0-9]{7}[TRWAGMYFPDXBNJZSQVHLCKE]$/i.test(this.pedido.dni)){
      this.dniOk = true;
    }else{
      alert("Dni debe tener 8 numeros y 1 letra sin espacios ni guiones")
      this.dniOk = false;
      return false;
    }
    //Tarjeta
    if(this.pedido.tarjeta === undefined){
      alert("Debes rellenar el campo de Tarjeta");
      this.nTarjetaOk = false;
      return false;
    }
    if( /^[0-9]{13,18}$/i.test(this.pedido.tarjeta)){
      this.nTarjetaOk = true;
    }else{
      alert("El número de tarjeta debe tener entre 13 y 18 digitos")
      this.nTarjetaOk = false;
      return false;
    }
    // Direccion 
    if(this.pedido.direccion === undefined){
      alert("Debes rellenar la dirección");
      this.direccionOk = false;
      return false;
    }
    if(this.pedido.direccion != "" && this.pedido.direccion != null){
      this.direccionOk = true;
    }else{
      alert("Debes rellenar la dirección")
      this.direccionOk = false;
      return false;
    }
    // Provincia
    if(this.pedido.provincia === undefined){
      alert("Debes seleccionar una provincia");
      this.provinciaOk = false;
      return false;
    }
    if(this.pedido.provincia != "" && this.pedido.provincia != null){
      this.provinciaOk = true;
    }else{
      alert("Debes seleccionar una provincia")
      this.provinciaOk = false;
      return false;
    }
    // Código Postal
    if(this.pedido.cp === undefined){
      alert("Debes rellenar el campo de Código Postal");
      this.cpOk = false;
      return false;
    }
    if( /^(?:0[1-9]|[1-4]\d|5[0-2])\d{3}$/.test(this.pedido.cp)){
      this.cpOk = true;
    }else{
      alert("Código Postal debe tener 5 digitos")
      this.cpOk = false;
      return false;
    }

    return true;
  }


}
