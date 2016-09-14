/**
 * Created by MyPC on 13/09/2016.
 */
const todosFilter = (state = 'SHOW_ALL', action) => {
    switch (action.type) {
        case 'SET_TODOS_FILTER':
            return action.filter
        default:
            return state
    }
}
export default todosFilter