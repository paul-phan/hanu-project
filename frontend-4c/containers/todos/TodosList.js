/**
 * Created by MyPC on 13/09/2016.
 */
import React, {Component, PropTypes} from 'react'
import {connect} from 'react-redux'
import Todo from './Todo'

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
