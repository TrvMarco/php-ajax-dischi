const app = new Vue({
    el: "#app",
    data:{
        albumArray: []
    },
    created(){
        axios.get('http://localhost/php-ajax-dischi/server/api.php')
        .then((response)=> {
            response.data.forEach(elm => {
                this.albumArray.push(elm);
            });
        })
        .catch((error) => {
            console.log(error);
        })
    }
})