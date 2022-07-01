import React from 'react'
import styled from 'styled-components'

import MapsHomeWorkIcon from '@mui/icons-material/MapsHomeWork';
import LocalPhoneIcon from '@mui/icons-material/LocalPhone';
import EmailIcon from '@mui/icons-material/Email';

import { mobile } from "../responsive";

const Container = styled.div`
 display: flex;
 ${mobile({ flexDirection: "column" })}; 
`
const Left = styled.div`
 flex: 1;
 display: flex; 
 flex-direction: column; 
 padding: 20px;

`
const Center = styled.div`
 flex: 1;
 padding: 20px;
 ${mobile({ display: "none" })}
`
const Title = styled.h3`
  margin-bottom: 30px;   
`

const List = styled.ul`
 margin: 0;
 padding: 0; 
 list-style: none; 
 display: flex; 
 flex-wrap: wrap; 
`
const ListItem = styled.ul`
 width: 50%; 
 margin-bottom: 10px; 
`
const Right = styled.div`
 flex: 1;
 padding: 20px;
 ${mobile({ backgroundColor: "#fff8f8" })}

`
const Logo = styled.h1`
    
`
const Describe = styled.p`
 margin: 20px 0px;  
`
const ContactItem = styled.div`
 margin-bottom: 20px;
 display: flex;
 align-items: center; 
`

const Footer = () => {
  return (
    <Container> 
    <Left>
        <Logo>Centrum Mody</Logo>
        <Describe></Describe>
    </Left>
    <Center>
        <Title>Przydatne linki</Title>
            <List>
            <ListItem>Strona główna</ListItem>
            <ListItem>Koszyk</ListItem>
            <ListItem >Dodatki</ListItem>
            <ListItem>Moje konto</ListItem>
            <ListItem>Zamówienia</ListItem>
            <ListItem>Lista życzeń</ListItem>
            <ListItem>Terminy</ListItem>
            </List>
    </Center>
    <Right>
     <Title></Title>
     <ContactItem> <MapsHomeWorkIcon style={{marginRight:"10px"}}/> Al. Katowicka, 51 Nadarzyn - 05-830 </ContactItem>
     <ContactItem> <LocalPhoneIcon style={{marginRight:"10px"}}/> (22) 739 55 00 </ContactItem>
     <ContactItem> <EmailIcon style={{marginRight:"10px"}}/> cmw@centrummody.pl </ContactItem>
    </Right>


    </Container>
  )
}

export default Footer