import React, { Component } from 'react';
import {connect} from 'react-redux'
import myApi from '../redux/actions/testapi'

export default class TestApi extends Component {

    constructor(props) {
        super(props)
    }
    render() {
        console.log('huhuh');
        return (
            <div>Hello world</div>
        );
    }
}