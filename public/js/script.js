let mostrando_carrito=false;
function verCarrito(){
    const carrito=document.getElementById('conteiner_carrito');
    if(mostrando_carrito){
        carrito.style.overflow='hidden';
        mostrando_carrito=false;
    }else{
        carrito.style.overflow='visible';
        mostrando_carrito=true;
    }
}

function restar(price){
    const quantity=parseInt(document.getElementById('quantity').value);
    if(quantity!=1){
        document.getElementById('quantity').value= quantity - 1;
        document.getElementById('price').value= "S/ " + parseFloat(Math.round((price * (quantity - 1)) * 100) / 100).toFixed(2);
    }
}

function sumar(price, maxim){
    const quantity=parseInt(document.getElementById('quantity').value);
    if(quantity!=maxim){
        document.getElementById('quantity').value= quantity + 1;
        document.getElementById('price').value= "S/ " + parseFloat(Math.round((price * (quantity + 1)) * 100) / 100).toFixed(2);
    }
}