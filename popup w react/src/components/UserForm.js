import { useState } from "react";

import Form from "./Form";
import Debug from "./Debug";

function UserForm({ initialValues, validate }) {
  const [values, setValues] = useState(initialValues);
  const [errors, setErrors] = useState({});
  const [touched, setTouched] = useState({});

  const handleChange = (event) => {
    const { name, value } = event.target;

    setValues({
      ...values,
      [name]: value
    });

    setTouched({
      ...touched,
      [name]: true
    });
  };

  const handleBlur = (event) => {
    const { name, value } = event.target;

    const { [name]: removedError, ...rest } = errors;

    const error = validate[name](value);

    setErrors({
      ...rest,
      ...(error && { [name]: touched[name] && error })
    });
  };

   const handleSubmit = (event) => {
    event.preventDefault();

    const formValidation = Object.keys(values).reduce(
      (acc, key) => {
        const newError = validate[key](values[key]);
        const newTouched = { [key]: true };
        return {
          errors: {
            ...acc.errors,
            ...(newError && { [key]: newError })
          },
          touched: {
            ...acc.touched,
            ...newTouched
          }
        };
      },
      {
        errors: { ...errors },
        touched: { ...touched }
      }
    );
    setErrors(formValidation.errors);
    setTouched(formValidation.touched);

    if (!Object.values(formValidation.errors)) {
      // console.log('Errors!');
    }
  };

  return (
    <div>
      <Form
        handleSubmit={handleSubmit}
        handleChange={handleChange}
        handleBlur={handleBlur}
        values={values}
        errors={errors}
        touched={touched}
      />
     
    
    </div>
  );
}
export default UserForm;

/* <Debug values={values} errors={errors} touched={touched} />  
dodaj do return jeśli chcesz sprawdzić
*/