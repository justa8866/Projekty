import React, { Component, Fragment } from 'react';  
import { Modal } from 'react-bootstrap';  
import Registration from "./pages/Registration";
  
class ModalPopup extends Component {  
    constructor(props) {  
        super(props);  
        this.state = {  
            showModal: false  
        };  
    }  
  
    isShowModal = (status) => {  
        this.handleClose();  
        this.setState({ showModal: status });  
    }  
  
    handleClose = () => {  
        this.props.onPopupClose(false);  
    }  
  
  
    render() {  
        return (  
            <Fragment>  
                <Modal show={this.props.showModalPopup} onHide={this.handleClose}  
                    size="lg"  
                    aria-labelledby="contained-modal-title-vcenter"  
                    centered  
                >  
                    <Modal.Header closeButton>  
                        <Modal.Title id="sign-in-title">  
                        Please fill out the customer form
                         </Modal.Title>  
                    </Modal.Header>  
                    <Modal.Body>  
                        <Registration /> 
                        <hr />  
                        <div className="signUp">  
                            <p>Thank you for filling out the customer form. We wish you a good day.<button type="button" className="link-button" onClick={() => this.isShowModal(true)}> Close</button></p>  
                        </div>  
                    </Modal.Body>  
  
                </Modal >  
            </Fragment >  
  
        );  
    }  
}  
  
export default (ModalPopup);  