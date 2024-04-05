let items = document.querySelectorAll('.carousel .carousel-item')

items.forEach((el) => {
    const minPerSlide = 4
    let next = el.nextElementSibling
    for (var i=1; i<minPerSlide; i++) {
        if (!next) {
            // wrap carousel by using first child
        	next = items[0]
      	}
        let cloneChild = next.cloneNode(true)
        el.appendChild(cloneChild.children[0])
        next = next.nextElementSibling
    }
})

let bitcoinPrice = 60000;

function valueClick($value){
    let btc = (($value * 100)/bitcoinPrice) * 0.96; 
    document.getElementById('coinValue').value = btc;
    document.getElementById('euroValue').value = $value;
}