import React from "react";

class Hogerlager extends React.Component {
    constructor(props){
        super(props);

        this.state = {
            number: Math.round(Math.random() * 100),
            numberInput: 0,
            message: "Zoek het juiste nummer om te winnen",
            guesses: []
        }
        console.log(this.state.number);
        this.handleInput = this.handleInput.bind(this);
        this.handleForm = this.handleForm.bind(this);
    }
    handleInput(e){
        this.setState({numberInput: parseInt(e.target.value)})
    }
    handleForm(){
        const newGuesses = this.state.guesses.concat(this.state.numberInput);

        if(this.state.numberInput === this.state.number){
            this.setState({message: "Je hebt het juiste nummer gevonden"});
            this.props.onGameEnd([this.state.number,newGuesses]);
            return;
        } else if(this.state.numberInput > this.state.number){
            this.setState({message: "Te hoog"});
        } else if(this.state.numberInput < this.state.number){
            this.setState({message: "Te laag"});
        }

        this.setState({guesses: newGuesses});
    }
    render(){
        return (
          <div className="game">
              <div className="message">{this.state.message}</div>
              <div className="inputs">
                <input type="number" onChange={this.handleInput} min="0" defaultValue={0}/>
                <button onClick={this.handleForm}>Probeer</button>
              </div>
          </div>
        );
    }
}

export default Hogerlager;
