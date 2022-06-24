const app = new Vue({
    el: "#app",
    data:{
        albumArray: []
    },
    created(){
        axios.get('http://localhost/php-ajax-dischi/server/api.php')
        .then(function (response) {
            response.data.forEach(elm => {
                console.log(elm)
                const singleAlbum = elm; 
                console.log(singleAlbum)
                this.albumArray.push(this.singleAlbum)
            });
            // console.log(response.data);
        })
        .catch(function (error) {
            console.log(error);
        })
    }
})