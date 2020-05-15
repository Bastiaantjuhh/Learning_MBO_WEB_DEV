import React from "react";
import Hogerlager from "app/hogerlager";
import Won from "./app/won";

class App extends React.Component {
  constructor(props){
      super(props);
      this.state = {
        ended: false,
        result: []
      }
      this.gameEnd = this.gameEnd.bind(this);
      this.gameStart = this.gameEnd.bind(this);
      this.renderGame = this.renderGame.bind(this);
  }
  gameEnd(data){
    this.setState({
      number: data[0],
      result: data[1],
      ended: true
    });
  }
  renderGame(){
    return !this.state.ended ? <Hogerlager onGameEnd={this.gameEnd}/> : <Won result={this.state.result} number={this.state.number}/>;
  }

  render(){
    return (
      <div className="app">
        <h1>hoger lager</h1>
        {this.renderGame()}
      </div>
    );
  }
}

export default App;