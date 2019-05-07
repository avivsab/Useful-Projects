import React, { Component } from 'react';

class AddNotDoItem extends Component {
   state = {
       title: ''
   }
   onType = (e) => {
       this.setState({[e.target.name]: e.target.value})
   }
   onSubmit = (e) => {
       e.preventDefault();
       this.props.addNotToDo(this.state.title);
       this.setState({title: ''})
   }
    render() { 
        return ( 
            
        <form style={formCss} onSubmit={this.onSubmit}>
            <input 
            type='text' 
            placeholder='Add Avoiding to do Task' 
            name='title'
            style={inputCss}
            value = {this.state.title}
            onChange = {this.onType}
            />

            <input 
                type='submit' 
                value='Add and Stick To It!' 
                style={{cursor: 'pointer', display: 'block', borderRadius: '3px', width: '150px', height: '35px', margin:'auto', background: 'lightblue'}}
            /> 
        </form>
              
                
           
         );
    }
}
 const formCss = {
     textAlign: 'center'
 }   
 const inputCss = {
     margin: '10px',
     padding: '15px 250px',
     textAlign: 'center'
 }
export default AddNotDoItem;