class SendMail extends HTMLElement {
    constructor() {
        // Always call super first in constructor
        super();

        // write element functionality in here
       const niceButton = document.createElement('a')
        niceButton.setAttribute('class' , this.hasAttribute('id')?this.getAttribute('id'):'')
        niceButton.classList.add('btn')
        niceButton.classList.add('btn-primary')
        niceButton.setAttribute('href' , this.hasAttribute('route')?this.getAttribute('route'):'')
        niceButton.textContent  = 'Send Mail'
        this.appendChild(niceButton)

    }

    connectedCallback() {
        console.log('Custom square element added to page.');
        const url = this.getAttribute('route')
        $('.'+this.getAttribute('id')).on('click' , function (evt) {
            evt.preventDefault()
            console.log('it will be sent')
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('[name="csrf-token"]').attr('content'),
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            $.get(url , function (data) {
                    console.log(data)
                }
            )
        })
    }
}
customElements.define('email-btn' , SendMail)
