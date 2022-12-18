import { useState,useEffect } from "react";

import axios from "axios";
import React from "react";

const Detailsfrom=()=>
{

    let [name,setname] = useState("");
    let [password,setpassword] = useState("");
    let [email,setemail] = useState("");
    let [address,setaddress] = useState("");
   

    const loginsubit=()=>
    {
        var obj ={name: name, password:password,email:email,address:address};

        axios.post("http://127.0.0.1:8000/api/detail",obj)
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
         <label>Email </label>
         <input type="text"  value={email} onChange={(e)=>setemail(e.target.value)} required />
        
       </div>
       <div className="input-container">
         <label>Address </label>
         <input type="text"  value={address} onChange={(e)=>setaddress(e.target.value)} required />
        
       </div>
       <div className="button-container" onClick={loginsubit}>
         <input type="submit" />
       </div>
     </form>

     </div>

         
    )
}
export default Detailsfrom;
