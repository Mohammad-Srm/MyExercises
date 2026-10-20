const age=document.querySelector("#age");
let x=18;
for(let i=0; i<73; i++){
    age.insertAdjacentHTML("beforeend",
        `
        <option value="${x}">${x}</option>
        `
    )
    x++;
}