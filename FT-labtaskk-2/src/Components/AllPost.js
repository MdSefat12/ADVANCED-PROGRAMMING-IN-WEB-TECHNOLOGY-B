import {useState,useEffect} from "react";
import axios from "axios";
import Posts from "./Posts";

const AllPost=()=>{
    let[posts,setpost] =useState([])

    useEffect(()=>{
        axios.get("http://127.0.0.1:8000/api/detail/dd")
        .then(resp=>
            {
                console.log(resp.data);
                setpost(resp.data);

            }).catch(err=>
                {
                    console.log(err);
                });
    },[]);
    return(
        // <div>
        //     <table>
        //         <thead>
        //         <tr>
        //             <th>
        //                 ID
        //             </th>
        //             <th>
        //                 Name
        //             </th>
        //         </tr>
        //         </thead>
        //         <tbody>
        //         {
        //             posts.map(post=>(
        //                 <tr key={post.id}>
        //                 <td>{post.id}</td>
        //                 <td>{post.title}</td>
        //                 </tr>

        //             ))

        //         }
        //         </tbody>
        //     </table>
        // </div>
        <div>
            {
            posts.map(post=>(
                <Posts userId={post.address} title={post.email} key={post.id}/>

            ))
}

        </div>
    )
}
export default AllPost;
