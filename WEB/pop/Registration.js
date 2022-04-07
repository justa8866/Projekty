import UserForm from "../UserForm"; 

const initialValues = {
    firstName: "",
    lastName: "",
    age: "",
    email: ""
  };

const fieldValidation = (fieldName, fieldValue) => {
    if (fieldValue.trim() == "") {
        return `${fieldName} is required`; 
    }
    if (fieldValue.trim().length <3) {

        return `${fieldName} needs to be more than 3 characters`;
    } 
    return null; 
};

const emailValidation = (value) => {
    if (
      /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(
        value
      )
    ) {
      return null;
    }
    if (value.trim() === "") {
      return "Email jest wymagany";
    }
    return "Podaj poprawny wiek";
  };

const ageValidation = (value) => {
        if (!value) {
          return "Wiek jest wymagany";
        }
        return null;
 };
    
const validate = {
    firstName: (value) => fieldValidation("Imię",value),
    lastName: (value) => fieldValidation("Nazwisko",value),
    email: (value) => emailValidation("email",value),
    age: (value) => ageValidation(value)
}; 

function Registration() {
    return (
        <div> 
            <h1> Witaj !!</h1>
            <UserForm initialValues={initialValues} validate={validate} /> 
        </div>
    );
}

export default Registration; 