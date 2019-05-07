import React, {Component} from 'react';
import './App.css';
import {Header} from './components/layout/Header'
import NotTodos from './components/NotTodos'
import AddNotDoItem from './components/AddNotDoItem'
import uuid from 'uuid'

class App extends Component {
  state = {
    notDo: [
      {
        id: uuid.v4(),
        title: 'Take out the trash',
        isManagedTo: false
      },
      {
        id: uuid.v4(),
        title: 'Give me',
        isManagedTo: false
      },
      {
        id: uuid.v4(),
        title: 'Dinner',
        isManagedTo: true
      }
    ] 
  }
    //functions
  toggleOnManeged = (id) => {
    this.setState(
      {notDo: this.state.notDo.map(doesntDo => {
        if(doesntDo.id === id) {doesntDo.isManagedTo = !doesntDo.isManagedTo}
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
      isManagedTo: false
    }
    this.setState({notDo: [...this.state.notDo, anotherNotDo]})
  }
  
  render() {
    console.log(this.state)

    return (
        <div>
       
        <div style={{width: '80%', margin: 'auto'}}>        
        <Header />   
        <AddNotDoItem addNotToDo={this.addNotToDo} />
        <div style={{border: '1px solid #33ffbb', padding: '30px 20px', marginTop: '30px', borderRadius: '10px'}}>
        <NotTodos notDo={this.state.notDo} onManeged={this.toggleOnManeged} removeNotItem={this.removeNotItem}/>
        </div>
        </div>
        </div>
    );
  }
}
export default App;
