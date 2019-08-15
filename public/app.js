function setUpButtonFunctionality() {

    let listenedButton = document.getElementById('listenedButton')
    listenedButton.addEventListener('click', switchToListenedEntries)

    let unlistenedButton = document.getElementById('unlistenedButton')
    unlistenedButton.addEventListener('click', switchToUnistenedEntries)

    let newEntryButton = document.getElementById('newEntryButton')
    newEntryButton.addEventListener('click', switchToNewEntry)

    let submitNewEntryButton = document.getElementById('submitNewEntryButton')
    submitNewEntryButton.addEventListener('click', submitNewEntry)
}

function switchToListenedEntries() {
    let entries = document.querySelectorAll('.entry-container')
    let newEntry = document.getElementById('newEntry')
    entries.forEach(element => {
        element.classList.remove('visible', 'hidden')
        if (element.dataset.listened === 'yes') {
            element.classList.add('visible')
        } else {
            element.classList.add('hidden')
        }
    })
    newEntry.classList.remove('visible', 'hidden')
    newEntry.classList.add('hidden')
}

function switchToUnistenedEntries() {
    let entries = document.querySelectorAll('.entry-container')
    let newEntry = document.getElementById('newEntry')
    entries.forEach(element => {
        element.classList.remove('visible', 'hidden')
        if (element.dataset.listened === 'no') {
            element.classList.add('visible')
        } else {
            element.classList.add('hidden')
        }
    })
    newEntry.classList.remove('visible', 'hidden')
    newEntry.classList.add('hidden')
}

function switchToNewEntry() {
    let entries = document.querySelectorAll('.entry-container')
    let newEntry = document.getElementById('newEntry')
    entries.forEach(element => {
        element.classList.remove('visible', 'hidden')
        element.classList.add('hidden')
    })
    newEntry.classList.remove('visible', 'hidden')
    newEntry.classList.add('visible')
}

function submitNewEntry(e) {
    e.preventDefault()
    let formElements = document.querySelectorAll('.form-element')

    //validation on elements!
    //some sort of error messages!
    //submit the thing!
}

setUpButtonFunctionality()