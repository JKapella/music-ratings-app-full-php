function setUpButtonFunctionality() {
    let listenedButton = document.getElementById('listenedButton')
    listenedButton.addEventListener('click', switchToListenedEntries)

    let unlistenedButton = document.getElementById('unlistenedButton')
    unlistenedButton.addEventListener('click', switchToUnistenedEntries)
}

function switchToListenedEntries() {
    let entries = document.querySelectorAll('.entry-container')
    entries.forEach(element => {
        element.classList.remove('visible', 'hidden');
        if (element.dataset.listened === 'yes') {
            element.classList.add('visible');
        } else {
            element.classList.add('hidden');
        }
    })
}

function switchToUnistenedEntries() {
    let entries = document.querySelectorAll('.entry-container')
    entries.forEach(element => {
        element.classList.remove('visible', 'hidden');
        if (element.dataset.listened === 'no') {
            element.classList.add('visible');
        } else {
            element.classList.add('hidden');
        }
    })
}

setUpButtonFunctionality();