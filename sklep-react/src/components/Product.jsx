import React from 'react'
import styled from 'styled-components'

import AddShoppingCartIcon from '@mui/icons-material/AddShoppingCart';
import FavoriteIcon from '@mui/icons-material/Favorite';
import SearchIcon from '@mui/icons-material/Search';

const Info = styled.div`
  opacity: 0; 
  width: 100%;
  height: 100%;
  position: absolute; 
  top: 0;
  left: 0; 
  background-color: #dfc0e9; 
  z-index: 3;
  display: flex; 
  align-items: center;
  justify-content: center; 
  transition: all 0.5s ease; 
`
const Container = styled.div`
    flex: 1;
    margin: 5px; 
    min-width:  280px;
    height: 350px; 
    display: flex; 
    align-items: center;
    justify-content: center; 
    background-color: #dfc0e9; 
    position: relative; 

    &:hover ${Info}{
      opacity: 1; 
    }
`

const Image = styled.img`
  height: 86%; 

`

const Icon = styled.div`
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background-color: white;
  display: flex;
  align-items: center;
  justify-content: center; 
  margin: 10px; 
  transition: all 0.5s ease; 
  cursor: pointer; 

  &:hover{
    background-color: wheat;
    transform: scale(1.1); 

  }
`

export const Product = ({item}) => {
  return (
    <Container>
      
        <Image src={item.img}/>
        <Info>
            <Icon>
            <AddShoppingCartIcon/>
            </Icon>
            <Icon>
            <SearchIcon/>
            </Icon>
            <Icon>
            <FavoriteIcon/>
            </Icon>
        </Info>
      

    </Container>
  )
}
export default Product; 
