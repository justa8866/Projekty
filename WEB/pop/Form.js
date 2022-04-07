function Form({ values, handleSubmit, handleChange, handleBlur }) {
    return (
        <div>
        <h2>Formularz klienta</h2> 
            <form onSubmit={handleSubmit} autoComplete="off"> 
                <div className="formularz">
                <label> Podaj imię </label>
                <input name="firstName"
                type="text"
                placeholder="Imię"
                onChange={handleChange}
                onBlur={handleBlur}
                value={values.firstName}
                />
                {touched.firstName && errors.firstName}

                </div>

                <div className="formularz"> 
                <label> Podaj nazwisko </label>
                <input name="lastName"
                type="text"
                placeholder="Nazwisko"
                onChange={handleChange}
                onBlur={handleBlur}
                value={values.lastName}
                />
                {touched.lastName && errors.lastName}
                </div>

                <div className="formularz"> 
                <label> Podaj wiek </label>
                <input name="age"
                type="number"
                placeholder="Wiek"
                onChange={handleChange}
                onBlur={handleBlur}
                value={values.age}
                />
                {touched.email && errors.email}
                </div>

                <div className="formularz"> 
                <label> Podaj wiek </label>
                <input name="email"
                type="text"
                placeholder="email"
                onChange={handleChange}
                onBlur={handleBlur}
                value={values.email}
                />
                {touched.age && errors.age}
                </div>

                <div className="formularz"> 
                <button type="submit">Prześlij</button>
                </div> 

            </form>
        </div> 
        
      
    ); 
}

export default Form;