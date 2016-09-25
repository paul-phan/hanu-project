/**
 * Created by MyPC on 15/09/2016.
 */
import React, {Component, PropTypes} from 'react'
import {connect} from 'react-redux'
import ListItem from './ListItem'

class List extends Component {
    render() {
        const {props: {list}} = this;
        return (
            <ul>
                {list.map(video => {
                    const {id:{videoId}} = video;
                    return (<ListItem key={videoId} video={video}/>)
                })}
            </ul>
        )
    }
}

export default connect((state) => ({
    list: state.youtube.youtubeList
}))(List)