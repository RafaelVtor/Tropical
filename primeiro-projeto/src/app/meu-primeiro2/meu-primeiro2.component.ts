import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-meu-primeiro2',
  templateUrl: './meu-primeiro2.component.html',
  styleUrls: ['./meu-primeiro2.component.css']
})
export class MeuPrimeiro2Component implements OnInit {

  url: string = 'http://webpet.ga';
  urlImagem = 'https://picsum.photos/200/300/?random';
  cursoAngular: boolean = true;

  valorAtual: string = '';
  valorSalvo: string = '';

  isMouseOver: boolean = false;

  nome:string ='abc';

  pessoa: any = {
    nome:'def',
    idade: 30
  }

  getCurtirCurso(){
    return true;
  }

  getValor(){
    return 1;
  }

  botaoClicado(){
    alert("ola mundo!");
  }
  onKeyUp(evento , KeyboardEvent){
    console.log((<HTMLInputElement>evento.target).value);
    this.valorAtual = (<HTMLInputElement>evento.target).value;
    
  }
  salvarValor(valor){
    this.valorSalvo = valor;
  }

  onMouseOverOut(){
    this.isMouseOver = !this.isMouseOver;

  }
  constructor() { 
   
  }

  ngOnInit() {
  }

}
