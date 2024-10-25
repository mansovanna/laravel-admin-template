if(localStorage.getItem('them') === 'dark'){
    HTMLElement.classList.add('dark');
}else if(localStorage.getItem('them') === 'light'){
    HTMLElement.classList.remove('dark');
}

