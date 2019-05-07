import React, {Component} from 'react';
import DoNotItem from './successItem';


class NotTodos extends Component {
  
  render() {
      console.log(this.props.notDo)
    return this.props.notDo.map((item) => (
          <DoNotItem key={item.id} notDo={item}  onManeged={this.props.onManeged} removeNotItem={this.props.removeNotItem} />
      )
    )};
   
}
export default NotTodos;