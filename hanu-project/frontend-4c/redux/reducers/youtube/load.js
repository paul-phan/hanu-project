/**
 * Created by MyPC on 15/09/2016.
 */
export default (state = 'not search yet', action) => {
    switch (action.type) {
        case 'YOUTUBE_SEARCH_LOADING':
            return 'loading'
        case 'TOUTUBE_SEARCH_LOADED':
            return 'loaded'
        default:
            return state
    }
}