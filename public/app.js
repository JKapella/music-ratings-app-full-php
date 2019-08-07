function setUpButtonFunctionality() {
    let listenedButton = document.getElementById('listenedButton')
    listenedButton.addEventListener('click', switchToListenedEntries)

    let unlistenedButton = document.getElementById('unlistenedButton')
    unlistenedButton.addEventListener('click', switchToUnistenedEntries)
}

function switchToListenedEntries() {
    let entries = document.getElementsByClassName('entry-container')
    entries.array.forEach(element => {
        
    })
}

function switchToUnistenedEntries() {

}

setUpButtonFunctionality();