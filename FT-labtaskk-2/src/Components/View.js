import {useState,useEffect} from "react";
import axios from "axios";


const View=()=>{
    let[product,setproduct] =useState([])

    useEffect(()=>{
        axios.get("http://127.0.0.1:8000/api/view/dh")
        .then(resp=>
            {
                console.log(resp.data);
                setproduct(resp.data);

            }).catch(err=>
                {
                    console.log(err);
                });
    },[]);
    return(

       

        <div>
            <ul>
    

        {
            
        product.map(p=>(
            <li  key={p.id}>{p.destination},{p.hometown} </li>

        ))
}


</ul><br></br><br></br><br></br>



    </div>
)
}
export default View;

