var colors = ["Orangered","Blue","Yellow","Purple","YellowGreen","Crisom","Violet","Navy","Salmon"]; 
var index = 0;
document.querySelector('#submit').addEventListener("click",  () => {
    if(index > colors.lenght - 1)
    index = 0;
    document.body.style.backgroundColor = colors[index++];
}); 