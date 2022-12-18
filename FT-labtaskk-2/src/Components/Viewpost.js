import { useState,useEffect } from "react";

import axios from "axios";
import React from "react";

const Viewpost=()=>
{

    let [name,setname] = useState("");
    let [password,setpassword] = useState("");
    let [destination,setdestination] = useState("");
    let [hometown,sethometown] = useState("");
   

    const loginsubit=()=>
    {
        var obj ={name: name, password:password,destination:destination,hometown:hometown};

        axios.post("http://127.0.0.1:8000/api/view",obj)
        .then(resp=>{
            
          
          var token = resp.data;
          console.log(token);

        
        }).catch(err=>{
            console.log(err);

        },[]);
    }
    return(
   

        <div className="form">
     <form>
       <div className="input-container">
         <label>Username </label>
         <input type="text"  value={name} onChange={(e)=>setname(e.target.value)} required />
        
       </div>
       <div className="input-container">
         <label>Password </label>
 <input type="password"  value={password} onChange={(e)=>setpassword(e.target.value)}  required />
        
       </div>
       <div className="input-container">
         <label>Destination </label>
         <input type="text"  value={destination} onChange={(e)=>setdestination(e.target.value)} required />
        
       </div>
       <div className="input-container">
         <label>Hometown </label>
         <input type="text"  value={hometown} onChange={(e)=>sethometown(e.target.value)} required />
        
       </div>
       <div className="button-container" onClick={loginsubit}>
         <input type="submit" />
       </div>
     </form>

     </div>

         
    )
}
export default Viewpost;
