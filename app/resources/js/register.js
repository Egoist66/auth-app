class Store {

    static state = {
        /* state vars */
        on: true,


        /* actions */
        togglePassword() {
            this.on = !this.on

        }
    }

    static init() {
        document.addEventListener('alpine:init', () => {
            Alpine.store('register', this.state)
        })
    }
}

Store.init()