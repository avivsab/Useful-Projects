import React, {Component} from 'react';
import SuccessItem from './SuccessItem';


class NotTodos extends Component {
  
  render() {
      console.log(this.props.notDo)
    return this.props.notDo.map((item) => (
          <SuccessItem key={item.id} notDo={item}  onManeged={this.props.onManeged} removeNotItem={this.props.removeNotItem} />
      )
    )};
   
}
export default NotTodos;
