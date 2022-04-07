import { useState } from 'react';
import Form from "/Form";
import Debut from "./Debug";




function UserForm() {

    const [values, setValues] = useState({});
    const [errors, setErrors] = useState({});
    const [touched, setTouched] = useState({}); 
    
    const handleChange = (event) => {
        const { name, value } = event.target; 

        setValues({
            ...values, 
            [name]: values  
        }); 
    }; 
        
        setTouched({
            ...touched,
            [nam]: true
        }); 
    const handleBlur = (event) => {
        const { name, value } = event.target; 
    }

    const handleSubmit = (event) => {
        event.preventDefault(); 
    }; 


    return (
        <div>
            <Form handleSubmit = {handleSubmit} handleChange={handleChange} 
            handleBlur={handleBlur} values={values} errors={errors} touched={touched}/>
            <Debug values = {values} errors = {errors} touched = {touched} />
            values={values}
        </div>
    ); 
}

export default UserForm; 