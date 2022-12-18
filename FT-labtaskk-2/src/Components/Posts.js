import React from "react";
const Posts=(props)=>
{
    const poststyle=
    {
        backgroundColor: "#BA9987",
        fontFamily:"consolas",
        color:"white",
        width:"400px",
        padding:"10px",
      


    };
    return(
        <div style={poststyle}>
            <span>{props.userId}</span>
            <p>{props.title}</p>

        </div>
    )
}
export default Posts;