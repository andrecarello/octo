import { user } from './user';

$('document').ready(() => {
    const element = $('#user');

    $(element).html(`${user().name} ${user().lastName}`)
})
