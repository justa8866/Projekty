import "./styles.css";
import React, { Fragment } from 'react';  
import ModalPopup from './modal_popup';  
  
class App extends React.Component {  
  constructor() {  
    super();  
    this.state = {  
      showModalPopup: false  
    }  
  }  
  isShowPopup = (status) => {  
    this.setState({ showModalPopup: status });  
  };  
  render() {  
    return (  
      <Fragment>  
        
        <header align="center">  
          <Fragment>  
            <div  
              className="nav-item"  
              onClick={() => this.isShowPopup(true)}>  
              <button> Customer Form </button>  
            </div>  
          </Fragment>  
        </header>  
        <ModalPopup  
       
          showModalPopup={this.state.showModalPopup}  
          onPopupClose={this.isShowPopup}  
          
        ></ModalPopup>  
      </Fragment>  
    )  
  }  
}  
  
export default App;  
