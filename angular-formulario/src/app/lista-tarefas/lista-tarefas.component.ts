import { Component, OnInit} from '@angular/core';
import {Lista} from  "../lista";
@Component({
  selector: 'lista-tarefas',
  templateUrl: './lista-tarefas.component.html',
  styleUrls: ['./lista-tarefas.component.css']
})
export class ListaTarefasComponent implements OnInit {
  ngOnInit(): void {
    throw new Error("Method not implemented.");
  }
  
  listaAdd = [];
  lista:Lista ={
    name:"",
    value:null,
    date_launch:null,
  };
  
  add(){
    let lista = Object.assign({}, this.lista);
    this.listaAdd.push(lista); 
    
  }
  del(){
    let lista = Object.assign({}, this.lista)
    this.listaAdd.forEach(this.lista.name, function () {
      
    });
  }
 
}
