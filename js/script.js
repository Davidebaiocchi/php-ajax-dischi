const app = new Vue(
    {
        el: '#app',
        data: {
            url: 'api/api-dischi.php'
        },
        mounted(){
            axios
                .get(this.url)
                .then(response => {
                    console.log(response);
                })
                .catch(error => {
                    console.log(error);
                })
        }
    }
);
