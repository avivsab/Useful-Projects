import React, { Component } from 'react'

export class successItem extends Component {
  getStyle = () => {
      return {
        textDecoration: this.props.notDo.isManagedTo?  'line-through' : 'none',
        background: '#cccdd',
        padding: '10px',
        border: '1px solid #bbb',
        marginTop: '10px'
      }
}
  render() {

    const {id, title} = this.props.notDo; //destructuring

    return (
      
      <div style={this.getStyle()}>              
        <input type='checkbox' onChange={this.props.onManeged.bind(this, id)} />{' '}       
        {title}    
        <button style={btnCss} onClick={this.props.removeNotItem.bind(this, id)}>X</button>  
      </div>
    )
  }
}
const btnCss = {
  background: '#00ff11',
  border: 'none',
  borderRadius: '5px',
  padding: '5px 10px',
  cursor: 'pointer',
  float: 'right',
}
export default successItem
