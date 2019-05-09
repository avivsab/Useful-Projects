import React, { Component } from 'react';

class ShowSamples extends Component {
        
    render() { 
       
        return ( 
            <button onClick = {this.props.showSamples} style={btnCss}>Show Sample Tasks</button>
         );
    }
}
 const btnCss = {
     background: '#00ffcc',
     padding: '10px 50px',
     borderRadius: '3px'
 }
export default ShowSamples;
