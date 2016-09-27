import $ from 'jquery'

export const getMyApi = (dispatch, state) => {
    dispatch({type: 'API_LOADING'});
    var myApi = "http://backend-4c.dev/restapi/product/index?product=lorem";
    $.getJSON(myApi).done(data =>
        dispatch({type: 'REST_API', data: data.data}))
}
