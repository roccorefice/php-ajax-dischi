//istanza Vue
let app = new Vue ({
    el: "#app",
    data: {
        list_albums: []

    },
    methods: {

    },
    mounted(){
        axios
        .get("./src/partials/templates/db.php")
        .then((response) => {
            this.list_albums = response.data;
            console.log(this.list_albums);
          })

    }

});
