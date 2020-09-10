import {user} from "./user"


document.onload = () => {
    const element = document.querySelector('#user')

    element.innerHTML = `${user.name} ${user.lastName}`
}