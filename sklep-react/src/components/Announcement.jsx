import React from 'react'
import styled from 'styled-components'

const Container = styled.div`
    height: 30px; 
    background-color: purple;
    color: white; 
    font-weight: bold;
    display: flex; 
    align-items: center; 
    justify-content: center; 
    font-size: 15px; 
    
`

const Announcement = () => {
  return (
    <Container>
        Idealna promocja dla naszych klientów! Darmowa dostawa od 50zł. 
    </Container>
  )
}

export default Announcement