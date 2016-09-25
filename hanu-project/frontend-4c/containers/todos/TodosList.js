/**
 * Created by MyPC on 13/09/2016.
 */

import React, {Component, PropTypes} from 'react'
import {connect} from 'react-redux'
import Todo from './Todo'

class TodosList extends Component {
    render() {
        console.log('this.props: ', this.props);
        return (
            <ul>
                {this.props.todos.map(todo =>
                    <Todo key={todo.id} {...todo}/>
                )}
            </ul>
        )
    }
}

TodosList.propTypes = {
    todos: PropTypes.arrayOf(PropTypes.shape({
        id: PropTypes.number.isRequired,
        completed: PropTypes.bool.isRequired,
        text: PropTypes.string.isRequired
    }).isRequired).isRequired
}
export default connect(
    (state) => {
        const {todosList, todosFilter} = state.todos;
        switch (todosFilter) {
            case 'SHOW_ALL':
                return {todos: todosList}
            case 'SHOW_COMPLETED':
                return {todos: todosList.filter(todo => todo.completed)}
            case 'SHOW_ACTIVE':
                return {todos: todosList.filter(todo => !todo.completed)}
            default:
                return console.error('unexpected "todosFilter" :', todosFilter)
        }
    }, null
)(TodosList)
