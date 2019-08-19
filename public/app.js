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
        //it's good!
        //submit the entries!
        //clear error messages
        //confirm the entry has been submitted
    } else {
        //display the error message!
    }
}

function validateNewEntry(formToValidate) {
    
    let formEmpty = true

    formToValidate.forEach((formItem) => {

        if (formItem.value != '') {
            formEmpty = false
        }
    })

    if (formEmpty) {
        console.log('The Form Is Empty!')
        //return error message - you need to put something in the form!
    }

    console.log(formEmpty)
}

setUpButtonFunctionality()