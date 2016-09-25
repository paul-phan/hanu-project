/**
 * Created by MyPC on 20/09/2016.
 */
import React, {Component} from 'react'
export default class Form extends Component {
    constructor() {
        super();
        this.state = {
            searchTerm: "React"
        };
    }

    handleChange(event) {
        this.setState({searchTerm: event.target.value.substr(0, 50)})
    }

    handleSubmit(event) {
        console.log("Submitted values are: ",
            event.target.name.value,
            event.target.email.value
        );
        event.preventDefault()
    }

    render() {
        return (
            <div>
                Search Term:
                <input type="search" value={this.state.searchTerm} onChange={this.handleChange.bind(this)}/><br/>
                <hr/>
                <br/>
                <div>
                    <form onSubmit={this.handleSubmit.()}>
                        <div className="formGroup">
                            Name: <input name="name" type="text"/>
                        </div>
                        <div className="formGroup">
                            E-mail: <input name="email" type="mail"/>
                        </div>
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        )
    }
}