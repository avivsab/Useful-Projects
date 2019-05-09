import React, {Component} from 'react';
import './App.css';
import {Header} from './components/layout/Header';
import NotTodos from './components/NotTodos';
import AddNotDoItem from './components/AddNotDoItem';
import ShowSamples from './components/ShowSamples';
import uuid from 'uuid'

class App extends Component {
  state = {
    notDo: [],
    notDoSamples: [
      {
        id: uuid.v4(),
        title: 'Eat dessert after dinner',
        isActive: true
      },
      {
        id: uuid.v4(),
        title: 'Sleep after 23:00',
        isActive: true
      },
      {
        id: uuid.v4(),
        title: 'Drink more than 3 coffee today',
        isActive: true
      }
    ]
  }
    //functions
    showStateSamples = (e) => {
      this.setState({notDo: this.state.notDoSamples});
      //e.target.disabled = true
      e.target.style.opacity = 0.3
      e.target.style.background = 'gainsboro'
      e.target.innerText = 'Reset Application'
    }
    
    disabledBtn = (e) => {
      console.log(e.target)
    }
    
  toggleOnManeged = (id) => {
    
    this.setState(
      {notDo: this.state.notDo.map(doesntDo => {
        if(doesntDo.id === id) {doesntDo.isActive = !doesntDo.isActive};
        return doesntDo
      })}
      
    )  
  }

  removeNotItem = (id) => {
    this.setState({notDo: [...this.state.notDo.filter(delItem => (
      delItem.id !== id
    ))]})
  }

  addNotToDo = (title) =>{
    const anotherNotDo = {
      id: uuid.v4(),
      title: title,
      isActive: true
    }
    this.setState({notDo: [...this.state.notDo, anotherNotDo]});
  }
  
  render() {
    console.log(this.state)

    return (
        <div>
       
        <div style={{width: '80%', margin: 'auto'}}>        
        <Header />   
        <ShowSamples showSamples={this.showStateSamples} onClick={this.disabledBtn}/>
        <AddNotDoItem addNotToDo={this.addNotToDo} />
        <div style={{border: '1px solid #33ffbb', padding: '30px 20px', marginTop: '30px', borderRadius: '10px'}}>
        <NotTodos notDo={this.state.notDo} onManeged={this.toggleOnManeged} removeNotItem={this.removeNotItem} />
        </div>
        </div>
        </div>
    );
  }
}
export default App;
