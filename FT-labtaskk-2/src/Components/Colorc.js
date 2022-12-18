import React from "react";
import { useState } from "react";
const Colorc=()=>
{
    var[color,setcolor] = useState("Red");
    const colorchg=()=>
    {
 
        setcolor(color);
        console.log(color);
    }
     
    return(
        <div>
            <h1 style={{backgroundColor : color}}> Now the choosen color is {color} </h1>
            <button onClick={()=>setcolor("Black")}>BLACK</button>
            <button onClick={()=>setcolor("Green")}>GREEN</button>
            <button onClick={()=>setcolor("Blue")}>BLUE</button>
            <button onClick={()=>setcolor("Orange")}>ORANGE</button>

        </div>
    )
}
export default Colorc;