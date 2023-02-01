function throttle(callback, timeout = 300) {
    let time = Date.now();
    return (...args) => {
        if ((time + timeout - Date.now()) < 0) {
            callback.apply(this, args);
            time = Date.now();
        }
    }
}

const header = document.querySelector(".s-header");

function scrollCheck(e){
    window.pageYOffset > 50 ? header.classList.add("shadow") : header.classList.remove("shadow");
}

/*Throttle foi definido para 10ms, 
é pouco mas diminui a quantidade de chamadas ao mesmo tempo 
que reduz risco de não ler a última localização do scroll*/

window.addEventListener('scroll', throttle(scrollCheck, 10));