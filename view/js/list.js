const dropdownButtons = document.getElementsByClassName('dropdown-persons')

Object.values(dropdownButtons).forEach(dropdownButton => {
    dropdownButton.addEventListener('click', e => {
        let cardBody = document.getElementById(dropdownButton.id)
        let isHidden = cardBody.classList.contains('d-none')
        
        if (isHidden) cardBody.classList.remove('d-none')
        else cardBody.classList.add('d-none')
    }) 
})