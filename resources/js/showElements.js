function toggleForm(tags) {
        
    tags.forEach(tag => {
        let formResponse = document.getElementById(tag);
        formResponse.classList.toggle('hidden');
    });
   
}

export  {toggleForm};