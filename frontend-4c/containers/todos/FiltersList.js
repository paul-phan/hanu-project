/**
 * Created by MyPC on 15/09/2016.
 */
import React from 'react'
import Filter from './Filter'

const FiltersList = () => (
    <p>
        Show: {" "}
        <Filter filter="SHOW_ALL"> ALL </Filter>
        {", "}
        <Filter filter="SHOW_ACTIVE"> ACTIVE </Filter>
        {", "}
        <Filter filter="SHOW_COMPLETED"> COMPLETED </Filter>
    </p>
)
export default FiltersList