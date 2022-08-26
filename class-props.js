import React, { Component } from "react";

export default class MsgBox extends Component{
    render(){
        const divStyles = {
            margin:'10px',
            padding:'5px',
            color:this.props.color,
            backgroundColor:this.props.bgColor,
            fontSize:this.props.fontSize,
            border:this.props.border
        }
        return <div style={divStyles}>{this.props.text}</div>
    }
}