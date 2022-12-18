import React from "react";
import { useParams } from "react-router-dom";

const Contract=()=>

{
    const {id} = useParams();
    return(
        <div>
         <h2>MD SEFAT of {id} </h2>
         <h3>01771801187</h3>
         <h3>Baunshara</h3>
        </div>
    )
}
export default Contract;