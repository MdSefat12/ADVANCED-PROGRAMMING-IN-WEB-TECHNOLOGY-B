import React from 'react';
import ReactDOM from 'react-dom/client';
import './index.css';
import App from './App';
import reportWebVitals from './reportWebVitals';

import Top from './Components/Top';

import Footer from './Components/Footer';
import Home from './Components/Home';
import Profile from './Components/Profile';
import Contract from './Components/Contract';
import View from './Components/View';

import Pdetails from './Components/ProductDetails';

import Colorc from './Components/Colorc';

import Effecth from './Components/Effecth';
import Login from './Components/Login';
import Productss from './Components/Productss';

import { BrowserRouter as Router,Route,Switch } from 'react-router-dom';
import AllPost from './Components/AllPost';
import Detailsfrom from './Components/Detailsfrom';
import axios from 'axios';
import Viewpost from './Components/Viewpost';

var token = null; 
if(localStorage.getItem("user"))
{
  var obj =JSON.parse(localStorage.getItem("user"));
  token = obj.acces_token;
}
axios.defaults.headers.common["Authorization"] = token;




const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(
  <React.StrictMode>

    
    <Router>
    <Top/>
    <Switch>
    <Route exact path="/">
    <Home/>
    </Route>

    <Route exact path="/profile">
   <Profile/>

   </Route>
   
   <Route exact path="/contract/:id">
   <Contract/>

   </Route>
   <Route exact path="/details">
   <Pdetails/>

   </Route>
   
  
   <Route exact path="/colorc">
   <Colorc/>

   </Route>

   <Route exact path="/effect">
   <Effecth/>

   </Route>
   <Route exact path="/post">
   <AllPost/>

   </Route>
   <Route exact path="/login">
   <Login/>

   </Route>
   <Route exact path="/product">
   <Productss/>

   </Route>
   <Route exact path="/detail">
   <Detailsfrom/>

   </Route>


   <Route exact path="/view">
   <View/>
   </Route>

   <Route exact path="/viewpost">
   <Viewpost/>

   </Route>

   





  
    </Switch>
    <Footer/>
    </Router>
  
      
  </React.StrictMode>
);

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();

