import React from "react";
import { useState } from "react";



const Click=()=>
{
    const [d,setD] = useState(0);
    const change=()=>
    {
        setD(d+1);
    }
    return(
        <div>
           


        <button onClick={change}>Click me</button>
        <span>{d}</span>
        </div>
    )
}
export default Click;