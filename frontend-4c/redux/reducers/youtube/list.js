/**
 * Created by MyPC on 15/09/2016.
 */
export default (state = [], action) => {
    switch (action.type) {
        case 'YOUTUBE_SEARCH_LOADED':
            return action.list
        default:
            return state
    }
}