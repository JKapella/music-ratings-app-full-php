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

    let validatedEntries = validateNewEntry(formElements);

    if (validatedEntries != '') {
        
        //display the error message!

    } else {
        

        //it's good!
        //submit the entries!
        //clear error messages
        //confirm the entry has been submitted
    }
}

function validateNewEntry(formToValidate) {
    
    let errorMessage = ''
    let formEmpty = true
    let formTooLong = false

    formToValidate.forEach((formItem) => {

        if (formItem.name === 'artist' || formItem.name === 'release') {
            if (formItem.value != '') {
                formEmpty = false
            }
        }
        if (formItem.value.length >= 500) {
            formTooLong = true
        }
    })

    if (formEmpty) {
        errorMessage += '\n Must include either an artist or a release!'
    }
    if (formTooLong) {
        errorMessage += '\n Values can\'t be longer than 500 characters!'
    }

    return errorMessage
}

setUpButtonFunctionality()