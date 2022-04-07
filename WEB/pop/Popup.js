import React from 'react'
import "./style.css"; 
import Registration from "./pages/Registration";

const Popup = props => {
  return (
    <div className="popup-box">
      <div className="box">
        <span className="close-icon" onClick={props.handleClose}>Formularz</span>
        {props.content}
      </div>
    </div>
  );
};
 
export default Popup;
