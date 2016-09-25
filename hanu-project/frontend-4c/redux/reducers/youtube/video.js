/**
 * Created by MyPC on 15/09/2016.
 */
export default (state = null, action) => {
    switch (action.type) {
        case 'YOUTUBE_VIDEO':
            return action.video
        default:
            return state
    }
}