import React from 'react'
import {Link, browserHistory} from 'react-router'
// import Search from './Form'

require('../resources/styles/style.css')
export default function App({children}) {
    return (
        <div>
            <header>
                Links:
                {' '}
                <Link to="/">Home</Link>
                {' '}
                <Link to="/ex02">Examples02</Link>
                {' '}
                <Link to="/ex02/peter">Examples02 with parameter</Link>
            </header>
            <div>
                <button onClick={() => browserHistory.push('/ex02')}>Go to Ex2</button>
                {' '}
                <button onClick={() => browserHistory.push('/todos')}>Todos</button>
                {' '}
                <button onClick={() => browserHistory.push('/youtube')}>Youtube</button>
                {' '}
                <button onClick={() => browserHistory.push('/kanban')}>Kanban</button>
                {' '}
                <button onClick={() => browserHistory.push('/testapi')}>Test API</button>
                {' '}

            </div>
            <hr/>
            <div style={{marginTop: '1.5em'}}>{children}</div>
        </div>
    )
}