function componentInit(){
    const checkBoxes = document.getElementsByClassName("red-checkbox-container");
    for(let i = 0; i < checkBoxes.length; i++){
        checkBoxes[i].addEventListener("click", ()=>{
            let checkMark = checkBoxes[i].childNodes[1];
            let inputCheckBox = checkBoxes[i].childNodes[3];
            checkMark.classList.toggle("d-none");
            inputCheckBox.checked = !inputCheckBox.checked;
        });
    }
}

componentInit()
