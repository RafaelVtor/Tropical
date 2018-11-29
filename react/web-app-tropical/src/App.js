import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';

class App extends Component {
  render() {
    return (
      <div className="container-fluid">
        <nav className="navbar navbar-expand-md navbar-dark bg-dark">

          
          <button className="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMainToggler" aria-controls="navbarMainToggler" aria-expanded="false" >
            <span className="navbar-toggler-icon"></span>
          </button>
          
          <a className="navbar-brand" href=""> <i class="fas fa-stroopwafel"></i> Tropical</a>

          <section className="collapse navbar-collapse" id="navbarMainToggler">
            <div className="navbar-nav">
              <a className="nav-item nav-link" href="">Home</a>
              <a className="nav-item nav-link" href="">Outros</a>
              <a className="nav-item nav-link" href="">Login</a>
            </div>
          </section>




        </nav>
      </div>
    );
  }
}

export default App;
