import React from 'react'
import styled from 'styled-components'
import { sliderItems } from '../data';

import ArrowBackIosIcon from '@mui/icons-material/ArrowBackIos';
import ArrowForwardIosIcon from '@mui/icons-material/ArrowForwardIos';

import { useState } from "react";

import { mobile } from "../responsive";

const Container = styled.div`
    width: 100%;
    height: 100vh;
    display: flex;  
    background-color: #dfc0e9; 
    position: relative;
    overflow: hidden; 
    ${mobile({ display: "none" })}
`
const Arrow = styled.div`
    width: 50px;
    height: 50px; 
    background-color: white;
    border-radius: 50%; 
    display: flex; 
    align-items: center; 
    justify-content: center; 
    position: absolute;
    top: 0;
    bottom: 0;
    margin: auto; 
    left: ${props=> props.direction === "left" && "10px"};
    right: ${props=> props.direction === "right" && "10px"};
    cursor: pointer; 
    opacity: 0.5; 
    z-index: 99; 

`
const Wrapper = styled.div`
    height: 100%;
    display: flex; 
    transition: all 1.4s ease; 
    transform: translateX(${(props) => props.slideIndex * -100}vw);

`
const Slide = styled.div`
  width: 100vw;
  height: 100vh; 
  display: flex;
  align-items: center;    
`
const ImgContainer = styled.div`
   height: 100%; 
   flex: 1;  
`

const Image = styled.img`
    height: 80%
`
const InfoContainer = styled.div`
   flex: 1; 
   padding: 50px;  
`
const Title = styled.h1`
    font-size: 70px; 
`
const Describe = styled.p`
   margin: 50px 0px; 
   font-size: 20px; 
   font-weight: 500; 
   letter-spacing: 2px; 
`
const Button = styled.button`
 padding: 10px; 
 font-size: 20px; 
 background-color: transparent;
 cursor: pointer;  

`

const Slider = () => {
    const [slideIndex, setSlideIndex] = useState(0); 
    const handleClick = (direction) => {
        if(direction=== "left") {
            setSlideIndex(slideIndex > 0 ? slideIndex-1 : 2)
        } else {
            setSlideIndex(slideIndex < 2 ? slideIndex +1 : 0)
        }

    }; 
  return (
    <Container>
        <Arrow direction="left" onClick={()=>handleClick("left")}><ArrowBackIosIcon/></Arrow>
        <Wrapper slideIndex={slideIndex}>
         {sliderItems.map((item) => (
          <Slide key={item.id}> 
         <ImgContainer>
          <Image src={item.img}/>
         </ImgContainer>
         <InfoContainer>
          <Title>{item.title}</Title>
          <Describe>{item.describe}</Describe>
          <Button>Zobacz szczegóły</Button>
         </InfoContainer>
          </Slide>
         ))}
        </Wrapper>
        <Arrow direction="right" onClick={()=>handleClick("right")}><ArrowForwardIosIcon/></Arrow>
    </Container>
  )
}

export default Slider