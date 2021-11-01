export default class Options {
    constructor() {
        // alert('test')
    }

    switchModal(e) {
        e.preventDefault();
        let modal = document.querySelector('.js-modal');

        modal.classList.toggle('active');
    }
}
