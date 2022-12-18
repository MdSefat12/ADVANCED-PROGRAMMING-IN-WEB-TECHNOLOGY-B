
import React from "react";
import  {useState,useEffect} from "react";


const Effecth=()=>
{
    let[count,setCount] = useState (0);
    let[demo,setsemo] = useState(1);
    useEffect(()=>{
    

    
    setTimeout(()=>
    {
        setCount((count) => count + 1 );

    },1000);
},[demo]);
const change=()=>
{
    setsemo(demo + 1 );
}


    return(
        <div>
            <h1> this is effect hook {count}</h1>
         <button onClick={change}> demo changed</button>
        </div>
    )
}
 export default Effecth; 