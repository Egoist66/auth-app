class Store {

    static state = {
        /* state vars */
        on: true,
        name: '',
        email: '',
        password: '',


        /* actions */
        togglePassword() {
            this.on = !this.on

        },

        validateRegisterFields(){
            if(this.name && this.email && this.password){
                return true
            }
            return false
        },

        validateLoginFields(){
            if(this.email && this.password){
                return true
            }
            return false
        }
    }

    static init() {
        document.addEventListener('alpine:init', () => {
            Alpine.store('auth', this.state)
        })
    }
}

Store.init()