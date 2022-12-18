import React from "react";
import { Link } from "react-router-dom";


 const Top=()=>
{
    return(
        <div>

        <Link to="/">HOME</Link> &nbsp; &nbsp;

        <Link to="/profile">PROFILE</Link> &nbsp; &nbsp;

        <Link to="/contract/2">CONTRACT</Link>&nbsp; &nbsp;
        
        <Link to="/details">DETAILS</Link>&nbsp; &nbsp;

        <Link to="/colorc">COLOR CHANGE</Link>&nbsp; &nbsp;

        <Link to="/effect">EFFECT HOOK</Link>&nbsp; &nbsp;

        <Link to="/post">ALL POST</Link>&nbsp; &nbsp;

        <Link to="/login">LOGIN</Link>&nbsp; &nbsp;
        
        <Link to="/product">PRODUCT</Link>&nbsp; &nbsp;

           
        <Link to="/detail">Detail</Link>&nbsp; &nbsp;

        <Link to="/view">View</Link>&nbsp; &nbsp;

        <Link to="/viewpost">Viewpost</Link>&nbsp; &nbsp;
        
      
        </div>
    )
}
export default Top;
