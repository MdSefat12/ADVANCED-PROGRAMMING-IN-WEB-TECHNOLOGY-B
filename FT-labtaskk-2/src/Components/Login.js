import { useState,useEffect } from "react";

import axios from "axios";

const Login=()=>
{

    let [username,setname] = useState("");
    let [password,setpassword] = useState("");
   

    const loginsubit=()=>
    {
        var obj ={username: username, password:password};

        axios.post("http://127.0.0.1:8000/api/login",obj)
        .then(resp=>{
          var settoken = resp.data;
          console.log = settoken;
             var token = resp.data;
             var user = {userid: token.userid,acces_token:token.token};
            localStorage.setItem("user",JSON.stringify(user));
             console.log(localStorage.getItem("user"));
             

        
        }).catch(err=>{
            console.log(err);

        });
    }
    return(
   

        <div className="form">
     <form>
       <div className="input-container">
         <label>Username </label>
         <input type="text"  value={username} onChange={(e)=>setname(e.target.value)} required />
        
       </div>
       <div className="input-container">
         <label>Password </label>
         <input type="password"  value={password} onChange={(e)=>setpassword(e.target.value)}  required />
        
       </div>
       <div className="button-container" onClick={loginsubit}>
         <input type="submit" />
       </div>
     </form>

     </div>

         
    )
}
export default Login;
